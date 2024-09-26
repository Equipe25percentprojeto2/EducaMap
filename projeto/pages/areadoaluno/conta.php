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
    <?php include("protect.php"); ?>
</head>
   
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
        <span class="username"><?php echo implode(' ', array_slice(explode(' ', $_SESSION['usuario_logado']['nome']), 0, 2)); ?></span>        
        <button class="dropdown-btn">
          <span class="material-symbols-outlined" style="color: #2E41DD;">expand_circle_down</span>
        </button>
        <ul class="dropdown-menu">
          <li><span class="material-symbols-rounded" style="color: #2E41DD;">school</span><a href="http://localhost/projeto/pages/areadoaluno/cursos_salvos.php">Área do Aluno</a></li>
          <li><span class="material-symbols-rounded" style="color: #2E41DD;">map</span><a href="http://localhost/projeto/pages/mapa.php">Localizar Cursos e Eventos</a></li>
          <li><span class="material-symbols-rounded" style="color: #2E41DD;">forward</span><a href="#">Sair</a></li>
        </ul>
      </div>
      <?php
    }
    ?>
  </div>
  </nav>
  <div class="sidebar">
            <div class="profile">
                <img src="http://localhost/projeto/Images/profiles/user.png" alt="Foto do Usuário" class="profile-photo">
                <span class="profile-name"><?php echo $_SESSION['usuario_logado']['nome']; ?></span>
            </div>
            <nav class="menu">
                <a href="http://localhost/projeto/pages/areadoaluno/cursos_salvos.php" class="menu-item">
                    <span class="material-symbols-rounded">bookmark</span>
                    <p>Cursos Salvos</p>
                </a>
                <a href="http://localhost/projeto/pages/areadoaluno/favoritos.php" class="menu-item">
                    <span class="material-symbols-rounded">favorite</span>
                    <p>Favoritos</p>
                </a>
                <a href="http://localhost/projeto/pages/areadoaluno/notificacoes.php" class="menu-item">
                    <span class="material-symbols-rounded">notifications</span>
                    <p>Notificações</p>
                </a>
                <a href="http://localhost/projeto/pages/areadoaluno/conta.php" class="menu-item">
                    <span class="material-symbols-rounded">account_circle</span>
                    <p>Conta</p>
                </a>
                <a href="http://localhost/projeto/pages/areadoaluno/ajuda.php" class="menu-item">
                    <span class="material-symbols-rounded">help</span>
                    <p>Ajuda</p>
                </a>
                <a href="http://localhost/projeto/pages/logout.php" class="menu-item logout">
                    <span class="material-symbols-rounded">Sair</span>
                    <p>Sair</p>
                </a>
            </nav>
        </div>

    <div class="sidebar-container">
      
    </div>

   <!-- <script src="http://localhost/projeto/scripts/sidebar.js"></script>-->

</html>