<link rel="stylesheet" href="../../../public/css/excluitUsuario.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Jomhuria">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sail">
<link href="https://fonts.googleapis.com/css2?family=Almendra:ital,wght@0,400;0,700;1,400;1,700" rel="stylesheet"><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Open The Modal -->

<!-- The Modal -->
<div id="ModalExcluir" class="modalE">

    <!-- Modal content -->
    <div class="modal-content">
        <div class="modal-header">
            <img class="imagemlogo" src="../../../public/assets/Logo.png" alt="">
            <h2 class="titulo">Certeza que deseja excluir o seu usuário?</h2>
            <img class="imagemlogo" src="../../../public/assets/Logo.png" alt="">
        </div>
        <form class="modal-body">
            <input type="hidden" name="id" value="<?= $user->id ?>">
            <button class="sim">Sim</button>
            <button class="não">Não</button>
        </form>
    </div>
</div>