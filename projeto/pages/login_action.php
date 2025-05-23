<?php
    include('conexao.php');

    if (empty($_POST['email']) || empty($_POST['pass'])) {
     //   header('Location: login.html');
        exit();
    }

    $email = $_POST['email'];
    $senha = $_POST['pass'];

    // Validate user input
    if (empty($email) || empty($senha)) {
        echo "Preencha todos os campos obrigatórios.";
        exit();
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Formato de email inválido!";
        exit();
    }

    // Prepare and execute the query
    $stmt = $mysqli->prepare("SELECT nome, emailaluno, pass, cpf FROM alunos WHERE emailaluno = ?");    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();
        if (password_verify($senha, $user['pass'])) {
            $nome = $user['nome'];
            $cpf = $user['cpf'];
            session_start(); // Inicia a sessão
            $_SESSION['usuario_logado'] = array('nome' => $nome, 'cpf' => $cpf); // Armazena os dados do usuário na sessão
            header("Location: home.php");
            exit();
        } else {
            echo "Senha incorreta.";
        }
    } else {
        echo "Usuário não encontrado.";
    }
?>