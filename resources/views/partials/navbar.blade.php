<nav class="navbar navbar-expand-md navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="/">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
            aria-controls="collapsibleNavId" aria-expanded="false">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="collapsibleNavId">

            <ul class="navbar-nav ml-auto">
                @guest
                <li class="nav-item">
                    <a class="nav-link" href="/">Login</a>
                </li>
                @endguest

                @auth
                <li class="nav-item">
                    <a class="nav-link" href="{{route('dashboard')}}">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('admin.users.index')}}">Usuarios</a>
                </li>
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ auth()->user()->name }}
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item buttons" href="{{route('impersonations.destroy')}}"
                            data-action="impersonation_destroy">
                            Dejar de personificar
                        </a>

                        <a class="dropdown-item buttons" href="{{route('auth.logout')}}" data-action="logout-form">
                            Cerrar sesión
                        </a>

                    </div>
                </li>
                @endauth

            </ul>
        </div>
    </div>
</nav>

<div class="d-none">
    <form id="logout-form" action="{{ route('auth.logout') }}" method="POST">
        {{ csrf_field() }}
    </form>
    <form id="impersonation_destroy" action="{{ route('impersonations.destroy') }}" method="POST">
        {{ csrf_field() }} {{ method_field('DELETE') }}
    </form>
</div>
