<!DOCTYPE html>
<html>
<head>
    <title>Détails de la scène</title>
    @vite(['resources/css/accueil.css', 'resources/css/sceneDetails.css', 'resources/css/footer.css'])
    <!-- Assurez-vous d'inclure tout lien vers des styles CSS, des bibliothèques ou des scripts nécessaires -->
</head>
<body>
<header>
    <x-header></x-header>
</header>
<div class="detail">
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

    @auth
        <!-- Vérifie si la scène est dans la liste des favoris de l'utilisateur connecté -->
        @if($scene->favoris->contains(auth()->user()))
            <!-- Affiche un message si la scène est dans les favoris -->
            <p>Cette scène est dans vos favoris !</p>
        @else
            <!-- Affiche un message si la scène n'est pas dans les favoris -->
            <p>Cette scène n'est pas dans vos favoris.</p>
        @endif
    @endauth

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
</div>



@auth
<h3>Ajout d'un commentaire : </h3>

<form action="{{ route('commentaire.create', ['scene_id' => $scene->id]) }}" method="post">
    @csrf
    <p><textarea type="text" name="texte"></textarea></p>
    <p><button type="submit">Ajouter le commentaire</button></p>
</form>
@endauth

<footer>
    <x-footer></x-footer>
</footer>

</body>
</html>
