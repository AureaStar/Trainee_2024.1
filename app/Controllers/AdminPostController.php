<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class AdminPostController
{

    public function index()
    {
        
        $page = 1;
        if(isset($_GET['pagina']) && !empty($_GET['pagina'])){
            $page = intval($_GET['pagina']);

            if($page <= 0){
                return redirect('admin/posts');
            }
        }

        $itensPage = 5;
        $inicio = $itensPage * $page - $itensPage;
        $rows_count = App::get('database')->countAll('posts');

        if($inicio > $rows_count){
            return redirect('admin/posts');
        }

        $users = App::get('database')->selectAll('users');
        $posts = App::get('database')->selectAll('posts', $inicio, $itensPage);

        $total_pages = ceil($rows_count/$itensPage);

        return view('admin/tabela-de-posts', compact('posts', 'users', 'page', 'total_pages'));
    }

    public function create()
    {
        $temporario = $_FILES['imagem']['tmp_name'];
        $nomeimagem = $_FILES['imagem']['name'];
        $destinoimagem = "../../htdocs/Trainee_2024.1/public/imagens/";
        move_uploaded_file($temporario, $destinoimagem . $nomeimagem);
        $caminhodaimagem = "../../public/imagens/" . $nomeimagem;

        $parameters = [
            'title' => $_POST['title'],
            'content' => $_POST['text'],
            'author' => 1,
            'category' => $_POST['categorias'],
            'created_at' => $_POST['data'],
            'image' => $caminhodaimagem
        ];

        App::get('database')->insert('posts', $parameters);

        header('Location: /posts');
    }
}

?>