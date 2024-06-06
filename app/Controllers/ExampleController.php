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
}

