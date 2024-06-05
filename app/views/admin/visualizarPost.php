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
    <div class="modalV-content">
        <div class="modalV-header">
            <img class="imagemVlogo" src="../../../public/assets/Logo.png" alt="">
            <h2 class="tituloV">Visualizar Post</h2>
            <img class="imagemVlogo" src="../../../public/assets/Logo.png" alt="">

        </div>
        <form class="modalV-body">

            <label for="title" class="nameVbox">Título:</label>
            <div class="fundoVFormulario">
                <input type="text" class="boxV" id="title" name="title" readonly value="<?= $post->title ?>">
            </div>

            <label for="text" class="nameVbox">Conteúdo:</label>
            <div class="fundoVFormularioCont">
                <img src="" alt="">
                <div type="text" class="boxV" id="text" name="text" readonly><?= $post->content ?></div>
            </div>

            <label for="filter" class="nameVbox">Categoria:</label>
            <div class="fundoVFormulario fundoC">
                <a class="boxV"><?= $post->category ?></a>
            </div>

            <label for="imagem" class="nameVbox">Imagem:</label>
            <div class="fundoVFormulario">
                <img src="" alt="">
            </div>

            <label for="data" class="nameVbox">Data de criação do post:</label>
            <div class="fundoVFormulario">
                <input type="date" class="boxV" id="data" name="data" readonly value="<?= $post->created_at ?>">
            </div>
        </form>
    </div>
</div>

