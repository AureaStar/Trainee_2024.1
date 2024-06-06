<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Almendra:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Almendra:ital,wght@0,400;0,700;1,400;1,700&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Jomhuria&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/public/css/sidebar.css">
    <link rel="shortcut icon" type="imagex/png" href="/public/assets/torre-logo.ico">
    
    <title>Admin em Torre do Sábio</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

    <nav class="sidebar">

        <div class="sidebar-close">
            <i class="bi bi-list" id="expand"></i>
        </div>
        
        <ul>
            <form method="get" action="dashboard">
            <li class="itens-menu">
                <button>
                    <span class="icon"><i class="bi bi-card-text"></i></span>
                        <span class="link-txt">Dashboard</span>
                </button>
                </li>
            </form>

            <li class="itens-menu">
            <form method="get" action="tabela_posts">
                <button>
                    <span class="icon"><i class="bi bi-pencil-square"></i></span>
                    <span class="link-txt">Publicações</span>
                </button>
            </li>
            </form>

            <form method="get" action="tabela_users">
                <li class="itens-menu">
                    <button>
                        <span class="icon"><i class="bi bi-people"></i></span>
                        <span class="link-txt">Usuários</span>
                    </button>
                </li>
            </form>

            <li class="itens-menu-login">
                <button onclick="openModal('logout')">
                    <span class="icon"><i class="bi bi-door-closed"></i></span>
                    <span class="link-txt">Logout</span>
                </button>
            </li>
            
        </ul>
    </nav>
    
    <div class="modal-logout" id="logout">
        <p>Deseja realmente sair?</p>
        <div>
            <form method="get" action="login">
                <button type="submit" class="btn-open">Confirmar</button>
            </form>

            <button type="button" class="btn-close" onclick="closeModal('logout')">Cancelar</button>
        </div>
    </div>

    <script src="/public/js/sidebar.js"></script>
