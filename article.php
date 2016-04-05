
<?php
require'header.php';	
?>
<div style="display:none;">
<?php
include 'getcookie.php';
?>
 </div>

<div>
<?php

	try
	{
		$bdd = new PDO('mysql:host=mysql6.000webhost.com;dbname=a5075427_test;charset=utf8','a5075427_root','root1994');
	}
	
	catch(Exception $e)
	{
		die('Erreur :'.$e->getMessage());
	}
	  
$reponse = $bdd->query('Select * from article');
?>
<?php while($donnees =$reponse->fetch())
	{
?>
		
      
		<h1><?php echo $donnees['Titre'];?></h1>
		<p>
		<?php echo $donnees['contenu'];?>
		</p>
		<p>
		<?php echo'<img src="upload/' .$donnees["image"].' "/>';?>
		</p>
		<?php
		$sid=$_COOKIE[sid];

		$veri=$bdd->query('Select id from utilisateur where sid ="'.$sid.'"');
		($donnee =$veri->fetch());
		
		if( $donnee['id']>1)
		{
		?>
		
		<?php echo '<a href="modifier.php?id=' . $donnees['id'] . '"><input type="submit" value="Modifier">' ?>
		<?php echo '<a href="supprimer.php?id=' . $donnees['id'] . '"><input type="submit" value="Supprimer">' ?>
		

<?php
		}
	}
		
		$reponse->closeCursor();

		?>
<?php
require'footer.php';
?>
