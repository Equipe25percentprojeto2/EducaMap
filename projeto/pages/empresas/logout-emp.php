<?php
session_start();
session_destroy();
header('Location: http://localhost/projeto/pages/empresas/login-emp.html'); // ou qualquer outra página que você queira redirecionar
exit;
?>