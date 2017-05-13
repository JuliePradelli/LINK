<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>LINK</title>

    <!-- Bootstrap Core CSS -->
    <link href="vue/page_principale/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vue/page_principale/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vue/page_principale/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="vue/page_principale/css/creative.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">LINK</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#about">A propos</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Services</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.php?page=connexion">Connexion</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header>
	<br/><?php if(isset ($alerte)) {echo $alerte;} ?>
        <div class="header-content">
            <div class="header-content-inner">
                <h1 id="homeHeading">LINK</h1></div><br>
                <img src="/vue/page_principale/img/logo.png" height="250" width="275">
                <hr>
                <p style="font-size:26px">Get the direct connection to your workstation!</p>
                <a href="#about" class="btn btn-default btn-xl page-scroll">Découvrir</a>
            </div>
        </div>
    </header>

    <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">On a ce qu'il vous faut !</h2>
                    <hr class="light">
                    <p class="text-faded">Facile d’utilisation et sécurisée,
                    notre solution offre la possibilité à n’importe quel étudiant de l’école
                    de configurer son accès VPN vers sa machine
                    hébergée dans l’établissement. 
                    </p>
                    <a href="index.php?page=user_inscription" class="page-scroll btn btn-default btn-xl sr-button">Inscription</a>
                </div>
            </div>
        </div>
    </section>

    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">A votre service</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-5 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-desktop text-primary sr-icons"></i>
                        <h3>Interface web</h3>
                        <p class="text-muted">Deux accès : administrateur et étudiant</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-5 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-envelope text-primary sr-icons"></i>
                        <h3>Système de tickets</h3>
                        <p class="text-muted">Une demande, une confirmation et une acceptation</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-5 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-paper-plane text-primary sr-icons"></i>
                        <h3>Connexion VPN</h3>
                        <p class="text-muted">Un accès direct à votre machine</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-5 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-lock text-primary sr-icons"></i>
                        <h3>Sécurisation</h3>
                        <p class="text-muted">Application des principes de la sécurité</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-5 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-eye text-primary sr-icons"></i>
                        <h3>Supervision</h3>
                        <p class="text-muted">Surveillance des flux</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <aside class="bg-dark">
        <div class="container text-center">
            <div class="call-to-action">
                <h2>L'équipe</h2>
                <img src="/vue/page_principale/img/jc.png">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <img src="/vue/page_principale/img/julie.png">
                <!--<a href="http://startbootstrap.com/template-overviews/creative/" class="btn btn-default btn-xl sr-button">Download Now!</a>-->
            </div>
        </div>
    </aside>

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">On reste en contact :)</h2>
                    <!--<hr class="primary">-->
                </div>
                <div class="col-lg-12 text-center">
                    <i class="fa fa-envelope-o fa-3x sr-contact"></i>
                    <p><br/><a href="mailto:thiburce@intechinfo.fr">thiburce@intechinfo.fr</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="mailto:pradelli@intechinfo.fr">pradelli@intechinfo.fr</a></p>
                </div>
            </div>
        </div>
    </section>

    <!-- jQuery -->
    <script src="vue/page_principale/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vue/page_principale/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="vue/page_principale/vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vue/page_principale/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="vue/page_principale/js/creative.min.js"></script>

</body>

</html>
