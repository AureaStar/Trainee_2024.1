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
        header("Location: /posts"); 
    }
    public function findOne(){
        $posts = App::get('database')->findOne('posts', $_GET["id"]);

        echo ''.json_encode($posts);
    }
    public function update(){
        $title = "";
        if(isset($_POST["title"])) { $title = $_POST["title"];}
        $content = "";
        if(isset($_POST["content"])) {$content = $_POST["content"];}
        $category = "";
        if(isset($_POST["category"])) {$category = $_POST["category"];}
        $creation_date = "";
        if(isset($_POST["creation_date"])) {$creation_date = $_POST["creation_date"];}
        $image = "";
        if(isset($_FILES['image'])) { $image = $_FILES['image'];}
        $values = [
            [
              "name" => 'title',
              "values" => $title
            ],
            [
                "name" => 'content',
                "values" => $content,
            ],
            [
                "name" => 'category',
                "values" => $category,
            ],
            [
                "name" => 'creation_date',
                "values" => $creation_date,
            ]
        ];
        $c = App::get('database')->update("posts",$_POST["id"],$values);
        echo json_encode($c);
        header("Location: /posts");
    }
}

?>
