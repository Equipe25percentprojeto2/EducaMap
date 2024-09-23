<?php
session_start(); // Start the session first

if(!isset($_SESSION['cpf'] && !isset($_SESSION['nome'])){
    die("Logue em sua conta para acessar esta página. <p><a href=\"login.html\"> Entrar</a></p>");
}
?>