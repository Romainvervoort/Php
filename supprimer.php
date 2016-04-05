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
$bdd = new PDO('mysql:host=mysql6.000webhost.com;dbname=a5075427_test;charset=utf8','a5075427_root','root1994');
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