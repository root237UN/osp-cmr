
<footer class="footer mt-auto py-3 bg-footer" style="padding-bottom: 0px !important;">
    <div class="container py-4">
        <div class="row">
            <div class="col-md-9">
                <h2 class="title-footer" data-aos="fade-right"><span>liens</span> utiles</h2>
                <ul class="footer-navList" data-aos="zoom-in">
                    <li class="footer-navItem"><a class="footer-navLink" target="_self" href="{{route('dev')}}">Orientation</a></li>
                    <li class="footer-navItem"><a class="footer-navLink" target="_self" href="{{route('dev')}}">Rechercher</a></li>
                    <li class="footer-navItem"><a class="footer-navLink" target="_self" href="{{route('dev')}}">Parcours</a></li>
                    <li class="footer-navItem"><a class="footer-navLink" target="_self" href="{{route('dev')}}">Formation</a></li>
                    <li class="footer-navItem"><a class="footer-navLink" target="_self" href="{{route('dev')}}">Etablissements</a></li>
                    <li class="footer-navItem"><a class="footer-navLink" target="_self" href="{{route('dev')}}">Métiers</a></li>
                    <li class="footer-navItem"><a class="footer-navLink" target="_self" href="{{route('dev')}}">Diplomes </a></li>
                    <li class="footer-navItem"><a class="footer-navLink" target="_self" href="{{route('dev')}}">Debouches et metiers </a></li>
                    <li class="footer-navItem"><a class="footer-navLink" target="_self" href="{{route('dev')}}">Cycle et parcours</a></li>
                    <li class="footer-navItem"><a class="footer-navLink" target="_self" href="{{route('dev')}}">Actualites</a></li>
                    <li class="footer-navItem"><a class="footer-navLink" target="_self" href="{{route('dev')}}">Ministere </a></li>
                    <li class="footer-navItem"><a class="footer-navLink" target="_self" href="{{route('dev')}}">Aide en ligne </a></li>
                    <li class="footer-navItem"><a class="footer-navLink" target="_self" href="{{route('dev')}}">Informations legales</a></li>
                    <li class="footer-navItem"><a class="footer-navLink" target="_self" href="{{route('dev')}}">Plan du site</a></li>
                    <li class="footer-navItem"><a class="footer-navLink" target="_blank" href="{{route('dev')}}">Catalogue des filiere</a></li>
                    <li class="footer-navItem"><a class="footer-navLink" target="_blank" href="{{route('dev')}}">Filiere</a></li>
                    <li class="footer-navItem"><a class="footer-navLink" target="_blank" href="{{route('dev')}}">Devenir Ambassadeur</a></li>
                </ul>
            </div>
            <div class="col-md-3" id="nous-contacter">
                <div>
                    <h2 class="title-footer" data-aos="fade-right"><span>contacter</span> nous</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="sub-footer py-2" id="sub-footer">
        <div class="u-wrapper" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="300" data-aos-offset="0">
            <p class="copyright">©&nbsp;KCorp Systems&nbsp;2021&nbsp;|&nbsp;<a href="/mentions-legales.php">Mentions légales</a>&nbsp;|&nbsp;<a href="/plan-du-site.php">Plan du site</a>&nbsp;|&nbsp;<a href="/index?tpl=2" target="_blank" rel="nofollow">Imprimer</a>&nbsp;|&nbsp;Mise à jour :&nbsp;21/07/2021</p>
            <div class="production">
                <div class="production-text">Réalisé par&nbsp;KCop</div>
            </div>
        </div>
    </div>
</footer>

<script>
    AOS.init();
    feather.replace()
</script>
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
<script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>

<script>

    let btn = document.getElementById('btn-display');
    /*console.log(btn);
    btn.onclick(function(){
        alert("Hello");
    });*/

    if (document.getElementById('typed3')) {
        console.log('Ok');
        var typed3 = new Typed('#typed3', {
            strings: [
                'un enseignement .',
                'une formation .',
                'un programme .',
            ],
            loop: true,
            typeSpeed: 150,
            startDelay: 4000,
            cursorChar: '~',
            backDelay: 2500,
            backSpeed: 20,
        });
    }

    if (document.getElementById('typed1')) {

var typed = new Typed('#typed1', {
    strings: [
        'Une ecole qui vous convient...',
        'Un parcours fait pour vous ...',
        'Votre metier !',
    ],
    loop: true,
    typeSpeed: 150,
    startDelay: 4000,
    cursorChar: '~',
    backDelay: 2500,
    backSpeed: 20,
});
}
    if (document.getElementById('typed')) {

        var typed = new Typed('#typed', {
            strings: [
                'une option ...',
                'une option ...',
            ],
            loop: true,
            typeSpeed: 150,
            startDelay: 4000,
            cursorChar: '~',
            backDelay: 2500,
            backSpeed: 20,
        });
    }

    if (document.getElementById('typed2')) {
        var typed2 = new Typed('#typed2', {
            strings: [
                'l\'aviation .',
                'le commerce .',
                'l\'industrie .',
            ],
            loop: true,
            typeSpeed: 150,
            startDelay: 4000,
            cursorChar: '~',
            backDelay: 2500,
            backSpeed: 20,
        });
    }
</script>