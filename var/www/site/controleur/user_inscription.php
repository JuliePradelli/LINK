<?php
include_once("modele/connexion_inscription.php");
if (isset($_POST['mail']) AND isset($_POST['mdp'])) 
{
	$existence=existencecompte($_POST['mail'], $_POST['mdp']);
	if ($existence == 1) 
	{
		echo "Ce compte existe déa.";
		include_once("vue/inscription.php");
	}
	else
	{
		echo "Ce compte n'existe pas";
		nouvelleinscription($_POST['mail'], $_POST['mdp']);
		header('Location: http://localhost/PI-SR/index.php?page=connexion');
	}
}
else
{
	include_once("vue/inscription.php");
}
?>