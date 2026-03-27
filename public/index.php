<!DOCTYPE html>
<html lang="fr">
<?php include_once '../app/views/partials/head.php'; ?>
<body>
<?php
    include_once '../app/views/partials/header.php';
    //include './app/models/database.php'; 

     $section = $_GET['section'] ?? 'homepage'; 

    switch ($section){
        case 'homepage':
            include  '../app/controllers/homepageController.php';
            break;
        case 'course':
            include  '../app/controllers/courseController.php';
            break;
        case 'contact':
            include '../app/controllers/contactController.php';
            break;
    }




?>
</body>
