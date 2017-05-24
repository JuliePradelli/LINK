<?php
include_once("modele/revocation.php");
$table = recup_projets();
$tablebis = users_par_projets();
if (isset($POST['radio']))
{
	# supprimer tous les comptes dans la bdd
	
	# supprimer le projet
	# révoquer les cerificats	
}
else
{
}
include_once("vue/admin/pages/revocation.php");
?>
