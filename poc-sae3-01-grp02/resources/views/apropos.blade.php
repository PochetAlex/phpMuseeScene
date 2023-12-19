<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/accueil.css', 'resources/css/apropos.css', 'resources/css/footer.css'])
</head>
<body>
<header>
    <x-header></x-header>
</header>
<div class="sec1">
    <h1>Description de notre musée</h1>
    <p>Nous vous présentons notre site internet du musée Raytracing avec plusieurs images avec leur nom, descriptif,
        des commentaires le nom de l'auteur, la date d'ajoute de l'images, et le lien de la vignette de cette image.
</div>
<div class="sec2">
    <h1>Notre Equipe</h1>
    <div class="contenu">
        <p>Louis Dutombois</p>
        <p>Chef de projet</p>
        <img src="">
    </div>
    <div class="contenu">
        <p>Alex Pochet</p>
        <p>Développeur</p>
        <img src="">
    </div>
    <div class="contenu">
        <p>Hugo Dubuisson</p>
        <p>Développeur</p>
        <img src="">
    </div>
    <div class="contenu">
        <p>Théo Vambre</p>
        <p>Développeur</p>
        <img src="">
    </div>
</div>
<div class="sec3">
    <h1>Nos collaborateurs</h1>
    <p>
        ok
    </p>
</div>
<div class="sec4">
    <h1>Nos engagements</h1>
    <p>
        ok
    </p>
</div>

<footer>
    <x-footer></x-footer>
</footer>
</body>
