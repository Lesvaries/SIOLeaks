<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>index</title>
</head>
<body>
<?php
    //include './app/models/database.php'; 

     $section = $_GET['section'] ?? 'homepage'; 

    switch ($section){
        case 'homepage':
            include  '../app/controllers/homepageController.php';
            break;
        case 'course':
            include  '../app/controllers/courseController.php';
            break;

    }




?>
</body>
