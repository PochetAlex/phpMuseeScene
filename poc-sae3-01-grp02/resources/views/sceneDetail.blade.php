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
    <p>Contenu de la scene:</p>
    <pre>
    <!-- Utilisation de la balise code pour appliquer la police de caractères monospace -->
    <code>
        {{ $scene->texte_scene }}
    </code>
    </pre>

    <x-statistiques :scene="$scene"></x-statistiques>



    @auth
        <!-- Vérifie si la scène est dans la liste des favoris de l'utilisateur connecté -->
        @if($scene->favoris->contains(auth()->user()))
            <!-- Affiche un message si la scène est dans les favoris -->
            <p>Cette scène est dans vos favoris !</p>
        @else
            <!-- Affiche un message si la scène n'est pas dans les favoris -->
            <p>Cette scène n'est pas dans vos favoris.</p>
        @endif

        <!-- Vérifie si la scène est dans la liste des favoris de l'utilisateur -->
        @if($scene->favoris->contains(auth()->user()))
            <!-- Formulaire pour supprimer la scène des favoris -->
            <form method="POST" action="{{ route('removeFromFavorites', ['scene' => $scene->id]) }}">
                @csrf
                @method('DELETE')
                <button type="submit">Retirer des favoris</button>
            </form>
        @else
            <!-- Formulaire pour ajouter la scène aux favoris -->
            <form method="POST" action="{{ route('addToFavorites', ['scene' => $scene->id]) }}">
                @csrf
                <button type="submit">Ajouter aux favoris</button>
            </form>
        @endif

        <!-- Vérifie si l'utilisateur a déjà attribué une note -->
        @if($scene->note->where('user_id', auth()->user()->id)->isNotEmpty())
            <!-- Affiche la note actuelle de l'utilisateur -->
            <p>Votre note actuelle : {{ $scene->note->where('user_id', auth()->user()->id)->first()->valeur }}</p>

            <!-- Formulaire pour modifier la note -->
            <form method="POST" action="{{ route('updateSceneNote', ['scene' => $scene->id]) }}">
                @csrf
                @method('PATCH')
                <label for="newNote">Nouvelle note :</label>
                <input type="number" name="newNote" id="newNote" min="1" max="5" required>
                <button type="submit">Modifier la note</button>
            </form>
        @else
            <!-- Formulaire pour ajouter une nouvelle note -->
            <form method="POST" action="{{ route('addSceneNote', ['scene' => $scene->id]) }}">
                @csrf
                <label for="newNote">Votre note :</label>
                <input type="number" name="newNote" id="newNote" min="1" max="5" required>
                <button type="submit">Donner une note</button>
            </form>
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
