<?php
    include_once('app/models/Database.php');

// Test de $cnxUser pour différencier d'un login ou une déconnexion
if($cnxUser == true) {
    // Demande de connexion
    // Récupération des éléments de la vue login.view.php

    $wlogin = htmlspecialchars($_POST['wlogin'], ENT_QUOTES,);
    $wpswd = htmlspecialchars($_POST['wpswd'], ENT_QUOTES,);

    // Appel de la fonction de vérification des identifiants
    include_once('app/models/AuthModel.php');
    $user = get_user($wlogin, $wpswd);

    if ($user) {
        // Authentification réussie
        $_SESSION['user_id'] = $user['id_user'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['created_at'] = $user['created_at'];
        $_SESSION['role'] = $user['is_admin'];
        $_SESSION['validiteConnexion'] = true;

        // Redirection vers la page d'accueil ou tableau de bord
        header('Location:index.php?section=index');
        exit();
    } else {
        // Coordonnées incorrectes
        $_SESSION['validiteConnexion'] = false;

        // Échec de l'authentification
        $msgCnx = "Identifiants incorrects. Veuillez réessayer.";
        include_once('app/views/login.view.php');
    }
} else {
    // Déconnexion
    session_destroy();

    // Redirection vers la page d'accueil
    header('Location:index.php?section=index');
    exit();
}
?>