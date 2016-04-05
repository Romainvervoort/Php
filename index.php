<!DOCTYPE html>
<html lang="fr">
  <head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>


    <meta charset="utf-8">
    <title>Mon blog</title>
    <meta name="description" content="Petit blog pour m'initier à PHP">
    <meta name="author" content="Jean-philippe Lannoy">

    <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script src="js/libs/jquery.secret-source.min.js"></script>
  <script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
  <script src="js/bjqs-1.3.min.js"></script>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/main.css" rel="stylesheet">

<div style="display:none;">

	 <?php
		include 'setcookie.php';
		include 'getcookie.php';
	?>
</div>

  </head>

  <body>
  
    <div class="container">

      <div class="content">
      
        <div class="page-header well">
          <h1>Mon Blog <small>Pour m'initier à PHP</small></h1>
        </div>
        
        <div class="row">
        
          <div class="span8">
          <div id="conteneur">

      <!--  Outer wrapper for presentation only, this can be anything you like -->
      <div id="banner-fade">

        <!-- start Basic Jquery Slider -->
        <ul class="bjqs">
		
		<?php 
			try
		{
		$bdd = new PDO('mysql:host=mysql6.000webhost.com;dbname=a5075427_test;charset=utf8','a5075427_root','root1994');
		}
			catch(Exception $e)
		{
		die('Erreur :'.$e->getMessage());
		}
		$rep=$bdd->query('Select * from article Limit 3');
	?>
	<?php while($donnees=$rep->fetch())
	{
		?>
	
         <li><img src="upload/<?php echo $donnees['image']?>" title="<?php echo $donnees['Titre']?>" ></li>
		  <?php
       }
	   $rep->closeCursor();
	   ?>
       </ul>
        <!-- end Basic jQuery Slider -->

      </div>
      <!-- End outer wrapper -->

      
        
          </div>
          </div>
          
          <nav class="span4">
            <h2>Menu</h2>
            
            <ul>
			 <form action="recherche.php" method="Post">

			<input type="text" name="search" size="10">

			<input type="submit" value="Ok">
</form>
			
	
                <li><a href="index.php">Accueil</a></li>
                <li><a href="article.php">Consulter un article</a></li>
				<li><a href="formulaire.php">Ajouter un article</a></li>
				<li><a href="connexion3.php">Connexion</a></li>
				<li><a href="Inscription.php">Inscription</a></li>
				<li><a href="newsletter.php">Inscription Newsletter</a></li>
            </ul>
            
          </nav>
        </div>
        
      </div>

      <footer>
        <p>&copy; Nilsine & ULCO 2015</p>

      </footer>

    </div>

  </body>
<!--
<script>
$('ul').css('display', 'none');
			$('.span4').hover(function()
			{
				$('ul').slideDown();
			},function()
			{
				$('ul').slideUp();
			});
</script>
-->
<script class="secret-source">
        jQuery(document).ready(function($) {
          $('#banner-fade').bjqs({
            height      : 320,
            width       : 620,
            responsive  : true
          });
        });
      </script>


</html>
