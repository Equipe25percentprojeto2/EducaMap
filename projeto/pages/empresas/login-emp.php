<!DOCTYPE html>
<html>

<head>
  <title>Login</title>
  <link rel="stylesheet" href="http://localhost/projeto/styles/login.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
  </style>
</head>

<body>

  <div class="container"> <!-- container da página-->
    <div class="box"> <!-- caixa da formulário -->

      <div class="login-form">
        
        <div class="form_title"> <!--mensagem acima do formulário-->
            <div class="emp-header">
                <img src="http://localhost/projeto/Images/logos/logoempresas.png" alt=""> <!--imagem da logo-->
                <h4>Que bom te ver por aqui!</h4>
            </div>

            <h2 >Login</h2>
        </div>

        <form> <!-- Formulário de login -->
          
          <div class="form-group">
            <div class="label-forms">
                <label for="nome">CNPJ</label>
                <label class="label-required">(Campo obrigatório)
            </div>
            <input type="email" name="email" id="email" class="form-control" placeholder="Digite seu email">
          </div>

          <div class="form-group">
            <div class="label-forms">
              <label for="nome">Senha</label>
              <label class="label-required">(Campo obrigatório)
            </div>
            <input type="password" name="pass" id="senha" class="form-control" placeholder="Digite sua senha">
          </div>

          <button type="submit" class="btn-first">Entrar</button>
          <a href="#" class="float-right">Esqueci a senha</a>

        </form>

      </div>
    </div>

    <div class="box">
      <div class="register-section">
        <div class="register_elements">
          <img src="http://localhost/projeto/Images/logos/logo2.png" alt="">
          <h2>Bem-vindo!</h2>
          <h3>Ainda não possui uma conta?</h3>
        </div>
        <button class="btn-second" onclick="window.location.href='http:/projeto/pages/empresas/cadastro-emp.php'">Cadastre-se</button>
      </div>
    </div>

  </div>

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