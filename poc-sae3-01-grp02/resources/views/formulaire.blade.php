<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
    @vite(['resources/css/accueil.css', 'resources/css/footer.css'])
</head>
<body>
<header>
    <x-header></x-header>
</header>

<h3>Votre Adresse mail : <?php echo $_GET['email']?> </h3>
<h3>Votre Nom : <?php echo $_GET['nom'] ?></h3>
<h3>Votre Prénom : <?php echo $_GET['prenom'] ?></h3>
<h3>Votre Age : <?php echo $_GET['age'] ?></h3>
<h3>Votre Description : <?php echo $_GET['desc'] ?></h3>

<footer>
    <x-footer></x-footer>
</footer>
</body>
</html>

