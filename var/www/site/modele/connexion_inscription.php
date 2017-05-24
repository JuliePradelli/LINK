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
function nouvelleinscription($mail, $mdp, $nom_projet, $admin, $idprojet)
{
	$bdd = connexion_bdd("link"); # faire un join quand ce sera fonctionnel
	if($idprojet == "none")
	{
		$bdd->exec("INSERT INTO projets(nom) VALUES('".$nom_projet."')");
		$bdd->exec("INSERT INTO users(mail, mdp, etat, role, projet_idprojet) VALUES('".$mail."','".$mdp."', 0, 0, LAST_INSERT_ID())");
	}
	else
	{
		$bdd->exec("INSERT INTO users(mail, mdp, etat, role, projet_idprojet) VALUES('".$mail."','".$mdp."', 0, 0, $idprojet)");
	}
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
function verifexistenceprojet($nom)
{       
        $bdd = connexion_bdd("link");
        $sortie = array();
	$sortie[0] = 0;
        $reponse = $bdd->query('SELECT idprojet, nom FROM projets');
        while ($donnees = $reponse->fetch())
        {       
                if ($donnees['nom'] == $nom)
                {       
                        $sortie[0] = 1;
                        $sortie[1] = $donnees['nom'];
			$sortie[2] = $donnees['idprojet'];
                        break;
                }
        }
        return $sortie;
        $reponse->closeCursor();
}
?>
