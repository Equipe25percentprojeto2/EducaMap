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
                <button class="btn-second" onclick="window.location.href='http:/projeto/pages/login.php'">Entrar</button>
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
                            <div class="label-forms">
                                <label for="nome">Nome</label>
                                <label class="label-required">(Campo obrigatório)
                            </div>
                            <input type="text" id="nome" name="nome" required>
                        </div>

                        <div class="form-group">
                            <div class="label-forms">
                                <label for="nome">CPF</label>
                                <label class="label-required">(Campo obrigatório)
                            </div>
                            <input type="text" id="cpf" name="cpf" required maxlength="14" oninput="formatCPF(this)" required>
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

                        <button type="button" class="btn-next" onclick="nextSection(2)">Avançar</button>
                    </div>

                    <!-- Seção 2 -->
                    <div class="form-section" id="section2" style="display: none;">
                        <div class="form-grid">
                            <div class="form-item">
                                <label for="nome">Estado</label>
                                <input type="text" id="estado" name="estado" required>
                            </div>

                            <div class="form-item">
                                <label for="nome">Cidade</label>
                                <input type="text" id="cidade" name="cidade" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="label-forms">
                                <label for="nome">Localização</label>
                                <label class="label-required">(Campo obrigatório)
                            </div>
                            <input type="text" id="localizacao" name="localizacao" required>
                        </div>

                        <div class="button-container">
                            <button type="button" class="btn-prev" onclick="previousSection(1)">Voltar</button>
                            <button type="button" class="btn-next" onclick="nextSection(3)">Avançar</button>
                        </div>

                    </div>

                    <!-- Seção 3 -->
                    <div class="form-section" id="section3" style="display: none;">
                        <p class="main-p">Quais áreas você tem interesse em aprender mais?</p>
                        <p class="sec-p">Selecione no mínimo 3 para começar</h6>

                        <div class="checkbox-group">
                            <label class="custom-checkbox">Análise de Dados
                                <input type="checkbox" name="interesse" value="analise-de-dados">
                                <span class="checkmark"></span>
                            </label>

                            <label class="custom-checkbox">Design Digital
                                <input type="checkbox" name="interesse" value="design-digital">
                                <span class="checkmark"></span>
                            </label>

                            <label class="custom-checkbox">Desenvolvimento de sistemas
                                <input type="checkbox" name="interesse" value="desenvolvimento-de-sistemas">
                                <span class="checkmark"></span>
                            </label>

                            <label class="custom-checkbox">Segurança da informação
                                <input type="checkbox" name="interesse" value="seguranca-da-informacao">
                                <span class="checkmark"></span>
                            </label>

                            <label class="custom-checkbox">Gestão de projetos
                                <input type="checkbox" name="interesse" value="gestao-de-projetos">
                                <span class="checkmark"></span>
                            </label>

                            <label class="custom-checkbox">Informática Básica
                                <input type="checkbox" name="interesse" value="informatica-basica">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        
                        <div class="button-container">
                            <button type="button" class="btn-prev" onclick="previousSection(2)">Voltar</button>
                            <button type="button" class="btn-next" onclick="nextSection(4)">Avançar</button>
                        </div>

                    </div>

                    <!-- Seção 4 -->
                    <div class="form-section" id="section4" style="display: none;">
                        <div class="form-group">
                            <div class="label-forms">
                                <label for="nome">Email</label>
                                <label class="label-required">(Campo obrigatório)
                            </div>
                            <input type="email" id="email" name="email" required>
                        </div>

                        <div class="form-grid">
                            <div class="form-item">
                                <label for="senha">Senha</label>
                                <input type="password" id="senha" name="senha" required>
                            </div>

                            <div class="form-group">
                                <label for="confirmSenha">Confirmar Senha</label>
                                <input type="password" id="confirmSenha" name="confirmSenha" required>
                            </div>
                        </div>

                        <div class="button-container">
                            <button type="button" class="btn-prev" onclick="previousSection(3)">Voltar</button>
                            <button type="submit" class="btn-next">
                                <a class="final-link" href="http://localhost/projeto/pages/login.php">Finalizar</a>
                            </button>
                        </div>

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