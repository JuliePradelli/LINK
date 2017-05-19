<?php
function existencecompte($mail, $mdp)
{
	$bdd = connexion_bdd("link");
	$sortie = false;
	$reponse = $bdd->query('SELECT mail, mdp FROM users');
	while ($donnees = $reponse->fetch())
	{
		if ($donnees['mail'] == $mail AND $donnees['mdp'] == $mdp)
		{
			$sortie = true;
			break;
		}
	}
	return $sortie;
	$reponse->closeCursor();
}
function connexion($mail)
{
	$bdd = connexion_bdd("link");
	$bdd->exec("UPDATE users SET etat=1 WHERE mail LIKE '".$mail."'");
}
function nouvelleinscription($mail, $mdp, $nom_projet, $admin)
{
	$bdd = connexion_bdd("link"); # faire un join quand ce sera fonctionnel
	$bdd->exec("INSERT INTO projets(nom) VALUES('".$nom_projet."')");
	$bdd->exec("INSERT INTO users(mail, mdp, etat, role, projet_idprojet) VALUES('".$mail."','".$mdp."', 0, 0, LAST_INSERT_ID())");

}
function verifadmin($mail)
{
	$bdd = connexion_bdd("link");
	$reponse = $bdd->query('SELECT role FROM users WHERE mail LIKE "'.$mail.'"');
	$donnees = $reponse->fetch();
	$sortie = 0;
	if ($donnees["role"] == 1) 
	{
		$sortie = 1;
	}
	return $sortie;
}
function verifvalidation($mail)
{
	$bdd = connexion_bdd("link");
	$reponse = $bdd->query('SELECT validation FROM users WHERE mail LIKE "'.$mail.'"');
	$donnees = $reponse->fetch();
	$sortie = 0;
	if ($donnees["validation"] == 1) 
	{
		$sortie = 1;
	}
	return $sortie;
}
?>
