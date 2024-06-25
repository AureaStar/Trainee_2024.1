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
            $destinoimagem = "public/imagens/";
            move_uploaded_file($temporario, $destinoimagem . $nomeimagem);
            $caminhodaimagem = "public/imagens/" . $nomeimagem;

            $parameters = [
                'name' => $_POST['name'],
                'email' => $_POST['email'],
                'password' => $_POST['senha'],
                'image' => $caminhodaimagem
            ];
            App::get('database')->criar('users', $parameters);
            header("Location: /admin/users");
            return 0;
        }
        session_start();
        $_SESSION['erroEmail'] = true;
        header("Location: /admin/users");
    }
    
    public function editar()
    {
        $id = $_POST['id'];
        $user = App::get('database')->selectOne('users', $id)[0];
        if(App::get('database')->verificaEmail($_POST['email']) == false||$_POST['email']== $user->email){
            if(!empty($_FILES['imagem']['tmp_name'])){
                $temporario = $_FILES['imagem']['tmp_name'];
                $nomeimagem = sha1(uniqid($_FILES['imagem']['name'], true)) . '.' . pathinfo($_FILES['imagem']['name'], PATHINFO_EXTENSION);
                $destinoimagem = "public/imagens/";
                move_uploaded_file($temporario, $destinoimagem . $nomeimagem);
                $caminhodaimagem = "public/imagens/" . $nomeimagem;
                $imagem_rota = "public/imagens/" . basename($user->image);
                unlink($imagem_rota);
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
            return redirect('admin/users');
        }
        session_start();
        $_SESSION['erroEmail'] = true;
        header("Location: /admin/users");
    }
    public function delete()
    {
        $id = $_POST['id'];
        $user = App::get('database')->selectOne('users', $id)[0];
        $imagem_rota = "public/imagens/" . basename($user->image);
        unlink($imagem_rota);
        App::get('database')->delete('users' ,$id);
        return redirect('admin/users');
    }
    public function index()
    {
        
        $page = 1;
        if(isset($_GET['pagina']) && !empty($_GET['pagina'])){
            $page = intval($_GET['pagina']);

            if($page <= 0){
                return redirect('admin/users');
            }
        }

        $itensPage = 5;
        $inicio = $itensPage * $page - $itensPage;
        $rows_count = App::get('database')->countAll('users');

        if($inicio > $rows_count){
            return redirect('admin/users');
        }

        $users = App::get('database')->selectAll('users', $inicio, $itensPage);

        $total_pages = ceil($rows_count/$itensPage);

        return view('admin/lista-de-usuarios', compact('users', 'page', 'total_pages'));
    }
}