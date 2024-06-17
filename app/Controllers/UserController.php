<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class UserController
{

    public function criar()
    {
        if(App::get('database')->verificaEmail($_POST['email']) == false){
            $temporario = $_FILES['imagem']['tmp_name'];
            $nomeimagem = sha1(uniqid($_FILES['imagem']['name'], true)) . '.' . pathinfo($_FILES['imagem']['name'], PATHINFO_EXTENSION);
            $destinoimagem = "../../htdocs/Trainee_2024.1/public/imagens/";
            move_uploaded_file($temporario, $destinoimagem . $nomeimagem);
            $caminhodaimagem = "../../public/imagens/" . $nomeimagem;

            $parameters = [
                'name' => $_POST['name'],
                'email' => $_POST['email'],
                'password' => $_POST['senha'],
                'image' => $caminhodaimagem
            ];
            App::get('database')->criar('users', $parameters);
            header("Location: /usuarios");
            return 0;
        }
        session_start();
        $_SESSION['erroEmail'] = true;
        header("Location: /usuarios");
    }
    
    public function editar()
    {
        $id = $_POST['id'];
        $user = App::get('database')->selectOne('users', $id)[0];
        if(App::get('database')->verificaEmail($_POST['email']) == false||$_POST['email']== $user->email){
            if(isset($_FILES['imagem'])){
                $temporario = $_FILES['imagem']['tmp_name'];
                $nomeimagem = sha1(uniqid($_FILES['imagem']['name'], true)) . '.' . pathinfo($_FILES['imagem']['name'], PATHINFO_EXTENSION);
                $destinoimagem = "../../htdocs/Trainee_2024.1/public/imagens/";
                move_uploaded_file($temporario, $destinoimagem . $nomeimagem);
                $caminhodaimagem = "../../public/imagens/" . $nomeimagem;
            } else {
                $caminhodaimagem = $user->image;
            }
            $parameters = [
                'name' => $_POST['name'],
                'email' => $_POST['email'],
                'password' => $_POST['senha'],
                'image' => $caminhodaimagem
            ];
            App::get('database')->editar('users', $id, $parameters);
            return redirect('usuarios');
        }
        session_start();
        $_SESSION['erroEmail'] = true;
        header("Location: /usuarios");
    }
    public function delete()
    {
        $id = $_POST['id'];
        $user = App::get('database')->selectOne('users', $id)[0];
        $imagem_rota = "../../htdocs/Trainee_2024.1/public/imagens/" . basename($user->image);
        unlink($imagem_rota);
        App::get('database')->delete('users' ,$id);
        return redirect('usuarios');
    }
    public function index()
    {
        //define users que é a tabela
        $users = App::get('database')->selectAll('users');
        return view('admin/lista-de-usuarios', compact('users'));
    }
}

?>