<!DOCTYPE html>
<html lang="pt">
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=10, minimum-scale=1.0">
		<link rel="stylesheet" href="/public/css/lista-de-usuarios.css">
        <link href="https://fonts.googleapis.com/css2?family=Almendra:ital,wght@0,400;0,700;1,400;1,700" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Jomhuria">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    </head>
    
    <body>
        <?php 
            require 'criarUsuario.view.php';
        ?>
        
        <?php foreach($users as $user): ?>
        <?php 
            require 'visualizarUsuario.view.php';
            require 'editarUsuario.view.php';
            require 'excluirUsuario.view.php';                         
        ?>
        <?php endforeach; ?>
        
        <?php /*foreach($users as $user): */?>
        <main id="mainUserList">
            <div id="titlebackUserList">
                <div class="titleboxUserList">
                    <img class = "torrezinhatabUserList" src="/public/assets/torrezinha.png">
                    <h1 class="titleUserList">Lista de Usuários</h1>
                    <button class="criarUserList" onclick="abreModal('myModalCriar')">Criar</button>
                    <img class = "torrezinhatabUserList" src="/public/assets/torrezinha.png">
                </div>
            </div>
            <div id="tabcontainerUserList">
                <div class="tabscroll">
                    <table id="tableUserList">
                        <thead class="theadUserList">
                            <tr>
                                <th class="thUserList">ID</th>
                                <th class="thUserList">Nome</th>
                                <th class="thUserList">E-mail</th>
                                <th class="thUserList">Ações</th>
                            </tr>
                        </thead>
                        <tbody class="tbodyUserList">
                            <?php foreach($users as $user): ?>
                            <tr>
                                <td class="tdUserList"><?= $user->id ?></td>
                                <td class="tdUserList"><?= $user->name ?></td>
                                <td class="tdUserList"><?= $user->email ?></td>
                                <td class="tdUserList">
                                    <div id="actionsBtsUserList">
                                        <button class="viewUserList" onclick="abreModal('myModalVizualizar<?= $user->id ?>')">
                                            <i class="bi bi-eye"></i>
                                            <b class = "buttextUserList">Ver</b>
                                        </button>
                                        <button class="editUserList" onclick="abreModal('myModalEditar<?= $user->id ?>')">
                                            <i class="bi bi-pencil-square"></i>
                                            <b class ="buttextUserList">Editar</b>
                                        </button>
                                        <button class="delUserList" onclick="abreModal('myModalExcluir<?= $user->id ?>')">
                                            <i class="bi bi-x-lg"></i>
                                            <b class ="buttextUserList">Deletar</b>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
        <?php /*endforeach;*/ ?>
    </body>
    <script src="/public/js/modal.js"></script>
</html>