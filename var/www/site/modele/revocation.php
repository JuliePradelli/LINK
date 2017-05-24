<?php
function recup_projets()
{
	$bdd = connexion_bdd("link");
	$reponse = $bdd->query('SELECT projets.nom FROM projets');
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
		$reponse = $bdd->query('SELECT users.mail FROM users JOIN projets ON users.projet_idprojet=projets.idprojet WHERE projets.nom="'.$table[$i].'"');
		while ($donnees = $reponse->fetch())
        	{
                	$table_users[$i][$j] = $donnees['mail'];
                	$j++;
        	}
	}
	return $table_users;
}
?>
