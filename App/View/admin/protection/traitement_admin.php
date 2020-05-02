<?php

// Définit un login et un mot de passe de base
$login_valide = "pauline";
$pwd_valide = "1234";

// On teste si nos variables sont définies :

if (isset($_POST['username']) && isset($_POST['password'])) {

    // on vérifie les informations du formulaire : savoir si le login et le psw sont autorisés
    if ($login_valide == $_POST['username'] && $pwd_valide == $_POST['password']) {

        // si c'est bon, démarrer la session
        session_start ();

        // enregistre les paramètres login et psw comme variables de session
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['password'] = $_POST['password'];

        // on redirige notre visiteur vers le dashboard
        header ('location: index.php?page=adminDashboard');
    }

    else {

        // si visiteur n'a pas été reconnu comme étant membre de notre site on l'en informe
        echo '<body onLoad="alert(\'Membre non reconnu...\')">';

    }
}

?>
