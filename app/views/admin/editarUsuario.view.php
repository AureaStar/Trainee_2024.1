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
        <form class="modal-bodyEditarUser" action="/usuarios/editar" method="post">
            <label for="name" class="nameboxEditarUser">Imagem de Perfil</label>
            <div class="fundoFormularioUsuarioEditarUser">
                <input type="file" value="<?= $user->image ?>" class="boxEditarUser imagemPerfilInputEditarUser" name="imagem" required>
            </div>

            <div class="algoque">
                <label for="name" class="nameboxEditarUser">Nome:</label>
                <span id="span-required-#usernameE<?= $user->id ?>" class="span-required">Nome deve ter no mínimo 3 caracteres</span>
            </div>
            <div id="required-#usernameE<?= $user->id ?>" class="fundoFormularioUsuarioEditarUser required">
                <input id="usernameE<?= $user->id ?>" type="text" oninput="nameValidate('#usernameE<?= $user->id ?>')" value="<?= $user->name ?>" class="boxEditarUser" placeholder="Editar o nome" name="name" required>
            </div>

            <div class="algoque">
                <label for="email" class="nameboxEditarUser">Email:</label>
                <span id="span-required-#emailE<?= $user->id ?>" class="span-required">Digite um email válido</span>
            </div>
            <div id="required-#emailE<?= $user->id ?>" class="fundoFormularioUsuarioEditarUser">
                <input id="emailE<?= $user->id ?>" type="email" oninput="emailValidate('#emailE<?= $user->id ?>')" value="<?= $user->email ?>" class="boxEditarUser" placeholder="Edite o email" name="email" required>
            </div>

            <div class="algoque">
                <label for="senha" class="nameboxEditarUser">Senha:</label>
                <span id="span-required-#passwordE<?= $user->id ?>" class="span-required">Digite uma senha com no mínimo 8 caracteres</span>
            </div>
            <div id="required-#passwordE<?= $user->id ?>" class="fundoFormularioUsuarioEditarUser">
                <input id="passwordE<?= $user->id ?>" type="password"  oninput="senhaValidate('#passwordE<?= $user->id ?>')" value="<?= $user->password ?>" class="boxEditarUser" placeholder="Edite a senha" name="senha" required>
            </div>

            <div class="algoque">
                <label for="senha-repeat" class="nameboxEditarUser">Confirme a senha:</label>
                <span id="span-required-#passwordrE<?= $user->id ?>" class="span-required">As senhas não conferem</span>
            </div>
            <div id="required-#passwordrE<?= $user->id ?>" class="fundoFormularioUsuarioEditarUser">
                <input id="passwordrE<?= $user->id ?>" oninput="senhaRepeatValidate('#passwordE<?= $user->id ?>','#passwordrE<?= $user->id ?>')" type="password" class="boxEditarUser" placeholder="Repita a senha editada" name="senha-repeat" required>
            </div>

            <div class="modal-footerEditarUser">
                <button type="submit" class="fecharEditarUser botaoUser">Editar</button>
                <button type="button" class="cancelarEditarUser" onclick="fechaModal()">Cancelar</button>
            </div>
        </form>
    </div>
</div>
<script src="/public/js/validacao.js"></script>
