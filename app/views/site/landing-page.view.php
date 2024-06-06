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

            <form method="get" action="posts">
                <div class="hero-buttons">
                    <input type="submit" class="btn-hero" id="login" value="Publicações"></input>
                    <input type="submit" class="btn-hero" id="publi" value="Sobre nós"></input>
                </div>
            </form>       


            </div>
            
        </div>
        


        <div class="publi-img">

            <div class="post-space">
                <h1>Publicações</h1>
                
                <div class="post-grid">
                    
                    <div style="background: linear-gradient(0deg, rgba(0, 0, 0, 0.70) 37.9%, rgba(255, 255, 255, 0.28) 100%), url(../../../public/assets/PostPrincipal.jpg) lightgray 50% / cover no-repeat" class="post-grande">
                        <h2>Notícias e lançamentos</h2>
                        <p>Conheça Xadrez 2, lançamento chocante e doideira!</p>
                    </div>
                    <div style="background: linear-gradient(0deg, rgba(0, 0, 0, 0.70) 37.9%, rgba(255, 255, 255, 0.28) 100%), url(../../../public/assets/Post1.jpg) lightgray 50% / cover no-repeat" class="post" id="post1">
                        <h3>Notícias e lançamentos</h3>
                        <p>Conheça Terras de Andor, novo jogo para jogar!</p>
                    </div>
                    <div style="background: linear-gradient(0deg, rgba(0, 0, 0, 0.70) 37.9%, rgba(255, 255, 255, 0.28) 100%), url(../../../public/assets/Post2.jpg) lightgray 50% / cover no-repeat" class="post" id="post2">
                        <h3>Notícias e lançamentos</h3>
                        <p>Tchibum na Lagoa: cheirinho de infância vem forte!</p>
                    </div>
                    <div style="background: linear-gradient(0deg, rgba(0, 0, 0, 0.70) 37.9%, rgba(255, 255, 255, 0.28) 100%), url(../../../public/assets/Post3.jpg) lightgray 50% / cover no-repeat" class="post" id="post3">
                        <h3>Notícias e lançamentos</h3>
                        <p>Quem aí lembra desse jogo? Amava jogar com 8 anos!</p>
                    </div>
                    <div style="background: linear-gradient(0deg, rgba(0, 0, 0, 0.70) 37.9%, rgba(255, 255, 255, 0.28) 100%), url(../../../public/assets/Post4.png) lightgray 50% / cover no-repeat" class="post" id="post4">
                        <h3>Notícias e lançamentos</h3>
                        <p>Receita pra guerra e problemas de pressão é isso!</p>
                    </div>

                </div>

                <!--Versão mobile-->
                
                <div class="carousel">
                    
                    <i class="fa-solid fa-angle-left" id="arrow-left"></i>
                    <div class="c-posts">

                        <div style="background: linear-gradient(0deg, rgba(0, 0, 0, 0.70) 37.9%, rgba(255, 255, 255, 0.28) 100%), url(../../../public/assets/PostPrincipal.jpg) lightgray 50% / cover no-repeat" class="post-mobile">
                            <h2>Notícias e lançamentos</h2>
                            <p>Conheça Xadrez 2, lançamento chocante e doideira!</p>
                        </div>

                        <div style="background: linear-gradient(0deg, rgba(0, 0, 0, 0.70) 37.9%, rgba(255, 255, 255, 0.28) 100%), url(../../../public/assets/Post1.jpg) lightgray 50% / cover no-repeat" class="post-mobile">
                            <h2>Notícias e lançamentos</h2>
                            <p>Conheça Terras de Andor, novo jogo para jogar!</p>
                        </div>

                        <div style="background: linear-gradient(0deg, rgba(0, 0, 0, 0.70) 37.9%, rgba(255, 255, 255, 0.28) 100%), url(../../../public/assets/Post2.jpg) lightgray 50% / cover no-repeat" class="post-mobile">
                            <h2>Notícias e lançamentos</h2>
                            <p>Tchibum na Lagoa: cheirinho de infância vem forte!</p>
                        </div>

                        <div style="background: linear-gradient(0deg, rgba(0, 0, 0, 0.70) 37.9%, rgba(255, 255, 255, 0.28) 100%), url(../../../public/assets/Post3.jpg) lightgray 50% / cover no-repeat" class="post-mobile">
                            <h2>Notícias e lançamentos</h2>
                            <p>Quem aí lembra desse jogo? Amava jogar com 8 anos!</p>
                        </div>

                        <div style="background: linear-gradient(0deg, rgba(0, 0, 0, 0.70) 37.9%, rgba(255, 255, 255, 0.28) 100%), url(../../../public/assets/Post4.png) lightgray 50% / cover no-repeat" class="post-mobile">
                            <h2>Notícias e lançamentos</h2>
                            <p>Receita pra guerra e problemas de pressão é isso!</p>
                        </div>

                    </div>
                    <i class="fa-solid fa-angle-right" id="arrow-right"></i>
                    
                </div>
            
            
        
                <div class="btn-post">
                    <form method="get" action="posts">
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