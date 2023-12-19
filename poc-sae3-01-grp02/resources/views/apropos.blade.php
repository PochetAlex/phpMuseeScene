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
    <table>
        <thead>
        <tr>
            <th>Nom</th>
            <th>Description</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><h2>Nike</h2></td>
            <td>Leader mondial des articles de sport et des chaussures de sport.</td>
        </tr>

        <tr>
            <td><h2>Adidas</h2></td>
            <td>Fabricant mondial d'articles de sport.</td>
        </tr>

        <tr>
            <td><h2>CodinGame</h2></td>
            <td>Plateforme de défis de codage et de jeux de programmation.</td>
        </tr>

        <tr>
            <td><h2>TryHackMe</h2></td>
            <td>Plateforme en ligne pour apprendre et pratiquer les compétences en cybersécurité.</td>
        </tr>
        </tbody>
    </table>
    </p>
</div>
<div class="sec4">
    <h1>Nos engagements</h1>
    <p>
        Le musée s'engage à offrir aux visiteurs une expérience immersive et éducative. À travers ses expositions variées, le musée s'efforce de captiver l'imagination des visiteurs en présentant des scènes diversifiées, reflétant des moments historiques, culturels, artistiques ou scientifiques significatifs.
    </p>
</div>

<footer>
    <x-footer></x-footer>
</footer>
</body>
