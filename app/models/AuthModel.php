<?php
function get_user($log, $password)
{
    global $bdd;

    // Récupère l'utilisateur SANS vérifier le mot de passe
    $req = $bdd->prepare('SELECT * FROM users 
                        WHERE username = :loginUser OR email = :loginUser
                        AND password = :pawdUser');
    
    $req->bindParam(':loginUser', $log);
    $req->bindParam(':pawdUser', $pswd);
    $req->execute();
    
    $user = $req->fetch();

    return $user;  // Retourne les données de l'utilisateur ou false si non trouvé
    
//     // Vérifie le mot de passe de manière SÉCURISÉE
//     if ($user && password_verify($password, $user['password'])) {
//         return $user;  // Mot de passe correct
//     }
    
//     return false;  // Mot de passe incorrect
}
?>