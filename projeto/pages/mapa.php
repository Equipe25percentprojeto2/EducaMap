<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />

    <link rel="stylesheet" href="http://localhost/projeto/styles/map.css">
    <link rel="stylesheet" href="http://localhost/projeto/styles/home.css">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    </style>

    <title>EducaMap</title>

</head>

<body>
    
    <nav class="navbar">
        <div class="logo">
            <img src="../Images/logos/Logo.png" alt="Logo">
        </div>

        <div class="search-bar">
            <span class="material-symbols-outlined" style="color: #2E41DD;">search</span>
            <input type="text" placeholder="Busque eventos e cursos">
        </div>

        <div class="user-menu">

            <img src="http://localhost/projeto/Images/profiles/user.png" alt="Foto de Perfil" class="profile-pic">
            <span class="username">Rosália de Castro</span>

            <button class="dropdown-btn">
                <span class="material-symbols-outlined" style="color: #2E41DD;">arrow_drop_down_circle</span>
            </button>

            <ul class="dropdown-menu">
                <li><span class="material-symbols-rounded" style="color: #2E41DD;">school</span><a href="http://localhost/projeto/pages/areadoaluno/cursos_salvos.html">  Área do Aluno</a></li>
                <li><span class="material-symbols-outlined" style="color: #2E41DD;">map</span><a href="http://localhost/projeto/pages/mapa.php">  Localizar Cursos e Eventos</a></li>
                <li><span class="material-symbols-outlined" style="color: #2E41DD;">forward</span><a href="#">  Sair</a></li>
            </ul>

        </div>
    </nav>

    <div class="sidebar">
        <div class="sidebar-info">
            <img src="http://localhost/projeto/Images/vectors/v1.png" alt="Imagem Localizar" class="sidebar-img">
            <h1 class="sidebar-title">Localizar</h1>
            <h3 class="sidebar-subtitle">Encontre cursos e eventos próximos da sua região</h3>
        </div>
        
        <label for="nome">Localização</label>        
        <div class="input-container">
            <span class="material-icons input-icon">share_location</span>
            <input type="text" class="sidebar-input" placeholder="Digite sua localização" />
        </div>

        <a href="http://localhost/projeto/pages/home.php" class="btn-link">
            <button class="sidebar-btn">
                <span class="material-icons">arrow_circle_left</span>
                Voltar
            </button>
        </a>
    </div>

    <div class="map-section">
        <div id="map"></div>
    </div>

    <!-- Adicionar o Leaflet JS -->
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    
    <!-- Referenciar o script externo -->
    <script src="http://localhost/projeto/scripts/map.js"></script> <!-- Certifique-se de colocar o caminho correto para o arquivo -->
    <script src="http://localhost/projeto/scripts/home.js"></script>

</body>
</html>