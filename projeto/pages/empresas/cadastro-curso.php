<!DOCTYPE html>
<html lang="pt_br">

<head>

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

    <div class="sidebar-emp-container"></div>

    <div class="form-container">
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
                            <input type="file" id="banner-input" class="file-input">
                            <span id="file-name" class="file-name"></span>
                        </div>
                    </div>
                </div>

                <div class="input-item">
                    <label for="descricao-curso">Descrição <span class="required">(campo obrigatório)</span></label>
                    <textarea id="descricao-curso" rows="4" placeholder="Digite a descrição do curso"></textarea>
                </div>
            </div>

            <!-- Modalidade, Valor e Carga Horária -->
            <div class="input-row">
                <!-- Dropdown Modalidade -->
                <div class="form-group">
                    <label for="modalidade">Modalidade <span class="required">(campo obrigatório)</span></label>
                    <select id="modalidade" class="form-control">
                        <option value="presencial">Presencial</option>
                        <option value="online">Online</option>
                        <option value="hibrido">Híbrido</option>
                    </select>
                </div>

                <!-- Dropdown Valor -->
                <div class="form-group">
                    <label for="valor">Valor <span class="required">(campo obrigatório)</span></label>
                    <select id="valor" class="form-control">
                        <option value="gratuito">Gratuito</option>
                        <option value="pago">Pago</option>
                    </select>
                </div>

                <!-- Carga Horária -->
                <div class="form-group">
                    <label for="carga-horaria">Carga Horária <span class="required">(campo obrigatório)</span></label>
                    <input type="text" id="carga-horaria" class="form-control" placeholder="Ex: 40 horas">
                </div>
            </div>

            <!-- Data de Início, Hora de Início e Áreas -->
            <div class="input-row">
                <!-- Data de Início -->
                <div class="form-group">
                    <label for="data-inicio">Data de Início <span class="required">(campo obrigatório)</span></label>
                    <input type="date" id="data-inicio" class="form-control">
                </div>

                <!-- Hora de Início -->
                <div class="form-group">
                    <label for="hora-inicio">Hora de Início <span class="required">(campo obrigatório)</span></label>
                    <input type="time" id="hora-inicio" class="form-control">
                </div>

                <!-- Dropdown Áreas -->
                <div class="form-group">
                    <label for="areas">Áreas <span class="required">(campo obrigatório)</span></label>
                    <select id="areas" class="form-control">
                        <option value="informatica">Informática</option>
                        <option value="seguranca">Segurança</option>
                        <option value="design">Design</option>
                        <option value="desenvolvimento">Desenvolvimento</option>
                        <option value="analise">Análise</option>
                        <option value="gestao">Gestão</option>
                    </select>
                </div>
            </div>

            <div class="input-row">
                <div class="form-group">
                    <label for="endereco-completo">Endereço Completo <span class="required">(campo obrigatório)</span></label>
                    <input type="text" id="endereco-completo" class="form-control" placeholder="Insira o endereço completo">
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
                <textarea id="requisitos" class="scrollable-input" placeholder="Insira os requisitos sobre o curso"></textarea>
            </div>

            <div class="form-group">
                <label for="conteudo">Conteúdo <span class="required">(campo obrigatório)</span></label>
                <textarea id="conteudo" class="scrollable-input" placeholder="Insira o conteúdo do curso"></textarea>
            </div>

            <label class="label-professores" for="professores">Professores</label>
            <div class="professor-input-group">

              <div class="inputs-professor-container">
              <div class="inputs-professor">
                <div class="input-foto-professor">
                    <label for="foto-professor">Foto do Professor</label>
                    <div class="file-input-circle">
                    <input type="file" name="foto-professor" class="file-input" accept="image/*" onchange="previewImage(event, this)">
                    <span class="plus-sign">+</span>
                    <img class="foto-preview" alt="Pré-visualização da foto" style="display: none;">
                    </div>
                </div>

                <div class="input-nome-professor">
                    <label for="nome-professor">Nome do Professor</label>
                    <div class="input-container">
                    <input type="text" name="nome-professor" placeholder="Digite o nome do professor" class="form-control" style="width: 300px;">
                    <button type="button" class="btn-adicionar" onclick="adicionarNovoGrupoProfessor()">Adicionar Professor</button>
                    </div>
                </div>
                </div>

                <!-- Container onde os novos grupos serão adicionados -->
                <div id="container-professores"></div>
         
            </div>

            <!-- Botões Cancelar e Próximo -->
            <div class="buttons">
                <button class="btn btn-cancel" id="btn-voltar">Voltar</button>
                <a href="http://localhost/projeto/pages/empresas/campanhas.php" class="btn btn-next" id="btn-submit">Enviar</a>
            </div>
        </div>


    </div>

    <script src="http://localhost/projeto/scripts/sidebar-emp.js"></script>
    <script src="http://localhost/projeto/scripts/cadastro-curso.js"></script>

</body>

</html>
