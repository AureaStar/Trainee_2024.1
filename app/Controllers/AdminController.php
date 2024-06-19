<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class AdminController
{    
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
}

