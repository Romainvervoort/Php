<?php
	try
		{
		$pdo = new PDO('mysql:host=mysql6.000webhost.com;dbname=a5075427_test;charset=utf8','a5075427_root','root1994');
		}
	catch(Exception $e)
		{
		die('Erreur :'.$e->getMessage());
		}
  if(isset($_POST['email']))
  {

    $mail = $_POST['email'];

    
    if($pdo->exec("INSERT INTO News(mail) VALUES('$mail')") > 0 )
    {
      echo 'Votre email a bien été ajouté à la newsletter';
    }
    else
    {
      echo 'Echec enregistrement';
    }   
  }
?>