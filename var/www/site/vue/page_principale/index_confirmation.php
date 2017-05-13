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
    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1 id="homeHeading">LINK</h1></div><br>
                <img src="/vue/page_principale/img/logo.png" height="250" width="275">
                <hr>
                <p style="font-size:26px">Félicitations, vous vous êtes bien inscrit. Vous allez recevoir un mail de confirmation et plus tad un mail vous donnant l'authorisation</p>
                <a href="index.php" class="btn btn-default btn-xl page-scroll">Retour à l'accueil</a>
	<br/><br/><br/><?php if(isset ($alerte)) {echo $alerte;} ?><br/>
            </div>
        </div>
    </header>
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
