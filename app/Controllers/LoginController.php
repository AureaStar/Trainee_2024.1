<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class LoginController
{
    public function login()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $id = App::get('database')->login($email, $password);

        session_start();
        if($id > 0){
            $_SESSION['id'] = $id;
            header("Location: /admin");
        }else{
            $_SESSION['erroLogin'] = true;
            header("Location: /login");
        }
    }
}
