<?php
include_once("modele/validation.php");
if(! isset($_POST['radio']))
{
	$table = recup_users(); 
	include_once("vue/admin/pages/validation.php");
}
else
{
	validation($_POST['radio']);
	$table = recup_users();
	$nomprojet = projet($_POST['radio']);
	exec("/var/scripts/script_vpn.sh ".$nomprojet);
	include_once("vue/admin/pages/validation.php");
}
?>
