<?php
include_once("modele/modifs.php");
if(! isset($_POST['mail']) AND ! isset($_POST['projet']))
{
	echo "aucun chngement effectué";
	include_once("vue/admin/pages/modifications.php");
}
else
{
	$mail_actuel = $_POST['mail_actuel'];
	if($_POST['mail'] == "")
	{
		$mail = "none";
	}
	else
	{
		$mail = $_POST['mail'];
	}
	if($_POST['projet'] == "")
	{
		$projet = "none";
	}
	else
	{
		$projet = $_POST['projet'];
	}
	modif($mail_actuel, $mail, $projet);
	include_once("modele/utilisateurs.php");
	$table = recup_infos();
	include_once("vue/admin/pages/projets.php");
}
?>
