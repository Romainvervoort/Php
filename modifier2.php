<?php 
	session_start();
	$idd=$_GET['idd'];
	$titre=$_GET['titre'];
	$auteur=$_GET['auteur'];
	$contenu=$_GET['contenu'];
	try
		{
		$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8','root','root');
		}
	catch(Exception $e)
		{
		die('Erreur :'.$e->getMessage());
		}
	try
		{
		$req= $bdd-> prepare("UPDATE article set Titre=:titre,contenu=:contenu,Auteur=:auteur where id=".$idd);
			$req->execute(array(
				'titre' => $titre,
				'contenu' => $contenu,
				'auteur' => $auteur
				));
		}
	catch(Exception $e2)
	{
	die('Erreur :'.$e2->getMessage()); 
	}

	header('Location:../Web/Article.php');


?>

























