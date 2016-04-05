<!DOCTYPE html>
<html lang="fr">
  <head>
  <?php
require'header.php';
?>
    <meta charset="utf-8">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script>

</script>
 </head>
 <body>
 
 <form action="newsletter.php" method="Post">

			<input type="text" name="search" size="10">

			<input type="submit" id="test" value="Ok">
</form>
<p> Formulaire php </p>

<meta charset="utf-8">
<div class="span8">
            <p>Email : <input type="email" name="email" id="email" /></p>
            <input type="button" id="button" value="OK">
          </form> 
          

<script>
$("#button").click(function(){
		$.ajax({
			type: 'POST',
			url: 'act.php',
			data: 'email='+$("input#email").val(),
		}).success(function(response){
		
				$("#div1").text("Inscription validé");
			
		});
	});
	</script>
	
	
<?php
$bdd = new PDO('mysql:host=mysql6.000webhost.com;dbname=a5075427_test;charset=utf8','a5075427_root','root1994');
	if(isset($_POST['search']))
		{
		$mail=$_POST['search'];
		$query = "SELECT * FROM utilisateur WHERE email='".$mail."'";
		$reponse = $bdd->query($query);
		while ($donnees = $reponse->fetch())
		{
		$t=$donnees['id'];
		$r=$donnees['Nom'];
		$p=$donnees['Prenom'];
		}
		
		if($t>0)
			{
		$req2="SELECT * from News where mail='".$mail."'";
		$rep =$bdd->query($req2);
		while ($donne =$rep-> fetch())
		{
		$id=$donne['id'];
		}
		if($id>0)
		{
		echo'<div id="message" class="alert alert-danger" style="display:none"></div>';
                ?>
                    <script type="text/javascript">
                      $("#message").text("Déjà Inscrit");
                      $( "#message" ).delay( 600 ).slideDown(300);
                      $( "#message" ).delay( 5600 ).slideUp(300);
                  </script>
		<?php
		}
		else
		{
		
		$req=$bdd-> prepare("Insert into News(mail) values (:mail)");
		$req->execute(array(
							'mail'=>$mail,				
							));
							
							
							
		
			

echo'<div id="message" class="alert alert-success" style="display:none"></div>';
                ?>
                    <script type="text/javascript">
                      $("#message").text("Vous avez été inscrit");
                      $( "#message" ).delay( 600 ).slideDown(300);
                      $( "#message" ).delay( 5600 ).slideUp(300);
                  </script>

<?php	
			}
		}	
		else
		{
		echo'<div id="message" class="alert alert-danger" style="display:none"></div>';
                ?>
                    <script type="text/javascript">
                      $("#message").text("Vous n'existez pas");
                      $( "#message" ).delay( 600 ).slideDown(300);
                      $( "#message" ).delay( 5600 ).slideUp(300);
                  </script>

		<?php


		}



}







?>
</div>
<?php
require'footer.php';
?>
</body>
</html>