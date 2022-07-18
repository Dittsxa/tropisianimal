@extends('layouts.main')
@section('judul', 'Galeri | Tropisianimal')
@section('content')
    @include('layouts.component.navbar')
    
    <section>
        <div class="rest-cover img-fluid"></div>
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
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="3" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="2000">
                            <img width="100%" max-height="100%" height="350px" style="object-fit: cover;" src="{{ asset('assets/x1/Group 77.png') }}" >
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <img width="100%" height="350px" style="object-fit: cover;" src="{{ asset('assets/x1/juliana-castro-LdEZjO3wjqQ-unsplash.png') }}" >
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <img width="100%" height="350px" style="object-fit: cover;" src="{{ asset('assets/x1/smit-patel-dGMcpbzcq1I-unsplash.png') }}" >
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <img width="100%" height="350px" style="object-fit: cover;" src="{{ asset('assets/x2/ronald-gijezen-7h06P9UKhYY-unsplash@2x.png') }}" >
                        </div>
                    </div>
                    <a class="carousel-control-prev" data-bs-target="#carouselExampleControls" role="button" data-bs-slide="prev">
                        <span class="" aria-hidden="true" style="background-color: #00811E; height: 40px; width: 40px;">
                            <i class="fa fa-arrow-left" style="margin-top: 12px;"></i>
                        </span>
                    </a>
                    <a class="carousel-control-next" data-bs-target="#carouselExampleControls" role="button" data-bs-slide="next">
                        <span class="" aria-hidden="true" style="background-color: #00811E; height: 40px; width: 40px;">
                            <i class="fa fa-arrow-right" style="margin-top: 12px;"></i>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="container d-flex">
        <div class="row mt-3 mb-5">
            @foreach ($galeri as $row)
                <div class="col-lg-3 col-6 mt-4 flex-column photo-gallery">
                    <img src="{{ asset('storage/' . $row->image) }}" height="200px" class="img-fluid">
                </div>    
            @endforeach
            
            {!! $galeri->links() !!}
        </div>
    </div>

    @include('layouts.component.footer')
@endsection
