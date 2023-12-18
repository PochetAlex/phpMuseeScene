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




@if(isset($scenes))
    <table>
        <thead>
        <tr>
            <td>nom scene</td>
            <td>nom groupe</td>
            <td>description</td>
            <td>date ajout</td>
            <td>texte scene</td>
            <td>lien calcul scene</td>
            <td>lien vignette image</td>
            <td>lien calcul image</td>
        </tr>
        </thead>
        <tbody>
        @foreach($scenes as $scene)
            <tr>
                <td>{{$scene->nom_scene}}</td>
                <td>{{$scene->nom_groupe}}</td>
                <td>{{$scene->decription}}</td>
                <td>{{$scene->date_ajout}}</td>
                <td>{{$scene->texte_scene}}</td>
                <td>{{$scene->lien_calcul_scene}}</td>
                <td>{{$scene->lien_vignette_image}}</td>
                <td>{{$scene->lien_calcul_image}}</td>
            </tr>

        @endforeach
        </tbody>
    </table>

    <ul>
        @foreach($scenes as $scene)
            <li>{{ $scene->nom }} - {{ $scene->description }}</li>
        @endforeach
    </ul>
@endif
</body>
</html>
