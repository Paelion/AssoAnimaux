

<div class="container affichage mt-5 justify-content-around">
    <h1 style="padding: 50px 0 0 50px">Votre panier</h1>

    <?php foreach ($commandes as $commande) : ?>

        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="https://fakeimg.pl/300x200/" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Utilisateur : <?= $commande->user_id ?></h5>
                <div class="card-text">
                    <p>Date: <?= $commande->dateCommande ?></p>
                    <p>Etat: <?=$commande->etat ?></p>
                    <p>Montant: <?= $commande->montantTotal ?>€</p>
                </div>
            </div>
        </div>
    <?php endforeach ?>


</div>

