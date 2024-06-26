<link rel="stylesheet" href="../../../public/css/excluirPost.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Jomhuria">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sail">
<link href="https://fonts.googleapis.com/css2?family=Almendra:ital,wght@0,400;0,700;1,400;1,700" rel="stylesheet"><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Open The Modal -->

<!-- The Modal -->
<div id="modalExcluir<?=$post->id?>" class="modalD modall">

    <!-- Modal content -->
    <form action="/admin/post/delete" method="post"class="tamodal-content">
        <div class="tamodal-header">
            <img class="taimagemlogo" src="../../../public/assets/Logo.png" alt="">
            <h2 class="tatitulo">Certeza que deseja excluir o seu post?</h2>
            <img class="taimagemlogo" src="../../../public/assets/Logo.png" alt="">
        </div>
        <div class="tamodal-body">
            <button class="sim"type="submit">Sim</button>
            <button class="não"type="button"onclick="fechaModal()" >Não</button> 
            <input hidden name="id" value="<?=$post->id?>">
        </div>
    </form>
</div>