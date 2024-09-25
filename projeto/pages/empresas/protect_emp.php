<?php
session_start(); // Inicia a sessão

if (!isset($_SESSION['usuario_logado']) || !isset($_SESSION['usuario_logado']['nomempresa']) || !isset($_SESSION['usuario_logado']['cnpj'])) {
    die("Logue em sua conta para acessar esta página. <p><a href=\"login-emp.html\"> Entrar</a></p>");
}
?>