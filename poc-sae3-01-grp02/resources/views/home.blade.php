<!doctype html>
<html lang={{ str_replace('_', '-', app()->getLocale()) }}>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$titre ?? "Application Laravel"}}</title>
</head>
<body>
<p>Vous etes authentifié</p>
@auth
    <div>
        {{Auth::user()->name}}
        <button><a href="#" id="logout">Logout</a>
        </button>

        <button><a href="{{route('personne')}}" id="informations">Profil</a>
        </button>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
    </div>
    <script>
        document.getElementById('logout').addEventListener("click", (event) => {
            document.getElementById('logout-form').submit();
        });
    </script>
@endauth
</body>
</html>
