
<!DOCTYPE html>
<html>
<?php
require'header.php';
?>
<body>
	<section>
		<form method="POST" action="inscription2.php">
			<div class="centre">
				<h1>Nom</h1>
				<input type="text" name="nom"></br>
				
				<h1>Prénom</h1>
				<input type="text" name="prenom"></br>
				
				<h1>e-mail</h1>
				<input type="text" name="mail"></br>
				
				<h1>mot de passe</h1>
				<input type="password" name="mdp"></br>
				
				<input type ="submit" value="Envoyer">
				</div>
		</form>
	</section>
</body>




<?php
require'footer.php';
?>
</html>
