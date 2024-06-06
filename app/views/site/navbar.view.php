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
                <a  class="logoNavbar" rel="logo da Torre do Sábio" href=""><img id = "logonavbarimg" src="/public/assets/logo-linda-sem-linha.png"></a><!--falta href-->
                <ul class = "nav-lnk-container">
                    <form method="get" action="">
                    <li id="navInicio" class="navbarlist">
                        <button id="navbinicio">Início</button>
                    </li><!--falta href-->
                    </form>
                    
                    <form method="get" action="posts">
                        <li id="navPubli" class="navbarlist">
                            <button id="navbpubli">Publicações</button>
                        </li>
                    </form>

                    <li class="navhamLi navhamLiClosed"><button onclick="navhamshow()" id="navclosedhhamButton" class="navhamButton"><i class="navlisticon bi bi-list"></i></button></li>
                    <li class="navhamLi navhamLiOpen hidden"><button onclick="navhamshow()" id="navopenhhamButton" class="navhamButton"><i class="navlisticon bi bi-caret-down-fill"></i></button></li>
                </ul>

                <form method="get" action="login">
                    <button id="navLogText">Login</button>
                </form>
            </nav>
            <div class="navhamMenu">
            <form method="get" action="">      
                <button id="navhaminicio">Início</button>
            </form>

            <form method="get" action="posts">
                <button  id="navhampubli">Publicações</button>
            </form>

            <form method="get" action="login">
                <button id="navhamlogbutton">Login</button>
            </form>
            </div>
        </header>
    <script src="/public/js/navbar.js"></script>
</html>
