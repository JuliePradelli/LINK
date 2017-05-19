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
    <link href="vue/page_principale/vendor/bootstrap/js/bootstrap.min.js" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="vue/page_principale/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vue/page_principale/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="vue/page_principale/css/creative.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="https://stackedit.io/res-min/themes/base.css" />
    <script type="text/javascript" src="https://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS_HTML"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                        <a href="index.php?page=mot_de_passe">Changement mot de passe</a>
                    </li>
		    <li>
                        <a class="page-scroll" href="#about">Téléchargement</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Tutoriel</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Vérification</a>
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
        <br/><br/><br/><?php if(isset ($alerte)) {echo $alerte;} ?><br/><br/><br/>
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
<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
  Télecharger
</button>
<div class="collapse" id="collapseExample">
  <div class="well" style="background-color: #999;">
    Windows :
<br>	    
Mac OS :
  </div>
</div>
                   <!-- <a href="index.php?page=user_inscription" class="page-scroll btn btn-default btn-xl sr-button">Bouton ou mettre les fichiers zip</a> -->
                </div>
            </div>
        </div>
    </section>

    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Tutoriel OpenVPN</h2>
                    <hr class="primary">




<h2 id="installation-du-client-openvpn">Installation du client OpenVPN  </h2>

<p>Après que l’administrateur ait validé l’accès à votre machine, téléchargez le client OpenVPN selon votre OS (Windows, Linux, Mac OS) </p>



<h4 id="pour-linux">Pour Linux</h4>



<pre class="prettyprint"><code class=" hljs cs">apt-<span class="hljs-keyword">get</span> install openvpn  </code></pre>



<h4 id="pour-windows">Pour Windows</h4>

<p>Télécharger le dossier du type “nomduprojet”-“date”-windows.zip <br>
Décompresser ce dossier <br>
Exécuter le fichier openvpn-client-install-2.4.1-windows.exe <br>
Copier les fichiers dans C: /Programmes/OpenVPN/config</p>

<p>Lancer le client OpenVPN GUI en mode administrateur </p>

<p><img src="https://lh3.googleusercontent.com/-h_OxWjlnt8Q/WRMG2gS0-dI/AAAAAAAABNk/3lHGvlJQzcUX3nnjk9c6_m412zKKjqydQCLcB/s0/openvpn.png" alt="enter image description here" title="openvpn.png"> </p>

<p>Importer le fichier .ovpn</p>

<p><img src="https://lh3.googleusercontent.com/-j4gTlDEVvmc/WRMHnIYNmqI/AAAAAAAABNw/mPinjWo1UWUyEdFJ7Co6OHsLge5UJFPgACLcB/s0/importfile.png" alt="enter image description here" title="importfile.png"></p>

<p>Dans Configuration, indiquer le chemin où OpenVPN doit récupérer le fichier .ovpn, dans notre cas ce sera C: /Programmes/OpenVPN/config</p>

<p>Se connecter au serveur OpenVPN en cliquant sur Connecter, une fenêtre va s’ouvrir  </p>

<p><img src="https://lh3.googleusercontent.com/-oNagKbH8NS8/WRMJn52MEUI/AAAAAAAABOE/QTTiMCR9zZM9--DkBaVsDugXwf61ee57ACLcB/s0/connexionvpn.png" alt="enter image description here" title="connexionvpn.png"></p>

<p>La fenêtre se ferme et le logo OpenVPN devient vert lorsque la connexion est établie</p>

<p><img src="https://lh3.googleusercontent.com/-kGyYRszGXBs/WRMLZY-owrI/AAAAAAAABOg/_dYCx4QRtpEvXfTB5rXD42KL3_aIXPuIQCLcB/s0/connect%25C3%25A9vpn.png" alt="enter image description here" title="connectévpn.png"></p>

<p>Si la connexion a échouée, vous pouvez voir les logs</p>

<p><img src="https://lh3.googleusercontent.com/-152LrNHlbOE/WRMKmp6gv6I/AAAAAAAABOQ/Q1mM5nIm8joMX8NVI7V93AwQY6K7YOQcQCLcB/s0/logvpn.png" alt="enter image description here" title="logvpn.png"></p>



<h4 id="pour-mac-os">Pour Mac OS</h4>

<p>Télécharger le dossier du type “nomduprojet”-“date”-mac.zip</p>

<p>Lancer l’installation du logiciel TunnelBlick equivalent OpenVPN client pour Mac OS. Si Mac demande une confirmation, cliquez sur Ouvrir</p>

<p><img src="https://lh3.googleusercontent.com/-29cv1UmZ2Cc/WRMMclr03TI/AAAAAAAABO4/DsJt7f72xhkrz0Bs-k8R5muEfoijG6dLQCLcB/s0/01-large.png" alt="enter image description here" title="01-large.png"></p>

<p>Afin de lancer l’installation vous devez indiquer vos identifiants Mac</p>

<p><img src="https://lh3.googleusercontent.com/-QCGPAN8QVK0/WRMM7xrJf9I/AAAAAAAABPI/BSkLtRNcR_YqpnP078aPcKXZea1UY2joQCLcB/s0/02-large.png" alt="enter image description here" title="02-large.png"></p>

<p>Lancer l’application Tunnelblick, glisser votre fichier .ovpn dans la fenêtre Tunnelblick </p>

<p><img src="https://lh3.googleusercontent.com/-bZeQ6Oy_wsU/WRMoo2OAgHI/AAAAAAAABQY/FiLklnkTS30gimywA-f6t2293_a3gYUqACLcB/s0/tdbtunnel.PNG" alt="enter image description here" title="tdbtunnel.PNG"></p>

<p>Puis cliquer sur Connecter </p>

<p><img src="https://lh3.googleusercontent.com/-naNUJvpzGiE/WRVmzhObdzI/AAAAAAAABRA/nc51iiJV49ocL2AZ64JHlVnmK86zTwxDgCLcB/s0/connect%25C3%25A9.png" alt="enter image description here" title="connecté.png"></p>

<p>Cette fenêtre doit s’ouvrir si vous êtes connecté</p>

<p>Si la connexion n’est pas établie, vous pouvez voir les logs dans la fenêtre principale de Tunnelblick </p>
                </div>
            </div>
        </div>
    </section>

   <!-- <aside class="bg-dark">
        <div class="container text-center">
            <div class="call-to-action">
                <h2>Vérifications</h2>
            </div>
        </div>
    </aside>-->

<aside class="bg-dark">
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-4 text-center">
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
</aside>
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
