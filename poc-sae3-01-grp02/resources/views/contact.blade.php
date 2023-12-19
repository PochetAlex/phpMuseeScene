<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Formulaire</h1>
<form action="{{route("formulaire")}}" method="GET">
    <p>Votre Adresse mail : <input type="email" name="email"></p>
    <p>Votre Nom :<input type="text" name="nom"></p>
    <p>Votre Prénom : <input type="text" name="prenom"></p>
    <p>Votre Age :<input type="number" name="age"></p>
    <p>Avez vous des choses à ajouter ?</p>
    <p><textarea type="text" name="desc" style="height: 200px; width: 300px"></textarea></p>
    <input type=submit value="Envoyer">
</form>
</body>
</html>
