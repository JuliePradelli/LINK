<?php
include_once("modele/connexion_inscription.php");
if (isset($_POST['mail']) AND isset($_POST['mdp'])) 
{
	$existence=existencecompte($_POST['mail'], sha1($_POST['mdp']));
	if ($existence == 1) 
	{
		connexion($_POST['mail']);
		$_SESSION['pseudo']=$_POST['mail'];
		$_SESSION['mdp']=$_POST['mdp'];
		$admin = verifadmin($_POST['mail']); # à implémenter avec la bdd
		if ($admin == 1) 
		{
			$_SESSION['role'] = "admin";
			include_once("vue/admin/pages/tdb.php");
		}
		else
		{
			$pseudo = recuperationpseudo($_POST['mail']);
			$alerte = "<!-- alerte verte -->
			<div class='alert alert-success alert-dismissible' role='alert' style='width:50%;margin:0 auto;font-size:x-large;opacity:0.7'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
			<strong>".$pseudo.", bienvenue sur votre compte ! </strong></div>
			</div>
			<!-- fin alerte verte -->";
			$_SESSION['role'] = "user";
			include_once("vue/page_principale/index_users.php");
		}
	}
	else
	{
		$alerte="<!-- alerte rouge -->
		<div class='alert alert-danger alert-dismissible' role='alert' style='width:70%;margin:0 auto;opacity: 0.7'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
		<strong>Ce compte n'existe pas, veuillez vous inscrire.</strong></div>
		</div>
		<!-- fin alerte rouge -->";
		include_once("vue/login/form-2/index-connexion.php");
	}
}
else
{
	include_once("vue/login/form-2/index-connexion.php");
}
?>
