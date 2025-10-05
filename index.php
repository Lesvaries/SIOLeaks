<?php
session_start();
include_once('app/models/database.php');

if (!isset($_GET['section'])) {
    header('Location: index.php?section=index');
    exit;
}

if ($_GET['section'] == 'cnxAuth') {
    $cnxUser=true;
    include_once('app/controllers/AuthController.php');
}

if (
    (isset($_SESSION['validiteConnexion']))
    AND ($_SESSION['validiteConnexion'] == true)
    ) {
    $connected = true;
    $idSessionUser = $_SESSION['user_id'];
    $usernameSessionUser = $_SESSION['username'];
    $emailSessionUser = $_SESSION['email'];
    $createdAtSessionUser = $_SESSION['created_at'];
    $roleSessionUser = $_SESSION['role'];
    } else {
    $connected = false;
    }

include_once('app/views/layouts/head.php');
include_once('app/views/layouts/header.php');


if (!isset($_GET['section']) OR $_GET['section'] == 'index')
{
    include_once('app/controllers/host.php');
}

else
{
	if ($_GET['section'] == 'cours')
    {  
            include_once('app/controllers/Programs.php');
    }
	if ($_GET['section'] == 'about')
    {  
            include_once('app/controllers/About.php');
    }
	if ($_GET['section'] == 'contact')
    {  
            include_once('app/controllers/Contact.php');
    }
    if ($_GET['section'] == 'login')
    {  
            include_once('app/controllers/Login.php');
    }
	if ($_GET['section'] == 'sign-up')
    {  
            include_once('app/controllers/SignUp.php');
    }
}
?>

<script src="./public/assets/js/header.js"></script>