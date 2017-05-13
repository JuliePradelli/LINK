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
                        <a class="page-scroll" href="#about">Téléchargement</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Tutoriel</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Vérifiction</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.php?page=deconnexion">Déconnexion</a>
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
                <a href="#about" class="btn btn-default btn-xl page-scroll">Téléchargez sans plus attendre !</a>
            </div>
        </div>
    </header>

    <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Choissisez le fichier compressé en fonction de votre système d'exploitation</h2>
                    <hr class="light">
                    <a href="index.php?page=user_inscription" class="page-scroll btn btn-default btn-xl sr-button">Bouton ou mettre les fichiers zip</a>
                </div>
            </div>
        </div>
    </section>

    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Tutoriel à faire</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
    </section>

    <aside class="bg-dark">
        <div class="container text-center">
            <div class="call-to-action">
                <h2>Vérifications</h2>
            </div>
        </div>
    </aside>

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Un problème, une question ?</h2>
                    <!--<hr class="primary">-->
                </div>
                <div class="col-lg-12 text-center">
                    <i class="fa fa-envelope-o fa-3x sr-contact"></i>
                    <p><br/><a href="mailto:eric.lalitte@esiea.fr">eric.lalitte@esiea.fr</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="mailto:david.huet@esiea.fr">david.huet@esiea.fr</a></p>
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
