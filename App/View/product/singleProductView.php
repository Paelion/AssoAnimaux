<div class=" container affichage mt-5 justify-content-around">

    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="https://fakeimg.pl/300x200/" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title"><?= $product->nom ?></h5>
            <div class="card-text">
                <p>Type: <?= $product->type ?></p>
                <p>Animal: <?= $product->animal ?></p>
                <p>Prix: <?= $product->prix ?>€</p>
                <p>Stock: <?= $product->stock ?></p>
            </div>
            <a href="../public/index.php?page=modifyProduct&id=<?= $product->id ?>" class="btn btn-success">Ajouter au panier</a>
        </div>
    </div>
</div>
