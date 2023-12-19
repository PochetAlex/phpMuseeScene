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

<img src="https://picsum.photos/100/100" alt="Image calculée">
<img src="https://picsum.photos/100/100" alt="Vignette">

<p>Note moyenne : {{ $scene->note->avg('valeur') }}</p>


<h2>Commentaires :</h2>
@if($scene->commentaire->isNotEmpty())
    <ul>
        @foreach($scene->commentaire as $comment)
            <li>{{ $comment->texte }} - {{ $comment->created_at }}</li>
        @endforeach
    </ul>
@else
    <p>Aucun commentaire disponible pour cette scène.</p>
@endif


</body>
</html>
