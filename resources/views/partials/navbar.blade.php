    <nav class="navbar navbar-expand-lg container-header" id="navbar-site" data-aos="fade-down">
        <div class="container-fluid">
            <a class="navbar-brand col-2 d-flex justify-content-center" href="/">
                <span class="logo-welcome">Orientation</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul id="nav-menu" class="navbar-nav me-auto mb-2 px-4 mx-auto mb-lg-0">
                    <li class="nav-item {{ request()->is('/') ? 'active' : '' }} ">
                        <a class="nav-link" href="/">Accueil</a>
                        <span class="decor-link-menu"></span>
                    </li>
                    <li class="nav-item {{ request()->is('orientation') ? 'active' : '' }} ">
                        <a class="nav-link" href="{{ route('orientation') }}">Orientation</a>
                        <span class="decor-link-menu"></span>
                    </li>
                    <li class="nav-item {{ request()->is('enseignement*') ? 'active' : '' }} ">
                        <a class="nav-link" href="{{ route('enseignement') }}">Enseignement secondaire</a>
                        <span class="decor-link-menu"></span>
                    </li>
                    <li class="nav-item {{ request()->is('formation*') ? 'active' : '' }} ">
                        <a class="nav-link" href="{{ route('formation') }}">Formation professionnelle</a>
                        <span class="decor-link-menu"></span>
                    </li>
                    <li class="nav-item {{ request()->is('insertion*') ? 'active' : '' }} ">
                        <a class="nav-link" href="{{ route('structure') }}">Aide à l'insertion
                            Professionnelle</a>
                        <span class="decor-link-menu"></span>
                    </li>
                    <li class="nav-item {{ request()->is('etablissement*') ? 'active' : '' }} ">
                        <a class="nav-link" href="{{ route('etablissement') }}">Etablissement</a>
                        <span class="decor-link-menu"></span>
                    </li>
                </ul>

                <form class="d-flex">
                    <a class="btn btn-outline-success text-white btn-success btn-connect" target='_blank' type="button"
                        href="{{ route('login') }}">
                        <span>Connexion</span>
                    </a>
                </form>
            </div>
    </nav>
