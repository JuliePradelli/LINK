<?php
echo "je passe";
include_once("modele/supervision.php");
$table = recup_infos();
include_once("vue/admin/pages/supervision.php");
?>
