<?php
    include_once "conexao_local.php";
    $email = $_POST['email'];
    $nome_livro = $_POST['nome_livro'];
    $avaliacao = $_POST['avaliacao'];

    $conecta = mysqli_connect($nome_servidor, $nome_usuario, $senhaBanco, $nome_banco);
    $rem = "DELETE FROM avaliacao WHERE clientes_email='$email' AND livros_id='$nome_livro'";
    $conecta->query($rem);
    $send = "INSERT INTO avaliacao (avaliacao, clientes_email, livros_id) VALUES('$avaliacao','$email','$nome_livro')";
    $conecta->query($send);
    header('location:livros.php');
?>