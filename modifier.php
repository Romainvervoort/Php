<!DOCTYPE html>
<html>
<?php
require'header.php';
?>
<body>
	<?php 
		session_start();
		$id=$_GET['id'];


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
			$reponse = $bdd->query('Select * from article where id=' .$id);

		}
		catch(Exception $e2)
		{
			die('Erreur :'.$e2->getMessage()); 
		}
		($donnees =$reponse->fetch())

	?>
	<?php $idd= $donnees['contenu']?>
		<section>
		<form action="modifier2.php">
			<div class="centre">
				<h1>Titre</h1>
				<input type="text" name="titre" value="<?php echo $donnees['Titre']?>"></br>
				<h1>Auteur</h1>
				<input type="text" name="auteur"value="<?php echo $donnees['Auteur']?>"></br>
				<h1>Contenu</h1>
				<input type="text" name="contenu"value="<?php echo $donnees['contenu']?>"></br>
				<input type ="hidden" name="idd" value="<?php echo $donnees['id']?>">

			<?php echo '<a href="./modifier2.php?idd='. $donnees['id'] . '"><input type="submit" value="Modifier">' ?>
			</div>
		</form>
		</section>

</body>




<?php
require'footer.php';
include 'setcookie.php';
include 'getcookie.php';

?>
</html>
