<!DOCTYPE html>
<html lang="pt_br">

<head>
    
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="stylesheet" href="../styles/home.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

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

        <img src="../Images/profiles/avatar.png" alt="Foto de Perfil" class="profile-pic">
        <span class="username">Rosália de Castro</span>

        <button class="dropdown-btn">
          <span class="material-symbols-outlined" style="color: #2E41DD;">arrow_drop_down_circle</span>
        </button>

        <ul class="dropdown-menu">
            <li><span class="material-symbols-outlined" style="color: #2E41DD;">school</span><a href="http://localhost/projeto/pages/areadoaluno/cursos_salvos.html">  Área do Aluno</a></li>
            <li><span class="material-symbols-outlined" style="color: #2E41DD;">map</span><a href="#">  Localizar Cursos e Eventos</a></li>
            <li><span class="material-symbols-outlined" style="color: #2E41DD;">forward</span><a href="#">  Sair</a></li>
        </ul>

    </div>
  </nav>

  <div class="banner-placeholder"></div>   

  <div class="grid-container">
    <div id="courses-container"></div>
  </div>

  <script src="http://localhost/projeto/scripts/cards-home.js"></script>
</body>

</html>