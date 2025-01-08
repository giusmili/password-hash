<?php

    # include_once 'session.inc.php';
    # cela est stocké dans la variable de session $_SESSION[""]
Class User{

    static function connect(){
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            # Récupérer les données du formulaire
            $username = $_POST['username'];
            $password = $_POST['password'];
        
            # Vérifier si les champs ne sont pas vides
            if (empty($username) || empty($password)) {
                print "<p>Veuillez remplir tous les champs.</p>";
            } 
            else 
            {
                # Définir un utilisateur et un mot de passe haché (dans une vraie application, cela viendrait d'une base de données)
                $valid_username = "admin";
                $hashed_password = '$2y$10$c4fWk2fU6nvcEuaqcnBUmugXdvlkmmlYEsOH3jKeVsI7oSjEWemHu'; // hash de "1984"
              
                # $hashed_password = password_hash("1984", PASSWORD_DEFAULT);
                # Vérification des informations de connexion
                if ($username === $valid_username && password_verify($password, $hashed_password)) {
                    print "🚀 Connexion réussie !";
                } else {
                    print "💥 Nom d'utilisateur ou mot de passe incorrect.";
                }
            }
        } else {
            print "⚡️ État de votre connexion";
        }
    }
}

User::connect()
# session_destroy()
?>
