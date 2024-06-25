<?php $parser = new Parsedown();?>

<link rel="stylesheet" href="../../../public/css/visualizarPost.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Jomhuria">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sail">
<link href="https://fonts.googleapis.com/css2?family=Almendra:ital,wght@0,400;0,700;1,400;1,700" rel="stylesheet"><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Open The Modal -->

<!-- The Modal -->

<div id="modalVisualizar<?= $post->id ?>" class="modalV modall">

    <!-- Modal content -->
    <div class="modalV-content">
        <div class="modalV-header">
            <img class="imagemVlogo" src="../../../public/assets/Logo.png" alt="">
            <h2 class="tituloV">Visualizar Post</h2>
            <img class="imagemVlogo" src="../../../public/assets/Logo.png" alt="">

        </div>
        <form class="modalV-body">

        <div class="container">

            <div class="left">
                <label for="title" class="nameVbox">Título:</label>
                    <div class="fundoVFormulario">
                        <input type="text" class="boxV" id="title" name="title" readonly value="<?= $post->title ?>">
                    </div>

                <label for="text" class="nameVbox">Conteúdo:</label>
                    <div class="fundoVFormularioCont">
                        <div type="text" class="boxV" id="text" name="text" readonly><?= $parser->text($post->content) ?></div>
                    </div>

                <label for="filter" class="nameVbox">Categoria:</label>
                    <div class="fundoVFormulario fundoVC">
                        <a class="boxV" id="boxCategoria"><?= $post->category ?></a>
                    </div>
            </div>

            <div class="right">
                <label for="imagem" class="nameVbox" id="imagem-bacana">Imagem:</label>
                    <div class="imagem-legal">
                        <img class="imagem-post" src="<?= '../../' . $post->image ?>" alt="">
                    </div>
            </div>
        </div>

        </form>
        <div class="modal-footerViPost">
            <button type="button" class="fecharViPost" onclick="fechaModal()">Fechar</button>
        </div>
    </div>
</div>

