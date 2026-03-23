<?php

$user = ''; // le nom user dans phpmyadmin
$password = ''; // le mot de passe dans phpmyadmin
try
{
 
    $bdd = new PDO('mysql:host=localhost;dbname=;charset=utf8',$user,$password);
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
} 

?>