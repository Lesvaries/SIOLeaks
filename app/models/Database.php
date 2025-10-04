<?php

// Connexion à la base de données sioleaks-bss requise 

require 'config.php';
try
{
 
	$bdd = new PDO('mysql:host=localhost;dbname=sioleaks-bdd;charset=utf8',$user,$password);
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}


