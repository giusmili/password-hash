<?php
    # Initialiser la session
    session_start();
    # Configurer une durée de vie de session de 60 minutes
    $session_lifetime = 3600; // 60 minutes en secondes

 # Vérifier si une session est déjà active
if (isset($_SESSION['last_activity'])) {
    // Calculer le temps écoulé depuis la dernière activité
    $time_elapsed = time() - $_SESSION['last_activity'];

    if ($time_elapsed > $session_lifetime) {
        // Détruire la session si elle est expirée
        session_unset();
        session_destroy();
        echo "Votre session a expiré. Veuillez vous reconnecter.";
        exit();
    }
}
// Mettre à jour l'heure de la dernière activité
$_SESSION['last_activity'] = time();