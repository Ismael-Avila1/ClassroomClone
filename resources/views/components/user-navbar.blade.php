<nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="navbar-item" href="/">
            <img src="/ClassRoomClone-Logo.png" alt="logo">
        </a>

        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>

    <div id="navbarBasicExample" class="navbar-menu">
        <div class="navbar-start">
            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">Clases</a>

                <div class="navbar-dropdown">
                    {{-- agregar un boton por cada una de las clases del usuario --}}
                    {{-- <a class="navbar-item button is-white"></a> --}}
                    {{-- <hr class="navbar-divider"> --}}
                </div>
            </div>

            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">Crear o unirse a una clase</a>

                <div class="navbar-dropdown">
                    <a class="navbar-item button is-white" href="course/create">Crear clase</a>
                    <a class="navbar-item button is-white">Unirse a una clase</a>
                </div>
            </div>
        </div>

        <div class="navbar-end">
            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">Administrar Cuenta</a>

                <div class="navbar-dropdown">
                    <a class="navbar-item button is-white">{{ Auth::user()->name }}</a>
                    <hr class="navbar-divider">
                    <a class="navbar-item button is-info is-fullwidth" href="user/{{ Auth::user()->id }}">Perfil</a>

                    <hr class="navbar-divider">

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <button type="submit" class="button is-danger is-fullwidth">
                            {{ __('Log Out') }}
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</nav>
