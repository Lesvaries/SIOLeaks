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

function get_user_by_id($id) {
    global $bdd;

    // Requête pour récupérer l'utilisateur via son ID
    $req = $bdd->prepare('SELECT * FROM users WHERE id_user = :idUser');
    $req->bindParam(':idUser', $id);
    $req->execute();

    return $req->fetch();  // Retourne les données de l'utilisateur ou false si non trouvé
}
?>