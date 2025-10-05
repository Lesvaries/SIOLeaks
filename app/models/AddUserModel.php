<?php
include_once('app/models/Database.php');

if($_SERVER["REQUEST_METHOD"] == "POST") {

    $error = null; // Variable pour stocker l'erreur

    // Récupération des données du formulaire
    $username = $_POST['username'] ?? '';
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    
    // Validation de l'email avec regex
    if (!preg_match('/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/', $email)) {
        $error = "Email invalide.";
    }

    // Validation du mot de passe avec regex (1 maj, 1 chiffre, 1 symbole, 12 caractères min)
    if (!preg_match('/^(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{12,}$/', $password)) {
        $error = "Le mot de passe doit contenir au moins 12 caractères, une majuscule, un chiffre et un symbole.";
    }

    if (!$error) {
        try {
            $req = $bdd->prepare('
                                INSERT INTO users 
                                (username, email, password, is_admin) 
                                VALUES (:username, :email, :password, :is_admin)
                                ');

            $data = [
                'username' => $_POST['username'],
                'email' => $_POST['email'],
                'password' => password_hash($_POST['password'], PASSWORD_BCRYPT),
                'is_admin' => 0
                
            ];

            $req->execute($data);

            header('Location: index.php?section=login');
            exit();
        } catch (Exception $e) {
            echo "Erreur lors de l'ajout de l'utilisateur : " . $e->getMessage();
        }
    }

}
?>