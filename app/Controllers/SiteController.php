<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class SiteController
{

    public function index()
    {
        $postsMobile = App::get('database')->selectMobile('posts');
        $posts = App::get('database')->selectAllRecent('posts');
        $postRecent = App::get('database')->selectRecent('posts'); 
        return view('site/landing-page', compact('posts', 'postsMobile', 'postRecent'));
    }

    public function posts()
    {
        $posts = App::get('database')->selectAll('posts');
        return view('site/listadeposts', compact('posts'));
    }

    public function individual_post()
    {
        $id = $_GET['id'];
        $post = App::get('database')->selectOne('posts', $id);
        $author = $post[0]->author;
        $user = App::get('database')->selectOne('users', $author);
        return view('site/post-individual', compact('post', 'user')); 
    }
    public function search(){
        $posts = App::get('database')->searchPost('posts', $_GET['search'], $_GET['categorias']);
        return view('site/listadeposts', compact('posts'));
    }

    public function login()
    {
        return view('site/login');
    }

}

