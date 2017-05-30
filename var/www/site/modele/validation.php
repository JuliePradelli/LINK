<?php
function recup_users()
{       
        $bdd = connexion_bdd("link");
        $reponse = $bdd->query('SELECT users.iduser, users.mail, projets.nom FROM users JOIN projets ON users.projet_idprojet=projets.idprojet WHERE users.role=0 AND users.validation=0');
        $table = array();
        $i = 0;
        while ($donnees = $reponse->fetch())
        {       
                $table[$i] ="<tr><td><input type=\"radio\" name=\"radio\" value=\"".$donnees['iduser']."\"></td><td>".$donnees['mail']."</td><td>".$donnees['nom']."</td></tr>";
                $i++;
        }
        return $table;
        $reponse->closeCursor();
}
function validation($id)
{
	$bdd = connexion_bdd("link");
	$bdd->exec("UPDATE users SET validation=1 WHERE iduser=".$id);	
}
function projet($id)
{
	$bdd = connexion_bdd("link");
	$reponse = $bdd->query('SELECT projets.nom FROM users JOIN projets ON users.projet_idprojet=projets.idprojet WHERE users.iduser='.$id);
	$donnees = $reponse->fetch();
	return $donnees['nom'];
}
?>
