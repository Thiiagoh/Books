<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
     <title> Página | Livros Premiados </title>
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
                                        <li><a href="#" style="color: blue;">Premiados</a></li>
                                        <li><a href="sobre.php">Sobre</a></li>
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
        <!-- Header End -->
    </header>
    <main>
        <!--? Hero Start -->
        <div class="slider-area ">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2 text-center">
                                <h2>Livros Premiados</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->
        <!--? Team Ara Start -->
        <div class="team-area pt-160 pb-160">
            <div class="container">
                <div class="row justify-content-sm-center">
                    <div class="cl-xl-7 col-lg-8 col-md-10">
                        <!-- Section Tittle -->
                        <div class="section-tittle text-center mb-70">
                            <h2>Prêmio Jabuti</h2>
                            <span>O Prêmio Jabuti é o mais tradicional prêmio literário do Brasil, concedido pela Câmara Brasileira do Livro. Criado em 1959, foi idealizado por Edgard Cavalheiro quando presidia a CBL, com o interesse de premiar autores, editores, ilustradores, gráficos e livreiros que mais se destacassem a cada ano.</span>
                        </div> 
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-4 col-6">
                        <div class="single-team mb-30">
                            <div class="team-img">
                                <img class="aumentar-img" data-toggle="modal" data-target="#Modal" src="assets/img/gallery/hist2.jpg" width="200" height="280" alt="">
                                <!-- Blog Social --> 
                               
                            </div>
                            <div class="team-caption">
                                <h3><a href="#" >Uma História da Desigualdade: a concentração de renda entre os ricos no Brasil</a></h3>
                                <p>Pedro H. G Ferreira de Souza</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-4 col-6">
                        <div class="single-team mb-30">
                            <div class="team-img">
                                <img class="aumentar-img" data-toggle="modal" data-target="#Modal1" src="assets/img/gallery/o2.jpg" width="200" height="280" alt="">
                                <!-- Blog Social -->
                               
                            </div>
                            <div class="team-caption">
                                <h3><a href="#">O Pai da Menina Morta</a></h3>
                                <p>Tiago Ferro</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-6">
                        <div class="single-team mb-30">
                            <div class="team-img">
                                <img class="aumentar-img" data-toggle="modal" data-target="#Modal2" src="assets/img/gallery/acida2.jpg" width="200" height="280" alt="">
                                <!-- Blog Social -->
                               
                            </div>
                            <div class="team-caption">
                                <h3><a href="#">À Cidade</a></h3>
                                <p>Mailson Furtado</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-6">
                        <div class="single-team mb-30">
                            <div class="team-img">
                                <img class="aumentar-img" data-toggle="modal" data-target="#Modal3" src="assets/img/gallery/club.jpg" width="200" height="280" alt="">
                                <!-- Blog Social -->
                               
                            </div>
                            <div class="team-caption">
                                <h3><a href="#">O Clube dos Jardineiros de Fumaça</a></h3>
                                <p>Carol Bensimon</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-sm-center">
                    <div class="cl-xl-7 col-lg-8 col-md-10">
                        <!-- Section Tittle -->
                        <div class="section-tittle text-center mb-70">
                            <h2>Prêmio Pulitzer</h2>
                            <span>O Prêmio Pulitzer é um prêmio estadunidense outorgado a pessoas que realizem trabalhos de excelência na área do jornalismo, literatura e composição musical. É administrado pela Universidade de Colúmbia, em Nova Iorque.</span>
                        </div> 
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-4 col-6">
                        <div class="single-team mb-30">
                            <div class="team-img">
                                <img class="aumentar-img" data-toggle="modal" data-target="#Modal4" src="assets/img/gallery/arthurless.jpg" width="200" height="280" alt="">
                                <!-- Blog Social -->
                               
                            </div>
                            <div class="team-caption">
                                <h3><a href="#">As desventuras de Arthur Less</a></h3>
                                <p>Andrew Sean Greer</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-6">
                        <div class="single-team mb-30">
                            <div class="team-img">
                                <img class="aumentar-img" data-toggle="modal" data-target="#Modal5" src="assets/img/gallery/underground.jpg" width="200" height="280" alt="">
                                <!-- Blog Social -->
                               
                            </div>
                            <div class="team-caption">
                                <h3><a href="#">The Underground Railroad: Os Caminhos Para a Liberdade</a></h3>
                                <p>Colson Whitehead</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-6">
                        <div class="single-team mb-30">
                            <div class="team-img">
                                <img class="aumentar-img" data-toggle="modal" data-target="#Modal6" src="assets/img/gallery/simpatizante.jpg" width="200" height="280" alt="">
                                <!-- Blog Social -->
                               
                            </div>
                            <div class="team-caption">
                                <h3><a href="#" >O simpatizante</a></h3>
                                <p>Viet Thanh Nguyen</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-6">
                        <div class="single-team mb-30">
                            <div class="team-img">
                                <img class="aumentar-img" data-toggle="modal" data-target="#Modal7" src="assets/img/gallery/todaluz.jpg" width="200" height="280" alt="">
                                <!-- Blog Social -->
                               
                            </div>
                            <div class="team-caption">
                                <h3><a href="#" >Toda Luz Que Não Podemos Ver</a></h3>
                                <p>Anthony Doerr</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-sm-center">
                    <div class="cl-xl-7 col-lg-8 col-md-10">
                        <!-- Section Tittle -->
                        <div class="section-tittle text-center mb-70">
                            <h2>Prêmio Man Booker</h2>
                            <span>O Prémio Man Booker, também conhecido como Prémio Booker é um prémio literário criado em 1968, e um dos mais importantes atribuídos anualmente no Reino Unido.</span>
                        </div> 
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-4 col-6">
                        <div class="single-team mb-30">
                            <div class="team-img">
                                <img class="aumentar-img" data-toggle="modal" data-target="#Modal8" src="assets/img/gallery/atwood.jpg" width="200" height="280" alt="">
                                <!-- Blog Social -->
                               
                            </div>
                            <div class="team-caption">
                                <h3><a href="#">Os Testamentos</a></h3>
                                <p>Margaret Atwood</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-6">
                        <div class="single-team mb-30">
                            <div class="team-img">
                                <img class="aumentar-img" data-toggle="modal" data-target="#Modal9" src="assets/img/gallery/lincol.jpg" width="200" height="280" alt="">
                                <!-- Blog Social -->
                               
                            </div>
                            <div class="team-caption">
                                <h3><a href="#" >Lincoln no limbo</a></h3>
                                <p>George Saunders</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-6">
                        <div class="single-team mb-30">
                            <div class="team-img">
                                <img class="aumentar-img" data-toggle="modal" data-target="#Modal10" src="assets/img/gallery/brevehistoria.jpg" width="200" height="280" alt="">
                                <!-- Blog Social -->
                               
                            </div>
                            <div class="team-caption">
                                <h3><a href="#">Breve História de Sete Assassinatos</a></h3>
                                <p>Marlon James</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-6">
                        <div class="single-team mb-30">
                            <div class="team-img">
                                <img class="aumentar-img" data-toggle="modal" data-target="#Modal11" src="assets/img/gallery/aventuras.jpg" width="200" height="280" alt="">
                                <!-- Blog Social -->
                               
                            </div>
                            <div class="team-caption">
                                <h3><a href="#">As Aventuras de Pi</a></h3>
                                <p>Yann Martel</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-sm-center">
                    <div class="cl-xl-7 col-lg-8 col-md-10">
                        <!-- Section Tittle -->
                        <div class="section-tittle text-center mb-70">
                            <h2>Prêmio Oceanos</h2>
                            <span>O Oceanos-Prêmio de Literatura em Língua Portuguesa é considerado um dos prêmios literários mais importantes entre os países de língua portuguesa, a par do Prêmio Jabuti ou Prêmio Camões, sendo considerado o equivalente lusófono do britânico Man Booker Prize, pelas semelhanças das suas regras e alto valor financeiro.</span>
                        </div> 
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-4 col-6">
                        <div class="single-team mb-30">
                            <div class="team-img">
                                <img class="aumentar-img" data-toggle="modal" data-target="#Modal12" src="assets/img/gallery/karen.jpg" width="200" height="280" alt="">
                                <!-- Blog Social -->
                               
                            </div>
                            <div class="team-caption">
                                <h3><a href="#">Karen</a></h3>
                                <p>Ana Teresa Pereira</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-6">
                        <div class="single-team mb-30">
                            <div class="team-img">
                                <img class="aumentar-img" data-toggle="modal" data-target="#Modal13" src="assets/img/gallery/luanda.jpg" width="200" height="280" alt="">
                                <!-- Blog Social -->
                               
                            </div>
                            <div class="team-caption">
                                <h3><a href="#">Luanda, Lisboa, Paraiso</a></h3>
                                <p>Djaimilia Pereira de Almeida</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-6">
                        <div class="single-team mb-30">
                            <div class="team-img">
                                <img class="aumentar-img" data-toggle="modal" data-target="#Modal14" src="assets/img/gallery/rosas.jpg" width="200" height="280" alt="">
                                <!-- Blog Social -->
                               
                            </div>
                            <div class="team-caption">
                                <h3><a href="#">Mil Rosas Roubadas</a></h3>
                                <p>Silviano Santiago</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-6">
                        <div class="single-team mb-30">
                            <div class="team-img">
                                <img class="aumentar-img"  data-toggle="modal" data-target="#Modal15" src="assets/img/gallery/maquina.jpg" width="200" height="280" alt="">
                                <!-- Blog Social -->
                               
                            </div>
                            <div class="team-caption">
                                <h3><a href="#">A Máquina de Fazer Espanhóis</a></h3>
                                <p>Valter Hugo Mãe</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-sm-center">
                    <div class="cl-xl-7 col-lg-8 col-md-10">
                        <!-- Section Tittle -->
                        <div class="section-tittle text-center mb-70">
                            <h2>Prêmio São Paulo de Literatura</h2>
                            <span>O Prêmio São Paulo de Literatura é um prêmio fornecido pelo Governo do estado de São Paulo através de um projeto criado pela Secretaria de Estado da Cultura com o objetivo inicial de estimular a leitura.</span>
                        </div> 
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-4 col-6">
                        <div class="single-team mb-30">
                            <div class="team-img">
                                <img class="aumentar-img"  data-toggle="modal" data-target="#Modal16" src="assets/img/gallery/enterre.jpg" width="200" height="280" alt="">
                                <!-- Blog Social -->
                               
                            </div>
                            <div class="team-caption">
                                <h3><a href="#">Enterre Seus Mortos</a></h3>
                                <p>Ana Paula Maia</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-6">
                        <div class="single-team mb-30">
                            <div class="team-img">
                                <img class="aumentar-img" data-toggle="modal" data-target="#Modal17" src="assets/img/gallery/oitodosete.jpg" width="200" height="280" alt="">
                                <!-- Blog Social -->
                               
                            </div>
                            <div class="team-caption">
                                <h3><a href="#" >Oito do sete</a></h3>
                                <p>Cristina Judar</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-6">
                        <div class="single-team mb-30">
                            <div class="team-img">
                                <img class="aumentar-img"  data-toggle="modal" data-target="#Modal18" src="assets/img/gallery/opeso.jpg" width="200" height="280" alt="">
                                <!-- Blog Social -->
                               
                            </div>
                            <div class="team-caption">
                                <h3><a href="#">O Peso do Pássaro Morto</a></h3>
                                <p>Aline Bei</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-6">
                        <div class="single-team mb-30">
                            <div class="team-img">
                                <img class="aumentar-img"  data-toggle="modal" data-target="#Modal19" src="assets/img/gallery/anatomia.jpg" width="200" height="280" alt="">
                                <!-- Blog Social -->
                               
                            </div>
                            <div class="team-caption">
                                <h3><a href="#">Anatomia do Paraíso</a></h3>
                                <p>Beatriz Bracher</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-sm-center">
                    <div class="cl-xl-7 col-lg-8 col-md-10">
                        <!-- Section Tittle -->
                        <div class="section-tittle text-center mb-70">
                            <h2>Prêmio Camões</h2>
                            <span>O Prémio Camões ou Prêmio Camões, instituído pelos governos do Brasil e de Portugal em 1988, é atribuído àqueles autores que contribuíram para o enriquecimento do património literário e cultural da língua portuguesa.</span>
                        </div> 
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-4 col-6">
                        <div class="single-team mb-30">
                            <div class="team-img">
                                <img class="aumentar-img" data-toggle="modal" data-target="#Modal20" src="assets/img/gallery/essagente.jpg" width="200" height="280" alt="">
                                <!-- Blog Social -->
                               
                            </div>
                            <div class="team-caption">
                                <h3><a href="#" >Essa Gente</a></h3>
                                <p>Chico Buarque</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-6">
                        <div class="single-team mb-30">
                            <div class="team-img">
                                <img class="aumentar-img" data-toggle="modal" data-target="#Modal21" src="assets/img/gallery/testamento.jpg" width="200" height="280" alt="">
                                <!-- Blog Social -->
                               
                            </div>
                            <div class="team-caption">
                                <h3><a href="#">O Testamento do Sr. Napumoceno</a></h3>
                                <p>Germano Almeida</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-6">
                        <div class="single-team mb-30">
                            <div class="team-img">
                                <img class="aumentar-img"  data-toggle="modal" data-target="#Modal22" src="assets/img/gallery/cao.jpg" width="200" height="280" alt="">
                                <!-- Blog Social -->
                               
                            </div>
                            <div class="team-caption">
                                <h3><a href="#">Terra Sonâmbula</a></h3>
                                <p>Mia Couto</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-6">
                        <div class="single-team mb-30">
                            <div class="team-img">
                                <img class="aumentar-img" data-toggle="modal" data-target="#Modal23" src="assets/img/gallery/umpasseio.jpeg" width="200" height="280" alt="">
                                <!-- Blog Social -->
                               
                            </div>
                            <div class="team-caption">
                                <h3><a href="#">Um Passeio pela África</a></h3>
                                <p>Alberto da Costa e Silva</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-sm-center">
                    <div class="cl-xl-7 col-lg-8 col-md-10">
                        <!-- Section Tittle -->
                        <div class="section-tittle text-center mb-70">
                            <h2>Prêmio Nobel</h2>
                            <span>O Prêmio Nobel de Literatura é um prêmio literário sueco que é concedido anualmente, desde 1901, a um autor de qualquer país que, nas palavras da vontade do industrial sueco Alfred Nobel, produziu "no campo da literatura o trabalho mais notável em uma direção ideal".</span>
                        </div> 
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-4 col-6">
                        <div class="single-team mb-30">
                            <div class="team-img">
                                <img class="aumentar-img" data-toggle="modal" data-target="#Modal24" src="assets/img/gallery/ossos.jpg" width="200" height="280" alt="">
                                <!-- Blog Social -->
                               
                            </div>
                            <div class="team-caption">
                                <h3><a href="#">Sobre os ossos dos mortos</a></h3>
                                <p>Olga Tokarczuk</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-6">
                        <div class="single-team mb-30">
                            <div class="team-img">
                                <img class="aumentar-img" data-toggle="modal" data-target="#Modal25" src="assets/img/gallery/gigante.jpg" width="200" height="280" alt="">
                                <!-- Blog Social -->
                               
                            </div>
                            <div class="team-caption">
                                <h3><a href="#">O Gigante Enterrado</a></h3>
                                <p>Kazuo Ishiguro</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-6">
                        <div class="single-team mb-30">
                            <div class="team-img">
                                <img class="aumentar-img" data-toggle="modal" data-target="#Modal26" src="assets/img/gallery/ruaroma.jpg" width="200" height="280" alt="">
                                <!-- Blog Social -->
                               
                            </div>
                            <div class="team-caption">
                                <h3><a href="#">Uma Rua de Roma</a></h3>
                                <p>Patrick Modiano</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-6">
                        <div class="single-team mb-30">
                            <div class="team-img">
                                <img class="aumentar-img" data-toggle="modal" data-target="#Modal27" src="assets/img/gallery/amor.jpg" width="200" height="280" alt="">
                                <!-- Blog Social -->
                               
                            </div>
                            <div class="team-caption">
                                <h3><a href="#">O Amor de uma Boa Mulher</a></h3>
                                <p>Alice Munro</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team Ara End -->
    </main>

    <!-- INICIO MODAL -->
        <div class="modal" id="Modal" tabindex="-1">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Uma História da Desigualdade: a concentração de renda entre os ricos no Brasi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p>A história da desigualdade de Pedro Ferreira de Souza é uma história dos ricos. Faz sentido olhar para o topo: uma parte imensa da renda está lá. Por essa razão, toda flutuação na renda dos ricos tem um peso desproporcional na evolução da distribuição total. Quando a concentração é muito alta, os ricos conduzem a dança. Conduzem, mas não ditam como deve ser o baile. Este livro encaixa uma peça importante no quebra-cabeças da história econômica brasileira. Com ele, aprendemos sobre quem ganhou mais e quem ganhou menos em quase um século de desenvolvimento. Trata-se do resultado de um trabalho cauteloso, que envolveu uma coleta de dados atenta, selecionou as informações mais precisas e usou as melhores ferramentas, a fim de apresentar a série histórica mais longa e completa sobre a desigualdade no Brasil.</p>
              </div>
              
            </div>
          </div>
        </div>

        <div class="modal" id="Modal1" tabindex="-1">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">O Pai da Menina Mort</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p>Estreia de uma das mais novas e marcantes vozes da literatura brasileira, este é um romance comovente e aterrador. O que acontece quando uma menina de oito anos, inteligente e amorosa, morre subitamente? O romance de Tiago Ferro tenta compreender os ecos dessa devastação na vida do pai. Gestado a partir de uma tragédia vivenciada pelo autor em 2016, o livro não se restringe ao inventário doloroso dessa perda indizível, mas discute temas como memória, sexualidade, humor, confissão e fabulação. Um livro comovente e aterrador.</p>
              </div>
              
            </div>
          </div>
        </div>

        <div class="modal" id="Modal2" tabindex="-1">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">À Cidade</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p>Dirigido por Adirley Queirós, o documentário A Cidade É Uma Só? discute a exclusão territorial no Distrito Federal e em seu entorno, a partir da memória da Campanha de Erradicação de Invasões ocorrida em 1971.</p>
              </div>
              
            </div>
          </div>
        </div>

        <div class="modal" id="Modal3" tabindex="-1">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">O Clube dos Jardineiros de Fumaça</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p>Em um cenário formado por coníferas milenares, estradas sinuosas e falésias, a região californiana do Triângulo da Esmeralda concentra a maior produção de maconha dos Estados Unidos. É lá que o jovem professor brasileiro Arthur busca recomeçar a vida, depois dos acontecimentos que o levaram a deixar Porto Alegre. Aos poucos, ele se insere na dinâmica local e passa a fazer parte de uma história que começa com a contracultura dos anos 1960 e se estende até o presente.</p>
              </div>
              
            </div>
          </div>
        </div>

        <div class="modal" id="Modal4" tabindex="-1">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">As desventuras de Arthur Less</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p>Uma divertida sátira da vida no livro vencedor do Pulitzer de ficção de 2018. Arthur Less é um escritor medíocre prestes a completar 50 anos. Certo dia, recebe um convite de casamento: o homem com quem teve um relacionamento não tão sério assim nos últimos nove anos está com data marcada para se casar.</p>
              </div>
              
            </div>
          </div>
        </div>

        <div class="modal" id="Modal5" tabindex="-1">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">The Underground Railroad: Os Caminhos Para a Liberdade</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p>Cora é uma jovem escrava em uma plantação de algodão na Georgia. A vida é infernal para todos os escravos, mas especialmente terrível para Cora. Uma pária até entre outros africanos, ela está chegando à maturidade, que a tornará vítima de dores ainda maiores. Quando um recém-chegado da Virgínia, Caesar, revela uma rota de fuga chamada, a ferrovia subterrânea, ambos decidem escapar de seus algozes. Mas nada sai como planejado. Cora e Caesar sabem que estão sendo caçados: a qualquer momento podem ser levados de volta a uma existência terrível sem liberdade.</p>
              </div>
              
            </div>
          </div>
        </div>

        <div class="modal" id="Modal6" tabindex="-1">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">O simpatizante</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p>O simpatizante é um épico de amor e traição. O leitor acompanha um agente duplo comunista sem nome, que se infiltrou no exército sul-vietnamita e conseguiu se refugiar nos Estados Unidos depois da Queda de Saigon.</p>
              </div>
              
            </div>
          </div>
        </div>

        <div class="modal" id="Modal7" tabindex="-1">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Toda Luz Que Não Podemos Ver</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p>Uma história arrebatadora contada de forma fascinante. Com incrível habilidade para combinar lirismo e uma observação atenta dos horrores da guerra, o premiado autor Anthony Doerr constrói, em Toda luz que não podemos ver, um tocante romance sobre o que há além do mundo visível.</p>
              </div>
              
            </div>
          </div>
        </div>

        <div class="modal" id="Modal8" tabindex="-1">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Os Testamentos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p>Uma história arrebatadora contada de forma fascinante. Com incrível habilidade para combinar lirismo e uma observação atenta dos horrores da guerra, o premiado autor Anthony Doerr constrói, em Toda luz que não podemos ver, um tocante romance sobre o que há além do mundo visível.</p>
              </div>
              
            </div>
          </div>
        </div>

        <div class="modal" id="Modal9" tabindex="-1">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Lincoln no limbo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p>Lincoln no limbo é uma narrativa original e emocionante. Em 1862, em meio à Guerra Civil Americana, morre, aos onze anos de idade, Willie Lincoln, filho do lendário presidente Abraham Lincoln. A tragédia leva a um luto desesperado o homem que daria fim à escravidão nos Estados Unidos.</p>
              </div>
              
            </div>
          </div>
        </div>

        <div class="modal" id="Modal10" tabindex="-1">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Breve História de Sete Assassinatos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p>Marlon James cria com magistralidade personagens - assassinos, traficantes, jornalistas e até mesmo fantasmas - que andaram pelas ruas de Kingston nos anos 1970, dominaram o submundo das drogas de Nova York na década de 1980 e ressurgiram em uma Jamaica radicalmente transformada nos anos 1990.</p>
              </div>
              
            </div>
          </div>
        </div>
        <div class="modal" id="Modal11" tabindex="-1">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">As Aventuras de Pi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p>Pi e sua família decidem ir para o Canadá depois de fechar o zoológico da família. A embarcação deles naufraga, e o jovem sobrevive junto com alguns animais, incluindo um temível tigre de Bengala, com o qual desenvolve uma ligação.</p>
              </div>
              
            </div>
          </div>
        </div>

        <div class="modal" id="Modal12" tabindex="-1">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Karen</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p>Uma mulher prestes a fazer 25 anos acorda numa cama que não reconhece, numa casa que não lhe parece íntima, entre pessoas que a ""conhecem"" mas afirmam entender sua confusão momentânea. Chama-se – ou pelo menos é como a chamam – Karen.</p>
              </div>
              
            </div>
          </div>
        </div>

        <div class="modal" id="Modal13" tabindex="-1">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Luanda, Lisboa, Paraiso</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p>Em seu segundo romance, Djaimilia Pereira de Almeida narra a saga de Cartola e Aquiles, pai e filho que deixam Angola em busca de um tratamento médico em Portugal nos anos 1980. Um livro sobre descolonização e pertencimento, da mesma autora de Esse cabelo.</p>
              </div>
              
            </div>
          </div>
        </div>

        <div class="modal" id="Modal14" tabindex="-1">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Mil Rosas Roubadas</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p>O crítico e ficcionista Silviano Santiago recria a história de uma amizade apaixonada entre dois rapazes. ... Compete-lhe inverter os papéis e escrever a trajetória do amigo inseparável. Encantam-se na juventude com o charme de Vanessa, tutora literária.</p>
              </div>
              
            </div>
          </div>
        </div>

        <div class="modal" id="Modal15" tabindex="-1">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">A Máquina de Fazer Espanhóis</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p>Uma história sobre a velhice, o amor e a amizade. A máquina de fazer espanhóis, de Valter Hugo Mãe, conta a história de António Jorge da Silva, um barbeiro de 84 anos que, após perder sua mulher, é levado por um de seus filhos para viver em um asilo.</p>
              </div>
              
            </div>
          </div>
        </div>

        <div class="modal" id="Modal16" tabindex="-1">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Enterre Seus Mortos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p>Trata-se de um faroeste lúgubre que, através da desolação geográfica, questiona não apenas a tensão violenta que preenche os limites entre a vida e a morte, mas também todo o vazio no entorno. Os problemas começam quando eles constatam que os corpos abandonados nas estradas não são apenas de animais.</p>
              </div>
              
            </div>
          </div>
        </div>

        <div class="modal" id="Modal17" tabindex="-1">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Oito do sete</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p>Nada é por acaso na literatura que reaviva a aventura humana e, por isso, nos encanta. "Oito do sete": eis, não por acaso, a data que marca o enredo desta bela estreia de Cristina Judar no romance. Não por acaso o dia é oito, número do infinito. Não por acaso o mês é julho, o sétimo do ano. Não por acaso vamos nos inteirando da trama pelos fragmentos narrados por quatro vozes distintas: duas amantes (Magda e Glória), um anjo (Serafim) e uma cidade (Roma). Não por acaso Magda e Glória se entregam a uma relação hétero com Rick e Jonas. Nem por acaso elas se veem como cisternas e os homens como torres. E, não por acaso, aqui os homens são embarcações; as mulheres, terra para que se afundem. Também não por acaso, neste livro, o sentimento é mar; a emoção é onda. Uma obra estruturalmente engenhosa, de alta voltagem lírica e primoroso labor com a linguagem. Não por acaso estão ausentes de suas páginas as artimanhas e facilidades da literatura monocromática que se tornou hegemônica entre nós.</p>
              </div>
              
            </div>
          </div>
        </div>

        <div class="modal" id="Modal18" tabindex="-1">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">O Peso do Pássaro Morto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p>O peso do pássaro morto, de Aline Bei, retrata as perdas, culpas e angústias da vida de uma mesma personagem, da infância até a vida adulta. Dentre os temas que aparecem na história, estão a maternidade, os vínculos afetivos e os tabus da morte.</p>
              </div>
              
            </div>
          </div>
        </div>

        <div class="modal" id="Modal19" tabindex="-1">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Anatomia do Paraíso</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p>Novo romance de Beatriz Bracher, Anatomia do Paraíso traz a história de um jovem estudante de classe média que escreve uma dissertação de mestrado sobre o Paraíso perdido (1667), poema épico de John Milton que narra a queda do homem e a expulsão de Adão e Eva do Paraíso.</p>
              </div>
              
            </div>
          </div>
        </div>
        <div class="modal" id="Modal20" tabindex="-1">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Essa Gente</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p>Um escritor decadente enfrenta uma crise financeira e afetiva enquanto o Rio de Janeiro colapsa à sua volta. Tragicomédia urgente, o novo romance de Chico Buarque é a primeira obra literária de vulto a encarar o Brasil do agora.</p>
              </div>
              
            </div>
          </div>
        </div>

        <div class="modal" id="Modal21" tabindex="-1">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">O Testamento do Sr. Napumoceno</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p>Um grande comerciante de Cabo Verde morre, e seu sobrinho, ambiciona ficar com a herança. No entanto, o testamento revela que uma filha não reconhecida oficialmente é a única herdeira de todos os bens.</p>
              </div>
              
            </div>
          </div>
        </div>
        <div class="modal" id="Modal22" tabindex="-1">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Terra Sonâmbula</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p>Muidinga é um menino que sofreu amnésia e tinha a esperança de encontrar seus pais. Tuahir é um velho sábio que tenta resgatar toda a história do menino, lhe ensinando novamente tudo sobre o mundo. Eles estão fugindo dos conflitos da guerra civil em Moçambique.</p>
              </div>
              
            </div>
          </div>
        </div>

        <div class="modal" id="Modal23" tabindex="-1">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Um Passeio pela África</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p>Em Um passeio pela África, primeiro livro infanto-juvenil do embaixador e acadêmico Alberto da Costa e Silva, os jovens brasileiros, Zezinha, Gustavo e Inácio se aventuram por um continente que, na maioria das vezes, conhecemos apenas dos Atlas geográficos.</p>
              </div>
              
            </div>
          </div>
        </div>

        <div class="modal" id="Modal24" tabindex="-1">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Sobre os ossos dos mortos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p>Em uma remota região da Polônia, uma professora de inglês aposentada costuma se dedicar ao estudo da astrologia, à poesia de William Blake, à manutenção de casas para alugar e a sabotar armadilhas para impedir a caça de animais silvestres.</p>
              </div>
              
            </div>
          </div>
        </div>

        <div class="modal" id="Modal25" tabindex="-1">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">O Gigante Enterrado</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p>Uma terra marcada por guerras recentes e amaldiçoada por uma misteriosa névoa do esquecimento. Uma população desnorteada diante de ameaças múltiplas.</p>
              </div>
              
            </div>
          </div>
        </div>

        <div class="modal" id="Modal26" tabindex="-1">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Uma Rua de Roma</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p>Uma rua de Roma é a saga de um homem que sofre de amnésia total. Para tentar desvendar seu passado ele sai em busca de pessoas que possam lhe oferecer pistas acerca de sua identidade, como uma espécie de historiador ou, mais precisamente, de um detetive de si mesmo.</p>
              </div>
              
            </div>
          </div>
        </div>

        <div class="modal" id="Modal27" tabindex="-1">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">O Amor de uma Boa Mulher</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p>Contos de Alice Munro fazem corte profundo na vida de mulheres que estão quase sempre à deriva. ... Em Munro, há uma intuição de que a condição feminina se conecta por vários caminhos com a marginalidade.</p>
              </div>
              
            </div>
          </div>
        </div>
        <!-- FIM MODAL -->


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