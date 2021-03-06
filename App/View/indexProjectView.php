<div class="container mt-5">
    <h2 style="color: #9ACD32">Quelques uns de nos animaux</h2><br>
    <div class="affichage  justify-content-around" style="display: flex">
        <?php for ($i = 0; $i <= 4; $i++) : ?>
            <div class="card" style="width: 18rem; margin: 10px">
                <img class="card-img-top" src="https://fakeimg.pl/300x200/" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"><?= $animal[$i]->nom ?></h5>
                    <div class="card-text">
                        <p>Type: <?= $animal[$i]->type ?></p>
                        <p>Race: <?= $animal[$i]->race ?></p>
                        <p>Taille: <?= $animal[$i]->taille ?>cm</p>
                        <p>Poid: <?= $animal[$i]->poid ?>kg</p>
                        <p>Age: <?= $animal[$i]->age ?>an(s)</p>
                    </div>
                    <a href="index.php?page=reservation&id=<?= $animal[$i]->id ?>" class="btn btn-success">Réserver</a>
                </div>
            </div>
        <?php endfor ?>
    </div>
    <br>
    <br>
    <br>
    <br>


    <h2 style="color: #9ACD32">Notre association</h2><br>
    <p style="color: green">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed dapibus ligula. Vivamus sit amet nunc vitae
        odio mollis sollicitudin. Nulla eu orci nec dui ullamcorper placerat. Maecenas ornare justo neque, quis pretium
        est volutpat at. In porttitor dictum justo ac malesuada. Orci varius natoque penatibus et magnis dis parturient
        montes, nascetur ridiculus mus. Sed et erat id nunc euismod auctor nec at diam. Nunc nec bibendum metus.

        Praesent a nisi eget dolor sodales vulputate ut quis arcu. Nullam eget nisl fringilla, molestie justo vitae,
        suscipit justo. Nunc commodo quis tellus quis faucibus. Ut placerat, velit at euismod imperdiet, sapien sem
        condimentum turpis, mattis tincidunt felis mi a tortor. Vestibulum molestie dapibus mi, et mollis ante facilisis
        vel. Vivamus eget volutpat tellus. Maecenas vitae fringilla diam. Curabitur ligula felis, volutpat ac sapien at,
        convallis elementum augue.</p>

    <br>
    <br>
    <br>
    <br>
    <h2 style="color: #9ACD32">Un aperçu de nos produits</h2><br>
    <div class="affichage justify-content-around" style="display: flex">
        <?php for ($i = 0; $i <= 4; $i++) : ?>
            <div class="card" style="width: 18rem; margin: 10px">
                <img class="card-img-top" src="https://fakeimg.pl/300x200/" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"><?= $product[$i]->nom ?></h5>
                    <div class="card-text">
                        <p>Type: <?= $product[$i]->type ?></p>
                        <p>Animal: <?= $product[$i]->animal ?></p>
                        <p>Prix: <?= $product[$i]->prix ?>€</p>
                        <p>Stock: <?= $product[$i]->stock ?></p>
                    </div>
                    <a href="index.php?page=singleProduct&id=<?= $product[$i]->id ?>" class="btn btn-success">Voir le produit</a>
                </div>
            </div>
        <?php endfor ?>
    </div>
    <br>
    <br>
    <br>
    <br>
    <h2 style="color: #9ACD32">Faire un Don</h2><br>


        <form action="index.php?page=dons" method="POST">
            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" class="form-control" id="nom" name="nom">
            </div>
            <div class="form-group">
                <label for="montant">Montant</label>
                <input type="text" class="form-control" id="montant" name="montant">
            </div>
            <button type="submit" class="btn btn-success">Enregistrer le don</button>
        </form>
    <br>
    <br>
    <br>
    <br>
</div>




