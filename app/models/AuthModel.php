<?php
function get_user($log, $password) {
    global $bdd;

    // Requête pour récupérer l'utilisateur via username ou email
    $req = $bdd->prepare('SELECT * FROM users 
                        WHERE username = :loginUser OR email = :loginUser');
    $req->bindParam(':loginUser', $log);
    $req->execute();

    $user = $req->fetch();

    // Vérifie si l'utilisateur existe et si le mot de passe est correct
    if ($user && password_verify($password, $user['password'])) {
        return $user;  // Retourne les données de l'utilisateur
    }

    return false;  // Identifiants incorrects
}
?>