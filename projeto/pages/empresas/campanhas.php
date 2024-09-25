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
  <link rel="stylesheet" href="http://localhost/projeto/styles/sidebar.css">
  <link rel="stylesheet" href="http://localhost/projeto/styles/campanhas.css">

  <style>
      @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
  </style>

  <title>EducaMap</title>

</head>

<body>
    
  <nav class="navbar">
    <div class="logo">
      <img src="http://localhost/projeto/Images/logos/Logo.png" alt="Logo">
    </div>


    <div class="user-menu">

        <img src="http://localhost/projeto/Images/profiles/learn.png" alt="Foto de Perfil" class="profile-pic">
        <span class="username">Instituto Learn</span>

    </div>

  </nav>

  <div class="sidebar-emp-container"></div>


  <div class="campanha-area">
    <div class="campanhas-header">
      <h1>Campanhas</h1>
      <a href="http://localhost/projeto/pages/empresas/cadastro-curso.php" class="add-campanha">Adicionar Campanhas</a>
    </div>

    <div id="campanhas-container"></div>
  </div>

  <script src="http://localhost/projeto/scripts/sidebar-emp.js"></script>
  <script src="http://localhost/projeto/scripts/campanhas.js"></script>

</body>
</html>