<?php
function deconnexion($mail)
{
	$bdd = connexion_bdd("link");
	$bdd->exec("UPDATE users SET etat=0 WHERE mail LIKE '".$mail."'");
}
?>
