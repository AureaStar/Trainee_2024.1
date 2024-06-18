<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../../../public/css/landing-styles.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Almendra:ital,wght@0,400;0,700;1,400;1,700&family=Jomhuria&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">
        
        <title>Torre do Sábio</title>

    </head>


<body>
    <?php require_once "app/views/site/navbar.view.php"?>
    <div class="total">
        
        <div class="background-img">
            
            <div class="hero-section">
               
                <div class="img-torre"></div>
                    
                <div class="transparent">
                    <h1>Toda a magia na palma da sua mão!</h1>

                    <p>Embarque nessa aventura e conheça os mais diversos tesouros escondidos dos jogos de tabuleiro!</p>
                </div>

            <form class="form_landing" method="get" action="posts">
                <div class="hero-buttons">
                    <input type="submit" class="btn-hero" id="login" value="Publicações"></input>
                    <input type="button" onclick="AboutUs()" class="btn-hero" id="publi" value="Sobre nós"></input>
                </div>
            </form>       


            </div>
            
        </div>
        


        <div class="publi-img">

        
<iframe style="border-radius:12px" src="https://open.spotify.com/embed/playlist/3HvgaZeBWbr7UjFeicPFRI?utm_source=generator" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>

            <div class="post-space">
                <h1>Publicações</h1>
                
                <div class="post-grid">
                    <form onclick='Redirect(this)' method="get" action="post_individual">
                        <input hidden name="id" value="<?= $postRecent[0]->id?>">
                        <div style="background: linear-gradient(0deg, rgba(0, 0, 0, 0.70) 37.9%, rgba(255, 255, 255, 0.28) 100%), url(<?= $postRecent[0]->image ?>) lightgray 50% / cover no-repeat" class="post-grande">
                            <h2><?=$postRecent[0]->category?></h2>
                            <p><?=$postRecent[0]->title?></p>
                        </div>
                    </form>
                <?php $numPost = 1?>
                    <?php foreach($posts as $post) :?>
                    <form onclick='Redirect(this)' method="get" action="post_individual">
                        <input hidden name="id" value="<?= $post->id?>">
                        <div style="background: linear-gradient(0deg, rgba(0, 0, 0, 0.70) 37.9%, rgba(255, 255, 255, 0.28) 100%), url(<?= $post->image ?>) lightgray 50% / cover no-repeat" class="post" id="post<?=$numPost?>">
                            <h3><?=$post->category?></h3>
                            <p><?=$post->title?></p>
                        </div>
                    </form>
                    <?php $numPost++?>
                    <?php endforeach;?>

                </div>

                <!--Versão mobile-->
                
                <div class="carousel">
                    
                    <i class="fa-solid fa-angle-left" id="arrow-left"></i>
                    <div class="c-posts">
                    <?php foreach($postsMobile as $postM) :?>
                        <form onclick='Redirect(this)' method="get" action="post_individual">
                            <input hidden name="id" value="<?= $postM->id?>">
                            <div style="background: linear-gradient(0deg, rgba(0, 0, 0, 0.70) 37.9%, rgba(255, 255, 255, 0.28) 100%), url(<?= $postM->image ?>) lightgray 50% / cover no-repeat" class="post-mobile">
                                <h2><?=$postM->category?></h2>
                                <p><?=$postM->title?></p>
                            </div>
                        </form>
                        <?php endforeach;?>

                    
                    </div>
                    <i class="fa-solid fa-angle-right" id="arrow-right"></i>
                    
                </div>
            
            
        
                <div class="btn-post">
                    <form class="form_landing" method="get" action="posts">
                        <button id="ler-mais">LER MAIS</button>
                    </form>   
                </div>
            </div>
                
            </div>

            <?php require_once "app/views/site/footer.view.php"?>
        </div>


    </body>
    <script src="../../../public/js/landing-page.js"></script>

</html>