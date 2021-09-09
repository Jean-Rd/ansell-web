<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Create a stylish landing page for your business startup and get leads for the offered services with this HTML landing page template.">
    <meta name="author" content="Inovatik">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
	<meta property="og:site_name" content="" /> <!-- website name -->
	<meta property="og:site" content="" /> <!-- website link -->
	<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta property="og:type" content="article" />

    <!-- Website Title -->
    <title>Ansell</title>
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,600,700,700i&amp;subset=latin-ext" rel="stylesheet">
    <link href="view/css/bootstrap.css" rel="stylesheet">
    <link href="view/css/fontawesome-all.css" rel="stylesheet">
    <link href="view/css/swiper.css" rel="stylesheet">
	<link href="view/css/magnific-popup.css" rel="stylesheet">
	<link href="view/css/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
      
	<!-- Favicon  -->
    <link rel="icon" href="view/assets/logo.png">

</head>
<body data-spy="scroll" data-target=".fixed-top">
    
    <!-- Preloader -->
	<div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->
    

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <!-- Text Logo - Use this if you don't have a graphic logo -->
        <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Evolo</a> -->

        <!-- Image Logo -->
        <a class="navbar-brand logo-image" href="index.html"><img src="view/assets/ansell.png" alt="alternative"></a>
        
        <!-- Mobile Menu Toggle Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-awesome fas fa-bars"></span>
            <span class="navbar-toggler-awesome fas fa-times"></span>
        </button>
        <!-- end of mobile menu toggle button -->

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#header">Inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#aventura">La Aventura</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#productos">Productos Participantes</a>
                </li>
               
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#preguntas">Tienes Algún Problema </a>
                </li>

                <?php
                    if(isset($_SESSION)) 
                    { 
                        echo '<li class="nav-item">
                                <a class="nav-link page-scroll login" href="view/modulos/salir.php">Salir</a>
                            </li>';

                    }else
                    {
                        echo $_SESSION['nombre'];
                        echo '<li class="nav-item">
                                <a class="nav-link page-scroll" href="#request">Inscribirse</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link page-scroll login" >Ingresar</a>
                            </li>';
                    }
                ?>
                

            </ul>
            
        </div>
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->


    <!-- Header -->
    <header id="header" class="header">
        <div class="header-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="text-container">
                            
                            <h1><span class="turquoise">La Aventura De Las 5 Gemas</span> Y El Guante de Poder </h1>
                            <p class="p-large">Unete a esta aventura donde los mejores heroes podran ganar grandiosos premios.</p>
                            <a class="btn-solid-lg page-scroll" href="#services">DESCUBRIR</a>
                        </div> <!-- end of text-container -->
                    </div> <!-- end of col -->
                    <div class="col-lg-6 image-banner">
                        <div class="image-container">
                            <img class="img-fluid" src="view/assets/banner.jpg" alt="alternative">
                        </div> <!-- end of image-container -->
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of header-content -->
    </header> <!-- end of header -->
    <!-- end of header -->





    <!-- Services -->
    <div id="services" class="cards-1">
        <div class="container">
            
            <div class="row">
                <div class="col-lg-12 grid-card">

                    <!-- Card -->
                    <a href="#booster">
                    <div class="card">
                        <img class="card-image" src="view/assets/protest.png" alt="alternative">
                        <div class="card-body">
                            <h4 class="card-title">Booster de Poder</h4>
                            <p>Our team of enthusiastic marketers will analyse and evaluate how your company stacks against the closest competitors</p>
                        </div>
                    </div>
                    </a>
                    <!-- end of card -->

                    <!-- Card -->
                    <a href="#premios">
                        <div class="card">
                            <img class="card-image" src="view/assets/medal.png" alt="alternative">
                            <div class="card-body">
                                <h4 class="card-title">Premios</h4>
                                <p>Once the market analysis process is completed our staff will search for opportunities that are in reach</p>
                            </div>
                        </div>
                    </a>
                    <!-- end of card -->

                    <!-- Card -->
                    <a class='login-puntos'>
                        <div class="card">
                            <img class="card-image" src="view/assets/point.png" alt="alternative">
                            <div class="card-body">
                                <h4 class="card-title">Tus Puntos</h4>
                                <p>With all the information in place you will be presented with an action plan that your company needs to follow</p>
                            </div>
                        </div>
                    </a>
                    <!-- end of card -->
                    
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-1 -->
    <!-- end of services -->


    <!-- Details 1 -->
    <div class="basic-1" id="aventura">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <h2>La Aventura De Las 5 Gemas Del Poder</h2>
                        <p>Premiamos a los 10 mejores heroes en el segundo mes de consurso y al final los 5 que encuentren una de las 5 gemas se convertiran en uno de los Superheroes ganadores de uno de los premios.</p>
                        <a class="btn-solid-reg popup-with-move-anim" href="#details-lightbox-1">ACERCA DE LA AVENTURA</a>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <div class="image-container">
                        <img class="img-fluid" src="view/images/details-1-office-worker.svg" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-1 -->
    <!-- end of details 1 -->

    
    <!-- Details 2 -->
    <div class="basic-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="image-container">
                        <img class="img-fluid" src="view/images/details-2-office-team-work.svg" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <div class="text-container">
                        <h2>Ente Más Puntos Más Oportunidades De Ganar.</h2>
                   
                        <ul class="list-unstyled li-space-lg">
                            <li class="media">
                                <i class="fas fa-check"></i>
                                <div class="media-body">1er. Superhéroe Gema Dorada, viaje al mar de los 7 colores para 2 personas todo pago.</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-check"></i>
                                <div class="media-body">2do. Superhéroe Gema Plateada, scooter de velocidad.</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-check"></i>
                                <div class="media-body">3er. Superhéroe Gema Verde, ruedas de gloria, bicicleta.</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-check"></i>
                                <div class="media-body">4to. Superhéroe Gema Verde, noche cósmica, Glamping para 2 personas todo pagado.</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-check"></i>
                                <div class="media-body">5to. Superhéroe Gema Naranja, experiencia de recarga en Spa de lujo.</div>
                            </li>
                        </ul>
                        <a class="btn-solid-reg popup-with-move-anim" href="#details-lightbox-2">REGLAS DE LA AVENTURA</a>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-2 -->
    <!-- end of details 2 -->

    <!-- Details Lightboxes -->
    <!-- Details Lightbox 1 -->
	<div id="details-lightbox-1" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="container">
            <div class="row">
                <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
                <div class="col-lg-8">
                    <div class="image-container">
                        <img class="img-fluid" src="view/images/details-lightbox-1.svg" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                <div class="col-lg-4">
                    <h3>La Gran Aventura</h3>
                    <hr>
                    <h5>Las 5 Gemas Del Poder</h5>
                  
                    <p>Inscribete a esta gran aventura donde podras ser uno de 
                        los Superheroes ganadores de uno de los premios.
                    </p>
                    <ul class="list-unstyled li-space-lg">
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body">Hace unos meses en una noche oscura y lluviosa, nós informaron del robo del guante de poder de Ansell
                                , ellas son las que aseguran la seguridad de miles de trabajadores en todo el mundo.</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body">Hemos reunido a los mejores luchadores para esta aventura, los 5 jugadores que encuentren las 5 gemas, serán recompensados.</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body">Su misión sera vender la mayor cantidad de productos Ansell.</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body">En esta misión los dioses te acomopañaran, podras encontrar ayuda para logras mas puntos. Como el Booster del Poder, potencializadores....</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body">Incribete
                                para iniciar esta misión.</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body">Los 5 mejores jugadores seran ganadores de las recompensas.</div>
                        </li>
                    </ul>
                    <a class="btn-solid-reg mfp-close page-scroll" href="#request">INSCRIBIRME</a> <a class="btn-outline-reg mfp-close as-button" href="#screenshots">ATRAS</a>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of details lightbox 1 -->

    <!-- Details Lightbox 2 -->
	<div id="details-lightbox-2" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="container">
            <div class="row">
                <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
                <div class="col-lg-8">
                    <div class="image-container">
                        <img class="img-fluid" src="view/images/details-lightbox-2.svg" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                <div class="col-lg-4">
                    <h3>Los Secretos de la Aventura</h3>
                    <hr>
                    <h5>Obten puntos de ventaja</h5>
                  
                    <p>
                        Conoce los secretos de la aventura para ser uno de los Superhéroes ganadores.
                    </p>


                    <ul class="list-unstyled li-space-lg">
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body">ACUMULAR PUNTOS, por cada unidad de producto vendido, tus puntos aumentan en 1.</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body">ARMADURA DE PODER, cada venta de trajesAlphaTec, tus puntos se aumentan en 3.</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body">ORÁCULO, ingresa a la plataforma al recibir el llamado via mail, mira el video, realiza la prueba de conocimiento y gana de ventaja 20 puntos.</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body">RAYOS DE LUZ, durante la misión vas a recibir otros Booster sorpresa, debes estar atento a tu correo y tu celular. Estos potencializadores serán activados por pocos dias.</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body">RECOMPENSA PARA LOS HÉROES, los 5 super heroes ganadores son aquellos que ocupen los 5 primeros puestos en el ranking hasta el 30 de enero del 2022.</div>
                        </li>
                    </ul>
                    <a class="btn-solid-reg mfp-close page-scroll" href="#request">INSCRIBIRME</a> <a class="btn-outline-reg mfp-close as-button" href="#screenshots">ATRAS</a>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of details lightbox 2 -->
    <!-- end of details lightboxes -->

    <!-- Request -->
    <div id="request" class="form-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <h2>Inscribete Aqui</h2>
                        <p>Solo los mejores luchadores haran parte de la aventura de las 5 gemas del poder.
                            Si tu has recibido una invitación digita el código y únete a la misión.
                            Al registrarte tendras ingreso a la plataforma donde podras hacer seguimiento todos los puntos que consiguas mes a mes en la competencia. </p>
                        <ul class="list-unstyled li-space-lg">
                            <li class="media">
                                <i class="fas fa-check"></i>
                                <div class="media-body"><strong class="blue">Automate your marketing</strong> activities and get results today</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-check"></i>
                                <div class="media-body"><strong class="blue">Interact with all your</strong> targeted customers at a personal level</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-check"></i>
                                <div class="media-body"><strong class="blue">Convince them to buy</strong> your company's awesome products</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-check"></i>
                                <div class="media-body"><strong class="blue">Save precious time</strong> and invest it where you need it the most</div>
                            </li>
                        </ul>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">

                    <!-- Request Form -->
                    <div class="form-container">
                        <form method="post">
                            <div class="form-group">
                                <input type="text" class="form-control-input" name="txtNombre" required>
                                <label class="label-control" for="txtNombre">Nombre y Apellido</label>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control-input" name="txtCedula" required>
                                <label class="label-control">Cédula</label>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control-input" name="txtDistribuidor" required>
                                <label class="label-control">Distribuido</label>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control-input" name="txtSede" required>
                                <label class="label-control">Sede</label>
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group">
                                <input type="email" class="form-control-input" name="txtCorreo" required>
                                <label class="label-control">Email</label>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <input type="number" class="form-control-input" name="txtCelular" required>
                                <label class="label-control">Celular</label>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control-input" name="txtCiudad" required>
                                <label class="label-control">Ciudad</label>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <input type="number" class="form-control-input" name="txtPass" required>
                                <label class="label-control" for="txtPass">Asigna tu Clave</label>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <input type="number" class="form-control-input" id="txtCodigo" name="txtCodigo" required>
                                <label class="label-control">Código</label>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group checkbox">
                                <input type="checkbox" id="rterms" value="Agreed-to-Terms" name="rterms" required>Estoy de acuerdo con la <a id="pdf">Política de Privacidady los Términos & Condiciones</a>
                                <div class="help-block with-errors"></div>
                                  
                            </div>
                            <div class="form-group">
                                <input type="submit" class="form-control-submit-button" value="INSCRIBIRME">
                            </div>
                            <div class="form-message">
                                <div id="rmsgSubmit" class="h3 text-center hidden"></div>
                            </div>
                        </form>
                        <?php 
                            $dataRegistro = new CPrincipalController();

                            $result = $dataRegistro->ctrRegistrarse();
                        ?>
                    </div> <!-- end of form-container -->
                    <!-- end of request form -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of form-1 -->
    <!-- end of request -->

    <!-- About -->
    <div id="about" class="basic-4">
        <div class="container" id="productos">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Productos Participantes</h2>
                    <p class="p-heading p-large">Estos son los productos Ansell participantes, que te daran fuerza y puntos para ganar esta aventura. Entre más puntos más oportunidades de ser uno de los Superhéroes ganadores.</p>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">
                    
                    <!-- Team Member -->
                    <div class="team-member">
                        <div class="image-wrapper">
                            <img class="img-fluid" src="view/assets/producto1.jpg" alt="alternative">
                        </div> <!-- end of image-wrapper -->
                        <p class="p-large"><strong>EDGE 48-126</strong></p>
                        <!-- <p class="job-title">Business Developer</p> -->
                       
                    </div> <!-- end of team-member -->
                    <!-- end of team member -->

                    <!-- Team Member -->
                    <div class="team-member">
                        <div class="image-wrapper">
                            <img class="img-fluid" src="view/assets/producto2.jpg" alt="alternative">
                        </div> <!-- end of image wrapper -->
                        <p class="p-large"><strong>EDGE 82-133</strong></p>
                        <!-- <p class="job-title">Online Marketer</p> -->
                        
                    </div> <!-- end of team-member -->
                    <!-- end of team member -->

                    <!-- Team Member -->
                    <div class="team-member">
                        <div class="image-wrapper">
                            <img class="img-fluid" src="view/assets/producto3.jpg" alt="alternative">
                        </div> <!-- end of image wrapper -->
                        <p class="p-large"><strong>AlphaTec 09-928</strong></p>
                        <!-- <p class="job-title">Software Engineer</p> -->
                        
                    </div> <!-- end of team-member -->
                    <!-- end of team member -->

                    <!-- Team Member -->
                    <div class="team-member">
                        <div class="image-wrapper">
                            <img class="img-fluid" src="view/assets/producto4.jpg" alt="alternative">
                        </div> <!-- end of image wrapper -->
                        <p class="p-large"><strong>HyFlex 11-840</strong></p>
                        <!-- <p class="job-title">Product Manager</p> -->
                        
                    </div> <!-- end of team-member -->
                    <!-- end of team member -->
                    <!-- Team Member -->
                    <div class="team-member">
                        <div class="image-wrapper">
                            <img class="img-fluid" src="view/assets/producto5.jpg" alt="alternative">
                        </div> <!-- end of image-wrapper -->
                        <p class="p-large"><strong>HyFlex 74-048</strong></p>
                        <!-- <p class="job-title">Business Developer</p> -->
                       
                    </div> <!-- end of team-member -->
                    <!-- end of team member -->
                    <!-- Team Member -->
                    <div class="team-member">
                        <div class="image-wrapper">
                            <img class="img-fluid" src="view/assets/producto6.jpg" alt="alternative">
                        </div> <!-- end of image-wrapper -->
                        <p class="p-large"><strong>AlphaTec 4000-122</strong></p>
                        <!-- <p class="job-title">Business Developer</p> -->
                       
                    </div> <!-- end of team-member -->
                    <!-- end of team member -->
                    <!-- Team Member -->
                    <div class="team-member">
                        <div class="image-wrapper">
                            <img class="img-fluid" src="view/assets/producto7.jpg" alt="alternative">
                        </div> <!-- end of image-wrapper -->
                        <p class="p-large"><strong>AlphaTec 2300 PLUS</strong></p>
                        <!-- <p class="job-title">Business Developer</p> -->
                       
                    </div> <!-- end of team-member -->
                    <!-- end of team member -->
                    <!-- Team Member -->
                    <div class="team-member">
                        <div class="image-wrapper">
                            <img class="img-fluid" src="view/assets/producto8.jpg" alt="alternative">
                        </div> <!-- end of image-wrapper -->
                        <p class="p-large"><strong>AlphaTec 16-650 </strong></p>
                        <!-- <p class="job-title">Business Developer</p> -->
                       
                    </div> <!-- end of team-member -->
                    <!-- end of team member -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-4 -->
    <!-- end of about -->

    <!-- Testimonials -->
    <div class="slider-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6" id="booster">
                    <div class="image-container">
                        <img class="img-fluid" src="view/images/testimonials-2-men-talking.svg" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <h2>Booster de Poder</h2>

                    <!-- Card Slider -->
                    <div class="slider-container">
                        <div class="swiper-container card-slider">
                            <div class="swiper-wrapper">
                                
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <div class="card-body">
                                            <p class="testimonial-text">Los más astutos luchadores conocerán el secreto de los Booster de poder,
                                                que los ayudaran a lograr muchos más puntos</p>
                                            <p class="testimonial-author">BOOSTER DE PODER</p>
                                        </div>
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->
        
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <div class="card-body">
                                            <p class="testimonial-text">Cada unidad que vendas se multiplicara x3, una ventaja que no puedes perder para ser parte de los ganadores.</p>
                                            <p class="testimonial-author">ARMADURA DE PODER</p>
                                        </div>
                                    </div>        
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->
        
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <div class="card-body">
                                            <p class="testimonial-text">Ingresa a la plataforma al recibir el llamado via email, mira el video, realiza la prueba 
                                                de conocimiento y gana la ventaja con 20 puntos.</p>
                                            <p class="testimonial-author">EL ORÁCULO</p>
                                        </div>
                                    </div>        
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->
                               
                            </div> <!-- end of swiper-wrapper -->
        
                            <!-- Add Arrows -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <!-- end of add arrows -->
        
                        </div> <!-- end of swiper-container -->
                    </div> <!-- end of slider-container -->
                    <!-- end of card slider -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of slider-2 -->
    <!-- end of testimonials -->

   
    
    <!-- Pricing -->
    <div id="pricing" class="cards-2">
        <div class="container" id="premios">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Premios</h2>
                    <p class="p-heading p-large">Estos son los premios que los mejores Superheroes se llevaran.</p>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">

                    <!-- Card-->
                    <div class="card">
                        <div class="label">
                            <p class="best-value">Superhéroe Gema Dorada</p>
                        </div>
                        <div class="card-body premios">
                            <img src="view/assets/premio1.jpg">
                            <div class="button-wrapper">
                                <a class="btn-solid-reg page-scroll" href="#request">INSCRIBIRME</a>
                            </div>
                        </div>
                    </div> <!-- end of card -->
                    <!-- end of card -->

                    <!-- Card-->
                    <div class="card">
                        
                        <div class="card-body premios">
                            <img src="view/assets/premio2.jpg">
                            <div class="button-wrapper">
                                <a class="btn-solid-reg page-scroll" href="#request">INSCRIBIRME</a>
                            </div>
                        </div>
                    </div> <!-- end of card -->
                    <!-- end of card -->

                    <!-- Card-->
                    <div class="card">
                        
                        <div class="card-body premios">
                            
                            <img src="view/assets/premio3.jpg">
                            <div class="button-wrapper">
                                <a class="btn-solid-reg page-scroll" href="#request">INSCRIBIRME</a>
                            </div>
                        </div>
                    </div> <!-- end of card -->
                    <!-- end of card -->
                    <!-- Card-->
                    <div class="card">
                        <div class="card-body premios">
                            <img src="view/assets/premio4.jpg">
                            <div class="button-wrapper">
                                <a class="btn-solid-reg page-scroll" href="#request">INSCRIBIRME</a>
                            </div>
                        </div>
                    </div> <!-- end of card -->
                    <!-- end of card -->
                    <!-- Card-->
                    <div class="card">
                        <div class="card-body premios">
                            <img src="view/assets/premio5.jpg">
                            <div class="button-wrapper">
                                <a class="btn-solid-reg page-scroll" href="#request">INSCRIBIRME</a>
                            </div>
                        </div>
                    </div> <!-- end of card -->
                    <!-- end of card -->
                    <!-- Card-->
                    <div class="card">
                        <div class="card-body premios">
                            <img src="view/assets/premio6.jpg">
                            <div class="button-wrapper">
                                <a class="btn-solid-reg page-scroll" href="#request">INSCRIBIRME</a>
                            </div>
                        </div>
                    </div> <!-- end of card -->
                    <!-- end of card -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-2 -->
    <!-- end of pricing -->


    

    <!-- Contact -->
    <div id="contact" class="form-2">
        <div class="container" id="preguntas">
            <div class="row">
                <div class="col-lg-12">

                    <h2>Contactanos</h2>
                    <ul class="list-unstyled li-space-lg">
                        <li class="address">Tienes dudas sobre tus puntos o talvez preguntas sobre como puedes utilizar los Booster?<br> Escríbenos, estamos atentos para solucionar todas tus dudas.</li>
                        <li>Contáctanos <i class="fas fa-envelope"></i><a class="turquoise" href="mailto:office@evolo.com">laaventuradelguatedepoder@gmail.com</a></li>
                        <li><i class="fas fa-phone"></i><a class="turquoise" href="tel:003024630820">+57 3204808870</a></li>
                        <li></li>
                        
                    </ul>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row d-flex justify-content-center">
                
                <div class="col-lg-6">
                    
                    <!-- Contact Form -->
                    <form id="contactForm" data-toggle="validator" data-focus="false">
                        
                        <div class="form-group">
                            <input type="email" class="form-control-input" id="cemail" required>
                            <label class="label-control" for="cemail">Email</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control-input" id="cnumber" required>
                            <label class="label-control" for="cnumber">Telefono</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control-input" id="cpass" required>
                            <label class="label-control" for="cpass">Telefono</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control-textarea" id="cmessage" required></textarea>
                            <label class="label-control" for="cmessage">Tu mensaje</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group checkbox">
                            <input type="checkbox" id="cterms" value="Agreed-to-Terms" required>He leído y acepto la <a id="pdf2">Política de Privacidady los Términos & Condiciones</a> 
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control-submit-button">ENVIAR MENSAJE</button>
                        </div>
                        <div class="form-message">
                            <div id="cmsgSubmit" class="h3 text-center hidden"></div>
                        </div>
                    </form>
                    <!-- end of contact form -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of form-2 -->
    <!-- end of contact -->


  


    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">Copyright © 2021 <a href="#">Ansell Colombia</a> - Todos los derechos reservados</p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright --> 
    <!-- end of copyright -->
    
    <div class="terminos animate__animated animate__fadeIn">
        <i id="termExit" class="far fa-times-circle"></i>
        <iframe src="view/assets/TerminosCondiciones.pdf"></iframe>
    </div>

    <div class="modalIniciar animate__animated animate__fadeIn">

		<div class="button-exit">
			<i class="far fa-times-circle"></i>
		</div>

		<div class="container-login">

			<div class="login-content">
				<form class="form-log" method="post">
					<h2 class="title">Bienvenidos</h2>
					<div class="input-div one">
					<div class="i">
							<i class="fas fa-user"></i>
					</div>
					<div class="div">
							<h5>Usuario</h5>
							<input type="number" class="input" name="txtUsuarioLogin">
					</div>
					</div>
					<div class="input-div pass">
					<div class="i"> 
							<i class="fas fa-lock"></i>
					</div>
					<div class="div">
							<h5>Contraseña</h5>
							<input type="number" class="input" name="txtPassLogin">
					</div>
					</div>
					<a class="a-log">Olvidaste tu contraseña?</a>
					<input type="submit" class="btn-log" value="ENTRAR">
				</form>
                <?php
                    $dataLogin = new CPrincipalController();
                    $resultLogin = $dataLogin->ctrLogin();
                ?>
			</div>
		</div>
	</div>
    	
    <!-- Scripts -->
    <script src="view/js/terminos.js"></script>
    <script src="view/js/login.js"></script>
    <script src="view/js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="view/js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="view/js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="view/js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="view/js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="view/js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
    <script src="view/js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="view/js/scripts.js"></script> <!-- Custom scripts -->
</body>
</html>