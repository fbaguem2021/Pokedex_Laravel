<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('pokemon.home') }}">
            <img src="{{ asset('media/pokedex.png') }}" width="30" height="30" class="d-inline-block align-text-top">
            Pokedex
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Datos maestros
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('pokemon.list') }}">Pokemons</a></li>
                        <!-- <li><a class="dropdown-item" href="/Pokedex/php_views/prov.php">Prov</a></li> -->
                        <!-- <li><a class="dropdown-item" href="/Pokedex/php_views/cardgridprov.php">CardGridProv</a></li> -->
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>