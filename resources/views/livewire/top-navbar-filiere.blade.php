
<style>
    #dropmenu1 a {
        text-decoration: none;
    }

    #dropmenu1 nav {
        font-family: monospace;
    }

    #dropmenu1 ul {
        /*background: #f2f2f2;*/
        list-style: none;
        margin: 0;
        padding-left: 0;
    }

    #dropmenu1 li {
        display: block;
        float: left;
        padding: 1rem;
        position: relative;
        text-decoration: none;
        transition-duration: 0.5s;
    }

    #dropmenu1 li a {
    }

    #dropmenu1 li:hover,
    #dropmenu1 li:focus-within {
        background: #243a5e;
        cursor: pointer;
        color: #fff;
    }

    #dropmenu1 li:hover ul li:hover,
    #dropmenu1 li:focus-within ul li:hover {
        background: #fff;
        cursor: pointer;
        margin-left: 0px;
        /* color: #fff; */
    }

    #dropmenu1 li:focus-within a {
        outline: none;
    }

    #dropmenu1 ul li ul {
        background: #f2f2f2;
        visibility: hidden;
        opacity: 0;
        min-width: 15rem;
        position: absolute;
        transition: all 0.5s ease;
        margin-top: 1rem;
        left: 0;
        display: none;
    }

    #dropmenu1 ul li:hover>ul,
    #dropmenu1 ul li:focus-within>ul,
    #dropmenu1 ul li ul:hover,
    #dropmenu1 ul li ul:focus {
        visibility: visible;
        opacity: 1;
        display: block;
        z-index: 30;
    }

    #dropmenu1 ul li ul li {
        clear: both;
        width: 85%;
    }
    #dropmenu1 ul li ul li:hover a {
        border-bottom: 2px solid #000;
    }
    #dropmenu1 ul li ul li span {
        font-size: 12px;
    }
</style>


<nav class="nav-bar row navbar navbar-expand-lg mt-4 nav-top" id="dropmenu1">
    <a class="col-md-2 col-xs-12 title-nav first-item-list"><span>Filière  </span></a>
    <ul class="col-md-5 col-xs-12 d-flex flex-row list-options navbar-nav">
        <li class="dropdown nav-bar-item">
            <a><span>Enseignement</span></a>
            <i class="fas fa-chevron-down"></i>
            <ul class="dropdown" aria-label="submenu">
                @forelse($enseignements as $enseignement)
                <li><a href="{{route('enseignement.view',['code'=>$enseignement->libelle_1])}}"><span>{{$enseignement->libelle}}</span></a></li>
                @empty
                @endforelse
            </ul>
        </li>
        <li class="dropdown nav-bar-item">
            <a><span>option</span></a>
            <i class="fas fa-chevron-down"></i>
            <ul class="dropdown" aria-label="submenu">
                @forelse($options as $option)
                <li><a href="{{route('parcours.show', ['code' => $option->libelle ]) }}"><span>{{$option->libelle}}</span></a></li>
                @empty
                @endforelse
            </ul>
        </li>
        <li class="dropdown nav-bar-item">
            <a><span>parcours académique</span></a>
            <i class="fas fa-chevron-down"></i>
            <ul class="dropdown" aria-label="submenu" style="columns: 2;">
                @forelse($sections as $section)
                <li><a href="#"><span>{{$section->libelle}}</span></a></li>
                @empty
                @endforelse
            </ul>
        </li>
    </ul>
    <br>
</nav>
