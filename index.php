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
    exit;
}
if ($_GET['section'] == 'logout')
{  
    $cnxUser=false;
    include_once('app/controllers/AuthController.php');
    exit;
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

if ($_GET['section'] !== 'download' && $_GET['section'] !== 'cnxAuth') {
    include_once('app/views/layouts/head.php');
    include_once('app/views/layouts/header.php');
}

if (!isset($_GET['section']) OR $_GET['section'] == 'index')
{
    include_once('app/controllers/Home.php');
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
    if ($_GET['section'] == 'register-controller')
    {  
            include_once('app/controllers/RegisterController.php');
    }
    if ($_GET['section'] == 'account') {
        $cnxUser=true;
        include_once('app/controllers/Account.php');
    }
    if ($_GET['section'] == 'download') {
        include_once('app/controllers/DownloadController.php');
        $controller = new DownloadController();
        $controller->download();
        exit; // Arrête le script ici pour éviter d'autres chargements
    }
    // Acces aux pages cours 
	if ($_GET['section'] == 'CEJM-y1ch01')
    {  
        include_once('app/controllers/programs/cejm/CEJM-y1ch01.php');
    }

}
?>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>
<script src="./public/assets/js/header.js" defer></script>

<?php
include_once('app/views/layouts/footer.php');
?>