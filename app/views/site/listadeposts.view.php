<?php
function Filter(string $string){
    return (isset($_GET['categorias']) and $_GET['categorias'] == "$string")?'selected':'';
}
?>

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
<form hidden method="get" action="/posts" id="formReset"></form>

<?php require_once "app/views/site/navbar.view.php"?>
        <div class="header_main">
            <h1> Nossos artigos </h1>
            <form class="search_main" method="get" action="/posts/search" id="formSearch">
                <div class="search">
                    <i onclick="submitform('formSearch')" class="fa-solid fa-magnifying-glass" style="color: #ffffff;"></i>
                    <input class="input-list" type="text"  placeholder="Pesquisa" name="search">  
                </div>
                <div class="filter-form">
                    
                    <select onchange="submitform('formSearch')" name="categorias" class="filter">                    
                        <option <?= Filter("")?> 
                            value="">Categorias
                        </option>                   
                        <option <?= Filter("Novidades e lançamentos")?> 
                            value="Novidades e lançamentos">Novidades e lançamentos
                        </option>                   
                        <option <?= Filter("Reviews")?> 
                            value="Reviews">Reviews
                        </option> 
                        <option <?= Filter("História de Jogos")?> 
                            value="História de Jogos">História de Jogos
                        </option>
                    </select>
                    <div class="funil"> 
                        <i onclick="submitform('formReset')" class="fa-solid fa-refresh" style="color: #ffffff;"></i>
                    </div>
                    
                </div>
            </form>
        </div>
    

    <main class="main_content">
            <div class= "content">
                <?php foreach($posts as $post) :?>
                <form onclick='Redirect(this)' method="get" action="/post_individual">
                <input hidden name="id" value="<?= $post->id?>">
                <div class="card" style="background-image: url(../../<?= $post->image ?>);">
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
            <?php require(__DIR__ . '/../components/paginacao.php') ?>
        </div>
    </main>
    <?php require_once "app/views/site/footer.view.php"?>
</body>

<script src="https://kit.fontawesome.com/c49cc74a49.js" crossorigin="anonymous"></script>
<script>
function Redirect(form){
    form.submit();
}

function submitform(id){
    let form = document.getElementById(id);
    form.submit();
}
</script>
</html>
