<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
     <title> Página | Excluir Conta </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/gijgo.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">
    
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">

</head>
<body>
    <!--? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/loder.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
        <div class="header-area">
            <div class="main-header">
                <div class="header-bottom">
                    <!-- Logo -->
                    <div class="logo d-none d-lg-block">
                        <a href="index.php"><img src="assets/img/logo/logo.png" alt=""></a>
                    </div>
                    <div class="container">
                        <div class="menu-wrapper">
                            <!-- Logo -->
                            <div class="logo logo2 d-block d-lg-none">
                                <a href="index.php"><img src="assets/img/logo/logo.png" alt=""></a>
                            </div>
                            <!-- Main-menu -->
                            <div class="main-menu d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">                                                                
                                        <li><a href="index.php">Início</a></li>
                                        <li><a href="livros.php">Livros</a></li>
                                        <li><a href="escritores.php">Escritores</a></li>
                                        <li><a href="premiados.php">Premiados</a></li>
                                        <li><a href="sobre.php">Sobre</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="header-info-right">
                                    <div class="main-menu d-none d-lg-block">
                                        <?php
                                            session_start();
                                            include_once "conexao_local.php";
                                            if((!isset($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true)){
                                                session_unset();
                                                echo '  <ul>    
                                                            <li><a href="login.html"><i class="ti-user"></i> Entrar</a></li>
                                                            <li><a href="criar.html"><i class="ti-lock"></i> Registrar</a></li>
                                                        </ul>';
                                            }else{
                                                $logado = $_SESSION['nome'];
                                                $email = $_SESSION['email'];
                                                echo '  <ul>
                                                            <div class="dropdown" style="cursor: pointer;">
                                                                <li class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ti-user"></i> '.$logado.'</li>
                                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                    <a class="dropdown-item" href="interesse.php">Lista de Desejo</a>
                                                                    <a class="dropdown-item" href="excluirconta.php">Excluir conta</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a class="dropdown-item" href="desconectar.php">Desconectar</a>
                                                                </div>
                                                            </div>
                                                        </ul>';
                                            }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
    <main>
        <!--? Hero Start -->
        <?php
            if((!isset($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true)){
                echo '  <div class="slider-area ">
                            <div class="slider-height2 d-flex align-items-center">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="hero-cap hero-cap2 text-center">
                                                <h2>Crie uma conta para ter acesso!</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>';
            }else{
                echo '  <div class="slider-area ">
                            <div class="slider-height2 d-flex align-items-center">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="hero-cap hero-cap2 text-center">
                                                <h2>Excluir Conta</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>';

                echo '<div class="limiter">
                        <div class="container-login100">
                            <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
                                <form class="login100-form validate-form" action="excluir.php" method="POST">
                                    <span class="login100-form-title p-b-33">
                                        Excluir Conta
                                    </span>

                                    <div class="wrap-input100 validate-input" data-validate = "É necessário um email válido: ex@abc.xyz">
                                        <input class="input100" type="text" name="email" placeholder="'.$email.'" disabled>
                                        <span class="focus-input100-1"></span>
                                        <span class="focus-input100-2"></span>
                                    </div>

                                    <div class="wrap-input100 rs1 validate-input" data-validate="É necessário uma senha">
                                        <input class="input100" type="password" name="senha" placeholder="Senha">
                                        <span class="focus-input100-1"></span>
                                        <span class="focus-input100-2"></span>
                                    </div>

                                    <div class="wrap-input100 rs1 validate-input" data-validate="É necessário confirmar a senha">
                                        <input class="input100" type="password" name="senhacon" placeholder="Confirmar senha">
                                        <span class="focus-input100-1"></span>
                                        <span class="focus-input100-2"></span>
                                    </div>

                                    <div class="container-login100-form-btn m-t-20">
                                        <button class="login100-form-btn">
                                            Excluir 
                                        </button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>';
            }
        ?>
        <!-- Team Ara End -->
    </main>
    
    <!-- Scroll Up -->
    <div id="back-top" >
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    <!-- JS here -->

    <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="./assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="./assets/js/owl.carousel.min.js"></script>
    <script src="./assets/js/slick.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="./assets/js/wow.min.js"></script>
    <script src="./assets/js/animated.headline.js"></script>
    <script src="./assets/js/jquery.magnific-popup.js"></script>

    <!-- Date Picker -->
    <script src="./assets/js/gijgo.min.js"></script>
    <!-- Nice-select, sticky -->
    <script src="./assets/js/jquery.nice-select.min.js"></script>
    <script src="./assets/js/jquery.sticky.js"></script>
    
    <!-- counter , waypoint -->
    <script src="./assets/js/jquery.counterup.min.js"></script>
    <script src="./assets/js/waypoints.min.js"></script>
    
    <!-- contact js -->
    <script src="./assets/js/contact.js"></script>
    <script src="./assets/js/jquery.form.js"></script>
    <script src="./assets/js/jquery.validate.min.js"></script>
    <script src="./assets/js/mail-script.js"></script>
    <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
    
    <!-- Jquery Plugins, main Jquery -->    
    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/main.js"></script>
    
    </body>
</html>