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
      <div class="login-form">
        
        <div class="form_title"> <!--mensagem acima do formulário-->
          <img src="../Images/logos/Logo.png" alt=""> <!--imagem da logo-->
          <h2 >Login</h2>
        </div>

        <form> <!-- Formulário de login -->
          
          <div class="form-group">
            <div class="label-forms">
                <label for="nome">Email</label>
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
          <img src="../Images/logos/Logo2.png" alt="">
          <h2>Bem-vindo!</h2>
          <h3>Ainda não possui uma conta?</h3>
        </div>
        <button class="btn-second" onclick="window.location.href='http:/projeto/pages/cadastro.php'">Cadastre-se</button>
      </div>
    </div>

  </div>

<?php
   include('conexao.php');
   if(empty(!empty($_POST) && $_POST['email']) || empty($_POST['pass'])){
       header('Location: login.php');
       exit();
   } 
   
       $email = mysqli_real_escape_string($mysqli,$_POST['email']);
       $senha = mysqli_real_escape_string($mysqli,$_POST['pass']);
       if ($email=="" || $email==null){
           echo "Email não pode ser vazio.";
           exit();
       }
   
       if ($senha=="" || $senha==null){
           echo "Senha não pode ser vazia.";
           exit();
       }
       $sql_code = "SELECT email, pass FROM alunos WHERE email = '$email'";
       
       $result = mysqli_query($mysqli, $sql_code);
       
       $quant = mysqli_num_rows($result);
       
       $sql_exec = mysqli_query($mysqli,$sql_code) or die($mysqli->error);
       
       $user = $sql_exec->fetch_assoc();
       if(password_verify($senha, $user['pass'])){
           if($quant == 1) {
               if(!isset($_SESSION)) {
                   session_start();
                   $_SESSION['email'] = $email;}
                   header("Location: home.php");
                   exit();
   
           }}

    
?>
</body>

</html>