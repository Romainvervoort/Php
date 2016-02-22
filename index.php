<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Mon blog</title>
    <meta name="description" content="Petit blog pour m'initier à PHP">
    <meta name="author" content="Jean-philippe Lannoy">

    <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/main.css" rel="stylesheet">
	 <?php
		include 'setcookie.php';
		include 'getcookie.php';
	?>
  </head>

  <body>
  
    <div class="container">

      <div class="content">
      
        <div class="page-header well">
          <h1>Mon Blog <small>Pour m'initier à PHP</small></h1>
        </div>
        
        <div class="row">
        
          <div class="span8">
          	<!-- notifications -->
          	
          	<!-- contenu -->
          
            Problème notif
          
          </div>
          
          <nav class="span4">
            <h2>Menu</h2>
            
            <ul>
			 <form action="recherche.php" method="Post">

			<input type="text" name="search" size="10">

			<input type="submit" value="Ok">
                <li><a href="index.php">Accueil</a></li>
                <li><a href="article.php">Consulter un article</a></li>
				<li><a href="formulaire.php">Ajouter un article</a></li>
				<li><a href="connexion3.php">Connexion</a></li>
				<li><a href="Inscription.php">Inscription</a></li>
            </ul>
            
          </nav>
        </div>
        
      </div>

      <footer>
        <p>&copy; Nilsine & ULCO 2015</p>

      </footer>

    </div>

  </body>

</html>

