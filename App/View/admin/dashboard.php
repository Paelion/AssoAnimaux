<?php


//si le login et/ou le pwd n'est pas le bon, le visiteur est reirigé vers la page d'accueil
if (!isset($_SESSION['username']) && !isset($_SESSION['password'])) {

    header('location: ./indexAdmin.php');

} else {
    ?>
    <!-- Début body -->
    <body>
    <div class="container mt-5">
        <!-- Header -->
        <header>
            <h1>Espace administrateur, <i><?php echo $_SESSION["username"]; ?></i>.</h1>
        </header>

        <!-- Accès aux différentes fopnctionnalités -->
        <div style="padding-top: 50px; display: flex;justify-content: space-around">

            <a href="index.php?page=homeAnimalAdmin">
                <button type="button" class="btn btn-success" style="padding:10px 60px; font-size: 22px">Animaux</button>
            </a>
            <a href="index.php?page=newAnimal">
                <button type="button" class="btn btn-dark" style="padding:10px 60px; font-size: 22px">New Animaux</button>
            </a>
            <a href="index.php?page=homeProductAdmin">
                <button type="button" class="btn btn-success" style="padding:10px 60px; font-size: 22px">Produits</button>
            </a>
            <a href="index.php?page=newProduct">
                <button type="button" class="btn btn-dark" style="padding:10px 60px; font-size: 22px">New Produits</button>
            </a>
        </div>
    </div>


    </body>
    </html>
    <?php

}

?>
