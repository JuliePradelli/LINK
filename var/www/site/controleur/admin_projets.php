<?php
include_once("modele/utilisateurs.php");
$table = recup_infos();
$idsuser = recup_iduser();
$l = count($table);
if(! isset($_POST['choix']))
{
	include_once("vue/admin/pages/projets.php");
}
else
{
	if($_POST['choix'] == "modifier")
	{
		if(! $_POST['radio'])
		{
			echo "alerte, aucun choix";
		}
		else
		{
			for($i = 0; $i <= $l; $i++)
			{
				if($_POST['radio'] == $idsuser[$i])
				{
					$infos = infos($idsuser[$i]);
					include_once("vue/admin/pages/modifications.php");
					break;
				}
			}
		}
	}
	elseif($_POST['choix'] == "supprimer")
	{
		if(! $_POST['radio'])
		{
			echo "alerte, aucun choix";
		}
		else
		{
			for($i = 0; $i <= $l; $i++)
			{
				if($_POST['radio'] == $idsuser[$i])
				{
					suppression($idsuser[$i]);
					break;
				}
			}
			$table = recup_infos();
			echo "alertee suppression de $idsuser[$i]";
			include_once("vue/admin/pages/projets.php");
		}
	}
}
?>
