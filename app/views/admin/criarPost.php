<link rel="stylesheet" href="../../../public/css/criarPost.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Jomhuria">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sail">
<link href="https://fonts.googleapis.com/css2?family=Almendra:ital,wght@0,400;0,700;1,400;1,700" rel="stylesheet"><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Open The Modal -->

<!-- The Modal -->

<div id="modalVCriar" class="modalVC modall">

    <!-- Modal content -->
    <div class="modalVC-content">
        <div class="modalVC-header">
            <img class="imagemVClogo" src="../../../public/assets/Logo.png" alt="">
            <h2 class="tituloVC">Criar Post</h2>
            <img class="imagemVClogo" src="../../../public/assets/Logo.png" alt="">

        </div>
        <form class="modalVC-body" method="POST" action="/posts/create" enctype="multipart/form-data">

            <label for="title" class="nameVCbox">Título:</label>
            <div class="fundoVCFormulario">
                <input type="text" class="boxVC" placeholder="Insira o título" name="title" required>
            </div>

            <label for="text" class="nameVCbox">Conteúdo:</label>
            <div class="fundoVCFormularioCont">
                <textarea type="text" class="boxVC" placeholder="Escreva o conteúdo" name="text" required></textarea>
            </div>

            <label for="filter" class="nameVCbox">Categoria:</label>
            <div class="fundoVCFormulario">
                <select name="categorias" class="boxVC boxVCselect">                    
                    <option class="nsei" value="1">Categoria 1</option>                   
                    <option class="nsei" value="2">Categoria 2</option> 
                    <option class="nsei" value="3">Categoria 3</option>
                </select>
            </div>

            <label for="imagem" class="nameVCbox">Imagem:</label>
            <div class="fundoVFormulario">
                <input type="file" class="boxVC imagemVCInput" name="imagem" required>
            </div>

            <label for="data" class="nameVCbox">Data de criação do post:</label>
            <div class="fundoVCFormulario">
                <input type="date" class="boxVC" placeholder="XX/XX/XXXX" name="data" required>
            </div>

            <div class="modalVC-footer">
                <button type="submit" class="fecharVC">Criar</button>
                <button type="button" class="cancelarVC" onclick="fechaModal()">Cancelar</button>

            </div>
        </form>
    </div>
    <script src="/public/js/modal.js"></script>
</div>