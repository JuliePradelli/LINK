<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>LINK-Connexion</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="vue/login/form-2/assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="vue/login/form-2/assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="vue/login/form-2/assets/css/form-elements.css">
        <link rel="stylesheet" href="vue/login/form-2/assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="vue/login/form-2/assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="vue/login/form-2/assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="vue/login/form-2/assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="vue/login/form-2/assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="vue/login/form-2/assets/ico/apple-touch-icon-57-precomposed.png">
	<br/><?php if(isset ($alerte)) {echo $alerte;} ?>
    </head>

    <body>

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong>LINK</strong> Connexion</h1>
                            <div class="description">
                            	<p>
	                            	Connexion à votre compte personnel
                            	</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>Connectez-vous sur notre site</h3>
                            		<p>Veuillez remplir tous les champs</p>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-sign-in"></i>
                        		</div>
                            </div>
                            <div class="form-bottom">
			                    <form role="form" action="index.php?page=connexion" method="post" class="login-form">
			                    	<div class="form-group">
			                    		<label class="sr-only" for="form-username">Email @intechinfo.fr</label>
			                        	<input type="text" name="mail" placeholder="Email @intechinfo.fr..." class="form-username form-control" id="form-username">
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-password">Mot de passe</label>
			                        	<input type="password" name="mdp" placeholder="Mot de passe..." class="form-password form-control" id="form-password">
			                        </div>
			                        <button type="submit" class="btn">Connexion</button>
			                    </form>
		                    </div>
                        </div>
                    </div>
                </div>
<br/><a href="index.php" class="page-scroll btn btn-default btn-xl sr-button">Retour accueil</a>
            </div>
            
        </div>


        <!-- Javascript -->
        <script src="vue/login/form-2/assets/js/jquery-1.11.1.min.js"></script>
        <script src="vue/login/form-2/assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="vue/login/form-2/assets/js/jquery.backstretch.min.js"></script>
        <script src="vue/login/form-2/assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="vue/login/form-2/assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>
