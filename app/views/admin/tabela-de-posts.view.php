<!DOCTYPE html>
<html lang="pt">
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=10, minimum-scale=1.0">
		<link rel="stylesheet" href="/public/css/tabela-de-posts.css">
        <link href="https://fonts.googleapis.com/css2?family=Almendra:ital,wght@0,400;0,700;1,400;1,700" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Jomhuria">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    </head>
    
    <body>
        <div class="overlay" onclick="fechaModal()"></div>
        <main id="mainPostList">
            <div id="titlebackPostList">
                <div class="titleboxPostList">
                    <img class="torrezinhatabPostList" src="/public/assets/torrezinha.png">
                    <h1 class="titlePostList">Lista de Posts</h1>
                    <button class="criarPostList" onclick="abreModal('modalVCriar')">Criar</button>
                    <img class="torrezinhatabPostList" src="/public/assets/torrezinha.png">
                </div>
            </div>
            <div id="tabcontainerPostList">
                <div class="tabscroll">
                    <table id="tablePostList">
                        <thead class="theadPostList">
                            <tr>
                                <th class="thPostList">ID</th>
                                <th class="thPostList">Título</th>
                                <th class="thPostList">Autor</th>
                                <th class="thPostList">Data de criação</th>
                                <th class="thPostList">Ação</th>

                            </tr>
                        </thead>
                        <tbody class="tbodyPostList">
                            <?php foreach($posts as $post): ?>
                                <?php foreach($users as $user): ?>
                            <tr>
                                <td class="tdPostList"><?= $post->id ?></td>
                                <td class="tdPostList"><?= $post->title ?></td>
                                <td class="tdPostList"><?= $post->author == $user->id ? $user->name : "" ?></td>
                                <td class="tdPostList"><?= $post->created_at ?></td>
                                <td class="tdPostList">
                                    <div id="actionsBtsPostList">
                                        <button class="viewPostList"><i class="bi bi-eye" onclick="abreModal('modalVisualizar<?= $post->id ?>')"></i> <b class="buttextPostList" onclick="abreModal('modalVisualizar<?= $post->id ?>')">Ver</b></button>
                                        <button class="editPostList"><i class="bi bi-pencil-square"></i> <b class="buttextPostList">Editar</b></button>
                                        <button class="delPostList"><i class="bi bi-x-lg"></i> <b class="buttextPostList">Deletar</b></button>
                                    </div>
                                </td>
                            </tr>
                                <?php endforeach ?>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
        <?php foreach($posts as $post): ?>
            <?php foreach($users as $user): ?>
                <?php 
                    require 'editarPost.php';
                    require 'excluirPost.php';
                    require 'visualizarPost.php';
                ?>
            <?php endforeach ?>
        <?php endforeach ?>

        <?php require 'criarPost.php'; ?> 
    </body>
    <script src="/public/js/modal.js"></script>
</html>