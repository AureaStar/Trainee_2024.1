<link rel="stylesheet" href="../../../public/css/editarUsuario.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Jomhuria">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sail">
<link href="https://fonts.googleapis.com/css2?family=Almendra:ital,wght@0,400;0,700;1,400;1,700" rel="stylesheet"><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Open The Modal -->

<!-- The Modal -->

<div id="myModalEditar<?= $user->id ?>" class="modalEditarUser modall">

    <!-- Modal content -->
    <div class="modal-contentEditarUser">
        <div class="modal-headerEditarUser">
            <img class="imagemlogoEditarUser" src="../../../public/assets/Logo.png" alt="">
            <h2 class="tituloEditarUser">Editar Usuário</h2>
            <img class="imagemlogoEditarUser" src="../../../public/assets/Logo.png" alt="">
        </div>
        <form class="modal-bodyEditarUser" action>
            <label for="name" class="nameboxEditarUser">Imagem de Perfil</label>
            <div class="fundoFormularioUsuarioEditarUser">
                <input type="file" value="<?= $user->image ?>" class="boxEditarUser imagemPerfilInputEditarUser" name="imagem" required>
            </div>

            <label for="name" class="nameboxEditarUser">Nome:</label>
            <div class="fundoFormularioUsuarioEditarUser">
                <input type="text" value="<?= $user->name ?>" class="boxEditarUser" placeholder="Editar o nome" name="name">
            </div>

            <label for="email" class="nameboxEditarUser">Email:</label>
            <div class="fundoFormularioUsuarioEditarUser">
                <input type="email" value="<?= $user->email ?>" class="boxEditarUser" placeholder="Edite o email" name="email">
            </div>

            <label for="senha" class="nameboxEditarUser">Senha:</label>
            <div class="fundoFormularioUsuarioEditarUser">
                <input type="password" value="<?= $user->password ?>" class="boxEditarUser" placeholder="Edite a senha" name="senha">
            </div>

            <label for="senha-repeat" class="nameboxEditarUser">Confirme a senha:</label>
            <div class="fundoFormularioUsuarioEditarUser">
                <input type="password" class="boxEditarUser" placeholder="Repita a senha editada" name="senha-repeat">
            </div>

            <div class="modal-footerEditarUser">
                <button type="submit" class="fecharEditarUser">Editar</button>
                <button type="button" class="cancelarEditarUser" onclick="fechaModal()">Cancelar</button>
            </div>
        </form>
    </div>
</div>