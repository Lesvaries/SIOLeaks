<?php
$dbname = 'sioleaks_bdd'; // le nom de la base de données dans phpmyadmin
$user = 'sioleaks_user'; // le nom user dans phpmyadmin
$password = '*AEC41F3127D384CAAFB5B0E3BD16AC63BD3D1112'; // le mot de passe dans phpmyadmin
try
{
 
    $bdd = new PDO('mysql:host=localhost;dbname='.$dbname.';charset=utf8',$user,$password);
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
} 

?>