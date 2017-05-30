<?php
include_once("modele/connexion_inscription.php");
if (isset($_POST['mail']) AND isset($_POST['mdp'])) 
{
	$existence=existencecompte($_POST['mail'], sha1($_POST['mdp']));
	if ($existence == 1) 
	{
		connexion($_POST['mail']);
		$admin = verifadmin($_POST['mail']);
		if ($admin == 1) 
		{
			$_SESSION['pseudo'] = $_POST['mail'];
			$_SESSION['role'] = "admin";
			include_once("modele/tdb.php");
			$nb_users = recup_nb_users();
			$nb_projets = recup_nb_projets();
			$nb_certificats = recup_nb_certificats();
			$attente = recup_nb_attente();
			include_once("vue/admin/pages/tdb.php");
		}
		else
		{
			$verif = verifvalidation($_POST['mail']);
			if($verif == 1)
			{
				$_SESSION['pseudo'] = $_POST['mail'];
				$_SESSION['role'] = "user";
				$alerte = "<!-- alerte verte -->
				<div class='alert alert-success alert-dismissible' role='alert' style='width:50%;margin:0 auto;font-size:x-large;opacity:0.7'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
				<strong>".$_SESSION['pseudo']." - connexion réussie ! </strong></div>
				</div>
				<!-- fin alerte verte -->";
				include_once("vue/page_principale/index_users.php");
			}
			else
			{
				$alerte="<!-- alerte rouge -->
                		<div class='alert alert-danger alert-dismissible' role='alert' style='width:70%;margin:0 auto;opacity: 0.7'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
                		<strong>Ce compte n'a pas encore été vérifié, veuillez attendre l'autorisation de l'administrateur.</strong></div>
                		</div>
                		<!-- fin alerte rouge -->";
                		include_once("vue/login/form-2/index-connexion.php");
			}
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
