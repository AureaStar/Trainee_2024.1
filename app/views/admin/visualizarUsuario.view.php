<link rel="stylesheet" href="../../../public/css/visualizarUsuario.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Jomhuria">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sail">
<link href="https://fonts.googleapis.com/css2?family=Almendra:ital,wght@0,400;0,700;1,400;1,700" rel="stylesheet"><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Open The Modal -->

<!-- The Modal -->

<div id="myModalVizualizar<?= $user->id ?>" class="modalV modall">

    <!-- Modal content -->
    <div class="modal-content">
        <div class="modal-header">
            <img class="imagemlogo" src="../../../public/assets/Logo.png" alt="">
            <h2 class="titulo">Visualizar Usuário</h2>
            <img class="imagemlogo" src="../../../public/assets/Logo.png" alt="">

        </div>
        <form class="modal-body">
            <label for="name" class="namebox">Imagem de Usuário:</label>
            <div class="fundoFormulario">
                <img src="<?= $user->image ?>" alt="">
            </div>

            <label for="name" class="namebox">Nome:</label>
            <div class="fundoFormulario">
                <input type="text" value="<?= $user->name ?>" class="box" id="name" name="name" readonly>
            </div>

            <label for="email" class="namebox">Email:</label>
            <div class="fundoFormulario">
                <input type="email" value="<?= $user->email ?>" class="box" id="email" name="email" readonly>
            </div>

            <label for="senha" class="namebox">Senha:</label>
            <div class="fundoFormulario">
                <input type="password" value="<?= $user->password ?>" class="box" id="senha" name="senha" readonly>
            </div>

        </form>
    </div>

</div>