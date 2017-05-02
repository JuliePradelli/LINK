<?php
function existencecompte($mail, $mdp)
{
	$bdd = connexion_bdd("Khronos");
	$sortie = false;
	$reponse = $bdd->query('SELECT mail, pwd FROM User');
	while ($donnees = $reponse->fetch())
	{
		if ($donnees['mail'] == $mail AND $donnees['pwd'] == $mdp)
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
	$bdd = connexion_bdd("Khronos");
		$bdd->exec("UPDATE User SET etat = 'connecte' WHERE mail LIKE '".$mail."'");
}
function nouvelleinscription($pseudo, $mail, $mdp)
{
	$bdd = connexion_bdd("Khronos");
	$bdd->exec("INSERT INTO User(pseudo, mail, offre, pwd, etat, admin, cloud_active, inscription) VALUES('".$pseudo."','".$mail."', 0, '".$mdp."', 'deconnecte', 0, 0, 0)");
}
function verifadmin($mail)
{
	$bdd = connexion_bdd("Khronos");
	$reponse = $bdd->query('SELECT admin FROM User WHERE mail LIKE "'.$mail.'"');
	$donnees = $reponse->fetch();
	$sortie = 0;
	if ($donnees["admin"] == 1) 
	{
		$sortie = 1;
	}
	return $sortie;
}
function recuperationpseudo($mail)
{
        $bdd = connexion_bdd("Khronos");
        $reponse = $bdd->query('SELECT pseudo FROM User WHERE mail LIKE "'.$mail.'"');
        $donnees = $reponse->fetch();
        return $donnees['pseudo'];
}
function verifoffre($mail)
{
        $bdd = connexion_bdd("Khronos");
        $reponse = $bdd->query('SELECT offre FROM User WHERE mail LIKE "'.$mail.'"');
        $donnees = $reponse->fetch();
        return $donnees['offre'];
}
?>