<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />

    <link rel="stylesheet" href="http://localhost/projeto/styles/info-curso.css"> <!-- Estilos da página de detalhes -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" />

    <!--<link rel="stylesheet" href="http://localhost/projeto/styles/home.css">-->

    <title>Detalhes do Curso</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    </style>

</head>

<body>

    <!--<nav class="navbar">
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
                <li><span class="material-symbols-rounded" style="color: #2E41DD;">school</span><a href="http://localhost/projeto/pages/areadoaluno/cursos_salvos.html">  Área do Aluno</a></li>
                <li><span class="material-symbols-outlined" style="color: #2E41DD;">map</span><a href="http://localhost/projeto/pages/mapa.php">  Localizar Cursos e Eventos</a></li>
                <li><span class="material-symbols-outlined" style="color: #2E41DD;">forward</span><a href="#">  Sair</a></li>
            </ul>

        </div>
    </nav>-->

    <div class="page-container">
        <div class="main-content">
            
            <!-- Seção de informações gerais -->
            <div class="info-section">
                <div class="course-details">
                    <!-- Imagem do curso -->
                    <img id="course-image" src="" alt="Imagem do Curso">

                    <div class="infos-cont">
                        <div class="cont-one">
                            <!-- Título e descrição do curso -->
                            <h1 id="course-title"></h1>
                            <p id="course-description"></p>

                            <!-- Container para data e hora -->
                            <div class="time-container">
                                <span class="material-icons">schedule</span>
                                <span id="course-date"></span> - 
                                <span id="course-time"></span>
                            </div>

                            <!-- Container para localização -->
                            <div class="location-container">
                                <span class="material-icons">share_location</span>
                                <span id="course-location"></span>
                            </div>
                        </div>

                        <div class="cont-two">
                            <div class="button-container">
                                <button class="action-button" id="enroll-button">Quero me inscrever!</button>

                                <div class="icons-info-actions">
                            
                                    <!-- Botão Salvar -->
                                    <!--<button class="action-button" id="save-button">
                                        <span class="material-icons">bookmark_border</span>
                                    </button>-->

                                    <!-- Botão Favoritar -->
                                    <!--<button class="action-button" id="favorite-button">
                                        <span class="material-icons">favorite_border</span>
                                    </button>-->
                                </div>

                            </div>
                        </div>
                    </div>

                </div>

            </div>
            
            <!-- Seção de instituição com espaço reservado -->
            <div class="institution-section">
                <div class="institution-details">
                    <img id="company-logo" alt="Logo da Empresa">
                    <h2 id="company-name"></h2>
                    <button class="action-button" id="follow-button">Seguir Perfil</button>
                </div>

                <div class="institution-placeholder">
                    <h3 class="info-title">Informações</h3>
                    <p>Carga Horária: </p>
                    <span id="course-hours"></span>
                    <p>Valor: </p>
                    <span id="course-value"></span>
                    <p>Modalidade: </p>
                    <span id="course-mode"></span>
                    <div id="course-tags" class="tags-container"></div>
                </div>
            </div>

        </div>

        <div class="second-content">
            <!-- Seção de textos descritivos --> 
            <div class="descritive-texts">
                <h3 class="descritive-title">Sobre</h3>
                <p id="course-description-text"></p>
                
                <h3 class="descritive-title">Requisitos</h3>
                <p id="course-additional-info"></p>
            </div>

            <!-- Seção de professores -->
            <div class="teachers-card">
                <h3>Professores</h3>
                <div id="professores-container"></div> <!-- Container onde os professores serão inseridos -->
            </div>
        </div>

        <div class="third-content">
            <div class="contact-details">
                <h3>Endereço</h3>
                <p id="course-address"></p>
                <h3>Telefone</h3>
                <p id="course-phone"></p>
                <h3>Horário de Funcionamento</h3>
                <p id="course-hours-operation"></p>
            </div>

            <div id="map-container">
                <div id="map"  style="height: 500px; width: 98%;"></div>
            </div>
        </div>

    </div>

    <!-- Script JS para carregar os detalhes -->
    <script src="http://localhost/projeto/scripts/info-curso.js"></script>
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"></script>

</body>
</html>