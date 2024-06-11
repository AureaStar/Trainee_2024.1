<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class AdminController
{

    public function index()
    {
        $posts = App::get('database')->selectAll('posts');
        $users = App::get('database')->selectAll('users');

        return view('admin/tabela-de-posts', compact('posts', 'users'));
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
            'image' => $_POST['imagem']
        ];

        App::get('database')->insert('posts', $parameters);

        header('Location: /posts');
    }
}

?>