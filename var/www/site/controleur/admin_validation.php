<?php
include_once("modele/validation.php");
if(! isset($_POST['radio']))
{
	$table = recup_users(); 
	include_once("vue/admin/pages/validation.php");
}
else
{
	validation($_POST['radio']);
	$table = recup_users(); 
	include_once("vue/admin/pages/validation.php");
}
?>
