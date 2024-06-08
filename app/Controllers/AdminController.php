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
    public function deleteById(){
        App::get('database')->deleteFromId("posts",$_POST["id"]);
        return "thamires"; 
    }
}

?>