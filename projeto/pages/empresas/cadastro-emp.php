<!DOCTYPE html>
<html>

<head>
  <title>Login Empresas</title>
  <link rel="stylesheet" href="http://localhost/projeto/styles/login.css" alt=""> <!--imagem da logo-->
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
                <button class="btn-second" onclick="window.location.href='http:/projeto/pages/empresas/login-emp.html'">Entrar</button>
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

                <form id="registrationForm" method="post">

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
                            <input type="text" id="cpf" name="cnpj">
                        </div>

                        <div class="form-item">
                            <label for="nascimento">Endereço</label>
                            <input type="text" id="endereco" name="endereco" required>
                        </div>

                        <div class="form-item">
                            <label for="nascimento">Telefone</label>
                            <input type="text" id="tel" name="telefone" required>
                        </div>

                        <div class="form-item">
                            <label for="nascimento">Email</label>
                            <input type="text" id="email" name="email" required>
                        </div>

                        <div class="form-item">
                            <label for="nascimento">Senha</label>
                            <input type="text" id="password" name="pass" required>
                        </div>
                        
                    </div>

                    <button type="submit" name="submit" class="btn-next" style="margin-top: 20px;">
                    <a class="final-link" href="http://localhost/projeto/pages/empresas/login-emp.html">Finalizar</a>
                    </button>

                </form>
            </div>
        </div>
    </div>    

    <script src="../scripts/cadastro.js"></script>

    
    <?php
    include('conexao.php');
    
    if (isset($_POST['submit'])) {
        $nome = $_POST['nome'];
        $cnpj = $_POST['cnpj'];
        $endereco = $_POST['endereco'];
        $telefone = $_POST['telefone'];
        $email = $_POST['email'];
        $senha = $_POST['pass'];
        $stmt = $mysqli->prepare("SELECT COUNT(*) FROM empresas WHERE cnpj = ?");
        $stmt->bind_param("s", $cnpj);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_row();

        if ($row[0] > 0) {
            echo "<b style='color:red'>Essa empresa já existe.</b>";
            exit();
        }
        // Verifica se os campos estão vazios
        if (empty($nome) || empty($cnpj) || empty($endereco) || empty($telefone) || empty($email) || empty($senha)) {
            echo "Preencha todos os campos obrigatórios.";
            exit();
        }

        // Verifica se o CNPJ é válido
        

        // Verifica se o e-mail é válido
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "E-mail inválido.";
            exit();
        }

        // Cria uma senha segura
        $senha_segura = password_hash($senha, PASSWORD_DEFAULT);

        // Insere os dados no banco de dados
        $query = "INSERT INTO empresas (nomempresa, cnpj, enderecoempresa, telefoneempresa, emailempresa, pass) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $mysqli->prepare($query);
        $stmt->bind_param("ssssss", $nome, $cnpj, $endereco, $telefone, $email, $senha_segura);
        $stmt->execute();

        // Verifica se os dados foram inseridos com sucesso
        if ($stmt->affected_rows > 0) {
            echo "Cadastro realizado com sucesso!";
        } else {
            echo "Erro ao realizar cadastro.";
        }
    }

    
?>
</body>

</html>