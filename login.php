<?php
    require_once("funcoes.php");

    $usuario = $_POST['user'] ?? "";
    $senha = $_POST['Senha'] ?? "";
    verificar($usuario, $senha);
?>