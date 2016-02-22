
<!DOCTYPE html>
<html>
<?php
require'header.php';
?>
<body>
	<section>
		<form method="POST" action="formulaire2.php" enctype="multipart/form-data">
			<div class="centre">
				<h1>Titre</h1>
				<input type="text" name="titre"></br>
				<h1>Auteur</h1>
				<input type="text" name="auteur"></br>
				<h1>date</h1>
				<input type="date" name="date"></br>
				<h1>Contenu</h1>
				<input type="text" name="contenu"></br>
				<label for="image"> avatar:</label><br/>
				<input type="file" name="avatar" id="avatar"></br>
				<input type ="submit" value="Envoyer">
			</div>
		</form>
	</section>
</body>




<?php
require'footer.php';
?>
</html>