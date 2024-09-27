<!DOCTYPE html>
<html lang="pt_br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="http://localhost/projeto/styles/sidebar.css">
    <link rel="stylesheet" href="http://localhost/projeto/styles/home.css">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    </style>

    <title>Document</title>

</head>

    <nav class="navbar">
        <div class="logo">
        <img src="http://localhost/projeto/Images/logos/Logo.png" alt="Logo">
        </div>

        <div class="user-menu">

            <img src="http://localhost/projehttp://localhost/projeto/Images/profiles/user.png" alt="Foto de Perfil" class="profile-pic">
            <span class="username">Rosália de Castro</span>

            <button class="dropdown-btn">
            <span class="material-symbols-outlined" style="color: #2E41DD;">expand_circle_down</span>
            </button>

            <ul class="dropdown-menu">
                <li><span class="material-symbols-rounded" style="color: #2E41DD;">school</span><a href="http://localhost/projeto/pages/areadoaluno/cursos_salvos.php">Área do Aluno</a></li>
                <li><span class="material-symbols-rounded" style="color: #2E41DD;">map</span><a href="http://localhost/projeto/pages/mapa.php">Localizar Cursos e Eventos</a></li>
                <li><span class="material-symbols-rounded" style="color: #2E41DD;">forward</span><a href="#">Sair</a></li>
            </ul>

        </div>
    </nav>

    <div class="sidebar-container"></div>

    <div id="courses-container" class="courses-container">
        <!-- Cursos salvos serão exibidos aqui -->
    </div>

    <script src="http://localhost/projeto/scripts/cursos-salvos.js"></script>
    <script src="http://localhost/projeto/scripts/sidebar.js"></script>
    <script src="http://localhost/projeto/scripts/cards-home.js"></script>
    <script src="http://localhost/projeto/scripts/home.js"></script>

</html>