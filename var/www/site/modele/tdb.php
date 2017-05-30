<?php
function recup_nb_users()
{
	$bdd = connexion_bdd("link");
	$reponse = $bdd->query('SELECT COUNT(*) FROM users');
	$donnees = $reponse->fetch();
	return $donnees['COUNT(*)'];
	$reponse->closeCursor();
}
function recup_nb_projets()
{
	$bdd = connexion_bdd("link");
	$reponse = $bdd->query('SELECT COUNT(*) FROM projets');
	$donnees = $reponse->fetch();
	return $donnees['COUNT(*)'];
	$reponse->closeCursor();
}
function recup_nb_certificats()
{
	$bdd = connexion_bdd("link");
	$reponse = $bdd->query('SELECT COUNT(DISTINCT projet_idprojet) FROM users WHERE users.validation=1');
	$donnees = $reponse->fetch();
	return $donnees['COUNT(DISTINCT projet_idprojet)'];
	$reponse->closeCursor();
}
function recup_nb_attente()
{
	$bdd = connexion_bdd("link");
	$reponse = $bdd->query('SELECT COUNT(*) FROM users WHERE users.validation=0');
	$donnees = $reponse->fetch();
	return $donnees['COUNT(*)'];
	$reponse->closeCursor();
}
?>
