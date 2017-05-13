<?php
#echo "coucou";
# ****************************** Démarrage du système de sessions PHP *************************************
#session_start();

# ********************************** Fonction de connexion à la BDD ****************************************
function connexion_bdd($mabdd)
{
	try
	{
	   $bdd = new PDO('mysql:host=localhost;dbname=link;charset=utf8', 'root', 'K8moA');
	}
	catch (Exception $e)
	{
	       die('Erreur : ' . $e->getMessage());
	}
	return($bdd);
}

# ********************************** Analyse de la query string ********************************************
if($_SERVER['QUERY_STRING'] != "")
{
	$querybreak = explode("&", $_SERVER['QUERY_STRING']);
	$t = array();
	for ($i=0; $i < count($querybreak); $i++) 
	{ 
		$t[$i] = explode("=", $querybreak[$i]);
	}
	$page = $t[0][1];
	if (count($t) > 1) 
	{
		$choix = $t[1][1];
	}
	switch ($page) 
	{
		case 'connexion':
			include_once("controleur/connexion.php");
			break;
		case 'accueil':
			include_once("vue/index.php");
			break;
		case 'user_inscription':
			include_once("controleur/user_inscription.php");
			break;
		case 'user_tutoriel':
			include_once("controleur/user_tutoriel.php");
			break;
		case 'admin_tdb':
			include_once("controleur/admin_tdb.php");
			break;
		case 'admin_utilisateurs':
			include_once("controleur/admin_utilisateurs.php");
			break;
		case 'admin_projets':
			include_once("controleur/admin_projets.php");
			break;
		case 'test':
			include_once("controleur/test.php");
			break;
	}
}
else
{
	include_once("vue/page_principale/index.php");
}
?>
