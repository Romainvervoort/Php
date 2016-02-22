<?php
require'header.php';
?>
       	<?php
$pdo = new PDO('mysql:host=localhost;dbname=test;charset=utf8','root','root');
				if(isset($_POST['search']) && $_POST['search'] != NULL)
				{
					$requete = htmlspecialchars($_POST['search']);
					$mots = explode( " ", $requete );
					if( count( $mots ) > 0 ) 
					{
					   $query = "SELECT * FROM article WHERE ";
					   for( $i = 0; $i < count( $mots ); $i++ ) {
					      $query .= "Titre LIKE '%". $mots[$i] ."%' OR contenu LIKE '%". $mots[$i] ."%' ";
					      if( $i < count( $mots ) - 1 )
					      {
					         $query .= " OR ";
					      }
				    	}
				    }	
					$query .= " ORDER BY id DESC";
					$reponse = $pdo->query($query);
					while ($donnees = $reponse->fetch())
					{
					?>
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
							<?php echo '<a href="supprimer.php?id=' . $donnees['id'] . '"><input type="submit" value="Supprimer">'?>
					<?php		
					}


				}
			?>
			<?php
require'footer.php';
?>