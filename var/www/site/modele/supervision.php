<?php
function recup_infos()
{
	$bdd = connexion_bdd("link");
	$reponse = $bdd->query('SELECT source, destinataire, date_debut, date_fin, proto, nom_projet FROM log');
	$i = 0;
	$table = array();
	while ($donnees = $reponse->fetch())
	{
		$table[$i] ="<tr><td>".$donnees['source']."</td><td>".$donnees['destinataire']."</td><td>".$donnees['date_debut']."</td><td>".$donnees['date_fin']."</td><td>".$donnees['proto']."</td><td>".$donnees['nom_projet']."</td></tr>";
		$i++;
	}
	return $table;
	$reponse->closeCursor();
}
?>
