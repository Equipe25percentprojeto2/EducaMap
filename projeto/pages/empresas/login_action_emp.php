<?php
include("conexao.php");
// Verifica se os campos estão vazios
if (empty($_POST['email']) || empty($_POST['pass'])) {
    $erro = "Preencha todos os campos obrigatórios.";
    header('Location: pages/empresas/login-emp.php?erro=' . urlencode($erro));
    exit();
}

// Valida o input do usuário
$email = $_POST['email'];
$senha = $_POST['pass'];

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $erro = "Formato de email inválido!";
    header('Location: pages/empresas/login-emp.php?erro=' . urlencode($erro));
    exit();
}

// Prepara e executa a query
$stmt = $mysqli->prepare("SELECT nomempresa, emailempresa, cnpj, pass FROM empresas WHERE emailempresa = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows == 1) {
    $user = $result->fetch_assoc();
    if (password_verify($senha, $user['pass'])) {
        $nome = $user['nomempresa'];
        $cnpj = $user['cnpj'];
        // Verifica se a sessão já está iniciada
        if (!isset($_SESSION)) {
            session_start();
        }
        $_SESSION['usuario_logado'] = array('nomempresa' => $nome, 'cnpj' => $cnpj);
        header("Location: campanhas.php");
        exit();
    } else {
        $erro = "Senha incorreta.";
        header('Location: pages/empresas/login-emp.php?erro=' . urlencode($erro));
        exit();
    }
} else {
    $erro = "Usuário não encontrado.";
    header('Location: pages/empresas/login-emp.php?erro=' . urlencode($erro));
    exit();
}
?>