<!DOCTYPE html>
<html>

<head>
  <title>Login</title>
  <link rel="stylesheet" href="http://localhost/projeto/styles/login.css" alt=""> <!--imagem da logo-->
">
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
                <img src="http://localhost/projeto/Images/Logo2.png" alt="">
                <h2>Bem-vindo!</h2>
                <h3>Já possui uma conta?</h3>
                </div>
                <button class="btn-second" onclick="window.location.href='http:/projeto/pages/empresas/login-emp.php'">Entrar</button>
            </div>
        </div>

        <div class="box"> <!-- caixa da formulário -->

            <div class="register-form">
                <div class="register-header">
                    <div class="register-logo"> <!--mensagem acima do formulário-->
                        <img src="http://localhost/projeto/Images/logos/Logo.png" alt=""> <!--imagem da logo-->
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
                                <label for="nome">Nome da empresa</label>
                                <label class="label-required">(Campo obrigatório)
                            </div>
                            <input type="text" id="nome" name="nome" required>
                        </div>

                        <div class="form-group">
                            <div class="label-forms">
                                <label for="nome">CNPJ</label>
                                <label class="label-required">(Campo obrigatório)
                            </div>
                            <input type="text" id="cpf" name="cpf" required maxlength="14" oninput="formatCPF(this)" required>
                        </div>

                        <div class="form-item">
                            <label for="nascimento">Endereço</label>
                            <input type="text" id="endereco" name="nascimento" required>
                        </div>

                        <div class="form-item">
                            <label for="nascimento">Telefone</label>
                            <input type="text" id="tel" name="nascimento" required>
                        </div>

                        <div class="form-item">
                            <label for="nascimento">Email</label>
                            <input type="text" id="email" name="nascimento" required>
                        </div>

                        <div class="form-item">
                            <label for="nascimento">Confirmar senha</label>
                            <input type="text" id="password" name="nascimento" required>
                        </div>
                        
                    </div>

                    <button type="submit" class="btn-next" style="margin-top: 20px;">
                        <a class="final-link" href="http://localhost/projeto/pages/login.php">Finalizar</a>
                    </button>

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