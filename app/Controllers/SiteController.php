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
        $page = 1;
        if(isset($_GET['pagina']) && !empty($_GET['pagina'])){
            $page = intval($_GET['pagina']);

            if($page <= 0){
                return redirect('posts');
            }
        }

        $itensPage = 6;
        $inicio = $itensPage * $page - $itensPage;
        $rows_count = App::get('database')->countAll('posts');

        if($inicio > $rows_count){
            return redirect('posts');
        }

        $users = App::get('database')->selectAll('users');
        $posts = App::get('database')->selectAll('posts', $inicio, $itensPage);

        $total_pages = ceil($rows_count/$itensPage);

        return view('site/listadeposts', compact('posts', 'users', 'page', 'total_pages'));
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
        $page = 1;
        if(isset($_GET['pagina']) && !empty($_GET['pagina'])){
            $page = intval($_GET['pagina']);

            if($page <= 0){
                return redirect('posts');
            }
        }
        $itensPage = 6;
        $inicio = $itensPage * $page - $itensPage;
        session_start();
        if(isset($_GET['search'])||isset($_GET['categorias'])){
            $_SESSION['search'] = $_GET['search'];
            $_SESSION['categorias'] = $_GET['categorias'];
        }
        $posts = App::get('database')->searchPost('posts', $_SESSION['search'], $_SESSION['categorias']);
        $rows_count = count($posts);
        if($inicio > $rows_count){
            return redirect('posts');
        }
        $total_pages = ceil($rows_count/$itensPage);
        $posts = array_slice($posts,$inicio,$itensPage);

        return view('site/listadeposts', compact('posts','page','total_pages'));
    }

    public function login()
    {
        return view('site/login');
    }
}

