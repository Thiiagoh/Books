<?php
    session_start();
    include_once "conexao_local.php";
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $conectar = mysqli_connect($nome_servidor, $nome_usuario, $senhaBanco, $nome_banco); 
    
    if($conectar->connect_error === TRUE){    
        die("Deu erro na conexão ". $conectar->connect_error);
    }
    $procurar = "SELECT * FROM clientes WHERE email='$email' AND senha='$senha'";
    $resul = $conectar->query($procurar);
    if ($resul->num_rows > 0){
        $sql = mysqli_query($conecta, "select nome from clientes where email='$email'");
        $a = mysqli_fetch_assoc($sql);
        $nome = $a['nome'];
        $_SESSION['nome'] = $nome;
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        header('location:index.php');
    }
    else{
        session_unset();
        session_destroy();
        echo "<script>window.location.href = 'login.html';</script>";
    }
?>