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
$reponse = $bdd->query('delete from article where id=' .$id);

}
catch(Exception $e2)
{
die('Erreur :'.$e2->getMessage()); 
}





header('Location:../Web/article.php');
?>