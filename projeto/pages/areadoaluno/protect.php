<?php
session_start(); // Inicia a sessão

if (!isset($_SESSION['usuario_logado']) || !isset($_SESSION['usuario_logado']['nome']) || !isset($_SESSION['usuario_logado']['cpf'])) {
    die("Logue em sua conta para acessar esta página. <p><a href=\"login.html\"> Entrar</a></p>");
}
?>