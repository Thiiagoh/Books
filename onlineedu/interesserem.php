<?php
    include_once "conexao_local.php";
    $rem = $_POST['remover'];
    $conecta = mysqli_connect($nome_servidor, $nome_usuario, $senhaBanco, $nome_banco); 
    $conecta->query($rem);
    unset($rem);
    header('location:interesse.php');
?>