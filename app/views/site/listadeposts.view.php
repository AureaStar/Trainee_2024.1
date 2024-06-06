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
    <header>
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
    </header>
    <main class="main_content">
            <div class= "content">
                <div onclick ="location.href='http://localhost:8080/post_individual'" class="card"style="background-image: url(../../../public/assets/card.jpg);">
                    <h4>
                        Noticias e Lançamentos 
                    </h4>
                    <h5>
                        Médicos não querem que você conheça esse jogo
                    </h5>
                </div>
                <div class="card" style="background-image: url(../../../public/assets/card.jpg);">
                    <h4>
                        História dos jogos de tabuleiro 
                    </h4>
                    <h5>
                        Médicos não querem que você conheça esse jogo
                    </h5>
                </div>
                <div class="card" style="background-image: url(../../../public/assets/card.jpg);">
                    <h4>
                        Guia para iniciantes 
                    </h4>
                    <h5>
                        Médicos não querem que você conheça esse jogo
                    </h5>
                </div>
                <div class="card" style="background-image: url(../../../public/assets/card.jpg);">
                    <h4>
                       Curiosidades e fatos interresantes 
                    </h4>
                    <h5>
                        Médicos não querem que você conheça esse jogo
                    </h5>
                </div>
                <div class="card" style="background-image: url(../../../public/assets/card.jpg);">
                    <h4>
                        Dicas de estratégias 
                    </h4>
                    <h5>
                        Médicos não querem que você conheça esse jogo
                    </h5>
                </div>
                <div class="card" style="background-image: url(../../../public/assets/card.jpg);">
                    <h4>
                        Novos jogos 
                    </h4>
                    <h5>
                        Médicos não querem que você conheça esse jogo
                    </h5>
                </div>
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

</script>
</html>
