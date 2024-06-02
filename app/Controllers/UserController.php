<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class UserController
{
    public function criar()
    {
        $temporario = $_FILES['imagem']['tmp_name'];
        $nomeimagem = $_FILES['imagem']['name'];
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
        header("Location: /users");
    }
    public function editar()
    {
        $temporario = $_FILES['imagem']['tmp_name'];
        $nomeimagem = $_FILES['imagem']['name'];
        $destinoimagem = "../../htdocs/Trainee_2024.1/public/imagens/";
        move_uploaded_file($temporario, $destinoimagem . $nomeimagem);
        $caminhodaimagem = "../../public/imagens/" . $nomeimagem;

        $parameters = [
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'password' => $_POST['senha'],
            'image' => $caminhodaimagem
        ];

        $id = $_POST['id'];
        App::get('database')->editar('users', $id, $parameters);
        return redirect('usuarios');

    }
    public function delete()
    {
        $id = $_POST['id'];
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