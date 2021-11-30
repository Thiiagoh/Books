<?php
    include_once "conexao_local.php";
    $logado = $_POST['email'];
    $nome_livro = $_POST['nome_livro'];

    $conecta = mysqli_connect($nome_servidor, $nome_usuario, $senhaBanco, $nome_banco);
    $del = "DELETE FROM ler_mais_tarde WHERE livros_id='$nome_livro' AND clientes_email='$logado'";
    $mandar = "INSERT INTO ler_mais_tarde(clientes_email, livros_id) VALUES('$logado', '$nome_livro')";
    $conecta->query($del);
    $conecta->query($mandar);
    unset($del);
    unset($mandar);
    header('location:livros.php');
?>