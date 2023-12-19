<nav>
    <div class="gauche">
        <a href="{{route('accueil')}}">Accueil</a>
        <a href="{{route('apropos')}}">a Propos</a>
        <a href="{{route('contact')}}">Contacts</a>
    </div>
    <div class="centre">
        <h1>MUSEE RAYTRACING</h1>
    </div>

    <div class="droite">
    @guest
        <div>
            <a href="{{route('register')}}">Enregistrement</a>
            <a href="{{route('login')}}">Connexion</a>
        </div>
    @endguest
    @auth
        <div>
            {{Auth::user()->name}}
            <button><a href="#" id="logout">Logout</a>
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
    </div>
</nav>

