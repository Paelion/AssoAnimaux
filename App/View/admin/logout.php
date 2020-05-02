<?php

//démarre la session
session_start ();

//détruit les variables de notre session
session_unset ();

//détruit notre session
session_destroy ();

// redirige le visiteur vers la page d'accueil
header ('location: indexAdmin.php');

?>
