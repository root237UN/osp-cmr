
<nav class="nav-bar navbar navbar-expand-lg nav-top" id="dropmenu1">

    <a class="col-md-4 title-nav">
        <span class="first-item-list">Aide à l'insertion professionnelle</span></a>

    <ul class="col-md-5 list-options navbar-nav">
        <li class="dropdown nav-bar-item {{ (request()->is('insertion*')) ? 'active' : '' }}">
            <a class="item-nav"><span>Ministère</span></a>
        </li>
        <li class="dropdown nav-bar-item">
            <a class="item-nav"><span>Programmes d'aide gouvernementaux</span></a>
            <i class="fas fa-chevron-down"></i>
            {{-- <div class='sub-menu'>

            </div> --}}
        </li>
        <li class="dropdown nav-bar-item">
            <a class="item-nav"><span>Aide</span></a>
        </li>
    </ul>
    <br>
</nav>


<script>
    window.addEventListener("load", function(event) {
        console.log("Toutes les ressources sont chargées !");

        //Affichage des sous menus
        let menus = document.querySelectorAll('.nav-bar-item');
        menus.forEach(element => {
            element.addEventListener('click', (e) => {
                if (!element.classList.contains('active')) element.classList.add('active');
                else element.classList.remove('active');
            });
        });
        menus.classList.remove('active');


        displayMenu = (e) => {}
        // console.log(menus);
    });
</script>
