<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Torre do Sábio</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Jomhuria">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sail">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Almendra">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <link rel="stylesheet" href="../../../public/css/login.css"/>
</head>
<body>
<?php
    if (isset($_SESSION['erroLogin'])) {

        if ($_SESSION['erroLogin']) {
            echo '<div class = "modalErro modall">
                        <div class="modal-headerEUser">
                            <img class="imagemlogoEUser" src="../../../public/assets/Logo.png" alt="">
                            <h2 class="tituloEUser">E-mail ou senha incorretos</h2>
                            <img class="imagemlogoEUser" src="../../../public/assets/Logo.png" alt="">
                        </div>
                    </div>
                    <div class="telaErro modall" onclick="fechaModal()"></div>';
        }
        $_SESSION['erroEmail'] = false;
    }
    ?>
    <div class="ImagemFundo">
        <div class="ImagemJogos">
            <div class="Logo">
        </div>
            <h1>Torre do Sábio</h1>
        </div>
        <div class="IndexButton">
            <form method="get" action="index">
                <button type="submit" class="material-icons icone2">home <a>Início</a></button>
            </form>
        </div>
        <form class="AbaLogin" method="post" action="logina">
            <h1>Bem Vindo(a)!</h1>
                <div class="EmailSenha">
                    <div class="fundoEmailSenha">
                        <span class="material-icons icone">mail</span>
                        <input class="email" type="text" placeholder="Email" name="email" required>
                    </div>
                    <div class="fundoEmailSenha">
                        <span class="material-icons icone">lock</span>
                        <input class="senha" type="password" placeholder="Senha" name="password" required>
                    </div>        
                </div>
            <div class="Botão">
                <button type="submit">Login</button>
            </div>
        </form>
    </div>
</body>
</html>