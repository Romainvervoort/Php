<?php
require'header.php';
?>
 
<?php
	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8','root','root');
	}
	
	catch(Exception $e)
	{
		die('Erreur :'.$e->getMessage());
	}
	  
$reponse = $bdd->query('Select * from article');
while($donnees =$reponse->fetch())
	{
?>
 <div class="span8">
		<p>
		<h1><?php echo $donnees['Titre'];?></h1>
		<?php echo $donnees['contenu'];?>
		</p>
		<p>
		<?php
		echo'<img src="upload/' .$donnees["image"].' "/>';
		?>
		</p>
		<?php echo '<a href="modifier.php?id=' . $donnees['id'] . '"><input type="submit" value="Modifier">' ?>
		<?php echo '<a href="supprimer.php?id=' . $donnees['id'] . '"><input type="submit" value="Supprimer">' ?>
		<?php
	}
		$reponse->closeCursor();

		?>
		</div>
<?php
require'footer.php';
?>