
<?php 
	session_start();
	$titre=$_POST['titre'];
	$auteur=$_POST['auteur'];
	$date=$_POST['date'];
	$contenu=$_POST['contenu'];
	//////////////////////////////////////////////////////////////////////////////////////////
	if (isset ($_FILES['avatar']))
	{
		$dossier='upload/';
		$fichier =basename($_FILES['avatar']['name']);
		echo $fichier ;
	if (move_uploaded_file($_FILES['avatar']['tmp_name'],$dossier . $fichier))
	{
		echo 'Réussi';
	}
	else
	{
		echo 'Echec';
	}
	}
	try
	{
		$bdd = new PDO('mysql:host=mysql6.000webhost.com;dbname=a5075427_test;charset=utf8','a5075427_root','root1994');
	}
	catch(Exception $e)
	{
		die('Erreur :'.$e->getMessage());
	}
	try
	{

		$req=$bdd-> prepare("Insert into article(Auteur,Contenu,date,Titre,image) values (:auteur,:contenu,:date,:titre,:fichier)");
		$req->execute(array(
				'titre'=>$titre,
				'auteur'=>$auteur,
				'date'=>$date,
				'contenu'=>$contenu,
				'fichier'=>$fichier

	));
	}
	catch(Exception $e2)
	{
		die('Erreur :'.$e2->getMessage()); 
	}

	header('Location: ../Web/formulaire.php');
?>

