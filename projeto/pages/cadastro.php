<!DOCTYPE html>
<html>

<head>
  <title>Login</title>
  <link rel="stylesheet" href="../styles/login.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
  </style>
</head>

<body>

    <div class="container"> <!-- container da página-->
        <div class="box"> <!-- caixa da formulário -->
            <div class="register-section">
                <div class="register_elements">
                <img src="../Images/logos/Logo2.png" alt="">
                <h2>Bem-vindo!</h2>
                <h3>Já possui uma conta?</h3>
                </div>
                <button class="btn btn-success" onclick="window.location.href='http:/projeto/pages/login.php'">Entrar</button>
            </div>
        </div>

        <div class="box"> <!-- caixa da formulário -->

            <div class="register-form">
                <div class="register-header">
                    <div class="register-logo"> <!--mensagem acima do formulário-->
                        <img src="../Images/logos/Logo.png" alt=""> <!--imagem da logo-->
                    </div>

                    <div class="progress-container">
                        <div class="progress-box active" id="box1"></div>
                        <div class="progress-box" id="box2"></div>
                        <div class="progress-box" id="box3"></div>
                        <div class="progress-box" id="box4"></div>
                    </div>

                    <div class="register-title">
                        <p>Antes de começar, só precisamos de algumas informações!</p>
                    </div>
                </div>

                <form id="registrationForm">

                    <!-- Seção 1 -->
                    <div class="form-section" id="section1">
                        <div class="form-group">
                            <label for="nome">Nome:</label>
                            <input type="text" id="nome" name="nome" required>
                        </div>

                        <div class="form-group">
                            <label for="cpf">CPF:</label>
                            <input type="text" id="cpf" name="cpf" required maxlength="14" oninput="formatCPF(this)">
                        </div>

                        <div class="form-grid">
                            <div class="form-item">
                                <label for="nascimento">Data de Nascimento:</label>
                                <input type="date" id="nascimento" name="nascimento" required>
                            </div>

                            <div class="form-item">
                                <label for="genero">Gênero:</label>
                                <select id="genero" name="genero" required>
                                    <option value="">Selecione</option>
                                    <option value="masculino">Masculino</option>
                                    <option value="feminino">Feminino</option>
                                    <option value="outro">Outro</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-grid">
                            <div class="form-item">
                                <label for="ocupacao">Ocupação:</label>
                                <input type="text" id="ocupacao" name="ocupacao" required>
                            </div>

                            <div class="form-group">
                                <label for="escolaridade">Escolaridade:</label>
                                <select id="escolaridade" name="escolaridade" required>
                                    <option value="">Selecione</option>
                                    <option value="fundamental">Ensino Fundamental</option>
                                    <option value="medio">Ensino Médio</option>
                                    <option value="superior">Ensino Superior</option>
                                    <option value="pos-graduacao">Pós-graduação</option>
                                </select>
                            </div>
                        </div>

                        <button type="button" onclick="nextSection(2)">Avançar</button>
                    </div>

                    <!-- Seção 2 -->
                    <div class="form-section" id="section2" style="display: none;">
                        <div class="form-grid">
                            <div class="form-item">
                                <label for="estado">Estado:</label>
                                <input type="text" id="estado" name="estado" required>
                            </div>

                            <div class="form-item">
                                <label for="cidade">Cidade:</label>
                                <input type="text" id="cidade" name="cidade" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="localizacao">Localização:</label>
                            <input type="text" id="localizacao" name="localizacao" required>
                        </div>

                        <button type="button" onclick="previousSection(1)">Voltar</button>
                        <button type="button" onclick="nextSection(3)">Avançar</button>
                    </div>

                    <!-- Seção 3 -->
                    <div class="form-section" id="section3" style="display: none;">
                        <p>Selecione suas áreas de interesse:</p>
                        <div class="checkbox-group">
                            <label>
                                <input type="checkbox" name="interesse" value="analise-de-dados">
                                Análise de Dados
                            </label>

                            <label>
                                <input type="checkbox" name="interesse" value="design-digital">
                                Design Digital
                            </label>

                            <label>
                                <input type="checkbox" name="interesse" value="desenvolvimento-de-sistemas">
                                Desenvolvimento de Sistemas
                            </label>

                            <label>
                                <input type="checkbox" name="interesse" value="seguranca-da-informacao">
                                Segurança da Informação
                            </label>

                            <label>
                                <input type="checkbox" name="interesse" value="gestao-de-projetos-de-ti">
                                Gestão de Projetos de TI
                            </label>

                            <label>
                                <input type="checkbox" name="interesse" value="informatica-basica">
                                Informática Básica
                            </label>
                        </div>

                        <button type="button" onclick="previousSection(2)">Voltar</button>
                        <button type="button" onclick="nextSection(4)">Avançar</button>
                    </div>

                    <!-- Seção 4 -->
                    <div class="form-section" id="section4" style="display: none;">
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email" required>
                        </div>

                        <div class="form-grid">
                            <div class="form-item">
                                <label for="senha">Senha:</label>
                                <input type="password" id="senha" name="senha" required>
                            </div>

                            <div class="form-group">
                                <label for="confirmSenha">Confirmar Senha:</label>
                                <input type="password" id="confirmSenha" name="confirmSenha" required>
                            </div>
                        </div>

                        <button type="button" onclick="previousSection(3)">Voltar</button>
                        <button type="submit">Finalizar</button>
                    </div>

                </form>
            </div>
        </div>
    </div>    

    <script src="../scripts/cadastro.js"></script>

    <?php
    // include('conexao.php');
        if (isset($_POST['salvar']) && isset($_POST['email']) && isset($_POST['pass'])){
        
        $email= mysqli_real_escape_string($mysqli,$_POST['email']);
        $senha= mysqli_real_escape_string($mysqli,$_POST['pass']);
        $cripto= password_hash($senha, PASSWORD_DEFAULT);
    
        //VALIDAÇÃO DE CAMPO VAZIO
        if ($matri=="" || $matri==null){
            echo "'Úsuario não pode ser vazio.";
            exit();
        }
    
        if ($email=="" || $email==null){
            echo "Email não pode ser vazio.";
            exit();
        }
    
        if ($senha=="" || $senha==null){
            echo "Senha não pode ser vazia.";
            exit();
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<b style='color:red'>Formato de email inválido!</b>";
            exit();
        }

        $result = $mysqli->query("SELECT COUNT(*) FROM user_com WHERE matri = '{$matri}'");
        $result2 = $mysqli->query("SELECT COUNT(*) FROM user_com WHERE email = '{$email}'");
        $row = $result->fetch_row();
        $row2 = $result2->fetch_row();

        if ($row[0] > 0 || $row2[0] > 0) {
            echo "<b style='color:red'>Esse usuário já existe.</b>";
        } else {
            $sql = $mysqli->prepare("INSERT INTO user_com(matri,email,pass) VALUES ('$matri','$email','$cripto')");
            $sql->execute();
            echo "<b style='color:green'>Úsuario inserido com sucesso!</b>";
        }

        }
    ?>
</body>

</html>