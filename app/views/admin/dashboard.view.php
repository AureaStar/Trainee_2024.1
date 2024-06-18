<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css2?family=Almendra:ital,wght@0,400;0,700;1,400;1,700&family=Jomhuria&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../../../public/css/dashboard-styles.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
        
        <title>Torre do Sábio - Dashboard</title>
        
        <script src="../../../public/js/dashboard.js"></script>
    </head>
    
    <body>
        
        <div class="d-background">
            
            
            <div class="d-title">
                <h1><img src="../../../public/assets/Mini-logo.png">Dashboard<img src="../../../public/assets/Mini-logo.png"></h1>   
            </div>
            
            <div class="IndexButton">
            <form method="get" action="index">
                <button type="submit" class="material-icons icone">home <a>Início</a></button>
            </form>
            </div>
            
        <div class="d-buttons">
            
            <div class="d-central-buttons">
                <form method="get" action="/admin/posts">
                    <button type="submit" id="btn-publi">
                        <img src="../../../public/assets/post-icon.png">
                        <div class="central-pub">
                            Publicações
                        </div>
                    </button>
                </form>
                
                <form method="get" action="/admin/users">
                    <button type="submit" id="btn-user">
                        <img src="../../../public/assets/users.png">
                        <div class="central-pub">
                            Usuários
                        </div>
        </button>
    </form>
    
    <button id="btn-logout-mobile" onclick="openModal('modal')">
        <img src="../../../public/assets/logout-icon.png">
        <div class="central-pub">
            Logout
        </div>
    </button>
</div>

    <div class="d-logout">
        <button id="btn-logout" onclick="openModal('modal')"><img src="../../../public/assets/logout-icon.png">Encerrar sessão</button>
        </p>


        </div>

        <div class="modal-logout" id="modal">
            <p>Deseja realmente sair?</p>
            <div class="btn-modal">
                <form method="get" action="login">
                <button type="submit" class="btn-open">Confirmar</button>
                </form>
                <button type="button" class="btn-close" onclick="closeModal('modal')">Cancelar</button>
            </div>
        </div>
    
    </div>
    

</body>

</html>