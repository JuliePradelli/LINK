<?php
function recup_infos()
{
	$bdd = connexion_bdd("link");
	$reponse = $bdd->query('SELECT users.iduser, users.mail, users.etat, users.validation, projets.nom FROM users JOIN projets ON users.projet_idprojet=projets.idprojet WHERE users.role=0');
	$table = array();
	$i = 0;
	while ($donnees = $reponse->fetch())
	{
		$table[$i] ="<tr><td><input type=\"radio\" name=\"radio\" value=\"".$donnees['iduser']."\"></td><td>".$donnees['mail']."</td><td>".$donnees['etat']."</td><td>".$donnees['validation']."</td><td>".$donnees['nom']."</td></tr>";
		$i++;
	}
	return $table;
	$reponse->closeCursor();
}
function recup_iduser()
{
	$bdd = connexion_bdd("link");
	$reponse = $bdd->query('SELECT iduser FROM users WHERE role=0');
	$table = array();
	$i = 0;
	while ($donnees = $reponse->fetch())
	{
		$table[$i] =$donnees['iduser']; 
		$i++;
	}
	return $table;
	$reponse->closeCursor();
}
function suppression($id)
{
	$bdd = connexion_bdd("link");
	$bdd->exec("delete from users where iduser=".$id);
}
function infos($id)
{
	$bdd = connexion_bdd("link");
	$reponse = $bdd->query('SELECT users.mail, users.etat, users.validation, projets.nom FROM users JOIN projets ON users.projet_idprojet=projets.idprojet WHERE users.iduser='.$id);
	$donnees = $reponse->fetch();
	$table = array();
	$table[0] = $donnees['mail'];
	if($donnees['etat'] == 0)
	{
		$table[1] = "déconnecté";
	}
	else
	{
		$table[1] = "connecté";
	}
	if($donnees['validation'] == 0)
	{
		$table[2] = "Non validé";
	}
	else
	{
		$table[2] = "Validé";
	}
	$table[3] = $donnees['nom'];
	return $table;
}
?>
