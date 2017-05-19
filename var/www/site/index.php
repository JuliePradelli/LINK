<?php
# ****************************** Démarrage du système de sessions PHP *************************************
session_start();
# ********************************** Fonction de connexion à la BDD ****************************************
#session_unset();
#session_destroy();
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
	if(empty($_SESSION['role']))
	{
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
			case 'test':
				include_once("controleur/test.php");
				break;
			default:
				include_once("vue/page_default.php");
		}
	}
	else
	{
		if($_SESSION['role'] == 'admin')
		{
			switch ($page)
			{
				case 'connexion': 
					include_once("vue/admin/pages/tdb.php");
					break;
				case 'accueil':
					include_once("vue/page_principale/index.php");
					break;
				case 'user_inscription':
					include_once("vue/admin/pages/tdb.php");
					break;
				case 'user_tutoriel':
					include_once("vue/admin/pages/tdb.php");
					break;
				case 'admin_tdb':
					include_once("controleur/admin_tdb.php");
					break;
				case 'admin_utilisateurs':
					include_once("controleur/admin_supervision.php");
					break;
				case 'admin_projets':
					include_once("controleur/admin_projets.php");
					break;
				case 'mot_de_passe':
					include_once("controleur/mot_de_passe.php");
					break;
				case 'deconnexion':
					include_once("controleur/deconnexion.php");
					break;
				default:
					include_once("vue/page_default.php");
			}
		}
		elseif($_SESSION['role'] == 'user')
		{
			switch ($page)
			{
				case 'connexion': 
					include_once("vue/page_principale/index_users.php");
					break;
				case 'accueil':
					include_once("vue/page_principale/index.php");
					break;
				case 'user_inscription':
					include_once("vue/page_principale/index_users.php");
					break;
				case 'user_tutoriel':
					include_once("vue/page_principale/index_users.php");
					break;
				case 'admin_tdb':
					include_once("vue/page_principale/index_users.php");
					break;
				case 'admin_utilisateurs':
					include_once("vue/page_principale/index_users.php");
					break;
				case 'admin_projets':
					include_once("vue/page_principale/index_users.php");
					break;
				case 'mot_de_passe':
					include_once("controleur/mot_de_passe.php");
					break;
				case 'deconnexion':
					include_once("controleur/deconnexion.php");
					break;
				default:
					include_once("vue/page_default.php");
			}
		}		
	}
}
else
{
	include_once("vue/page_principale/index.php");
}
?>
