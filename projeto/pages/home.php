<!DOCTYPE html>
<html lang="pt_br">

<head>
    
<meta charset="UTF-8">
    
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <link rel="stylesheet" href="http://localhost/projeto/styles/home.css">

  <style>
      @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
  </style>

  <title>EducaMap</title>

</head>

<body>
    <?php //include("protect.php"); ?>
  <nav class="navbar">
  <div class="logo">
    <img src="http://localhost/projeto/Images/logos/Logo.png" alt="Logo">
  </div>

  <div class="search-bar">
    <span class="material-symbols-outlined" style="color: #2E41DD;">search</span>
    <input type="text" placeholder="Busque eventos e cursos">
  </div>

  <div class="log-menu">
    <?php
    if (isset($_SESSION['usuario_logado'])) {
      ?>
      <div class="user-menu">
        <img src="../Images/profiles/avatar.png" alt="Foto de Perfil" class="profile-pic">
        <span class="username"><?php echo implode(' ', array_slice(explode(' ', $_SESSION['usuario_logado']['nome']), 0, 2)); ?></span>        <button class="dropdown-btn">
          <span class="material-symbols-outlined" style="color: #2E41DD;">expand_circle_down</span>
        </button>
        <ul class="dropdown-menu">
          <li><span class="material-symbols-rounded" style="color: #2E41DD;">school</span><a href="http://localhost/projeto/pages/areadoaluno/cursos_salvos.php">Área do Aluno</a></li>
          <li><span class="material-symbols-rounded" style="color: #2E41DD;">map</span><a href="http://localhost/projeto/pages/mapa.php">Localizar Cursos e Eventos</a></li>
          <li><span class="material-symbols-rounded" style="color: #2E41DD;">forward</span><a href="#">Sair</a></li>
        </ul>
      </div>
      <?php
    } else {
      ?>
      <div class="nav-buttons">
        <a href="http://localhost/projeto/pages/empresas/login-emp.php">
          <button class="org-button">Sou uma Organização</button>
        </a>
        <a href="http://localhost/projeto/pages/login.php">
          <button class="account-button">Acessar Conta</button>
        </a>
      </div>
      <?php
    }
    ?>
  </div>
  </nav>
  
  <div class="banner-placeholder"></div>
  
  <div class="page-container">
    <div class="main-content">

      <div class="search-filters">

        <div class="search-container">

          <h1>O que você quer aprender hoje?</h1>

          <div class="search-filter">
            <span class="material-symbols-outlined" style="color: #2E41DD;">search</span>
            <input type="text" placeholder="Busque eventos e cursos">
          </div>

        </div>
        
        <div class="filters-container">
          
          <div class="filters">

            <div class="dropdown">
              <button class="filter-button">Data de início
                <span class="material-symbols-rounded">expand_circle_down</span>
              </button>

              <div class="dropdown-content">
                <a href="#">Hoje</a>
                <a href="#">Esta Semana</a>
                <a href="#">Este Mês</a>
              </div>
            </div>

            <div class="dropdown">
              <button class="filter-button">Valor
                <span class="material-symbols-rounded">expand_circle_down</span>
              </button>

              <div class="dropdown-content">
                <a href="#">Gratuito</a>
                <a href="#">Pago</a>
              </div>
            </div>

            <div class="dropdown">
              <button class="filter-button">Modalidade
                <span class="material-symbols-rounded">expand_circle_down</span>
              </button>
              
              <div class="dropdown-content">
                <a href="#">Presencial</a>
                <a href="#">Online</a>
                <a href="#">Híbrido</a>
              </div>
            </div>

          </div>

          <button class="filter-submit">Filtrar</button> <!-- Botão Filtrar -->
        </div>

      </div>

      <h3>Escolha a área certa para você! </h3>
      <div id="areas-container"></div>

      <h3>Cursos e eventos de nossos parceiros! </h3>
      <div id="courses-container"></div>

    </div>

    <div class="ads-sidebar"><!--
        <div class="ad-space">
            
        </div>
        <div class="ad-space">
            
        </div>-->
    </div>
  </div>

  <script src="http://localhost/projeto/scripts/home.js"></script>
  <script src="http://localhost/projeto/scripts/cards-areas.js"></script>
  <script src="http://localhost/projeto/scripts/cards-home.js"></script>

</body>
</html>