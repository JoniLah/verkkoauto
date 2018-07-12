<?php
    include("includes/head.html");
    include("includes/fb.html");
    include("includes/banner.php");
    ini_set('max_execution_time', 0); // Avoid the time exceed error
?>

<div class="main-content">
    <section id="section-container-box" class="section-light">
        <div class="img-showcase flex-container row-container">
            <ul class="img-list clearfix column">
                <li>
                    <div class="img-container animated flipInY">
                        <figure class="container-photo">
                            <a href="contact.php"><img src="/verkkoauto/img/feature_contact.jpg" alt=""></a>
                            <div class="text-block">
                                <h3 class="feature-text" unselectable="on">Yhteystiedot</h3>
                            </div>
                        </figure>
                    </div>
                </li>
                <li>
                    <div class="img-container animated flipInY">
                        <figure class="container-photo">
                            <a href="https://www.lahitapiola.fi/henkilo" target="_blank"><img src="/verkkoauto/img/feature_funding.jpg" alt=""></a>
                            <div class="text-block">
                                <h3 class="feature-text" unselectable="on">Rahoitus</h3>
                            </div>
                        </figure>
                    </div>
                </li>
                <li>
                    <div class="img-container animated flipInY">
                        <figure class="container-photo">
                            <a href="cars.php"><img src="/verkkoauto/img/feature_cars.jpg" alt=""></a>
                            <div class="text-block">
                                <h3 class="feature-text" unselectable="on">Ajoneuvot</h3>
                            </div>
                        </figure>
                    </div>
                </li>
            </ul>
        </div>
        <div class="flex-container row-container" id="wrap">
            <div class="left animated fadeInUp">
                <h2>Verkkoauto on pysyvästi edullinen!</h2>
                <p class="container-text">
                    Verkkoauto myy asiakkailleen laadukkaita henkilöautoja, moottoripyöriä ja pakettiautoja edulliseen hintaan.<br/>
                    Meiltä löydät kattavan valikoiman ajoneuvoistamme, saat myös henkilökohtaisen palvelun automyyjiltämme ja apua esimerkiksi rahoitusasioihin.<br/>
                    <br/>
                    Verkkoauto sijaitsee noin 500 metrin päässä Siilitien metroasemasta, joten julkisilla pääset helposti yrityksemme tiloihin.<br/>
                    <br/>
                    Voit varata koeajon ja näytön puhelimitse tai tulemalla paikan päälle.<br/>
                    <br/>

                    Myymme, ostamme ja vaihdamme autoja.
                    <br/>
                    AVOINNA MA-PE 9-18, LA 10-15 <br/>
                </p>
                <h2>Rahoitus</h2>
                <p class="container-text">
                    Tarjoamme rahoitusta jokaiseen ajoneuvoomme ilman käsirahaa LähiTapiola -rahoitusyhtiön kautta.
                    Lisätietoja <a href="https://www.lahitapiola.fi/henkilo" target="_blank" style="color: #1971ff">tästä</a>. <br/>
                    <img class="sponsor-img" src="/verkkoauto/img/Lahitapiola_RAHOITUS_RGB_sininen.png" alt="">
                </p>
            </div>
            <div class="right">
                <div id="fb-root"></div>
                <div class="fb-page" data-href="https://www.facebook.com/VerkkoAuto/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="false" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/VerkkoAuto/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/VerkkoAuto/">Verkkoauto OY</a></blockquote></div>
            </div> 
        </div>
    </section>

    <section id="section-car-showcase" class="section-light">
        <h2>Meiltä esimerkiksi</h2>
        <div id="car-review-section" class="row-container">
            <div id="car-showcase" class="flex-container">
                <div id="car-container"></div>
                <div id="car-container-details"></div>
            </div>
        </div>
    </section>
</div>

<?php include("includes/footer.html"); ?>