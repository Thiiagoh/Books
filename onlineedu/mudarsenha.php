<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Página de mudança de senha</title>
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
</head>
<body>
    
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
                <span class="login100-form-title p-b-33">
                    <?php
                        //Receber as informações via formulario
                        $email = $_POST['email'];
                        $senha = $_POST['senha'];
                        $senha2 = $_POST['comsenha'];
                        //Conectar no mysql
                        include_once "conexao_local.php";
                        $conecta = mysqli_connect($nome_servidor, $nome_usuario, $senhaBanco, $nome_banco); 
                        //Pegar Dado do Banco
                        $tenta_achar = "SELECT * FROM clientes WHERE email='$email' AND senha='$senha'";
                        $resultados = $conecta->query($tenta_achar);
                        if ($resultados->num_rows <= 0){
                            echo 'Senha errada ou o ususário não existe!<br><br>';
                        }else{
                            $row = $resultado = $conecta->query($tenta_achar);
                            $row = $resultado->fetch_assoc();
                            $user = $row['senha'];
                            //Verificar se a senha do banco é igual ao que o usuário informou
                            if ($user=$row['senha'] == $senha){
                                $sql = "UPDATE clientes SET senha='$senha2' WHERE email='$email'";
                                if ($conecta->query($sql) === TRUE)
                                    echo "Senha alterada com sucesso!<br><br>";
                                else
                                    echo "Erro na atualização do registro: " . $conecta->error."<br><br>";
                            }else
                                echo 'As senhas não correspondem';
                        }
                        $conecta->close();
                    ?>
                </span>
                    <a href="desconectar.php"><button class="login100-form-btn">Voltar</button></a>
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






