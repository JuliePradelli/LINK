<?php
include_once("modele/tdb.php");
$nb_users = recup_nb_users();
$nb_projets = recup_nb_projets();
$nb_certificats = recup_nb_certificats();
$attente = recup_nb_attente();
include_once("vue/admin/pages/tdb.php");
?>
