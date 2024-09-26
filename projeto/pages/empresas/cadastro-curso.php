<!DOCTYPE html>
<html lang="pt_br">

<head>
    <?php include("protect_emp.php"); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="http://localhost/projeto/styles/home.css">
    <link rel="stylesheet" href="http://localhost/projeto/styles/sidebar.css">
    <link rel="stylesheet" href="http://localhost/projeto/styles/cadastro-curso.css">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    </style>

    <title>EducaMap</title>
</head>
<body>

<div class="sidebar-emp-container">
  <div class="sidebar">
      <div class="profile">
                <img src="http://localhost/projeto/Images/profiles/learn.png" alt="Foto do Usuário" class="profile-photo">
                <span class="profile-name"><?php echo $_SESSION['usuario_logado']['nomempresa']; ?></span>        

            </div>
            <nav class="menu">
                <a href="http://localhost/projeto/pages/empresas/dashboard.php" class="menu-item">
                    <span class="material-symbols-rounded">home</span>
                    <p>Dashboard</p>
                </a>
                <a href="http://localhost/projeto/pages/empresas/campanhas.php" class="menu-item">
                    <span class="material-symbols-rounded">flag</span>
                    <p>Campanhas</p>
                </a>
                <a href="http://localhost/projeto/pages/empresas/insights.php" class="menu-item">
                    <span class="material-symbols-rounded">insights</span>
                    <p>Insights</p>
                </a>
                <a href="http://localhost/projeto/pages/empresas/relatorios.php" class="menu-item">
                    <span class="material-symbols-rounded">comment</span>
                    <p>Relatórios</p>
                </a>
                <a href="http://localhost/projeto/pages/empresas/ajuda-emp.php" class="menu-item">
                    <span class="material-symbols-rounded">help</span>
                    <p>Ajuda</p>
                </a>
                <a href="http://localhost/projeto/pages/empresas/login-emp.html" class="menu-item logout">
                <span class="material-symbols-rounded">Sair</span>
                   
                </a>
            </nav>
        </div>
  </div>

    <div class="form-container">
        <form method="post" enctype="multipart/form-data">
            <h2>Cadastro de Curso</h2>

            <!-- Etapa 1 -->
            <div class="step-container" id="step1" >
                <h3>Etapa 1 - Visão Geral</h3>

                <label for="course-title">Título do Curso: <span class="required">(campo obrigatório)</span></label>
                <input type="text" id="course-title" name="course-title" required>

                <div class="input-group">
                    <div class="input-item">
                        <label for="banner-foto" style="margin-bottom: 10px;">Foto do Banner <span class="required">(campo obrigatório)</span></label>
                        <div class="custom-file-upload">
                            <div class="file-input-container">
                                <label for="banner-input" class="file-label">Inserir banner</label>
                                <input type="file" id="banner-input" name="banner" class="file-input">
                                <span id="file-name" class="file-name"></span>
                            </div>
                        </div>
                    </div>

                    <div class="input-item">
                        <label for="descricao-curso">Descrição <span class="required">(campo obrigatório)</span></label>
                        <textarea id="descricao-curso" name="descricao-curso" rows="4" placeholder="Digite a descrição do curso"></textarea>
                    </div>
                </div>

                <!-- Modalidade, Valor e Carga Horária -->
                <div class="input-row">
                    <!-- Dropdown Modalidade -->
                    <div class="form-group">
                        <label for="modalidade">Modalidade <span class="required">(campo obrigatório)</span></label>
                        <select id="modalidade" name="modalidade" class="form-control">
                            <option value="presencial">Presencial</option>
                            <option value="online">Online</option>
                            <option value="hibrido">Híbrido</option>
                        </select>
                    </div>

                    <!-- Dropdown Valor -->
                    <div class="form-group">
                        <label for="valor">Valor <span class="required">(campo obrigatório)</span></label>
                        <select id="valor"  name="valor" class="form-control">
                            <option value="gratuito">Gratuito</option>
                            <option value="pago">Pago</option>
                        </select>
                    </div>

                    <!-- Carga Horária -->
                    <div class="form-group">
                        <label for="carga-horaria">Carga Horária <span class="required">(campo obrigatório)</span></label>
                        <input type="text"  name="carga-horaria" class="form-control" placeholder="Ex: 40 horas">
                    </div>
                </div>

                <!-- Data de Início, Hora de Início e Áreas -->
                <div class="input-row">
                    <!-- Data de Início -->
                    <div class="form-group">
                        <label for="data-inicio">Data de Início <span class="required">(campo obrigatório)</span></label>
                        <input type="date"  name="data-inicio" class="form-control">
                    </div>

                    <!-- Hora de Início -->
                    <div class="form-group">
                        <label for="hora-inicio">Hora de Início <span class="required">(campo obrigatório)</span></label>
                        <input type="time"  name="hora-inicio" class="form-control">
                    </div>

                    <!-- Dropdown Áreas -->
                    <div class="form-group">
                        <label for="areas">Áreas <span class="required">(campo obrigatório)</span></label>
                        <select id="areas" name="areas" class="form-control">
                            <option value="Informática básica">Informática</option>
                            <option value="Segurança da informação">Segurança</option>
                            <option value="Design digital">Design</option>
                            <option value="Desenvolvimento de Sistemas">Desenvolvimento</option>
                            <option value="Análise de dados">Análise</option>
                            <option value="Gestão de projetos">Gestão</option>
                        </select>
                    </div>
                </div>

                <div class="input-row">
                    <div class="form-group">
                        <label for="endereco-completo">Endereço Completo <span class="required">(campo obrigatório)</span></label>
                        <input type="text" id="endereco-completo" name="endereco-completo" class="form-control" placeholder="Insira o endereço completo">
                    </div>

                    <div class="form-group">
                        <label for="link-inscricao">Link de Inscrição <span class="required">(campo obrigatório)</span></label>
                        <input type="text" id="endereco-completo" name="link-inscricao" placeholder="Digite o link de inscrição" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="telefone-contato">Telefone para Contato <span class="required">(campo obrigatório)</span></label>
                        <input type="tel" id="endereco-completo" name="telefone-contato" placeholder="Digite o telefone" class="form-control">
                    </div>
                </div>


                <!-- Botões Cancelar e Próximo -->
                <div class="buttons">
                    <a href="http://localhost/projeto/pages/empresas/campanhas.php" class="btn btn-cancel" id="btn-cancelar">Cancelar</a>
                    <button class="btn btn-next" id="btn-proximo">Próximo</button>
                </div>
        
            </div>

            <!-- Etapa 2 -->
            <div class="step-container hidden"  id="step2"  class="hidden">
                <h3>Etapa 2 - Detalhes Adicionais</h3>

                <div class="form-group">
                    <label for="requisitos">Requisitos <span class="required">(campo obrigatório)</span></label>
                    <textarea id="requisitos" class="scrollable-input" name="requisitos" placeholder="Insira os requisitos sobre o curso"></textarea>
                </div>

                <div class="form-group">
                    <label for="conteudo">Conteúdo <span class="required">(campo obrigatório)</span></label>
                    <textarea id="conteudo" class="scrollable-input" name="conteudo" placeholder="Insira o conteúdo do curso"></textarea>
                </div>

                <label class="label-professores" for="professores">Professores</label>
                <div class="professor-input-group">

                <div class="inputs-professor-container">
                <div id="container-professores">    
                <div class="inputs-professor">
                        <div class="input-foto-professor">
                            <label for="foto-professor">Foto do Professor</label>
                            <div class="file-input-circle">
                            <input type="file" name="foto-professor[]" class="file-input" accept="image/*" onchange="previewImage(event, this)">
                            <span class="plus-sign">+</span>
                            <img class="foto-preview" alt="Pré-visualização da foto" style="display: none;">
                            </div>
                        </div>

                        <div class="input-nome-professor">
                            <label for="nome-professor">Nome do Professor</label>
                            <div class="input-container">
                            <input type="text" name="nome-professor[]" placeholder="Digite o nome do professor" class="form-control" style="width: 300px;">
                            <button type="button" class="btn-adicionar" onclick="adicionarNovoGrupoProfessor()">Adicionar Professor</button>
                            </div>
                        </div>
                    </div>

                <!-- Container onde os novos grupos serão adicionados -->
                </div>
            
                </div>

                <!-- Botões Cancelar e Próximo -->
                <div class="buttons">
                    <button class="btn btn-cancel" id="btn-voltar">Voltar</button>
                    <button  type="submit" name="submit" href="http://localhost/projeto/pages/empresas/campanhas.php" class="btn btn-next" id="btn-submit">Enviar</button>
                </div>
                
            </div>
        </form>

    </div>

    <!--<script src="http://localhost/projeto/scripts/sidebar-emp.js"></script>-->
    <script src="http://localhost/projeto/scripts/cadastro-curso.js"></script>
    <?php
    error_reporting(E_ALL);
// Conexão com o banco de dados
        include('conexao.php');
 // Verifica se o usuário está logado
            if (!isset($_SESSION['usuario_logado'])) {
                header('Location: login-emp.php');
                exit();
            }

            // Verifica se o formulário foi enviado
            if (isset($_POST['submit'])) {
                
                // Valida os dados do formulário
                $cnpj = $_SESSION['usuario_logado']['cnpj'];
                $title = $_POST['course-title'];
                $descricao = $_POST['descricao-curso'];
                $modalidade = $_POST['modalidade'];
                $valor = $_POST['valor'];
                $carga_horaria = $_POST['carga-horaria'];
                $data_inicio = $_POST['data-inicio'];
                $hora_inicio = $_POST['hora-inicio'];
                $areas = $_POST['areas'];
                $endereco_completo = $_POST['endereco-completo'];
                $link_inscricao = $_POST['link-inscricao'];
                $telefone_contato = $_POST['telefone-contato'];
                $requisitos = $_POST['requisitos'];
                $conteudo = $_POST['conteudo'];

                // Verifica se os dados do formulário estão vazios
                if (empty($title) || empty($descricao) || empty($modalidade) 
                || empty($valor) || empty($carga_horaria) || empty($data_inicio) 
                || empty($hora_inicio) || empty($areas) || empty($endereco_completo) 
                || empty($link_inscricao) || empty($telefone_contato) || empty($requisitos) 
                || empty($conteudo)) {
                    echo "<p color: 'red'>Preencha todos os campos obrigatórios.</p>";
                    exit();
                }

                // Verifica se o arquivo foi enviado corretamente
                if (isset($_FILES['banner'])) {
                    $banner = $_FILES['banner'];
                    if ($banner['error']) {
                        echo "<p color='red'>Falha ao enviar arquivo.</p>";
                    }

                    // Verifica se o arquivo é válido
                    $ext = strtolower(pathinfo($banner['name'], PATHINFO_EXTENSION));
                    if ($ext != "jpg" && $ext != "png" && $ext != "jpeg" && $ext != "png") {
                        die("Tipo de arquivo não aceito.");
                    }

                    // Move o arquivo para o diretório de destino
                    $pasta = "C:/xampp/htdocs/projeto/pages/banner/";
                    $caminho = "projeto/pages/banner/";
                    $newnaArq = uniqid();
                    move_uploaded_file($banner['tmp_name'], $pasta .  $newnaArq . "." . $ext);
                    $banner_nome = $caminho . $newnaArq . "." . $ext;
                    $stmt = $mysqli->prepare("INSERT INTO cursos (cnpj, nomecurso, banner, descricaocurso, modalidade, valor, cargahoraria, datainicio, horainicio, area, enderecocurso, linkdeinscricao, telefone, requisitos, conteudo) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
                    $stmt->bind_param("sssssssssssssss", $cnpj, $title, $banner_nome, $descricao, $modalidade, $valor, $carga_horaria, $data_inicio, $hora_inicio, $areas, $endereco_completo, $link_inscricao, $telefone_contato, $requisitos, $conteudo);
                    $stmt->execute();
                    // ...
                    if ($stmt->affected_rows > 0) {
                        echo "<p color='red'>Curso inserido com sucesso</p>";
                        $curso_id = $mysqli->insert_id;
                    // Insere os professores
                        if (isset($_POST['nome-professor']) && isset($_FILES['foto-professor'])) {
                            $professores = $_POST['nome-professor'];
                            $fotos_professores = $_FILES['foto-professor'];
                            
                            if (is_array($professores)) {
                                foreach ($professores as $key => $professor) {
                                    if (!empty($professor)) {
                                        $foto_professor = $fotos_professores['name'][$key];
                                        $ext = strtolower(pathinfo($foto_professor, PATHINFO_EXTENSION));
                                        $newnaArq = uniqid();
                                        move_uploaded_file($fotos_professores['tmp_name'][$key], "C:/xampp/htdocs/projeto/pages/fotosprofessores/" . $newnaArq . "." . $ext);
                                        $fotoarq = $newnaArq . "." . $ext;
                                        $stmt_professor = $mysqli->prepare("INSERT INTO professores_curso (nome_prof, id_curso, foto_professor) VALUES (?, ?, ?)");
                                        $stmt_professor->bind_param("sss", $professor, $curso_id, $fotoarq);
                                        $stmt_professor->execute();
                                    }
                                }
                            } else {
                                $professor = $professores;
                                if (!empty($professor)) {
                                    $foto_professor = $fotos_professores;

                                    $ext = strtolower(pathinfo($foto_professor['name'], PATHINFO_EXTENSION));
                                    $newnaArq = uniqid();
                                    move_uploaded_file($foto_professor['tmp_name'], "projeto/pages/fotosprofessores/" . $newnaArq . "." . $ext);
                                    $fotoarq = $newnaArq . "." . $ext;
                                    $stmt_professor = $mysqli->prepare("INSERT INTO professores_curso (nome_prof, id_curso, foto_professor) VALUES (?, ?, ?)");
                                    $stmt_professor->bind_param("sss", $professor, $curso_id, $fotoarq);
                                    $stmt_professor->execute();
                                }
                            }
                        }
                    }
                }
            }

                    // Fecha a conexão com o banco de dados
                    $mysqli->close();
            ?>

                
            </body>

            </html>

