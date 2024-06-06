<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class ExampleController
{

    public function index()
    {
        return view('site/landing-page');
    }

    public function posts()
    {
        return view('site/listadeposts');
    }

    public function individual_post()
    {
        return view('site/post-individual');
    }

    public function dashboard()
    {
        return view('admin/dashboard');
    }

    public function tabela_posts()
    {
        return view('admin/tabela-de-posts');
    }

    public function tabela_users()
    {
        return view('admin/lista-de-usuarios');
    }

    public function login()
    {
        return view('site/login');
    }

}

