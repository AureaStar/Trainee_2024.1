<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class ExampleController
{

    public function viewlanding()
    {
        /*
        $posts = App::get('database')->selectData('posts');
        return view('site/landing-page', compact('posts'));
        */
        return view('site/landing-page');
    }
    public function viewlogin()
    {
        return view('site/login');
    }
    public function index()
    {
        return view('site/index');
    }
}

?>