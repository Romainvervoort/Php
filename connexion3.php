	              
<?php
include('header.php');

          		if ((isset($_POST['email']) && !empty($_POST['email'])) && (isset($_POST['mdp']) && !empty($_POST['mdp']))){

          			$base = mysqli_connect('mysql6.000webhost.com', 'a5075427_root', 'root1994');
          			mysqli_select_db($base, 'a5075427_test');
          			$mdp = MD5($_POST['mdp']);
          			$email = $_POST['email'];
          			
          			$sql = 'SELECT count(*) FROM utilisateur WHERE email="'.$email.'" AND mdp="'.$mdp.'"';
          			$req = mysqli_query($base, $sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());
          			$data = mysqli_fetch_array($req);
					$sid = MD5($email.time());
					setcookie('sid',$sid, time()+360);

          			mysqli_free_result($req);
          			
          			if ($data[0] == 1){
          				echo 'Connexion reussi !';
          				
          				$update = 'UPDATE utilisateur SET sid = "'.$sid.'",co=1 WHERE email="'.$email.'" AND mdp="'.$mdp.'"';
          				$req2 = mysqli_query($base, $update) or die('Erreur SQL !<br />'.$update.'<br />'.mysql_error());
          			}

          			else if ($data[0] == 0){
          				$erreur = 'Compte non reconnu.';
          				echo $erreur;
          			}
          			else
          			{
          				$erreur = 'Echec de la connexion';
          				echo $erreur;
          			}
          			mysqli_close($base);
          		}
          	
      	?>

<FORM Method = "Post" Action = "">
	<div class ="clearfix">
		<label for="Email">Email : </label>
		<div class ="input"><input type ="email" name = "email">
	</div>
	<div class ="clearfix">
		<label for="mdp">Mot de passe : </label>
		<div class ="input"><input type ="password" name = "mdp">
	</div>
	
	<input type="submit" value = "Envoyer">
</form>
<?php
include('footer.php');
?>