<div>


    <section id="actualites-onglet">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row">
                    <div class="col-md-9" id="item-actualite">
                        <div class="col-10 site-text" id="description" style="box-shadow: none;margin-left: 50px;">
                            <h2 class="my-2 py-4 title-1-1 d-flex justify-content-start" style="align-items: center;"">
                                <span class=" text-uppercase m-2 text-actualite">Actualite</span>
                            </h2>
                            <p class="text-description-actualite col-md-12 site-text py-2" style="color: #243a5e;">Lorem
                                ipsum dolor sit amet consectetur adipisicing elit. Laborum vero culpa, debitis ducimus
                                atque aliquid beatae modi aut distinctio. Pariatur fugit expedita sit ipsum, quos
                                praesentium maxime accusamus eius repudiandae!</p>
                            <a class="lire-actualite" href="#">Lire l'actualité </a>
                            <hr style="color: #38c172;">
                            <time datetime="2021-06-01 00:00:00 +0000 UTC"><i class="ti-alarm-clock"></i>01 June
                                2021</time>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="header-actualites">
            <div class="service-bg"></div>
            <div class="row" style="justify-content: center;">
                <h2 class="title-header-actualite title-1-1">Actualites {{$menu->titre}}</h2>
                <hr class="divider">
            </div>
        </div>

        @livewire('searchbar-news')

        <button class="carousel-control-next" type="button" data-bs-target="#carouselParcours"
            style="padding-left: 11%;" data-bs-slide="next">
            <span class="fa fa-chevron-right fa-2x text-dark"></span>
        </button>
    </section>
</div>
