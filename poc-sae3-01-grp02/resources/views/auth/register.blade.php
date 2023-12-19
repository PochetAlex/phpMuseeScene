<!doctype html>
<html lang={{ str_replace('_', '-', app()->getLocale()) }}>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$titre ?? "Application Laravel"}}</title>
    @vite(['resources/css/accueil.css'])
</head>
<body>
<header>
    <x-header></x-header>
</header>
<x-guest-layout>
    <div class="wrap">
        <form class="login-form" action="{{route('register')}}" method="post">
            @csrf
            <div class="form-header">
                <h3>Enregistrement</h3>
                <p>Enregistrement pour l'accès à l'application</p>
            </div>
            <!--Nom Input-->
            <div class="form-group">
                <input type="text" name="nom" class="form-input" placeholder="Nom">
            </div>
            <div class="form-group">
                <input type="text" name="prenom" class="form-input" placeholder="prenom">
            </div>
            <div class="form-group">
                <input type="text" name="rue" class="form-input" placeholder="rue">
            </div>
            <div class="form-group">
                <input type="text" name="ville" class="form-input" placeholder="ville">
            </div>
            <div class="form-group">
                <input type="text" name="code_postal" class="form-input" placeholder="code_postal">
            </div>
            <div class="form-group">
                <input type="text" name="email" class="form-input" placeholder="email@exemple.com">
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-input" placeholder="mot de passe">
            </div>
            <div class="form-group">
                <input type="password" name="password_confirmation" class="form-input" placeholder="Confirmez mot de passe">
            </div>
            <div class="form-group">
                <button class="form-button" type="submit">Enregistrement</button>
            </div>
            <div class="form-footer">
                Vous avez déjà un compte ? <a href="{{route('login')}}">Connexion</a>
            </div>
        </form>
    </div><!--/.wrap-->
</x-guest-layout>
</body>
</html>
