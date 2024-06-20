<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Almendra:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Almendra:ital,wght@0,400;0,700;1,400;1,700&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <link rel="stylesheet" href="/public/css/post-individual.css">
    <link rel="shortcut icon" type="imagex/png" href="/public/assets/torre-logo.ico">
    <title><?= $post[0]->title ?></title>
</head>

<body>
    <?php require_once "app/views/site/navbar.view.php"?>
    <div class="main">
            <div class="IndexButton">
                <form method="get" action="posts">
                    <button type="submit" class="material-icons icone">arrow_back</button>
                </form>
            </div>
            <h1><?= $post[0]->title ?></h1>
        
        <img class="imagem" src="<?= $post[0]->image ?>" alt="Imagem jogo de xadrez">
        <div class="box">
            <div class="autoria"> 
                <img class="autoria-perfil" src="<?=$user[0]->image?>" alt="Foto de perfil">
                <p>Escrito por <?= $user[0]->name?> em <?= $post[0]->created_at ?></p>
            </div>
            <div class="box-text">
                <?php $paragraph = explode("\n", $post[0]->content);
                 foreach ($paragraph as $paragrafo){
                    echo '<p class="p">' . htmlspecialchars($paragrafo) . '</p>'; 
                 }
                 ?> 
            </div>
        </div>
    </div>
</body>
</html>