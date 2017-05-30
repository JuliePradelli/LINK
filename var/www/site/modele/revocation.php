<?php
function recup_projets()
{
	$bdd = connexion_bdd("link");
	$reponse = $bdd->query('SELECT DISTINCT projets.nom FROM projets JOIN users ON projets.idprojet=users.projet_idprojet WHERE users.validation=1');
	$table = array();
	$i = 0;
	while ($donnees = $reponse->fetch())
	{
		$table[$i] = $donnees['nom'];
		$i++;
	}
	return $table;
	$reponse->closeCursor();
}
function users_par_projets()
{
	$bdd = connexion_bdd("link");
	$table = recup_projets();
	$table_users = array();
	$i = 0;
	for($i = 0; $i <= count($table); $i++)
	{
		$table_users[$i] = array();
		$j = 0;
		$reponse = $bdd->query('SELECT users.iduser, users.mail FROM users JOIN projets ON users.projet_idprojet=projets.idprojet WHERE users.validation=1 AND projets.nom="'.$table[$i].'"');
		while ($donnees = $reponse->fetch())
        	{
                	$table_users[$i][$j] = $donnees['mail'];
                	$j++;
        	}
	}
	return $table_users;
}
function suppression_users($projet)
{
	$bdd = connexion_bdd("link");
	$table = array();
	$i = 0;
	$reponse = $bdd->query('SELECT users.iduser FROM users JOIN projets ON users.projet_idprojet=projets.idprojet WHERE projets.nom="'.$projet.'"');
	while ($donnees = $reponse->fetch())
	{
		$table[$i] = $donnees['iduser'];		
		$i++;
	}
	$l = count($table);
	for($j = 0; $j <= $l; $j++)
	{
		$bdd->exec("DELETE FROM users WHERE iduser=".$table[$j]);
	}
}
function suppression_projet($projet)
{
	$bdd = connexion_bdd("link");
	$bdd->exec("DELETE FROM projets WHERE nom='".$projet."'");
}
?>
