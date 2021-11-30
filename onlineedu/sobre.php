<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
     <title> Página | Sobre </title>
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
    <?php
        session_start();
        include_once "conexao_local.php";
        if((!isset($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true)){
            session_unset();
        }else{
            $logado = $_SESSION['nome'];
        }
    ?>
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
                <div class="header-bottom header-sticky">
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
                                        <li><a href="#" style="color: blue;">Sobre</a></li>
                                        <?php
                                            //session_start();
                                            //include_once "conexao_local.php";
                                            if((!isset($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true)){
                                                echo '<li class="d-block d-lg-none"><a href="login.html">Acesso a conta</a></li>';
                                            }else{
                                                //$logado = $_SESSION['nome'];
                                                echo '<li class="d-block d-lg-none"><a href="interesse.php">Lista de Desejo</a></li>
                                                      <li class="d-block d-lg-none"><a href="excluirconta.php">Excluir conta</a></li>
                                                      <li class="d-block d-lg-none"><a href="desconectar.php">Desconectar</a></li>';
                                            }
                                        ?>
                                    </ul>
                                </nav>
                            </div>
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="header-info-right">
                                    <div class="main-menu d-none d-lg-block">
                                        <?php
                                            //session_start();
                                            //include_once "conexao_local.php";
                                            if((!isset($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true)){
                                                session_unset();
                                                echo '  <ul>    
                                                            <li><a href="login.html"><i class="ti-user"></i> Entrar</a></li>
                                                            <li><a href="criar.html"><i class="ti-lock"></i> Registrar</a></li>
                                                        </ul>';
                                            }else{
                                                $logado = $_SESSION['nome'];
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
        <!-- SEARCH
                            <div class="header-search d-none d-lg-block">
                                <form action="#" class="form-box f-right ">
                                    <input type="text" name="Search" placeholder="Procurar Livros">
                                    <div class="search-icon">
                                        <i class="fas fa-search special-tag"></i>
                                    </div>
                                </form>
                            </div>
        -->
        <!-- Header End -->
    </header>
    <main>
        <!--? Hero Start -->
        <div class="slider-area">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2 text-center">
                                <h2>Sobre</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->
        <!-- About Details Start -->
        <div class="about-details section-padding30">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="about-details-cap mb-50">
                            <h4>Nossa Missão</h4>
                            <p>A leitura é a base para tudo na vida! Visando isso, foi criada a BooksZone, plataforma dinâmica e prática, que possui a intenção  de incentivar a leitura para a população, gerando curiosidade e expondo diversos tipos de livros pelo mundo.</p>
                        </div>

                        <!--<div class="about-details-cap mb-50">
                            <h4>Nossa Visão</h4>
                            <p>Consectetur adipiscing elit, sued do eiusmod tempor ididunt udfgt labore et dolore magna aliqua. Quis ipsum suspendisces gravida. Risus commodo viverra sebfd dho eiusmod tempor maecenas accumsan lacus. Risus commodo viverra sebfd dho eiusmod tempor maecenas accumsan lacus.
                            </p>
                        </div>-->
                    </div>
                </div>
            </div>
        </div>
        <!-- About Details End -->
        
        <!--? Testimonial Start -->
        <div class="testimonial-area fix pt-180 pb-180 section-bg" data-background="assets/img/gallery/section_bg03.png">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-9 col-md-9">
                        <div class="h1-testimonial-active">
                            <!-- Single Testimonial -->
                            <div class="single-testimonial pt-65">
                                <!-- Testimonial tittle -->
                                <div class="testimonial-icon mb-45">
                                    <img src="assets/img/gallery/pequeno.jpg" height="125" class="ani-btn " alt="">
                                </div>
                                    <!-- Testimonial Content -->
                                <div class="testimonial-caption text-center">
                                    <p>É bem mais difícil julgar a si mesmo que julgar os outros. Se consegues fazer um bom julgamento de ti,
                                    és um verdadeiro sábio.</p>
                                    <!-- Rattion -->
                                    <div class="testimonial-ratting">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class="rattiong-caption">
                                        <span>Antoine de Saint-Exupéry<span> - Pequeno Príncipe</span> </span>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Testimonial -->
                            <div class="single-testimonial pt-65">
                                <!-- Testimonial tittle -->
                                <div class="testimonial-icon mb-45">
                                     <img src="assets/img/gallery/melhor.jpg" height="125" class="ani-btn " alt="">
                                </div>
                                    <!-- Testimonial Content -->
                                <div class="testimonial-caption text-center">
                                    <p>O amor é a força mais poderosa do universo e quando duas pessoas se amam, nem a distância nem o tempo podem separá-las. </p>
                                    <!-- Rattion -->
                                    <div class="testimonial-ratting">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class="rattiong-caption">
                                        <span>Nicholas Sparks<span> - O Melhor de Mim</span> </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->
       
    </main>
    <footer>
    </footer>
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