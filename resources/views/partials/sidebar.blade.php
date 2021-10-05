<div class="sidebar-left">
    <div class="header-sidebar-left">
        <p class="text-center">
            <span>Orientation</span>
        </p>
    </div>
    <div class="body-sidebar-left">
        <div class="body-content-left">
            <nav class="sidebar-menu">
                <ul>
                    <li>
                        <a href="{{route('admin.dashboard')}}">Dashboard</a>
                    </li>
                    <li>
                        <a href="#">Orientation</a>
                    </li>
                    <li>
                        <a href="#">Enseignement</a>
                    </li>
                    <li>
                        <a href="#">Formation</a>
                    </li>
                    <li>
                        <a href="#" class="btn-etablissement">Etablissement
                            <i class="fas fa-caret-down caret"></i>
                        </a>
                        <ul class="sub-menu-etablissement">
                            <li><a href="{{route('admin.ecole')}}">Ecole</a></li>
                            <li><a href="{{route('admin.structure')}}">Structure</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fas fa-comment-alt icon"></i>Forum</a>
                    </li>
                    <li>
                        <a href="#"><i class="fas fa-cogs icon"></i>Parametre</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
