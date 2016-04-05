<head>
<meta charset="utf-8">
 
      
    <!-- bjqs.css contains the *essential* css needed for the slider to work -->
    <link rel="stylesheet" href="bjqs.css">

    <!-- some pretty fonts for this demo page - not required for the slider -->
    <link href='http://fonts.googleapis.com/css?family=Source+Code+Pro|Open+Sans:300' rel='stylesheet' type='text/css'> 

    <!-- demo.css contains additional styles used to set up this demo page - not required for the slider --> 
    <link rel="stylesheet" href="demo.css">

    <!-- load jQuery and the plugin -->
    <script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
    <script src="js/bjqs-1.3.min.js"></script>
      <script src="js/libs/jquery.secret-source.min.js"></script>
    <title>Mon blog</title>
    <meta name="description" content="Petit blog pour m'initier à PHP">
    <meta name="author" content="Jean-philippe Lannoy">

    <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/main.css" rel="stylesheet">
	  <div class="container">

      <div class="content">
      
        <div class="page-header well">
          <h1>Mon Blog <small>Pour m'initier à PHP</small></h1>
        </div>
    
        <div class="row">
        
          <div class="span8">
          	<!-- notifications -->
          	Problème notif
          	<!-- contenu -->
          
          
          
          </div>
          
          <nav class="span4">
            <h2>Menu</h2>
            
            <ul class=test2>
			 <form action="recherche.php" method="Post">

			<input type="text" name="search" size="10">

			<input type="submit" value="Ok">

			</form>
                     
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


  </head>