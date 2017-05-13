<?php
function test()
{
        $bdd = connexion_bdd("mydb");
        $reponse = $bdd->query('SELECT mail FROM user');
        while ($donnees = $reponse->fetch())
        {
                echo $donnees['mail'];
        }
        $reponse->closeCursor();
}
?>
