<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
@auth
    <h1>Voici vos informations personnelles</h1>

    <p> Nom : {{ Auth::user()->nom }}</p>
    <p> Prénom : {{ Auth::user()->prenom }}</p>
    <p> Ville : {{ Auth::user()->ville }}</p>
    <p> Email : {{ Auth::user()->email }}</p>

    <div>
        <form action="{{ route('profile.upload') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div>
                <h2>Choix d'une photo de profil : </h2>
            </div>
            <div>
                <label for="doc">Image : </label>
                <input type="file" name="document" id="doc">
            </div>
            <input type="submit" value="Télécharger" name="submit">
        </form>
            <img src="{{ Storage::url(Auth::user()->avatar_lien) }}" alt="Image de l'utilisateur">

    </div>

    <p> Vos commentaires sur les images : </p>
    <ul>
        @foreach(Auth::user()->commentaire as $comment)
            <li>{{ $comment->text }} Sur l'image N° {{$comment->scene_id}} vous avez écrit : {{ $comment->texte }}</li>
        @endforeach
    </ul>

    <p> Vos scènes favorites :</p>
    <ul>
        @foreach(Auth::user()->favoris as $scene)
            <li>{{ $scene->nom_scene }}</li>
            <p>Description de la scène: {{ $scene->description }}</p>
        @endforeach
    </ul>

@endauth
</body>
</html>
