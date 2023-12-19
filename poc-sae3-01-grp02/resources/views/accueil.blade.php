<!doctype html>
<html lang={{ str_replace('_', '-', app()->getLocale()) }}>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$titre ?? "Application Laravel"}}</title>
    @vite(['resources/css/accueil.css', 'resources/css/app.css', 'resources/css/footer.css'])
</head>
<body>
<header>
    <x-header></x-header>
</header>

<div class="contenu">
    <h1>Liste des scènes</h1>
    <div class="afficher">
        <form method="GET" action="{{ route('scene') }}">
            @csrf
            <button type="submit">Afficher les scènes</button>
        </form>

        <form method="GET" action="{{ route('scene.recent') }}">
            @csrf
            <button type="submit">Afficher les 5 scènes les plus récentes</button>
        </form>

        <form method="GET" action="{{ route('scene.rating') }}">
            @csrf
            <button type="submit">Afficher les 5 scènes les plus mieux notées</button>
        </form>
    </div>

    <form class="filtre" method="GET" action="{{ route('scene.filtered') }}">
        @csrf
        <label for="equipe">Filtrer par équipe :</label>
        <select name="equipe" id="equipe">
            @if(isset($equipes))
                @foreach($equipes as $equipe)
                    <option value="{{ $equipe }}">{{ $equipe }}</option>
                @endforeach
            @else
                <option>Pas d'équipe</option>
            @endif
        </select>
        <button type="submit">Filtrer</button>
    </form>

    <form method="GET" action="{{ route('scene') }}">
        @csrf
        <button type="submit">Retirer les filtres</button>
    </form>


    @if(isset($scenes))
        <table>
            <thead>
            <tr>
                <td>nom scene</td>
                <td>nom groupe</td>
                <td>date ajout</td>
                <td>lien vignette image</td>
            </tr>
            </thead>
            <tbody>
            @foreach($scenes as $scene)
                <tr>
                    <td>{{$scene->nom_scene}}</td>
                    <td>{{$scene->nom_grp}}</td>
                    <td>{{$scene->created_at}}</td>
                    <td>{{$scene->lien_vignette_image}}</td>
                    <td>
                        <form method="GET" action="{{ route('sceneDetail') }}">
                            @csrf
                            <input type="hidden" name="scene_id" value="{{ $scene->id }}">
                            <button type="submit">Détails scène</button>
                        </form>
                    </td>
                </tr>

            @endforeach
            </tbody>
        </table>
    @endif
</div>

<footer>
    <x-footer></x-footer>
</footer>
</body>
</html>
