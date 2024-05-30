<link rel="stylesheet" href="../../../public/css/visualizarPost.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Jomhuria">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sail">
<link href="https://fonts.googleapis.com/css2?family=Almendra:ital,wght@0,400;0,700;1,400;1,700" rel="stylesheet"><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Open The Modal -->

<!-- The Modal -->

<div id="modalVisualizar<?= $post->id ?>" class="modalV">

    <!-- Modal content -->
    <div class="modal-content">
        <div class="modal-header">
            <img class="imagemlogo" src="../../../public/assets/Logo.png" alt="">
            <h2 class="titulo">Visualizar Post</h2>
            <img class="imagemlogo" src="../../../public/assets/Logo.png" alt="">

        </div>
        <form class="modal-body">

            <label for="title" class="namebox">Título:</label>
            <div class="fundoFormulario">
                <input type="text" class="box" id="title" name="title" readonly value="<?= $post->title ?>" >
            </div>

            <label for="text" class="namebox">Conteúdo:</label>
            <div class="fundoFormularioCont">
                <img src="" alt="">
                <textarea type="text" class="box" id="text" name="text" readonly></textarea>
            </div>

            <label for="filter" class="namebox">Categoria:</label>
            <div class="fundoFormulario fundoC">
                <a class="box">Categoria</a>
            </div>

            <label for="imagem" class="namebox">Imagem:</label>
            <div class="fundoFormulario">
                <img src="" alt="">
            </div>

            <label for="data" class="namebox">Data de criação do post:</label>
            <div class="fundoFormulario">
                <input type="date" class="box" id="data" name="data" readonly>
            </div>
        </form>
    </div>
</div>

