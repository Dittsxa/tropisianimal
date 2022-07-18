@extends('layouts.main')

@section('judul', 'Home | Tropisianimal')
@section('content')
    <header>
        @include('layouts.component.navbar')
    </header>

    {{-- Jumbo Tron --}}
    <section class="hero">
        <div class="jumbotron jumbotron-fluid bg-transparent mt-5">
            {{-- <img src="{{ asset('assets/x2/pascal-muller-iSz0IMtulos-unsplash@2x.png') }}" alt="" class="cover-home img-fluid"> --}}
            <div class="cover-home img-fluid"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-12 align-self-center" id="header-title">
                        <h2 class="fw-bold text-light display-3" data-aos="fade-right" data-aos-offset="100">Hewan <br> Tropis di Dunia</h2>
                        <p class="text-light mt-3" style="font-size: 14px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia commodi facilis, eius quae nobis labore vero ipsa? Dicta quos temporibus eligendi, in tempore animi ex nemo quo esse? Tenetur, obcaecati!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- About  --}}
    <section id="about-home" data-aos="fade-up" data-aos-offset="100"> 
        <div class="container mb-5 mt-5"> 
            <div class="row">
                <div class="col-lg-6 ml-auto">
                    <h6 class="text-uppercase fw-bold" data-aos="fade-right" data-aos-offset="100" style="color: var(--primary-color);">Tentang Kami</h6>
                    <h1 class="text-body fw-bold" data-aos="fade-right" data-aos-offset="100">Membangun <br> Komunitas Hewan</h1>
                    <p class="fw-500">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam, cumque sed? Aliquid, tempore deleniti. Nisi iure fugit earum eligendi beatae, excepturi incidunt qui porro distinctio illum</p>
                    <p class="fw-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus omnis minima inventore dolorem illo similique voluptates voluptate et, ducimus sunt rerum cum ut expedita eveniet molestias magni. Saepe, omnis dolores!</p>
                    <a href="{{ url('/tentang') }}" style="padding: 15px;" class="btn btn-success rounded-0"> 
                        Baca Selengkapnya
                        <img src="{{ asset('assets/arrow-right (1).svg') }}" alt="" class="mx-2">
                    </a>
                </div>
                <div class="col-md-6 flex-item justify-content-end" id="img-about-home" data-aos="zoom-in" data-aos-offset="200">
                    <img src="{!! asset('assets/x1/alessandro-desantis-9_9hzZVjV8s-unsplash.png') !!}" alt="" max-width="100%" height="auto" class="img-fluid mt-2" id="img-about-home-1">
                    <img src="{!! asset('assets/x1/joshua-j-cotten-VCzNXhMoyBw-unsplash.png') !!}" float="left" max-width="100%" height="auto" class="img-fluid mt-2 ps-1" style="padding-left: -2rem;" id="img-about-home-2">
                    <img src="{!! asset('assets/x1/Group 77.png') !!}"  float="left" width="97%" height="auto" class="img-fluid mt-2">
                </div>
            </div>
        </div>
    </section>

    {{-- About --}}
    <section id="about-card-home">
        <div class="background-cover"></div>
        {{-- <img src="{{ asset('assets/x2/juliana-castro-LdEZjO3wjqQ-unsplash@2x.png') }}" alt="" class="background-cover img-fluid"> --}}
        <div class="container" data-aos="fade-right">
            <div class="row">
                <div class="col-lg-9 ml-auto mt-5" style="">
                    <h3 class="fw-bold display-5 text-capitalize text-light">Kami Membawa Anda <br> Untuk Mengetahui Lebih Dalam</h3>
                </div>
            </div>
        </div>
        <div class="container d-flex ">
            <div class="row g-4">
                <div class="card-group text-center mt-5 mb-5" id="card-home" data-aos="zoom-in" data-aos-offset="200">
                    <div class="col-lg-3 col-sm-6 col-12 align-self-center">
                        <div class="card mx-2 rounded-0 about-card">
                            <div class="card-body mt-4">
                                <img style="padding:15px; background-color: var(--primary-color);" src="{!! asset('assets/pawprint.svg') !!}" class="rounded-circle" alt="...">
                                <h5 class="card-title fw-bold text-center mt-4">Lorem Ipsum <br> Dolor Sit Amet</h5>
                                <p class="card-text fw-900 text-center text-secondary mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12 align-self-center">
                        <div class="card mx-2 rounded-0 about-card">
                            <div class="card-body mt-4">
                                <img style="padding:15px; background-color: var(--primary-color);" src="{!! asset('assets/pawprint.svg') !!}" class="rounded-circle" alt="...">
                                <h5 class="card-title fw-bold text-center mt-4">Lorem Ipsum <br> Dolor Sit Amet</h5>
                                <p class="card-text fw-900 text-center text-secondary mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12 align-self-center">
                        <div class="card mx-2 rounded-0 about-card">
                            <div class="card-body mt-4">
                                <img style="padding:15px; background-color: var(--primary-color);" src="{!! asset('assets/pawprint.svg') !!}" class="rounded-circle" alt="...">
                                <h5 class="card-title fw-bold text-center mt-4">Lorem Ipsum <br> Dolor Sit Amet</h5>
                                <p class="card-text fw-900 text-center text-secondary mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 align-self-center">
                        <div class="card mx-2 rounded-0 about-card">
                            <div class="card-body mt-4">
                                <img style="padding:15px; background-color: var(--primary-color);" src="{!! asset('assets/pawprint.svg') !!}" class="rounded-circle" alt="...">
                                <h5 class="card-title fw-bold text-center mt-4">Lorem Ipsum <br> Dolor Sit Amet</h5>
                                <p class="card-text fw-900 text-center text-secondary mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <section>

    {{-- News --}}
    <section id="news-home" data-aos="fade-up">
        <div class="container mb-5">
            <div class="row">
                <div class="col-lg-6 ml-auto" data-aos="fade-right">
                    <h6 class="text-uppercase fw-bold" style="color: var(--primary-color);">Berita</h6>
                    <h1 class="text-body fw-bold">Baca Berita Terbaru Kami <br> Dalam Tropisianimal</h1>
                </div>
            </div>
        </div>
        <div class="container mb-5 mt-5 d-flex">
            <div class="row">
                <div class="card-group text-center border-0">
                    @foreach ($post as $row)
                    <div class="col-lg-4 col-6">
                        <div class="card mx-2 mb-3 border-0 card-news-home">
                            <img src="{{ asset("storage/" . $row->image) }}" class="card-img-top rounded-0" alt="...">
                            <div class="card-body" style="background-color: #e6e6e6">
                                <h5 class="card-title fw-bold mt-2">{{ $row->judul }}</h5>
                                <p class="card-text text-center text-secondary align-content-center">{!! $row->excerpt !!}</p>
                                <div class="hover-image">
                                    <a class="btn read-more rounded-0" href="{{ route('showBerita', $row->slug) }}">Baca Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section id="gallery">
        <div class="container" data-aos="fade-right" data-aos-offset="300">
            <div class="row">
                <div class="col-lg-9 ml-auto">
                    <h6 class="text-uppercase fw-bold" style="color: var(--primary-color);">Galeri</h6>
                    <h1 class="text-body fw-bold">Lihat Lebih Banyak Hewan Tropis <br> Pada Galeri Kami</h1>
                </div>
            </div>
        </div>
        {{-- <div class="d-flex mt-3">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner" id="img-gallery">
                        <div class="carousel-item active">
                            <ul class="d-flex list-unstyled">
                                <li class="list-gallery"><img src="{{ asset('assets/x2/kyaw-tun-_YIX48_4hgs-unsplash@2x.png') }}" class="d-block w-27 img-gallery" alt=""></li>
                                <li class="list-gallery"><img src="{{ asset('assets/x2/kyaw-tun-_YIX48_4hgs-unsplash@2x.png') }}" class="d-block w-27 img-gallery" alt=""></li>
                                <li class="list-gallery"><img src="{{ asset('assets/x2/kyaw-tun-_YIX48_4hgs-unsplash@2x.png') }}" class="d-block w-27 img-gallery" alt=""></li>
                                <li class="list-gallery"><img src="{{ asset('assets/x2/kyaw-tun-_YIX48_4hgs-unsplash@2x.png') }}" class="d-block w-27 img-gallery" alt=""></li>
                            </ul>
                        </div>
                        <div class="carousel-item">
                          <img src="{{ asset('assets/x2/kyaw-tun-_YIX48_4hgs-unsplash@2x.png') }}" class=" w-27" alt="...">
                        </div>
                        <div class="carousel-item">
                          <img src="{{ asset('assets/x2/kyaw-tun-_YIX48_4hgs-unsplash@2x.png') }}" class="w-27" alt="...">
                        </div>
                      </div>
                      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                          <img src="{{ asset('assets/arrow-right (1).svg') }}" alt="" class="mx-2 btn btn-success">
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                          <img src="{{ asset('assets/arrow-right (1).svg') }}" alt="" class="mx-2 btn btn-success">
                      </button>
              </div>
        </div>
    </section>

    {{-- <div class="galeri_container mt-4">
        <div class="image_contain_4">
            <img src="{{ asset('assets/x2/kyaw-tun-_YIX48_4hgs-unsplash@2x.png') }}" alt="" srcset="">
        </div>
        <div class="image_contain_4">
            <img src="{{ asset('assets/x2/dawn-armfield-84n7c9cLEKM-unsplash@2x.png') }}" alt="" srcset="">
        </div>
        <div class="image_contain_4">
            <img src="{{ asset('assets/x2/oscar-merchant-sCt1TLNIxFw-unsplash@2x.png') }}" alt="" srcset="">
        </div>
        <div class="image_contain_4">
            <img src="{{ asset('assets/x2/david-clode-0lwa8Dprrzs-unsplash@2x.png') }}" alt="" srcset="">
        </div>
    </div> --}}
        <div data-aos="fade-up" data-aos-offset="100">
                <div id="recipeCarousel" class="carousel slide carousel-multi-item" data-bs-ride="carousel" data-bs-slide-to="1">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <div class="col-md-3">
                                <div class="card">
                                    <div class="card-img image_contain_4">
                                        <img src="{{ asset('assets/x2/kyaw-tun-_YIX48_4hgs-unsplash@2x.png') }}" class="img-fluid">
                                    </div>
                                    {{-- <div class="card-img-overlay">Slide 1</div> --}}
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-3">
                                <div class="card">
                                    <div class="card-img image_contain_4">
                                        <img src="{{ asset('assets/x2/dawn-armfield-84n7c9cLEKM-unsplash@2x.png') }}" class="img-fluid">
                                    </div>
                                    {{-- <div class="card-img-overlay">Slide 2</div> --}}
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-3">
                                <div class="card">
                                    <div class="card-img image_contain_4">
                                        <img src="{{ asset('assets/x2/oscar-merchant-sCt1TLNIxFw-unsplash@2x.png') }}" class="img-fluid">
                                    </div>
                                    {{-- <div class="card-img-overlay">Slide 3</div> --}}
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-3">
                                <div class="card">
                                    <div class="card-img image_contain_4">
                                        <img src="{{ asset('assets/x2/david-clode-0lwa8Dprrzs-unsplash@2x.png') }}" class="img-fluid">
                                    </div>
                                    {{-- <div class="card-img-overlay">Slide 4</div> --}}
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-3">
                                <div class="card">
                                    <div class="card-img image_contain_4">
                                        <img src="{{ asset('assets/x2/david-clode-AtCChdVhAmA-unsplash@2x.png') }}" class="img-fluid">
                                    </div>
                                    {{-- <div class="card-img-overlay">Slide 5</div> --}}
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-3">
                                <div class="card">
                                    <div class="card-img image_contain_4">
                                        <img src="{{ asset('assets/x2/mathew-schwartz-OjQgsR1oyEw-unsplash@2x.png') }}" class="img-fluid">
                                    </div>
                                    {{-- <div class="card-img-overlay">Slide 6</div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="prev">
                        <span aria-hidden="true" style="background-color: #00811E; height: 40px; width: 40px;">
                            <i class="fa fa-arrow-left" style="margin-top: 12px;"></i>
                        </span>
                    </a>
                    <a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="next">
                        <span aria-hidden="true" style="background-color: #00811E; height: 40px; width: 40px;">
                            <i class="fa fa-arrow-right" style="margin-top: 12px;"></i>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <script>
        let items = document.querySelectorAll('.carousel .carousel-item')

        items.forEach((el) => {
        const minPerSlide = 4
        let next = el.nextElementSibling
        for (var i=1; i<minPerSlide; i++) {
            if (!next) {
            // wrap carousel by using first child
            next = items[0]
            }
            let cloneChild = next.cloneNode(true)
            el.appendChild(cloneChild.children[0])
            next = next.nextElementSibling
        }
        })
    </script>

    @include('layouts.component.footer')
@endsection