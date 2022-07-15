
<nav class="nav-bar navbar navbar-expand-lg nav-top" id="dropmenu1">

    <a class="col-md-2 title-nav">
        <span class="first-item-list">Etablissements</span></a>

    <ul class="col-md-5 list-options navbar-nav">
        <li class="dropdown nav-bar-item {{ (request()->is('etablissement')) ? 'active' : '' }}">
            <a href="{{route('etablissement')}}"><span>Ecoles secondaires</span></a>
        </li>
        <li class="dropdown nav-bar-item {{ (request()->is('etablissement/ecole*')) ? 'active' : '' }}">
            <a href="{{route('ecolePro')}}"><span>Ecoles de formations professionnelles</span></a>
        </li>
        <li class="dropdown nav-bar-item">
            <a><span>Aide</span></a>
        </li>
    </ul>
    <br>
</nav>
