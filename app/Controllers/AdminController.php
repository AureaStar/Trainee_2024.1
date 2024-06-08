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
        $parameters = [
            'title' => $_POST['title'],
            'content' => $_POST['text'],
            'category' => $_POST['categorias'],
            'created_at' => $_POST['data'],
            'image' => $_POST['imagem']
        ];

        App::get('database')->insert('posts', $parameters);

        header('Location: /posts');
    }
}

?>