<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Página | Excluir Conta</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <?php 
            session_start();
            include_once "conexao_local.php";
            if((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true)){
                session_unset();
                echo "<script>window.location.href = 'index.php';</script>";
            }
            $logado = $_SESSION['email'];
        ?>
</head>
<body>
    
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
                <span class="login100-form-title p-b-33">Informação</span>
                <?php
                    //Receber as informações via formulario
                    $senha = $_POST['senha'];
                    $senhacon = $_POST['senhacon'];

                    //Conectar no mysql
                    $conecta = mysqli_connect($nome_servidor, $nome_usuario, $senhaBanco, $nome_banco); 
                    //Pegar Dado do Banco
                    $tenta_achar = "SELECT * FROM clientes WHERE email='$logado' AND senha='$senha'";
                    $resultados = $conecta->query($tenta_achar);
                    if ($resultados->num_rows <= 0){
                        echo 'Nenhum usuário encontrado!<br><br>';
                        echo '<a href="excluirConta.php"><button class="login100-form-btn">Voltar</button></a>';
                    }else{
                        $row = $resultados = $conecta->query($tenta_achar);
                        $row = $resultados->fetch_assoc();
                        $user = $row['senha'];
                        //Verificar se a senha do banco é igual ao que o usuário informou
                        if ($user=$row['senha'] == $senha AND $senha == $senhacon){
                            $sqlrem = "DELETE FROM avaliacao WHERE clientes_email='$logado'";
                            $sql = "DELETE FROM ler_mais_tarde WHERE clientes_email='$logado'";
                            $sql2 = "DELETE FROM clientes WHERE email='$logado'";
                            if ($conecta->query($sqlrem) AND $conecta->query($sql) AND $conecta->query($sql2) === TRUE ){
                                echo "Usuário apagado com sucesso!<br><br>";
                                echo '<a href="desconectar.php"><button class="login100-form-btn">Voltar</button></a>';}
                            else{
                                echo "Erro ao apagar o usuario: " . $conecta->error."<br><br>";
                                echo '<a href="excluirConta.php"><button class="login100-form-btn">Voltar</button></a>';
                            }
                        }else{
                            echo 'As senhas não correspondem!<br><br>';
                            echo '<a href="excluirConta.php"><button class="login100-form-btn">Voltar</button></a>';
                        }
                    }
                    $conecta->close();
                ?>
            </div>
        </div>
    </div>
    
<!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
    <script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
    <script src="js/main.js"></script>

</body>
</html>