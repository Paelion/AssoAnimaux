
<!-- Début body -->
<body>

<!-- Header -->
<header>
    <h1 style="display: flex; justify-content: center; margin: 50px">Espace de connexion administrateur</h1>
    <p style="display: flex; justify-content: center; margin: 50px">Info : Pour se connecter à l'espace admin : username = pauline et password = 1234</p>
</header>

<section class="container" style="width: 100vh; padding-top: 20px">


    <form action="index.php?page=adminForm" method="post"> <!-- action liée à l'envoi du formulaire, traitement des données de l'utilisateur-->

        <!-- champs de connexion -->
        <div class="form-group" style="padding-bottom: 20px">
            <span class="txt-input" style="font-size: 20px">Username &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><br>
            <input type="text" class="form-control" id="username" name="username">
        </div>
        <div class="form-group" style="padding-bottom: 20px">
            <span class="txt-input" style="font-size: 20px">Password</span><br>
            <input type="text" class="form-control" id="password" name="password">
        </div>

        <button type="submit" class="btn btn-success" value="Connexion">Enregistrer</button>
        </div>
    </form>
</section>

</body>
</html>
