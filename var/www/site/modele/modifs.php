<?php
function modif($pseudo, $mail, $projet)
{
	$bdd = connexion_bdd("link");
	$check = 0;
	if($mail != "none")
	{
		$bdd->exec("UPDATE users SET mail='".$mail."' WHERE mail LIKE '".$pseudo."'");
		$check = 1;
	}
	if($projet != "none" AND $check == 0)
	{
		$bdd->exec("UPDATE projets SET nom='".strtoupper($projet)."' WHERE idprojet=(SELECT projet_idprojet FROM users WHERE mail LIKE '".$pseudo."')");
	}
	elseif($projet != "none" AND $check == 1)
	{
		$bdd->exec("UPDATE projets SET nom='".strtoupper($projet)."' WHERE idprojet=(SELECT projet_idprojet FROM users WHERE mail LIKE '".$mail."')");
	}
}
?>
