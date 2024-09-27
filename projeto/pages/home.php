<!DOCTYPE html>
<html lang="pt_br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EducaMap</title>
  <link rel="stylesheet" href="http://localhost/projeto/styles/home.css">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;400;700&display=swap');
  </style>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body>

  <?php
  // Inclui o arquivo de proteção para verificar a sessão
  include("protect.php");

  // Conecta ao banco de dados
  include("conexao.php");

  // Inicializa a variável de consulta de pesquisa
  $search_query = $_POST['search_query'] ?? '';

  // Realiza a consulta ao banco de dados com base na barra de pesquisa
  $query = "SELECT * FROM cursos";
  if (!empty($search_query)) {
    $search_query = $mysqli->real_escape_string($search_query);
    $query .= " WHERE nomecurso LIKE '%$search_query%'";
  }
  $result = $mysqli->query($query);
  ?>

  <nav class="navbar">
    <div class="logo">
      <img src="http://localhost/projeto/Images/logos/Logo.png" alt="Logo">
    </div>

    <div class="log-menu">
      <?php
      if (isset($_SESSION['usuario_logado'])) {
        echo '<div class="user-menu">';
        echo '<img src="http://localhost/projeto/Images/profiles/user.png" alt="Foto de Perfil" class="profile-pic">';
        echo '<span class="username">' . implode(' ', array_slice(explode(' ', $_SESSION['usuario_logado']['nome']), 0, 2)) . '</span>';
        echo '<button class="dropdown-btn"><span class="material-symbols-outlined" style="color: #2E41DD;">expand_circle_down</span></button>';
        echo '<ul class="dropdown-menu">';
        echo '<li><span class="material-symbols-rounded" style="color: #2E41DD;">school</span><a href="http://localhost/projeto/pages/areadoaluno/conta.php">Área do Aluno</a></li>';
        echo '<li><span class="material-symbols-rounded" style="color: #2E41DD;">map</span><a href="http://localhost/projeto/pages/mapa.php">Localizar Cursos e Eventos</a></li>';
        echo '<li><span class="material-symbols-rounded" style="color: #2E41DD;">forward</span><a href="#">Sair</a></li>';
        echo '</ul></div>';
      } else {
        echo '<div class="nav-buttons">';
        echo '<a href="http://localhost/projeto/pages/empresas/login-emp.php"><button class="org-button">Sou uma Organização</button></a>';
        echo '<a href="http://localhost/projeto/pages/login.php"><button class="account-button">Acessar Conta</button></a>';
        echo '</div>';
      }
      ?>
    </div>
  </nav>

  <div class="banner-placeholder">
    <img src="http://localhost/projeto/Images/ads/Banner.png" alt="Banner">
  </div>

  <div class="page-container">
    <div class="main-content">
      <div class="search-filters">
        <div class="search-container">
          <h1>O que você quer aprender hoje?</h1>
          <div class="search-filter">
          <form method="post">
          <span class="material-icons" style="color: #2E41DD;">search</span>
          <input type="text" id="search-input" name="search_query" placeholder="Busque eventos e cursos" value="<?php echo htmlspecialchars($search_query); ?>" required>       
          </form>
          </div>
        </div>
        <div class="filters-container">
          <div class="filters">
            <div class="dropdown">
                <button class="filter-button">Data de início
                <span class="material-symbols-rounded">expand_circle_down</span>
              </button>
              <div class="dropdown-content">
                <a href="#" data-filter="Hoje">Hoje</a>
                <a href="#" data-filter="Esta Semana">Esta Semana</a>
                <a href="#" data-filter="Este Mês">Este Mês</a>
              </div>
            </div>

            <div class="dropdown">
              <button class="filter-button">Valor
                <span class="material-symbols-rounded">expand_circle_down</span>
              </button>
              <div class="dropdown-content">
                <a href="#" data-filter="gratuito">Gratuito</a>
                <a href="#" data-filter="pago">Pago</a>
              </div>
            </div>

            <div class="dropdown">
              <button class="filter-button">Modalidade
                <span class="material-symbols-rounded">expand_circle_down</span>
              </button>
              <div class="dropdown-content">
                <a href="#" data-filter="Presencial">Presencial</a>
                <a href="#" data-filter="Online">Online</a>
                <a href="#" data-filter="Híbrido">Híbrido</a>
              </div>
            </div>

            <div id="selected-filters"></div>
          </div>

          <button class="filter-submit">Filtrar</button>
        </div>
      </div>

      <h3>Nossas trilhas!</h3>
      <h4>Escolha uma trilha (ou várias) e explore os cursos e eventos que ela tem a oferecer!</h4>
      <div id="areas-container"></div>

      <h3>Só encontra aqui!</h3>
      <h4>Ranking dos melhores cursos dessa semana dos nossos parceiros!</h4>
      <div id="courses-container">
        <?php
        //header('Content-Type: text/html; charset=utf-8');
        if ($result->num_rows > 0) {
          while ($curso = $result->fetch_assoc()) {
            $bannerPath = 'http://localhost/' . $curso['banner'];
            echo '<div class="course-card">';
            echo '<img src="' . $bannerPath . '" alt="' . $curso['nomecurso'] . '">';
            echo '<h2>' . $curso['nomecurso'] . '</h2>';
            echo '<div class="card-info">';
            echo '<span class="material-icons">schedule</span>';
            echo '<p>' . $curso['datainicio'] . ' às ' . $curso['horainicio'] . '</p>';
            echo '</div>';
            echo '<div class="card-info">';
            echo '<span class="material-icons">share_location</span>';
            echo '<p>' . $curso['enderecocurso'] . '</p>';
            echo '</div>';
            echo '<div class="areas-icons-container">';
            echo '<div class="areas"><span class="tag">' . $curso['area'] . '</span></div>';
            echo '<div class="icons">';
            echo '<span class="material-icons save-icon">bookmark_border</span>';
            echo '<span class="material-icons favorite-icon">favorite_border</span>';
            echo '</div></div></div>';
          }
        } else {
          echo "<p>Não há cursos disponíveis ou correspondentes à sua pesquisa.</p>";
        }
        ?>
      </div>

    </div>

    <div class="ads-sidebar">
      <div class="ad-space">
        <img src="http://localhost/projeto/Images/ads/ads.png" alt="Descrição da imagem 1" class="ad-image">
      </div>
      <div class="ad-space">
        <img src="http://localhost/projeto/Images/ads/ads2.png" alt="Descrição da imagem 2" class="ad-image">
      </div>
      <div class="ad-space">
        <img src="http://localhost/projeto/Images/ads/banner1.png" alt="Descrição da imagem 3" class="ad-image">
      </div>
    </div>
  </div>

  <script>
    document.addEventListener("DOMContentLoaded", function () {
    const dropdownBtn = document.querySelector('.dropdown-btn');
    const dropdownMenu = document.querySelector('.dropdown-menu');

    dropdownBtn.addEventListener('click', function (event) {
        // Evitar que o evento clique do botão se propague para o documento
        event.stopPropagation();
        dropdownMenu.classList.toggle('show'); // Adiciona ou remove a classe 'show' ao menu
    });

    // Fecha o dropdown se o usuário clicar fora
    document.addEventListener('click', function () {
        if (dropdownMenu.classList.contains('show')) {
            dropdownMenu.classList.remove('show');
        }
    });
});
    // Função para enviar a pesquisa via AJAX
    function sendSearchQuery() {
      const searchInput = document.querySelector('.search-bar input').value.trim(); 
      const xhr = new XMLHttpRequest();
      xhr.open("POST", "processa_busca.php", true);
      xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

      const data = "query=" + encodeURIComponent(searchInput);
      xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
          document.getElementById("courses-container").innerHTML = xhr.responseText;
        }
      };
      xhr.send(data);
    }
  </script>
  <script src="http://localhost/projeto/scripts/home.js"></script>
  <script src="http://localhost/projeto/scripts/cards-areas.js"></script>
  <script src="http://localhost/projeto/scripts/cards-home.js"></script>
  
</body>
</html>