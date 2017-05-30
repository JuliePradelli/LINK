<?php
include_once("modele/revocation.php");
$table = recup_projets();
$tablebis = users_par_projets();
if (isset($_POST['radio']))
{
	suppression_users($_POST['radio']);
	suppression_projet($_POST['radio']);
	$table = recup_projets();
	$tablebis = users_par_projets();
	exec("/var/scripts/script_revocation.sh ".$_POST['radio']);
}
include_once("vue/admin/pages/revocation.php");
?>
