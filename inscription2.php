<?php 
	session_start();
	$nom=$_POST['nom'];
	$prenom=$_POST['prenom'];
	$mail=$_POST['mail'];
	$mdp=$_POST['mdp'];

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

		$req=$bdd-> prepare("Insert into utilisateur(email,mdp,nom,prenom) values (:mail,MD5(:mdp),:nom,:prenom)");
		$req->execute(array(
							'mail'=>$mail,
							'mdp'=>$mdp,
							'nom'=>$nom,
							'prenom'=>$prenom,

							));
	}
	catch(Exception $e2)
	{
		die('Erreur :'.$e2->getMessage()); 
	}

	header('Location:../Web/formulaire.php');
?>

