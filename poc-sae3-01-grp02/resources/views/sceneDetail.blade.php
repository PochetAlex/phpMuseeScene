<!DOCTYPE html>
<html>
<head>
    <title>Détails de la scène</title>
    <!-- Assurez-vous d'inclure tout lien vers des styles CSS, des bibliothèques ou des scripts nécessaires -->
</head>
<body>
<h1>Détails de la scène</h1>

<h2>{{ $scene->nom_scene }}</h2>
<p>Description : {{ $scene->description }}</p>
<p>Date d'ajout : {{ $scene->created_at }}</p>

<h3>Équipe : {{ $scene->nom_grp }}</h3>

<div>
    <!-- Interpréter le texte Markdown -->
    <p>Description Markdown :</p>
    <p>A faire !</p>
</div>

<img src="{{ $scene->lien_calcul_image }}" alt="Image calculée">
<img src="{{ $scene->lien_vignette_image }}" alt="Vignette">

<!-- Afficher la note moyenne -->
<p>Note moyenne : {{ $scene->noteMoyenne }}</p>

<h3>Commentaires :</h3>
@if($scene->commentaires !== null && $scene->commentaires->isNotEmpty())
    <ul>
        @foreach($scene->commentaires()->orderBy('created_at', 'desc')->get() as $commentaire)
            <li>{{ $commentaire->texte }} - {{ $commentaire->created_at }}</li>
        @endforeach
    </ul>
@else
    <p>Aucun commentaire disponible pour cette scène.</p>
@endif

</body>
</html>
