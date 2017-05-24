<?php
include_once("modele/telechargement.php");
	$bdd = connexion_bdd("link");
	$projet= $bdd->query('select users.mail, projets.nom FROM users JOIN projets ON users.projet_idprojet=projets.idprojet;');
	while ($donnees = $projet->fetch())
        {
		if ($donnees['mail'] == $_SESSION['pseudo'])
		{
			$nomprojet = $donnees['nom'];
			$var=strtolower($nomprojet);
			$name = exec('/var/scripts/script_filename.sh '.$var.' 1');
			$filedir = "/home/".$var;
			telechargement($filedir,$name);
		}
	}
?>
