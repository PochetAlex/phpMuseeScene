<!DOCTYPE html>
<html>
<head>
    <title>Liste des scènes</title>
</head>
<body>
<h1>Liste des scènes</h1>

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

<form method="GET" action="{{ route('scene.filtered') }}">
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
            </tr>

        @endforeach
        </tbody>
    </table>
@endif
</body>
</html>
