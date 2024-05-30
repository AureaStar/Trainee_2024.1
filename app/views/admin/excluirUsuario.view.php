<link rel="stylesheet" href="../../../public/css/excluitUsuario.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Jomhuria">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sail">
<link href="https://fonts.googleapis.com/css2?family=Almendra:ital,wght@0,400;0,700;1,400;1,700" rel="stylesheet"><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Open The Modal -->

<!-- The Modal -->
<div id="myModalExcluir<?= $user->id ?>" class="modalEUser modall">

    <!-- Modal content -->
    <div class="modal-contentEUser">
        <div class="modal-headerEUser">
            <img class="imagemlogoEUser" src="../../../public/assets/Logo.png" alt="">
            <h2 class="tituloEUser">Certeza que deseja excluir o seu usuário?</h2>
            <img class="imagemlogoEUser" src="../../../public/assets/Logo.png" alt="">
        </div>
        <div class="modal-bodyEUser">
            <form action="/usuarios/delete" method="post">
                <input type="hidden" name="id" value="<?= $user->id ?>">
                <button type="submit" class="simEUser">Sim</button>
                <button type="button" class="nãoEUser" onclick="fechaModal()">Não</button>
            </form>
        </div>
    </div>
</div>