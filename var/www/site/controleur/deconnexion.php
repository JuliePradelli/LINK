<?php
include_once("modele/deconnexion.php");
if(! empty($_SESSION['pseudo']))
{
	deconnexion($_SESSION['pseudo']);
	$alerte = "<!-- alerte verte -->
	<div class='alert alert-success alert-dismissible' role='alert' style='width:50%;margin:0 auto;font-size:x-large;opacity:0.7'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
	<strong>".$_SESSION['pseudo']." - déconnexion réussie, à bientôt sur notre site :) ! </strong></div>
	</div>
	<!-- fin alerte verte -->";
	session_unset();
	session_destroy();
	include_once("vue/page_principale/index.php");
}
?>
