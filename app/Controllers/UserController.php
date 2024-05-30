<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class UserController
{

    public function delete()
    {
        $id = $_POST['id'];
        App::get('database')->delete('users',$id);
    }
    public function index()
    {
        return view('site/index');
    }
}

?>