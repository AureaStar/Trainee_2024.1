<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class AdminController
{

    public function index()
    {
        $posts = App::get('database')->selectAll('posts');
        $users = App::get('database')->selectAll('users');

        return view('admin/tabela-de-posts', compact('posts', 'users'));
    }
    public function deleteById(){
        App::get('database')->deleteFromId("posts",$_POST["id"]);
        return redirect ('posts'); 
    }
    
    public function update(){
        $id = $_POST['id'];
        $post = App::get('database')->selectOne('posts',$id);
        if(isset($_FILES['imagem'])){
            $temporario = $_FILES['imagem']['tmp_name'];
            $nomeimagem = sha1(uniqid($_FILES['imagem']['name'], true)) . '.' . pathinfo($_FILES['imagem']['name'], PATHINFO_EXTENSION);
            $destinoimagem = "../../htdocs/Trainee_2024.1/public/imagens/";
            move_uploaded_file($temporario, $destinoimagem . $nomeimagem);
            $caminhodaimagem = "../../public/imagens/" . $nomeimagem;
        } else {
            $caminhodaimagem = $post->image;
        } 
        $parametros = [
            'title'=> $_POST['title'],
            'content'=> $_POST['content'],
            'image'=>$caminhodaimagem,
            'created_at'=>$_POST['created_at'],
            'author'=>1,
            'category'=>$_POST['category'], 
        ];
        App::get('database')->update("posts",$_POST["id"],$parametros);
        return redirect ('posts');
    }
}

?>
