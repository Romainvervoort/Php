<?php
if (isset ($_FILES['avatar']))
{
	$dossier='upload/';
	$fichier =basename($_FILES['avatar']['name']);
	if (move_uploaded_file($_FILES['avatar']['tmp_name'],$dossier . $fichier))
	{
		echo 'Réussi';
	}
	else
	{
		echo 'Echec';
	}
}
?>