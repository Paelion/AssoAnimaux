<h1 style="padding: 50px 0 0 50px">Nos Animaux</h1>


<div class=" container affichage mt-5 justify-content-around" style="display: flex; flex-wrap: wrap">


    <?php foreach ($animals as $animal) : ?>
        <div class="card" style="width: 18rem;margin-bottom: 20px">
            <img class="card-img-top" src="https://fakeimg.pl/300x200/" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title"><?= $animal->nom ?></h5>
                <div class="card-text">
                    <p>Type: <?= $animal->type ?></p>
                    <p>Race: <?= $animal->race ?></p>
                    <p>Taille: <?= $animal->taille ?>cm</p>
                    <p>Poid: <?= $animal->poid ?>kg</p>
                    <p>Age: <?= $animal->age ?>an(s)</p>

                </div>
                <a href="index.php?page=singleAnimal&id=<?= $animal->id ?>" class="btn btn-success">Voir l'animal</a>
                <a href="index.php?page=reservation&id=<?= $animal->id ?>" class="btn btn-success">Réserver</a>
            </div>
        </div>
    <?php endforeach ?>
</div>
