<?php

if (!isset($_GET['section']) OR $_GET['section'] == 'index')
{
    include_once('app/controllers/host.php');
}

// else
// {
// 	if ($_GET['section'] == 'artistes')
// 	{  
// 			include_once('controleur/artistes.php');
// 	}
// 	if ($_GET['section'] == 'detailArtiste')
// 	{  
// 			include_once('controleur/detailArtiste.php');
// 	}
// 	if ($_GET['section'] == 'oeuvres')
// 	{  
// 			include_once('controleur/oeuvres.php');
// 	}
// 	if ($_GET['section'] == 'oeuvresArtiste')
// 	{  
// 			include_once('controleur/oeuvresArtiste.php');
// 	}
// }
?>

