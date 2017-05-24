<?php
function telechargement($filedir,$filename)
{
	$fichier = "$filedir/$filename.zip"; 
	$fichier_taille = filesize($fichier);
	header('Content-disposition: attachment; filename="'. basename($fichier) . '"');
	header('Content-Type: application/zip');
	header('Content-Length: $fichier_taille');
	header('Pragma: no-cache');
	header('Cache-Control: must-revalidate, post-check=0, pre-check=0, public');
	header('Expires: 0');
	readfile($fichier);
}
?>
