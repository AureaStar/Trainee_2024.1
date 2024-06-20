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

    public function dashboard()
    {
        return view('admin/dashboard');
    }

    public function create()
    {
        $temporario = $_FILES['imagem']['tmp_name'];
        $nomeimagem =  sha1(uniqid($_FILES['imagem']['name'], true)) . '.' . pathinfo($_FILES['imagem']['name'], PATHINFO_EXTENSION);
        $destinoimagem = "public/imagens/";
        move_uploaded_file($temporario, $destinoimagem . $nomeimagem);
        $caminhodaimagem = "public/imagens/" . $nomeimagem;

        $parameters = [
            'title' => $_POST['title'],
            'content' => $_POST['text'],
            'author' => 1,
            'category' => $_POST['categorias'],
            'image' => $caminhodaimagem
        ];

        App::get('database')->insert('posts', $parameters);

        header('Location: /admin/posts');
    }
    public function deleteById(){
        $id = $_POST['id'];
        $posts = App::get('database')->selectOne('posts', $id)[0];
        $imagem_rota = "public/imagens/" . basename($posts->image);
        unlink($imagem_rota);
        App::get('database')->deleteFromId('posts' ,$id);
        return redirect('admin/posts');
        
    }
    
    public function update(){
        $id = $_POST['id'];
        $post = App::get('database')->selectOne('posts',$id);
        if(isset($_FILES['imagem'])){
            $temporario = $_FILES['imagem']['tmp_name'];
            $nomeimagem = sha1(uniqid($_FILES['imagem']['name'], true)) . '.' . pathinfo($_FILES['imagem']['name'], PATHINFO_EXTENSION);
            $destinoimagem = "public/imagens/";
            move_uploaded_file($temporario, $destinoimagem . $nomeimagem);
            $caminhodaimagem = "public/imagens/" . $nomeimagem;
            $imagem_rota = "public/imagens/" . basename($post[0]->image);
            unlink($imagem_rota);
        } else {
            $caminhodaimagem = $post->image;
        }
        $parametros = [
            'title'=> $_POST['title'],
            'content'=> $_POST['content'],
            'image'=>$caminhodaimagem,
            'author'=>1,
            'category'=>$_POST['category'], 
        ];
        App::get('database')->update("posts",$_POST["id"],$parametros);
        return redirect ('admin/posts');
    }
}

?>
