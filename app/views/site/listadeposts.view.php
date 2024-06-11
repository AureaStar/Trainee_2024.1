<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jomhuria&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Upright:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" type="text/css" href="../../../public/css/listadeposts.css" />
    <title>Lista de posts</title>
</head>
    
<body>
<?php require_once "app/views/site/navbar.view.php"?>
        <div class="header_main">
            <h1> Nossos artigos </h1>
            <div class="search_main">
                <form action="/app/views/site/listadeposts.html" class="search" id="formSearch">
                    <i onclick="submitform('formSearch')" class="fa-solid fa-magnifying-glass" style="color: #ffffff;"></i>
                    <input class="input-list" type="text"  placeholder="Pesquisa" name="search">  
                </form>
                <form action="/app/views/site/listadeposts.html" id="formCat" class="filter-form">
                    <select name="categorias" class="filter">                    
                        <option value=" ">Categorias</option>                   
                        <option value="1">Categoria 1</option>                   
                        <option value="2">Categoria 2</option> 
                        <option value="3">Categoria 3</option>
                    </select>
                    <div class="funil"> 
                        <i onclick="submitform('formCat')" class="fa-solid fa-filter" style="color: #ffffff;"></i>
                    </div>
                    
                </form>
            </div>
        </div>
    

    <main class="main_content">
            <div class= "content">
                <?php foreach($posts as $post) :?>
                <form onclick='Redirect(this)' method="get" action="post_individual">
                <input hidden name="id" value="<?= $post->id?>">
                <div class="card" style="background-image: url(<?= $post->image ?>);">
                    <h4>
                    <?=$post->category?> 
                    </h4>
                    <h5>
                    <?=$post->title?>
                    </h5>
                </div>
                </form>
                <?php endforeach;?>
        </div>

        <div class="pagination_row">
            <span>
                1
            </span>
            <span>
                2
            </span>
            <span>
                3
            </span>
            <i class="fa-solid fa-caret-right" style="color: #ffffff;"></i>
        </div>
    </main>
</body>
<script src="https://kit.fontawesome.com/c49cc74a49.js" crossorigin="anonymous"></script>
<script>
function Redirect(form){
    form.submit();
}
</script>
</html>
