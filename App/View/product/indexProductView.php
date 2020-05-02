<h1 style="padding: 50px 0 0 50px">Nos Produits</h1>


<div class=" container affichage mt-5 justify-content-around" style="display: flex; flex-wrap: wrap">


    <?php foreach ($products as $product) : ?>
        <div class="card" style="width: 18rem; margin-bottom: 20px">
            <img class="card-img-top" src="https://fakeimg.pl/300x200/" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title"><?= $product->nom ?></h5>
                <div class="card-text">
                    <p>Type: <?= $product->type ?></p>
                    <p>Animal: <?= $product->animal ?></p>
                    <p>Prix: <?= $product->prix ?>€</p>
                    <p>Stock: <?= $product->stock ?></p>

                </div>
                <a href="index.php?page=singleProduct&id=<?= $product->id ?>" class="btn btn-success">Voir le produit</a>
            </div>
        </div>
    <?php endforeach ?>
</div>
