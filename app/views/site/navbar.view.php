<!DOCTYPE html>
<html lang="pt">
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=10, minimum-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
		<link rel="stylesheet" href="/public/css/navbar.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Almendra">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Jomhuria">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
    </head>
        <header>
            <nav class="navbar-Container">
                <form method="get" action="/index">
                    <button class="logoNavbar" rel="logo da Torre do Sábio"><img id = "logonavbarimg" src="/public/assets/logo-linda-sem-linha.png"></button>
                </form>
                <ul class = "nav-lnk-container">
                    <li id="navInicio" class="navbarlist">
                        <form method="get" action="/index">
                        <button id="navbinicio">Início</button>
                        </form>
                    </li>
                    
                    <li id="navPubli" class="navbarlist">
                            <form method="get" action="/posts">
                            <button id="navbpubli">Publicações</button>
                            </form>
                        </li>

                    <li class="navhamLi navhamLiClosed"><button onclick="navhamshow()" id="navclosedhhamButton" class="navhamButton"><i class="navlisticon bi bi-list"></i></button></li>
                    <li class="navhamLi navhamLiOpen hidden"><button onclick="navhamshow()" id="navopenhhamButton" class="navhamButton"><i class="navlisticon bi bi-caret-down-fill"></i></button></li>
                </ul>

                <li id="navLogin" class="navbarlist">
                    <form method="get" action="/login">
                        <button id="navLogText">Login</button>
                    </form>
                </li>
            </nav>
            <div class="navhamMenu">
            <form method="get" action="/index">      
                <button id="navhaminicio">Início</button>
            </form>

            <form method="get" action="/posts">
                <button  id="navhampubli">Publicações</button>
            </form>

            <form method="get" action="/login">
                <button id="navhamlogbutton">Login</button>
            </form>
            </div>
        </header>
    <script src="/public/js/navbar.js"></script>
</html>
