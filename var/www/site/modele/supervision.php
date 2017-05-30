<?php
function recup_infos()
{
	$bdd = connexion_bdd("link");
	$reponse = $bdd->query('SELECT source, destinataire, date_debut, date_fin, proto, nom_projet FROM log');
	$i = 0;
	$table = array();
	while ($donnees = $reponse->fetch())
	{
		$source = split(':', $donnees['source']);
		$date_fin = split(' ', $donnees['date_fin']);
		$table[$i] ="<tr><td>".$source[0]."</td><td>".$donnees['destinataire']."</td><td>".$donnees['date_debut']."</td><td>".$date_fin[0]." ".$date_fin[1]." ".$date_fin[2]." ".$date_fin[4]."</td><td>".$donnees['proto']."</td><td>".$donnees['nom_projet']."</td></tr>";
		$i++;
	}
	return $table;
	$reponse->closeCursor();
}
?>
