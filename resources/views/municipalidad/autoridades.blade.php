@extends('layouts.cliente')

@section('content')

    <!-- Main Sllider Two Start -->
    <section class="main-slider-two">
        <div class="main-slider-two__carousel owl-carousel owl-theme thm-owl__carousel"
            data-owl-options='{"loop": true, "items": 1, "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"], "margin": 0, "dots": false, "nav": false, "animateOut": "slideOutDown", "animateIn": "fadeIn", "active": true, "smartSpeed": 1000, "autoplay": true, "autoplayTimeout": 7000, "autoplayHoverPause": false}'>

            <div class="item main-slider-two__slide-1">
                <div class="main-slider-two__bg"
                    style="background-image: url(assets/images/autoridades/autoridades.jpg);">
                </div><!-- /.slider-one__bg -->
                <div class="main-slider-two__shadow"
                    style="background-image: url(assets/images/shapes/main-slider-two-shadow.png);"></div>
                <div class="main-slider-two__sign">
                    <img src="" alt="">
                </div>
                <div class="main-slider-two__img-box">
                    <div class="main-slider-two__img-shape-1"></div>
                    <div class="main-slider-two__img-shape-2"></div>
                    <div class="main-slider-two__img">
                        <img src="assets/images/autoridades/presidente.png" alt="">
                    </div>
                </div>
                <div class="container">
                    <div class="main-slider-two__content">
                        <div class="main-slider-two__shape-1 float-bob-x">
                            <img src="assets/images/shapes/main-slider-two-shape-1.png" alt="">
                        </div>
                        <p class="main-slider-two__sub-title">“PRESIDENTE DEL GAD PARROQUIAL CHIGUAZA 2023-2027”</p>
                        
                        <h2 class="main-slider-two__title">Sr.Julian Tii</h2>
                          
                        <div class="main-slider-two__btn-box">
                          
                            <a href="{{ url('/') }}" class="main-slider-two__btn thm-btn{{ Route::is('welcome')?'current':'' }}">Inicio</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Main Sllider Two Start -->
    <!--Team One Start-->
    <section class="team-one team-page">
        <div class="container">
            <div class="section-title text-center">
                <div class="section-title__icon">
                    <span class="fa fa-star"></span>
                </div>
                <span class="section-title__tagline">2023-2027</span>
                <h2 class="section-title__title">Vocales y sus funciones.
                </h2>
            </div>
            <div class="team-one__inner">
                <div class="row">
                    <!--Team One Single Start-->
                    <div class="col-xl-4 col-lg-4">
                        <div class="team-one__single">
                            <div class="team-one__shape-1">
                                <img src="" alt="">
                            </div>
                            <div class="team-one__img-box">
                                <div class="team-one__img">
                                    <img src="assets/images/autoridades/vicepresidenta.png" alt="">
                                </div>
                            </div>
                            <div class="team-one__content">
                                <h3 class="team-one__name"><a href="{{ route('detallevocal') }}" class="{{ Route::is('detallevocal')?'current':'' }}">Tg.Flor Tserembo</a></h3>

                               
                                
                                <p class="team-one__sub-title">Vicepresidenta</p>
                                <div class="team-one__social">
                                    <a target="_blank" href="https://www.facebook.com/profile.php?id=100070250487028"><i class="fab fa-twitter"></i></a>
                                    <a target="_blank"href="https://www.facebook.com/profile.php?id=100070250487028"><i class="fab fa-facebook"></i></a>
                                    <a target="_blank"href="https://www.facebook.com/profile.php?id=100070250487028"><i class="fab fa-pinterest-p"></i></a>
                                    <a target="_blank"href="https://www.facebook.com/profile.php?id=100070250487028"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->
                    <!--Team One Single Start-->
                    <div class="col-xl-4 col-lg-4">
                        <div class="team-one__single">
                            <div class="team-one__shape-2">
                                <img src="" alt="">
                            </div>
                            <div class="team-one__img-box">
                                <div class="team-one__img">
                                    <img src="assets/images/autoridades/marco_mejeant.jpg" alt="">
                                </div>
                            </div>
                            <div class="team-one__content">
                                <h3 class="team-one__name"><a href="{{ route('detallevocal1') }}" class="{{ Route::is('detallevocal1')?'current':'' }}">Ing.Marco Mejeant</a></h3>
                                <p class="team-one__sub-title">Planificación y obras públicas</p>
                                <div class="team-one__social">
                                    <a target="_blank" href="https://www.facebook.com/armando.akintiua"><i class="fab fa-twitter"></i></a>
                                    <a target="_blank" href="https://www.facebook.com/armando.akintiua"><i class="fab fa-facebook"></i></a>
                                    <a target="_blank" href="https://www.facebook.com/armando.akintiua"><i class="fab fa-pinterest-p"></i></a>
                                    <a target="_blank" href="https://www.facebook.com/armando.akintiua"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->
                    <!--Team One Single Start-->
                    <div class="col-xl-4 col-lg-4">
                        <div class="team-one__single">
                            <div class="team-one__shape-3">
                                <img src="" alt="">
                            </div>
                            <div class="team-one__img-box">
                                <div class="team-one__img">
                                    <img src="assets/images/autoridades/pedro_wambashu.jpg" alt="">
                                </div>
                            </div>
                            <div class="team-one__content">
                                <h3 class="team-one__name"><a href="{{ route('detallevocal2') }}" class="{{ Route::is('detallevocal2')?'current':'' }}">Lic.Pedro Wambashu</a></h3>
                                <p class="team-one__sub-title">Producción y turismo</p>
                                <div class="team-one__social">
                                    <a target="_blank" href="https://www.facebook.com/profile.php?id=100081614767763"><i class="fab fa-twitter"></i></a>
                                    <a target="_blank" href="https://www.facebook.com/profile.php?id=100081614767763"><i class="fab fa-facebook"></i></a>
                                    <a target="_blank" href="https://www.facebook.com/profile.php?id=100081614767763"><i class="fab fa-pinterest-p"></i></a>
                                    <a target="_blank" href="https://www.facebook.com/profile.php?id=100081614767763"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->
                    <!--Team One Single Start-->
                    <div class="col-xl-4 col-lg-4">
                        <div class="team-one__single">
                            <div class="team-one__shape-4">
                                <img src="" alt="">
                            </div>
                            <div class="team-one__img-box">
                                <div class="team-one__img">
                                    <img src="assets/images/autoridades/antonio_ankuash.jpg" alt="">
                                </div>
                            </div>
                            <div class="team-one__content">
                                <h3 class="team-one__name"><a href="{{ route('detallevocal3') }}" class="{{ Route::is('detallevocal3')?'current':'' }}">Tlgo.Antonio Ankuash</a></h3>
                                <p class="team-one__sub-title">Deporte y recreación</p>
                                <div class="team-one__social">
                                    <a target="_blank" href="https://www.facebook.com/shakaim.ankuash"><i class="fab fa-twitter"></i></a>
                                    <a target="_blank" href="https://www.facebook.com/shakaim.ankuash"><i class="fab fa-facebook"></i></a>
                                    <a target="_blank" href="https://www.facebook.com/shakaim.ankuash"><i class="fab fa-pinterest-p"></i></a>
                                    <a target="_blank" href="https://www.facebook.com/shakaim.ankuash"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->
                   
                </div>
            </div>
        </div>
    </section>
    <!--Team One End-->
@endsection