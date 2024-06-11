<link rel="stylesheet" href="../../../public/css/editarPost.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Jomhuria">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sail">
<link href="https://fonts.googleapis.com/css2?family=Almendra:ital,wght@0,400;0,700;1,400;1,700" rel="stylesheet"><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Open The Modal -->

<!-- The Modal -->

<div id="modalEditar" class="modalM">

    <!-- Modal content -->
    <div class="modal-content">
        <div class="modal-header">
            <img class="imagemlogo" src="../../../public/assets/Logo.png" alt="">
            <h2 class="titulo">Editar Post</h2>
            <img class="imagemlogo" src="../../../public/assets/Logo.png" alt="">

        </div>
        <form class="modal-body">

            <label for="title" class="namebox">Título:</label>
            <div class="fundoFormulario">
                <input type="text" class="box" placeholder="Insira o título" name="title">
            </div>

            <label for="text" class="namebox">Conteúdo:</label>
            <div class="fundoFormularioCont">
                <textarea type="text" class="box" placeholder="Escreva o conteúdo" name="text"></textarea>
            </div>

            <label for="filter" class="namebox">Categoria:</label>
            <div class="fundoFormulario">
                <select name="categorias" class="box boxselect">                    
                    <option class="nsei" value="1">Categoria 1</option>                   
                    <option class="nsei" value="2">Categoria 2</option> 
                    <option class="nsei" value="3">Categoria 3</option>
                </select>
            </div>

            <label for="imagem" class="namebox">Imagem:</label>
            <div class="fundoFormulario">
                <input type="file" class="box imagemInput" name="imagem">
            </div>

            <label for="data" class="namebox">Data de edição do post:</label>
            <div class="fundoFormulario">
                <input type="date" class="box" placeholder="XX/XX/XXXX" name="data">
            </div>

            <div class="modal-footer">
                <button type="submit" class="fechar">Editar</button>
                <button class="cancelar">Cancelar</button>

            </div>
        </form>
    </div>

</div>