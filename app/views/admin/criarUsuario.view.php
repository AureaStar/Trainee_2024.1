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
        <form id="formuCriar" class="modal-bodyCriarUsuario" action="/usuarios/criar" method="post" enctype="multipart/form-data">

            <label for="name" class="nameboxCriarUsuario">Imagem de Perfil:</label>
            <div class="fundoFormularioUsuarioCriarUsuario">
                <input type="file" class="boxCriarUsuario imagemPerfilInputCriarUsuario" name="imagem" required>
            </div>

            <div class="algoque ">
                <label for="name" class="nameboxCriarUsuario">Nome:</label>
                <span id="span-required-#username" class="span-required">Nome deve ter no mínimo 3 caracteres</span>
            </div>
            <div id="required-#username" class="fundoFormularioUsuarioCriarUsuario required">
                <input id="username" type="text" oninput="nameValidate('#username')" class="boxCriarUsuario" placeholder="Insira o seu nome" name="name" required>
            </div>

            <div class="algoque">
                <label for="email" class="nameboxCriarUsuario">Email:</label>
                <span id="span-required-#email" class="span-required">Digite um email válido</span>
            </div>
            <div id="required-#email" class="fundoFormularioUsuarioCriarUsuario required">
                <input id="email" type="email" oninput="emailValidate('#email')" class="boxCriarUsuario" placeholder="Insira seu email" name="email" required>
            </div>

            <div class="algoque">
                <label for="senha" class="nameboxCriarUsuario">Senha:</label>
                <span id="span-required-#password" class="span-required">Digite uma senha com no mínimo 8 caracteres</span>
            </div>
            <div id="required-#password" class="fundoFormularioUsuarioCriarUsuario required">
                <input id="password" type="password" oninput="senhaValidate('#password')" class="boxCriarUsuario" placeholder="Insira sua senha" name="senha" required>
                <span id="olhinho" class="material-icons icone" onclick="mudaolho('password', 'olhinho')">visibility</span>
            </div>
            
            <div class="algoque">
                <label for="senha-repeat" class="nameboxCriarUsuario">Confirme sua senha:</label>
                <span id="span-required-#passwordr" class="span-required">As senhas não conferem</span>
            </div>
            <div id="required-#passwordr" class="fundoFormularioUsuarioCriarUsuario required">
                <input id="passwordr" type="password" oninput="senhaRepeatValidate('#password','#passwordr')" class="boxCriarUsuario" placeholder="Repita sua senha" name="senha-repeat" required>
                <span id="olhinho" class="material-icons icone" onclick="mudaolho('passwordr', 'olhinho')">visibility</span>
            </div>

            <div class="modal-footerCriarUsuario">
                <button type="submit" class="fecharCriarUsuario botaoUser">Criar</button>
                <button type="button" class="cancelarCriarUsuario" onclick="fechaModal()">Cancelar</button>
            </div>
        </form>
    </div>
</div>
    <script src="/public/js/validacao.js"></script>
    <script src="/public/js/login.js"></script>


    
