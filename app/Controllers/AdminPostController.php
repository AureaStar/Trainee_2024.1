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

    public function dashboard()
    {
        return view('admin/dashboard');
    }

    public function create()
    {
        $temporario = $_FILES['imagem']['tmp_name'];
        $nomeimagem =  sha1(uniqid($_FILES['imagem']['name'], true)) . '.' . pathinfo($_FILES['imagem']['name'], PATHINFO_EXTENSION);
        $destinoimagem = "public/imagens/";
        move_uploaded_file($temporario, $destinoimagem . $nomeimagem);
        $caminhodaimagem = "public/imagens/" . $nomeimagem;

        session_start();
        $parameters = [
            'title' => $_POST['title'],
            'content' => $_POST['text'],
            'author'=>$_SESSION['id'],
            'category' => $_POST['categorias'],
            'image' => $caminhodaimagem
        ];

        App::get('database')->insert('posts', $parameters);

        header('Location: /admin/posts');
    }
    public function deleteById(){
        $id = $_POST['id'];
        $posts = App::get('database')->selectOne('posts', $id)[0];
        $imagem_rota = "public/imagens/" . basename($posts->image);
        unlink($imagem_rota);
        App::get('database')->deleteFromId('posts' ,$id);
        return redirect('admin/posts');
        
    }
    
    public function update(){
        $id = $_POST['id'];
        $post = App::get('database')->selectOne('posts',$id);
        if(!empty($_FILES['imagem']['tmp_name'])){
            $temporario = $_FILES['imagem']['tmp_name'];
            $nomeimagem = sha1(uniqid($_FILES['imagem']['name'], true)) . '.' . pathinfo($_FILES['imagem']['name'], PATHINFO_EXTENSION);
            $destinoimagem = "public/imagens/";
            move_uploaded_file($temporario, $destinoimagem . $nomeimagem);
            $caminhodaimagem = "public/imagens/" . $nomeimagem;
            $imagem_rota = "public/imagens/" . basename($post[0]->image);
            unlink($imagem_rota);
        } else {
            $caminhodaimagem = $post[0]->image;
        }
        session_start();
        $parametros = [
            'title'=> $_POST['title'],
            'content'=> $_POST['content'],
            'image'=>$caminhodaimagem,
            'author'=>$_SESSION['id'],
            'category'=>$_POST['category'], 
        ];
        App::get('database')->update("posts",$_POST["id"],$parametros);
        return redirect ('admin/posts');
    }
}


