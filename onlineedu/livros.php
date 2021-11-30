<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
     <title> Página | Livros </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
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
                                        <li><a href="#" style="color: blue;">Livros</a></li>
                                        <li><a href="escritores.php">Escritores</a></li>
                                        <li><a href="premiados.php">Premiados</a></li>
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
                                                $email = "invalido";
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
        <div class="slider-area ">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2 text-center">
                                <h2>Mais Livros</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->
        <!-- all-course Start -->
        <section class="all-course section-padding30">
            <div class="container">
                <div class="row">
                    <div class="all-course-wrapper">
                        <!-- Heading & Nav Button -->
                        <div class="row mb-15">
                            <div class="col-12">
                                <div class="properties__button mb-90">
                                    <!--Nav Button  -->                                            
                                    <nav>                                                                             
                                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Todos</a>

                                            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Terror</a>

                                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Romance</a>

                                            <a class="nav-item nav-link" id="nav-last-tab" data-toggle="tab" href="#nav-last" role="tab" aria-controls="nav-contact" aria-selected="false">Fantasia</a>

                                            <a class="nav-item nav-link" id="nav-Sports" data-toggle="tab" href="#nav-nav-Sport" role="tab" aria-controls="nav-contact" aria-selected="false">Ficção Científica</a>
                                        </div>
                                    </nav>
                                    <!--End Nav Button  -->
                                </div>
                            </div>
                        </div>


                        <!-- Tab content -->
                        <div class="row">
                            <div class="col-12">
                                <!-- Nav Card -->
                                <div class="tab-content" id="nav-tabContent">
                                    <!--  one -->
                                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">       
                                        <div class="row">
                                            <!-- INICIO TODOS-->
                                                <?php 
                                                    $livros = mysqli_query($conecta, "select * from livros");
                                                    $i=0;
                                                    //Loop de todos os livros
                                                    while($exibe = mysqli_fetch_assoc($livros)){
                                                        $nome[$i] = $exibe["titulo"];
                                                        $autor[$i] = $exibe["autor"];
                                                        $ano[$i] = $exibe["ano"];
                                                        $genero[$i] = $exibe["genero"];
                                                        $imagem[$i] = $exibe["imagem"];
                                                        $livros_id[$i] = $exibe["id"];
                                                        $descricao[$i] = $exibe["descricao"];
                                                        $ano[$i] = date("d/m/Y", strtotime($ano[$i]));

                                                        $rating[$i] = mysqli_query($conecta, 'select * from avaliacao inner join livros on avaliacao.livros_id = livros.id where livros_id = '.$livros_id[$i].'');
                                                        $cont=0;
                                                        $x=0;
                                                        echo ' <div class="modal" id="'.$imagem[$i].'" tabindex="-1">
                                                                  <div class="modal-dialog modal-lg">
                                                                    <div class="modal-content">
                                                                      <div class="modal-header">
                                                                        <h5 class="modal-title">'.$nome[$i].'</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                          <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                      </div>
                                                                      <div class="modal-body">
                                                                        <p>'.$descricao[$i].'</p>
                                                                      </div>
                                                                      
                                                                    </div>
                                                                  </div>
                                                                </div>';
                                                        //loop para as avaliações de cada filme
                                                        while($votos[$i] = mysqli_fetch_assoc($rating[$i])){
                                                            $nota[$x] = $votos[$i]["avaliacao"];
                                                            //COMPUTAR NOTAS DE FILMES
                                                            if ($nota[$x] == "like")
                                                                $cont++;
                                                            else if ($nota[$x] == "dislike")
                                                                $cont--;
                                                            $x++;
                                                        }

                                                        //Se for positivo ficara BOM negativo RUIM
                                                        if($cont < 0){
                                                            $notaF2 = '-broken';
                                                            $colorR = 'ef5c73';
                                                        }
                                                        if($cont >= 0){
                                                            $notaF2 = '';
                                                            $colorR = 'e81c37';
                                                        }
                                                        //Verificação se a pessoa esta logada
                                                        if($email == "invalido"){
                                                            $botao = "hidden";
                                                            $action = '#';
                                                            $format = '';
                                                        }
                                                        else{
                                                            $botao = "";
                                                            $action = 'avaliacaoadd.php';
                                                            $format = 'rating-format-liberar';
                                                        }

                                                        echo '<div class="col-xl-3 col-lg-3 col-md-4 col-6">
                                                                <div class="card">
                                                                    <div class="aumentar-img">
                                                                        <img src="assets/img/gallery/'.$imagem[$i].'" class="card-img-top img-responsive" data-toggle="modal" data-target="#'.$imagem[$i].'" height="225" alt="...">
                                                                    </div>
                                                                    <div class="card-body">
                                                                        <h5 class="card-title">'.$nome[$i].'</h5>
                                                                        <h6 class="card-subtitle mb-2 text-muted">'.$autor[$i].'</h6>
                                                                        <small class="text-muted">'.$ano[$i].'</small>
                                                                        <div class="course-caption">
                                                                            <div class="botao-add" '.$botao.'>
                                                                                <form action="interesseAdd.php" method="POST">
                                                                                    <button name="email" value="'.$email.'" class="d-flex justify-content-center align-items-center">
                                                                                        <input type="" name="nome_livro" value="'.$livros_id[$i].'" hidden>
                                                                                        <i class="fas fa-plus"></i>
                                                                                    </button>
                                                                                </form>
                                                                            </div>
                                                                            <div class="course-cap-bottom d-flex justify-content-between rating-format" style="cursor: pointer;">
                                                                                <div class="'.$format.'">
                                                                                    <ul>
                                                                                        <li style="color: #'.$colorR.';"><i class="fas fa-heart'.$notaF2.'"></i></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                            <form action="'.$action.'" method="POST">
                                                                                <div class="ratingg" '.$botao.'>
                                                                                    <input type="" name="email" value="'.$email.'" hidden>
                                                                                    <input type="" name="nome_livro" value="'.$livros_id[$i].'" hidden>
                                                                                    <button type="submit" name="avaliacao" value="like" class="bom"> <i class="fas fa-thumbs-up"></i></button>
                                                                                    <button type="submit" name="avaliacao" value="dislike" class="ruim"><i class="fas fa-thumbs-down"></i></button>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>';
                                                        $i++;
                                                    }
                                                ?>
                                            <!-- FIM TODOS-->
                                        </div>
                                    </div>
                                     
                                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                        <div class="row">
                                            <?php 
                                                $conecta = mysqli_connect($nome_servidor, $nome_usuario, $senhaBanco, $nome_banco);
                                                $livros = mysqli_query($conecta, "select * from livros where genero='Terror'");
                                                $i=0;
                                                //Loop de todos os livros
                                                while($exibe = mysqli_fetch_assoc($livros)){
                                                    $v=1;
                                                    $nome[$i] = $exibe["titulo"];
                                                    $autor[$i] = $exibe["autor"];
                                                    $ano[$i] = $exibe["ano"];
                                                    $genero[$i] = $exibe["genero"];
                                                    $imagem[$i] = $exibe["imagem"];
                                                    $livros_id[$i] = $exibe["id"];
                                                    $descricao[$i] = $exibe["descricao"];
                                                    $ano[$i] = date("d/m/Y", strtotime($ano[$i]));

                                                    $rating[$i] = mysqli_query($conecta, 'select * from avaliacao inner join livros on avaliacao.livros_id = livros.id where livros_id = '.$livros_id[$i].'');
                                                    $cont=0;
                                                    $x=0;
                                                    echo ' <div class="modal" id="'.$imagem[$i].$v.'" tabindex="-1">
                                                                  <div class="modal-dialog modal-lg">
                                                                    <div class="modal-content">
                                                                      <div class="modal-header">
                                                                        <h5 class="modal-title">'.$nome[$i].'</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                          <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                      </div>
                                                                      <div class="modal-body">
                                                                        <p>'.$descricao[$i].'</p>
                                                                      </div>
                                                                      
                                                                    </div>
                                                                  </div>
                                                                </div>';
                                                    //loop para as avaliações de cada filme
                                                    while($votos[$i] = mysqli_fetch_assoc($rating[$i])){
                                                        $nota[$x] = $votos[$i]["avaliacao"];
                                                        //COMPUTAR NOTAS DE FILMES
                                                        if ($nota[$x] == "like")
                                                            $cont++;
                                                        else if ($nota[$x] == "dislike")
                                                            $cont--;
                                                        $x++;
                                                    }

                                                    //Se for positivo ficara BOM negativo RUIM
                                                    if($cont < 0){
                                                            $notaF2 = '-broken';
                                                            $colorR = 'ef5c73';
                                                        }
                                                    if($cont >= 0){
                                                        $notaF2 = '';
                                                        $colorR = 'e81c37';
                                                    }
                                                    //Verificação se a pessoa esta logada
                                                    if($email == "invalido"){
                                                        $botao = "hidden";
                                                        $action = '#';
                                                        $format = '';
                                                    }
                                                    else{
                                                        $botao = "";
                                                        $action = 'avaliacaoadd.php';
                                                        $format = 'rating-format-liberar';
                                                    }

                                                    echo '<div class="col-xl-3 col-lg-3 col-md-4 col-6">
                                                            <div class="card">
                                                                <div class="aumentar-img">
                                                                    <img src="assets/img/gallery/'.$imagem[$i].'" class="card-img-top img-responsive" data-toggle="modal" data-target="#'.$imagem[$i].$v.'" height="225" alt="...">
                                                                </div>
                                                                <div class="card-body">
                                                                    <h5 class="card-title">'.$nome[$i].'</h5>
                                                                    <h6 class="card-subtitle mb-2 text-muted">'.$autor[$i].'</h6>
                                                                    <small class="text-muted">'.$ano[$i].'</small>
                                                                    <div class="course-caption">
                                                                        <div class="botao-add" '.$botao.'>
                                                                            <form action="interesseAdd.php" method="POST">
                                                                                <button name="email" value="'.$email.'" class="d-flex justify-content-center align-items-center">
                                                                                    <input type="" name="nome_livro" value="'.$livros_id[$i].'" hidden>
                                                                                    <i class="fas fa-plus"></i>
                                                                                </button>
                                                                            </form>
                                                                        </div>
                                                                        <div class="course-cap-bottom d-flex justify-content-between rating-format" style="cursor: pointer;">
                                                                            <div class="'.$format.'">
                                                                                <ul>
                                                                                    <li style="color: #'.$colorR.';"><i class="fas fa-heart'.$notaF2.'"></i></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <form action="'.$action.'" method="POST">
                                                                            <div class="ratingg" '.$botao.'>
                                                                                <input type="" name="email" value="'.$email.'" hidden>
                                                                                <input type="" name="nome_livro" value="'.$livros_id[$i].'" hidden>
                                                                                <button type="submit" name="avaliacao" value="like" class="bom"> <i class="fas fa-thumbs-up"></i></button>
                                                                                <button type="submit" name="avaliacao" value="dislike" class="ruim"><i class="fas fa-thumbs-down"></i></button>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>';
                                                    $i++;
                                                    $v++;
                                                }
                                            ?>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                        <div class="row">
                                            <?php 
                                                $conecta = mysqli_connect($nome_servidor, $nome_usuario, $senhaBanco, $nome_banco);
                                                $livros = mysqli_query($conecta, "select * from livros where genero='Romance'");
                                                $i=0;
                                                //Loop de todos os livros
                                                while($exibe = mysqli_fetch_assoc($livros)){
                                                    $v=1;
                                                    $nome[$i] = $exibe["titulo"];
                                                    $autor[$i] = $exibe["autor"];
                                                    $ano[$i] = $exibe["ano"];
                                                    $genero[$i] = $exibe["genero"];
                                                    $imagem[$i] = $exibe["imagem"];
                                                    $livros_id[$i] = $exibe["id"];
                                                    $descricao[$i] = $exibe["descricao"];
                                                    $ano[$i] = date("d/m/Y", strtotime($ano[$i]));

                                                    $rating[$i] = mysqli_query($conecta, 'select * from avaliacao inner join livros on avaliacao.livros_id = livros.id where livros_id = '.$livros_id[$i].'');
                                                    $cont=0;
                                                    $x=0;
                                                    echo ' <div class="modal" id="'.$imagem[$i].$v.'" tabindex="-1">
                                                                  <div class="modal-dialog modal-lg">
                                                                    <div class="modal-content">
                                                                      <div class="modal-header">
                                                                        <h5 class="modal-title">'.$nome[$i].'</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                          <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                      </div>
                                                                      <div class="modal-body">
                                                                        <p>'.$descricao[$i].'</p>
                                                                      </div>
                                                                      
                                                                    </div>
                                                                  </div>
                                                                </div>';
                                                    //loop para as avaliações de cada filme
                                                    while($votos[$i] = mysqli_fetch_assoc($rating[$i])){
                                                        $nota[$x] = $votos[$i]["avaliacao"];
                                                        //COMPUTAR NOTAS DE FILMES
                                                        if ($nota[$x] == "like")
                                                            $cont++;
                                                        else if ($nota[$x] == "dislike")
                                                            $cont--;
                                                        $x++;
                                                    }

                                                    //Se for positivo ficara BOM negativo RUIM
                                                    if($cont < 0){
                                                        $notaF2 = '-broken';
                                                        $colorR = 'ef5c73';
                                                    }
                                                    if($cont >= 0){
                                                        $notaF2 = '';
                                                        $colorR = 'e81c37';
                                                    }
                                                    //Verificação se a pessoa esta logada
                                                    if($email == "invalido"){
                                                        $botao = "hidden";
                                                        $action = '#';
                                                        $format = '';
                                                    }
                                                    else{
                                                        $botao = "";
                                                        $action = 'avaliacaoadd.php';
                                                        $format = 'rating-format-liberar';
                                                    }

                                                    echo '<div class="col-xl-3 col-lg-3 col-md-4 col-6">
                                                            <div class="card">
                                                                <div class="aumentar-img">
                                                                    <img src="assets/img/gallery/'.$imagem[$i].'" class="card-img-top img-responsive" data-toggle="modal" data-target="#'.$imagem[$i].$v.'" height="225" alt="...">
                                                                </div>
                                                                <div class="card-body">
                                                                    <h5 class="card-title">'.$nome[$i].'</h5>
                                                                    <h6 class="card-subtitle mb-2 text-muted">'.$autor[$i].'</h6>
                                                                    <small class="text-muted">'.$ano[$i].'</small>
                                                                    <div class="course-caption">
                                                                        <div class="botao-add" '.$botao.'>
                                                                            <form action="interesseAdd.php" method="POST">
                                                                                <button name="email" value="'.$email.'" class="d-flex justify-content-center align-items-center">
                                                                                    <input type="" name="nome_livro" value="'.$livros_id[$i].'" hidden>
                                                                                    <i class="fas fa-plus"></i>
                                                                                </button>
                                                                            </form>
                                                                        </div>
                                                                        <div class="course-cap-bottom d-flex justify-content-between rating-format" style="cursor: pointer;">
                                                                            <div class="'.$format.'">
                                                                                <ul>
                                                                                    <li style="color: #'.$colorR.';"><i class="fas fa-heart'.$notaF2.'"></i></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <form action="'.$action.'" method="POST">
                                                                            <div class="ratingg" '.$botao.'>
                                                                                <input type="" name="email" value="'.$email.'" hidden>
                                                                                <input type="" name="nome_livro" value="'.$livros_id[$i].'" hidden>
                                                                                <button type="submit" name="avaliacao" value="like" class="bom"> <i class="fas fa-thumbs-up"></i></button>
                                                                                <button type="submit" name="avaliacao" value="dislike" class="ruim"><i class="fas fa-thumbs-down"></i></button>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>';
                                                    $i++;
                                                }
                                            ?>
                                            
                                        </div>
                                    </div>








                                    <div class="tab-pane fade" id="nav-last" role="tabpanel" aria-labelledby="nav-last-tab">
                                        <div class="row">
                                            <?php 
                                                $conecta = mysqli_connect($nome_servidor, $nome_usuario, $senhaBanco, $nome_banco);
                                                $livros = mysqli_query($conecta, "select * from livros where genero='Fantasia'");
                                                $i=0;
                                                //Loop de todos os livros
                                                while($exibe = mysqli_fetch_assoc($livros)){
                                                    $v=1;                                                    
                                                    $nome[$i] = $exibe["titulo"];
                                                    $autor[$i] = $exibe["autor"];
                                                    $ano[$i] = $exibe["ano"];
                                                    $genero[$i] = $exibe["genero"];
                                                    $imagem[$i] = $exibe["imagem"];
                                                    $livros_id[$i] = $exibe["id"];
                                                    $descricao[$i] = $exibe["descricao"];
                                                    $ano[$i] = date("d/m/Y", strtotime($ano[$i]));

                                                    $rating[$i] = mysqli_query($conecta, 'select * from avaliacao inner join livros on avaliacao.livros_id = livros.id where livros_id = '.$livros_id[$i].'');
                                                    $cont=0;
                                                    $x=0;
                                                    echo ' <div class="modal" id="'.$imagem[$i].$v.'" tabindex="-1">
                                                                  <div class="modal-dialog modal-lg">
                                                                    <div class="modal-content">
                                                                      <div class="modal-header">
                                                                        <h5 class="modal-title">'.$nome[$i].'</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                          <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                      </div>
                                                                      <div class="modal-body">
                                                                        <p>'.$descricao[$i].'</p>
                                                                      </div>
                                                                      
                                                                    </div>
                                                                  </div>
                                                                </div>';
                                                    //loop para as avaliações de cada filme
                                                    while($votos[$i] = mysqli_fetch_assoc($rating[$i])){
                                                        $nota[$x] = $votos[$i]["avaliacao"];
                                                        //COMPUTAR NOTAS DE FILMES
                                                        if ($nota[$x] == "like")
                                                            $cont++;
                                                        else if ($nota[$x] == "dislike")
                                                            $cont--;
                                                        $x++;
                                                    }

                                                    //Se for positivo ficara BOM negativo RUIM
                                                    if($cont < 0){
                                                            $notaF2 = '-broken';
                                                            $colorR = 'ef5c73';
                                                        }
                                                    if($cont >= 0){
                                                        $notaF2 = '';
                                                        $colorR = 'e81c37';
                                                    }
                                                    //Verificação se a pessoa esta logada
                                                    if($email == "invalido"){
                                                        $botao = "hidden";
                                                        $action = '#';
                                                        $format = '';
                                                    }
                                                    else{
                                                        $botao = "";
                                                        $action = 'avaliacaoadd.php';
                                                        $format = 'rating-format-liberar';
                                                    }

                                                    echo '<div class="col-xl-3 col-lg-3 col-md-4 col-6">
                                                            <div class="card">
                                                                <div class="aumentar-img">
                                                                    <img src="assets/img/gallery/'.$imagem[$i].'" class="card-img-top img-responsive" data-toggle="modal" data-target="#'.$imagem[$i].$v.'" height="225" alt="...">
                                                                </div>
                                                                <div class="card-body">
                                                                    <h5 class="card-title">'.$nome[$i].'</h5>
                                                                    <h6 class="card-subtitle mb-2 text-muted">'.$autor[$i].'</h6>
                                                                    <small class="text-muted">'.$ano[$i].'</small>
                                                                    <div class="course-caption">
                                                                        <div class="botao-add" '.$botao.'>
                                                                            <form action="interesseAdd.php" method="POST">
                                                                                <button name="email" value="'.$email.'" class="d-flex justify-content-center align-items-center">
                                                                                    <input type="" name="nome_livro" value="'.$livros_id[$i].'" hidden>
                                                                                    <i class="fas fa-plus"></i>
                                                                                </button>
                                                                            </form>
                                                                        </div>
                                                                        <div class="course-cap-bottom d-flex justify-content-between rating-format" style="cursor: pointer;">
                                                                            <div class="'.$format.'">
                                                                                <ul>
                                                                                    <li style="color: #'.$colorR.';"><i class="fas fa-heart'.$notaF2.'"></i></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <form action="'.$action.'" method="POST">
                                                                            <div class="ratingg" '.$botao.'>
                                                                                <input type="" name="email" value="'.$email.'" hidden>
                                                                                <input type="" name="nome_livro" value="'.$livros_id[$i].'" hidden>
                                                                                <button type="submit" name="avaliacao" value="like" class="bom"> <i class="fas fa-thumbs-up"></i></button>
                                                                                <button type="submit" name="avaliacao" value="dislike" class="ruim"><i class="fas fa-thumbs-down"></i></button>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>';
                                                    $i++;
                                                }
                                            ?>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="nav-nav-Sport" role="tabpanel" aria-labelledby="nav-Sports">
                                        <div class="row">
                                            <?php 
                                                $conecta = mysqli_connect($nome_servidor, $nome_usuario, $senhaBanco, $nome_banco);
                                                $livros = mysqli_query($conecta, "select * from livros where genero='Ficcao'");
                                                $i=0;
                                                //Loop de todos os livros
                                                while($exibe = mysqli_fetch_assoc($livros)){
                                                    $v=1;                                                    
                                                    $nome[$i] = $exibe["titulo"];
                                                    $autor[$i] = $exibe["autor"];
                                                    $ano[$i] = $exibe["ano"];
                                                    $genero[$i] = $exibe["genero"];
                                                    $imagem[$i] = $exibe["imagem"];
                                                    $livros_id[$i] = $exibe["id"];
                                                    $descricao[$i] = $exibe["descricao"];
                                                    $ano[$i] = date("d/m/Y", strtotime($ano[$i]));

                                                    $rating[$i] = mysqli_query($conecta, 'select * from avaliacao inner join livros on avaliacao.livros_id = livros.id where livros_id = '.$livros_id[$i].'');
                                                    $cont=0;
                                                    $x=0;
                                                    echo ' <div class="modal" id="'.$imagem[$i].$v.'" tabindex="-1">
                                                                  <div class="modal-dialog modal-lg">
                                                                    <div class="modal-content">
                                                                      <div class="modal-header">
                                                                        <h5 class="modal-title">'.$nome[$i].'</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                          <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                      </div>
                                                                      <div class="modal-body">
                                                                        <p>'.$descricao[$i].'</p>
                                                                      </div>
                                                                      
                                                                    </div>
                                                                  </div>
                                                                </div>';
                                                    //loop para as avaliações de cada filme
                                                    while($votos[$i] = mysqli_fetch_assoc($rating[$i])){
                                                        $nota[$x] = $votos[$i]["avaliacao"];
                                                        //COMPUTAR NOTAS DE FILMES
                                                        if ($nota[$x] == "like")
                                                            $cont++;
                                                        else if ($nota[$x] == "dislike")
                                                            $cont--;
                                                        $x++;
                                                    }

                                                    //Se for positivo ficara BOM negativo RUIM
                                                    if($cont < 0){
                                                            $notaF2 = '-broken';
                                                            $colorR = 'ef5c73';
                                                        }
                                                    if($cont >= 0){
                                                        $notaF2 = '';
                                                        $colorR = 'e81c37';
                                                    }
                                                    //Verificação se a pessoa esta logada
                                                    if($email == "invalido"){
                                                        $botao = "hidden";
                                                        $action = '#';
                                                        $format = '';
                                                    }
                                                    else{
                                                        $botao = "";
                                                        $action = 'avaliacaoadd.php';
                                                        $format = 'rating-format-liberar';
                                                    }

                                                    echo '<div class="col-xl-3 col-lg-3 col-md-4 col-6">
                                                            <div class="card">
                                                                <div class="aumentar-img">
                                                                    <img src="assets/img/gallery/'.$imagem[$i].'" class="card-img-top img-responsive" data-toggle="modal" data-target="#'.$imagem[$i].$v.'" height="225" alt="...">
                                                                </div>
                                                                <div class="card-body">
                                                                    <h5 class="card-title">'.$nome[$i].'</h5>
                                                                    <h6 class="card-subtitle mb-2 text-muted">'.$autor[$i].'</h6>
                                                                    <small class="text-muted">'.$ano[$i].'</small>
                                                                    <div class="course-caption">
                                                                        <div class="botao-add" '.$botao.'>
                                                                            <form action="interesseAdd.php" method="POST">
                                                                                <button name="email" value="'.$email.'" class="d-flex justify-content-center align-items-center">
                                                                                    <input type="" name="nome_livro" value="'.$livros_id[$i].'" hidden>
                                                                                    <i class="fas fa-plus"></i>
                                                                                </button>
                                                                            </form>
                                                                        </div>
                                                                        <div class="course-cap-bottom d-flex justify-content-between rating-format" style="cursor: pointer;">
                                                                            <div class="'.$format.'">
                                                                                <ul>
                                                                                    <li style="color: #'.$colorR.';"><i class="fas fa-heart'.$notaF2.'"></i></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <form action="'.$action.'" method="POST">
                                                                            <div class="ratingg" '.$botao.'>
                                                                                <input type="" name="email" value="'.$email.'" hidden>
                                                                                <input type="" name="nome_livro" value="'.$livros_id[$i].'" hidden>
                                                                                <button type="submit" name="avaliacao" value="like" class="bom"> <i class="fas fa-thumbs-up"></i></button>
                                                                                <button type="submit" name="avaliacao" value="dislike" class="ruim"><i class="fas fa-thumbs-down"></i></button>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>';
                                                    $i++;
                                                }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            <!-- End Nav Card -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- all-course End -->
    </main>

    <!-- INICIO MODAL -->
        <div class="modal" id="exampleModal" tabindex="-1">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p>Modal body text goes here.</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>
        <!-- FIM MODAL -->
        
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