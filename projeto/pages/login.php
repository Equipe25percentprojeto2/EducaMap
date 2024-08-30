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
  <div class="container"> <!-- container do formulário-->
    <div class="login-form mx-auto">
      <div class="form_title">
        <img src="../Images/logos/Logo.png" alt="">
        <h2 >Login</h2>
      </div>
      <form> <!-- Formulário de login -->
        
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" name="email" id="email" class="form-control" placeholder="Digite seu email">
        </div>

        <div class="form-group">
          <label for="senha">Senha</label>
          <input type="password" name="pass" id="senha" class="form-control" placeholder="Digite sua senha">
        </div>

        <button type="submit" class="btn btn-primary">Entrar</button>
        <a href="#" class="float-right">Esqueci a senha</a>

      </form>
    </div>

    <div class="register-section mx-auto">
      <div class="register_elements">
        <img src="../Images/logos/Logo2.png" alt="">
        <h2>Bem-vindo!</h2>
        <h3>Ainda não possui uma conta?</h3>
      </div>
      <button class="btn btn-success">Cadastre-se</button>
    </div>
  </div>
<?php
    include('conexao.php');
    $adm = false;
    if(empty(!empty($_POST) && $_POST['email']) || empty($_POST['pass'])){
    //    header('Location: index.php');
        exit();
    } 

    $email = mysqli_real_escape_string($mysqli,$_POST['email']);
    $senha = mysqli_real_escape_string($mysqli,$_POST['pass']);
    $cripto= password_hash($senha, PASSWORD_DEFAULT);
    echo "<b style= 'color:red'>$cripto</b>";
        if ($email=="" || $email==null){
            echo "Email não pode ser vazio.";
            exit();
        }

        if ($senha=="" || $senha==null){
            echo "Senha não pode ser vazia.";
            exit();
        }
        $sql_code = "SELECT emailaluno, pass FROM alunos WHERE email = '$email'";
        
        $result = mysqli_query($mysqli, $sql_code);
        
        $quant = mysqli_num_rows($result);
        
        $sql_exec = mysqli_query($mysqli,$sql_code) or die($mysqli->error);
        
        $user = $sql_exec->fetch_assoc();
        if(password_verify($senha, $user['pass'])){
            if($quant == 1) {
                if(!isset($_SESSION)) {
                    session_start();
                    $_SESSION['email'] = $email;}
                    header("Location: principal.php");
                    exit();

            }} else {
            $adm = true;
        }if($adm==true){
            $sql_code_adm = "SELECT email_inst,pass FROM user_adm WHERE email_inst = '$email' AND pass = '$senha'";
            $result_adm = mysqli_query($mysqli, $sql_code_adm);
            $sql_exec_adm = mysqli_query($mysqli,$sql_code_adm) or die($mysqli->error);
            $user_adm = $sql_exec_adm->fetch_assoc();
            $quant = mysqli_num_rows($result_adm);
            if($quant == 1) {
                if(!isset($_SESSION)) {
                session_start();
                $_SESSION['email_inst'] = $email;}
                header("Location: principalADM.php");
                exit();
        
            } else {
                echo "<b style= 'color:red'>Falha ao logar! E-mail ou senha incorretos</b>";
                exit();
                header("Location: index.html");
                
                
            }}else{
            echo "Falha ao logar, usuário ou email incorretos.";
              }
        


?>
</body>

</html>
