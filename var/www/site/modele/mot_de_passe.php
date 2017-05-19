<?php
function verif_passwd($mail,$mdp)
{
        $bdd = connexion_bdd("link");
	$sortie = 0;
        $reponse = $bdd->query("SELECT mdp FROM users WHERE mail LIKE '".$mail."'");
	$donnees = $reponse->fetch();
	if ($donnees['mdp'] == sha1($mdp))
        {
		$sortie = 1;		
	}
        $reponse->closeCursor();
	return $sortie;
}
function changepasswd($mail,$mdp)
{
        $bdd = connexion_bdd("link");
	$bdd->exec("UPDATE users SET mdp='".$mdp."' WHERE mail LIKE '".$mail."'");
}
?>
