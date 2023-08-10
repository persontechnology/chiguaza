@extends('layouts.cliente')
@section('content')
    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header-bg" style="background-image: url({{ asset('assets/images/backgrounds/page-header-bg.jpg') }})">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <h1 class="text-white">{{ $titulo??config('app.name') }}</h1>

            </div>
        </div>
    </section>
    <!--Page Header End-->

    @include('estaticas.carpeta',['carpeta'=>$carpeta])
    
@endsection