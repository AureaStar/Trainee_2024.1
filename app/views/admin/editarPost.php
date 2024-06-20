<link rel="stylesheet" href="../../../public/css/editarPost.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Jomhuria">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sail">
<link href="https://fonts.googleapis.com/css2?family=Almendra:ital,wght@0,400;0,700;1,400;1,700" rel="stylesheet"><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Open The Modal -->

<!-- The Modal -->

<div id="modalEditar<?=$post->id?>" class="modalM modall">

    <!-- Modal content -->
    <div class="thmodal-content">
        <div class="thmodal-header">
            <img class="imagemlogo" src="../../../public/assets/Logo.png" alt="">
            <h2 class="thtitulo">Editar Post</h2>
            <img class="imagemlogo" src="../../../public/assets/Logo.png" alt="">

        </div>
        <form class="thmodal-body" action= "/admin/post/update"method="post" enctype="multipart/form-data">

            <label for="title" class="thnamebox">Título:</label>
            <div class="thfundoFormulario">
                <input required value="<?=$post->title?>" id="edit_modal_title" type="text" class="box" placeholder="Insira o título" name="title">
                
            </div>

            <label for="text" class="thnamebox">Conteúdo:</label>
            <div class="thfundoFormularioCont">
                <textarea required id="edit_modal_context" type="text" class="box" placeholder="Escreva o conteúdo" name="content"><?=$post->content?></textarea>
            </div>

            <label for="filter" class="thnamebox">Categoria:</label>
            <div class="thfundoFormulario">
                <select required name="category" class="box boxselect">                    
                    <option class="nsei" value="1">Categoria 1</option>                   
                    <option class="nsei" value="2">Categoria 2</option> 
                    <option class="nsei" value="3">Categoria 3</option>
                </select>
            </div>

            <label for="image" class="thnamebox">Imagem:</label>
            <div class="thfundoFormulario">
                <input type="file" class="box imagemInput" name="imagem">
            </div>

            <div class="thmodal-footer">
                <button type="submit" class="fechar">Editar</button>
                <button type="button" class="cancelar"onclick="fechaModal()">Cancelar</button>

            </div>
            <input hidden name="id" value="<?=$post->id?>">
            
        </form>
    </div>

</div>
