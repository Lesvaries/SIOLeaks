<?php
include_once('app/models/connection-bdd.php');

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
            include_once('app/controllers/programs.php');
    }
	if ($_GET['section'] == 'about')
    {  
            include_once('app/controllers/about.php');
    }
	if ($_GET['section'] == 'contact')
    {  
            include_once('app/controllers/contact.php');
    }
    if ($_GET['section'] == 'login')
    {  
            include_once('app/controllers/login.php');
    }
	if ($_GET['section'] == 'sign-up')
    {  
            include_once('app/controllers/sign-up.php');
    }
}
?>

<script src="./public/assets/js/header.js"></script>