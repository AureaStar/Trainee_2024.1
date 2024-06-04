<link rel="stylesheet" href="../../../public/css/criarPost.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Jomhuria">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sail">
<link href="https://fonts.googleapis.com/css2?family=Almendra:ital,wght@0,400;0,700;1,400;1,700" rel="stylesheet"><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Open The Modal -->

<!-- The Modal -->

<div id="modalVCriar" class="modalVC">

    <!-- Modal content -->
    <div class="modalV-content">
        <div class="modalV-header">
            <img class="imagemVlogo" src="../../../public/assets/Logo.png" alt="">
            <h2 class="tituloV">Criar Post</h2>
            <img class="imagemVlogo" src="../../../public/assets/Logo.png" alt="">

        </div>
        <form class="modalV-body">

            <label for="title" class="nameVbox">Título:</label>
            <div class="fundoVFormulario">
                <input type="text" class="boxV" placeholder="Insira o título" name="title" required>
            </div>

            <label for="text" class="namebox">Conteúdo:</label>
            <div class="fundoVFormularioCont">
                <textarea type="text" class="boxV" placeholder="Escreva o conteúdo" name="text" required></textarea>
            </div>

            <label for="filter" class="nameVbox">Categoria:</label>
            <div class="fundoVFormulario">
                <select name="categorias" class="boxV boxVselect">                    
                    <option class="nsei" value="1">Categoria 1</option>                   
                    <option class="nsei" value="2">Categoria 2</option> 
                    <option class="nsei" value="3">Categoria 3</option>
                </select>
            </div>

            <label for="imagem" class="nameVbox">Imagem:</label>
            <div class="fundoVFormulario">
                <input type="file" class="boxV imagemVInput" name="imagem" required>
            </div>

            <label for="data" class="nameVbox">Data de criação do post:</label>
            <div class="fundoVFormulario">
                <input type="date" class="boxV" placeholder="XX/XX/XXXX" name="data" required>
            </div>

            <div class="modalV-footer">
                <button type="submit" class="fecharV">Criar</button>
                <button class="cancelarV">Cancelar</button>

            </div>
        </form>
    </div>

</div>