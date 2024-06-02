<link rel="stylesheet" href="../../../public/css/criarUsuario.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Jomhuria">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sail">
<link href="https://fonts.googleapis.com/css2?family=Almendra:ital,wght@0,400;0,700;1,400;1,700" rel="stylesheet"><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Open The Modal -->

<!-- The Modal -->

<div id="myModalCriar" class="modalCriarUsuario modall">

    <!-- Modal content -->
    <div class="modal-contentCriarUsuario">
        <div class="modal-headerCriarUsuario">
            <img class="imagemlogoCriarUsuario" src="../../../public/assets/Logo.png" alt="">
            <h2 class="tituloCriarUsuario">Criar Usuário</h2>
            <img class="imagemlogoCriarUsuario" src="../../../public/assets/Logo.png" alt="">

        </div>
        <form class="modal-bodyCriarUsuario">

            <label for="name" class="nameboxCriarUsuario">Imagem de Perfil:</label>
            <div class="fundoFormularioUsuarioCriarUsuario">
                <input type="file" value="<?= $user->image ?>" class="boxCriarUsuario imagemPerfilInputCriarUsuario" name="image" required>
            </div>

            <label for="name" class="nameboxCriarUsuario">Nome:</label>
            <div class="fundoFormularioUsuarioCriarUsuario">
                <input type="text" value="<?= $user->name ?>" class="boxCriarUsuario" placeholder="Insira o seu nome" name="name" required>
            </div>

            <label for="email" class="nameboxCriarUsuario">Email:</label>
            <div class="fundoFormularioUsuarioCriarUsuario">
                <input type="email" value="<?= $user->email ?>" class="box" placeholder="Insira seu email" name="email" required>
            </div>

            <label for="senha" class="nameboxCriarUsuario">Senha:</label>
            <div class="fundoFormularioUsuarioCriarUsuario">
                <input type="password" value="<?= $user->password ?>" class="boxCriarUsuario" placeholder="Insira sua senha" name="senha" required>
            </div>

            <label for="senha-repeat" class="nameboxCriarUsuario">Confirme sua senha:</label>
            <div class="fundoFormularioUsuarioCriarUsuario">
                <input type="password" class="boxCriarUsuario" placeholder="Repita sua senha" name="senha-repeat" required>
            </div>

            <div class="modal-footerCriarUsuario">
                <button type="submit" class="fecharCriarUsuario">Criar</button>
                <button type="button" class="cancelarCriarUsuario" onclick="fechaModal()">Cancelar</button>
            </div>
        </form>
    </div>

</div>