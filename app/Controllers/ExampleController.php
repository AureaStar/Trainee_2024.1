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
        if(isset($_POST['email']) || isset($_POST['password'])) {
            
            // $email = $_POST['email'];
            // $password = $_POST['password'];

            // App::get('database')->login($email, $password);
            // header("Location: /landing-page");
            // return 0;

            $parameters = [
                'email' => $_POST['email'],
                'password' => $_POST['senha'],
            ];
            App::get('database')->login('users', $parameters);
            return view('site/login');
        }

        session_start();
        $_SESSION['erroLogin'] = true;
        return view('site/login');
    }
    public function index()
    {
        return view('site/index');
    }
}

?>