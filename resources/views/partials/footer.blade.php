<footer id="footer" class="footer mt-auto py-3 bg-footer" style="padding-bottom: 0px !important;">
    <div class="container-fluid ps-4  py-4">
        <div class="row">
            <div class="col-md-9 ps-5 group-items-footer pe-0">
                <h2 class="title-footer" data-aos="fade-right"><span>liens</span> utiles</h2>
                <ul class="footer-navList d-none d-sm-block" data-aos="zoom-in" >
                    <li class="footer-navItem"><a class="footer-navLink" target="_self" href="{{route('orientation')}}">Orientation</a></li>
                    <li class="footer-navItem"><a class="footer-navLink" target="_self" href="#">Parcours académiques</a></li>
                    <li class="footer-navItem"><a class="footer-navLink" target="_self" href="#">Formations professionnelles</a></li>
                    <li class="footer-navItem"><a class="footer-navLink" target="_self" href="#">Etablissements secondaires</a></li>
                    <li class="footer-navItem"><a class="footer-navLink" target="_self" href="#">Métiers</a></li>
                    <li class="footer-navItem"><a class="footer-navLink" target="_self" href="#">Diplomes </a></li>
                    <li class="footer-navItem"><a class="footer-navLink" target="_self" href="#">Debouchées et métiers </a></li>
                    <li class="footer-navItem"><a class="footer-navLink" target="_self" href="#">Cycles et parcours académiques</a></li>
                    <li class="footer-navItem"><a class="footer-navLink" target="_self" href="#">Actualités</a></li>
                    <li class="footer-navItem"><a class="footer-navLink" target="_self" href="#">Services gouvernementaux </a></li>
                    <li class="footer-navItem"><a class="footer-navLink" target="_self" href="#">Aide en ligne </a></li>
                    <li class="footer-navItem"><a class="footer-navLink" target="_self" href="#">Informations légales</a></li>
                    <li class="footer-navItem"><a class="footer-navLink" target="_self" href="#">Plan du site</a></li>
                    <li class="footer-navItem"><a class="footer-navLink" target="_blank" href="#">Catalogue des filières</a></li>
                    <li class="footer-navItem"><a class="footer-navLink" target="_blank" href="#">Devenir Ambassadeur</a></li>
                </ul>

                <div class="accordion d-block col-11 ms-2 mb-4 d-sm-none accordion-flush" id="accordionLink">
                    <div class="accordion-item bg-transparent">
                      <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                          Orientation
                        </button>
                      </h2>
                      <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionLink">
                        <div class="accordion-body">
                            <ul class="mt-4">
                                <li class="footer-navItem"><a class="footer-navLink" target="_self" href="#">Parcours académiques</a></li>
                                <li class="footer-navItem"><a class="footer-navLink" target="_self" href="#">Formations professionnelles</a></li>
                                <li class="footer-navItem"><a class="footer-navLink" target="_self" href="#">Etablissements </a></li>
                                <li class="footer-navItem"><a class="footer-navLink" target="_self" href="#">Métiers</a></li>
                            </ul>
                        </div>
                      </div>
                    </div>
                    {{-- <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                          Formation
                        </button>
                      </h2>
                      <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionLink">
                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                          Etablissement
                        </button>
                      </h2>
                      <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionLink">
                        <div class="accordion-body">

                        </div>
                      </div>
                    </div> --}}

                  </div>
            </div>
            <div class="col-md-3" id="nous-contacter">
                <div class='ms-2'>
                    <h2 class="title-footer" data-aos="fade-right"><span>contacter</span> nous</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="sub-footer container-fluid py-2" id="sub-footer">
        <div class="u-wrapper row " data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="300" data-aos-offset="0">
            <p class="copyright align-items-center text-center mt-2 mb-1">©&nbsp;Systems&nbsp;2021&nbsp;|&nbsp;<a href="#">Mentions légales</a>&nbsp;|&nbsp;<a href="#">Plan du site</a>&nbsp;|&nbsp;<a href="#" target="_blank" rel="nofollow">Imprimer</a>&nbsp;|&nbsp;Mise à jour :&nbsp;21/09/2021</p>
            {{-- <div class="production">
                <div class="production-text">Réalisé par&nbsp;KCorp</div>
            </div> --}}
        </div>
    </div>
</footer>

<script>
    AOS.init();
</script>

<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
      $(document).ready(function() {
          $('body').bind('cut copy', function(e) {
              e.preventDefault();
            });
        });
</script>
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
<script>
    // Add active class to the current button (highlight it)
    var header = document.getElementById("nav-menu");
    var btns = header.getElementsByClassName("nav-item");
    for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function() {
            var current = document.getElementsByClassName("active");
            current[0].className = current[0].className.replace(" active", "");
            this.className += " active";
        });
    }
</script>
