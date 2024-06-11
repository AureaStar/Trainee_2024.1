<link rel="stylesheet" href="../../../public/css/visualizarUsuario.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Jomhuria">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sail">
<link href="https://fonts.googleapis.com/css2?family=Almendra:ital,wght@0,400;0,700;1,400;1,700" rel="stylesheet"><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Open The Modal -->

<!-- The Modal -->
<div id="myModalVizualizar<?= $user->id ?>" class="modalVUser modall">
    <!-- Modal content -->
    <div class="modal-contentVUser">
        <div class="modal-headerVUser">
            <img class="imagemlogoVUser" src="../../../public/assets/Logo.png" alt="">
            <h2 class="tituloVUser">Visualizar Usuário</h2>
            <img class="imagemlogoVUser" src="../../../public/assets/Logo.png" alt="">
        </div>
        <form class="modal-bodyVUser" action="/usuarios/visualizar" method="post">
            <label for="name" class="nameboxVUser">Imagem de Usuário:</label>
            <div class="fundoFormularioVUser">
                <img class="imagemUser" src="<?= $user->image ?>" alt="">
            </div>

            <label for="name" class="nameboxVUser">Nome:</label>
            <div class="fundoFormularioVUser">
                <input type="text" value="<?= $user->name ?>" class="boxVUser" name="name" readonly>
            </div>

            <label for="email" class="nameboxVUser">Email:</label>
            <div class="fundoFormularioVUser">
                <input type="email" value="<?= $user->email ?>" class="boxVUser" name="email" readonly>
            </div>

            <label for="senha" class="nameboxVUser">Senha:</label>
            <div class="fundoFormularioVUser">
                <input type="password" value="<?= $user->password ?>" class="boxVUser" name="senha" readonly>
            </div>

            <div class="modal-footerViUser">
                <button type="button" class="fecharViUser" onclick="fechaModal()">Fechar</button>
            </div>
        </form>
    </div>

</div>