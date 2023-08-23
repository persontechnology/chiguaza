@extends('layouts.cliente')

@section('content')

  <!-- Main Sllider Start -->
  <section class="main-slider">
    <div class="main-slider__carousel owl-carousel owl-theme thm-owl__carousel"
        data-owl-options='{"loop": true, "items": 1, "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"], "margin": 0, "dots": true, "nav": true, "animateOut": "slideOutDown", "animateIn": "fadeIn", "active": true, "smartSpeed": 1000, "autoplay": true, "autoplayTimeout": 7000, "autoplayHoverPause": false}'>

        <div class="item main-slider__slide-1">
            <div class="main-slider__bg"
                style="background-image: url(assets/images/portada/parque.jpg);">
            </div><!-- /.slider-one__bg -->
            <div class="main-slider__shape-1">
                <img src="assets/images/shapes/main-slider-shape-1.png" alt="">
            </div>
           
           
            <div class="container">
                <div class="main-slider__content">
                    <p class="main-slider__sub-title">Administración 2023-2027.</p>
                    <h4 class="main-slider__title" style="font-size: 40px;">LUGARES TURÍSTICOS DE CHIGUAZA.</h4>
                    <div class="main-slider__btn-box">
                        <a href="{{ url('/') }}" class="main-slider-two__btn thm-btn{{ Route::is('welcome')?'current':'' }}">Inicio</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!--Page Header End-->
<!--Portfolio Page Start-->
<section class="portfolio-page">
    <div class="container">
        <div class="row">
            <!--Portfolio Page Single Start-->
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="portfolio-page__single">
                    <div class="portfolio-page__img-box">
                        <div class="portfolio-page__img">
                            <img src="assets/images/project/portfolio-page-1-1.jpg" alt="">
                        </div>
                        <div class="portfolio-page__content">
                            <p class="portfolio-page__sub-title">Culture</p>
                            <h4 class="portfolio-page__title"><a href="portfolio-details.html">Town of
                                    Rome</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <!--Portfolio Page Single End-->
            <!--Portfolio Page Single Start-->
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="portfolio-page__single">
                    <div class="portfolio-page__img-box">
                        <div class="portfolio-page__img">
                            <img src="assets/images/project/portfolio-page-1-2.jpg" alt="">
                        </div>
                        <div class="portfolio-page__content">
                            <p class="portfolio-page__sub-title">Culture</p>
                            <h4 class="portfolio-page__title"><a href="portfolio-details.html">Town of
                                    Rome</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <!--Portfolio Page Single End-->
            <!--Portfolio Page Single Start-->
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="portfolio-page__single">
                    <div class="portfolio-page__img-box">
                        <div class="portfolio-page__img">
                            <img src="assets/images/project/portfolio-page-1-3.jpg" alt="">
                        </div>
                        <div class="portfolio-page__content">
                            <p class="portfolio-page__sub-title">Culture</p>
                            <h4 class="portfolio-page__title"><a href="portfolio-details.html">Town of
                                    Rome</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <!--Portfolio Page Single End-->
            <!--Portfolio Page Single Start-->
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="portfolio-page__single">
                    <div class="portfolio-page__img-box">
                        <div class="portfolio-page__img">
                            <img src="assets/images/project/portfolio-page-1-4.jpg" alt="">
                        </div>
                        <div class="portfolio-page__content">
                            <p class="portfolio-page__sub-title">Culture</p>
                            <h4 class="portfolio-page__title"><a href="portfolio-details.html">Town of
                                    Rome</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <!--Portfolio Page Single End-->
            <!--Portfolio Page Single Start-->
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="portfolio-page__single">
                    <div class="portfolio-page__img-box">
                        <div class="portfolio-page__img">
                            <img src="assets/images/project/portfolio-page-1-5.jpg" alt="">
                        </div>
                        <div class="portfolio-page__content">
                            <p class="portfolio-page__sub-title">Culture</p>
                            <h4 class="portfolio-page__title"><a href="portfolio-details.html">Town of
                                    Rome</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <!--Portfolio Page Single End-->
            <!--Portfolio Page Single Start-->
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="portfolio-page__single">
                    <div class="portfolio-page__img-box">
                        <div class="portfolio-page__img">
                            <img src="assets/images/project/portfolio-page-1-6.jpg" alt="">
                        </div>
                        <div class="portfolio-page__content">
                            <p class="portfolio-page__sub-title">Culture</p>
                            <h4 class="portfolio-page__title"><a href="portfolio-details.html">Town of
                                    Rome</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <!--Portfolio Page Single End-->
            <!--Portfolio Page Single Start-->
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="portfolio-page__single">
                    <div class="portfolio-page__img-box">
                        <div class="portfolio-page__img">
                            <img src="assets/images/project/portfolio-page-1-7.jpg" alt="">
                        </div>
                        <div class="portfolio-page__content">
                            <p class="portfolio-page__sub-title">Culture</p>
                            <h4 class="portfolio-page__title"><a href="portfolio-details.html">Town of
                                    Rome</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <!--Portfolio Page Single End-->
            <!--Portfolio Page Single Start-->
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="portfolio-page__single">
                    <div class="portfolio-page__img-box">
                        <div class="portfolio-page__img">
                            <img src="assets/images/project/portfolio-page-1-8.jpg" alt="">
                        </div>
                        <div class="portfolio-page__content">
                            <p class="portfolio-page__sub-title">Culture</p>
                            <h4 class="portfolio-page__title"><a href="portfolio-details.html">Town of
                                    Rome</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <!--Portfolio Page Single End-->
            <!--Portfolio Page Single Start-->
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="portfolio-page__single">
                    <div class="portfolio-page__img-box">
                        <div class="portfolio-page__img">
                            <img src="assets/images/project/portfolio-page-1-9.jpg" alt="">
                        </div>
                        <div class="portfolio-page__content">
                            <p class="portfolio-page__sub-title">Culture</p>
                            <h4 class="portfolio-page__title"><a href="portfolio-details.html">Town of
                                    Rome</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <!--Portfolio Page Single End-->
        </div>
    </div>
</section>
<!--Portfolio Page End-->

@endsection