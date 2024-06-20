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
        $nomeimagem =  sha1(uniqid($_FILES['imagem']['name'], true)) . '.' . pathinfo($_FILES['imagem']['name'], PATHINFO_EXTENSION);
        $destinoimagem = "public/imagens/";
        move_uploaded_file($temporario, $destinoimagem . $nomeimagem);
        $caminhodaimagem = "public/imagens/" . $nomeimagem;

        $parameters = [
            'title' => $_POST['title'],
            'content' => $_POST['text'],
            'author' => 1,
            'category' => $_POST['categorias'],
            'image' => $caminhodaimagem
        ];

        App::get('database')->insert('posts', $parameters);

        header('Location: /posts');
    }
}

?>