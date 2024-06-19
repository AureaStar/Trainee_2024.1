<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class LoginController
{
    public function login()
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
            header("Location: /landing-page");
            return 0;
        }

        session_start();
        $_SESSION['erroLogin'] = true;
        header("Location: /login");
    }
}