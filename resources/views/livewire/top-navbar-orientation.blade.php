<nav class="navbar container-header navbar-light navbar-expand-lg" data-aos="fade-down" style="background-color: #ffffff14;background-size: cover;background-position: 50%;background-repeat: no-repeat;position: relative;">
    <div class="container-fluid">
        <a class="navbar-brand col-2 d-flex justify-content-center" href="/">
            <span class="logo-welcome">Orientation</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 px-4 mx-auto mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('orientation') }}">Orientation</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('formation') }}">Formation</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('structure') }}">Structure</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('etablissement') }}">Etablissement</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                </li>
            </ul>

            <form class="d-flex">
                <button class="btn btn-outline-success text-white btn-connect" type="submit">Connexion</button>
            </form>
        </div>
    </div>
</nav>