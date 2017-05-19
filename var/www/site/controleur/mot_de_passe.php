<?php
include_once("modele/mot_de_passe.php");
if (isset($_POST['mail']) AND isset($_POST['oldmdp']) AND isset($_POST['newmdp']) AND isset($_POST['confmdp']))
{
	$verification = verif_passwd($_POST['mail'],$_POST['oldmdp']);
	if($verification == 1)
	{
		echo "boucle 1";
		changepasswd($_POST[mail], sha1($_POST[$newmdp]));	
		include_once("vue/page_principale/index_mot_de_passe.php");
	}
	else
	{
		echo "boucle 2";
		include_once("vue/page_principale/index_mot_de_passe.php");
	}
}
else 
{
	include_once("vue/page_principale/index_mot_de_passe.php");
}
?>
