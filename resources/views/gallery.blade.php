@extends('layouts.main')
@section('judul', 'Galeri | Tropisianimal')
@section('content')
    @include('layouts.component.navbar')
    
    <section>
        <img src="{{ asset('assets/x1/pascal-muller-iSz0IMtulos-unsplash.png') }}" alt="" class="rest-cover img-fluid">
        <div class="container mb-3">
            <div class="row">
                <div class="col-lg-6 align-self-center" style="margin-top: 150px">
                    <h1 class="fw-bold text-light" data-aos="fade-up">Galeri</h1>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container mt-2">
            <div class="form-group" style="margin-top: 160px;">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img width="100%" max-height="100%" height="350px" object-fit="cover" src="{{ asset('assets/x1/Group 77.png') }}" >
                        </div>
                        <div class="carousel-item">
                            <img width="100%" height="350px" object-fit="cover" src="{{ asset('assets/x1/juliana-castro-LdEZjO3wjqQ-unsplash.png') }}" >
                        </div>
                        <div class="carousel-item">
                            <img width="100%" height="350px" object-fit="cover" src="{{ asset('assets/x1/smit-patel-dGMcpbzcq1I-unsplash.png') }}" >
                        </div>
                        <div class="carousel-item">
                            <img width="100%" height="350px" object-fit="cover" src="{{ asset('assets/x2/ronald-gijezen-7h06P9UKhYY-unsplash@2x.png') }}" >
                        </div>
                    </div>
                    <a class="carousel-control-prev" data-bs-target="#carouselExampleControls" role="button" data-bs-slide="prev">
                        <span class="fa fa-arrow-left" aria-hidden="true"></span>
                    </a>
                    <a class="carousel-control-next" data-bs-target="#carouselExampleControls" role="button" data-bs-slide="next">
                        <span class="fa fa-arrow-right" aria-hidden="true"></span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="container d-flex">
        <div class="row mt-3 mb-5">
            <div class="col-lg-3 mt-4 ">
                <img src="{{ asset('assets/x2/mathew-schwartz-OjQgsR1oyEw-unsplash@2x.png') }}" height="200px" class="img-fluid">
            </div>
            <div class="col-lg-3 mt-4 flex-column">
                <img src="{{ asset('assets/x2/vladimir-kudinov-vmlJcey6HEU-unsplash@2x.png') }}" height="200px" class="img-fluid">
            </div>
            <div class="col-lg-3 mt-4 flex-column">
                <img src="{{ asset('assets/x2/alessandro-desantis-9_9hzZVjV8s-unsplash@2x.png') }}" height="200px" class="img-fluid">
            </div>
            <div class="col-lg-3 mt-4 flex-column">
                <img src="{{ asset('assets/x2/david-clode-0lwa8Dprrzs-unsplash@2x.png') }}" height="200px" class="img-fluid">
            </div>
            <div class="col-lg-3 mt-4 flex-column">
                <img src="{{ asset('assets/x2/david-clode-AtCChdVhAmA-unsplash@2x.png') }}" height="200px" class="img-fluid">
            </div>
            <div class="col-lg-3 mt-4 flex-column">
                <img src="{{ asset('assets/x2/dawn-armfield-84n7c9cLEKM-unsplash@2x.png') }}" height="200px" class="img-fluid">
            </div>
            <div class="col-lg-3 mt-4 flex-column">
                <img src="{{ asset('assets/x2/TERUMBU-KARANG (1)@2x.png') }}" height="200px" class="img-fluid">
            </div>
            <div class="col-lg-3 mt-4 flex-column">
                <img src="{{ asset('assets/x2/joshua-j-cotten-VCzNXhMoyBw-unsplash@2x.png') }}" height="200px" class="img-fluid">
            </div>
        </div>
    </div>

    @include('layouts.component.footer')
@endsection
