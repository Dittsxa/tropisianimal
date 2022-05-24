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
                    <div class="col-lg-6 align-self-center" style="margin-top: 150px">
                        <h2 class="fw-bold text-light display-3" data-aos="fade-right">Hewan <br> Tropis di Dunia</h2>
                        <p class="text-light mt-3" style="font-size: 14px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia commodi facilis, eius quae nobis labore vero ipsa? Dicta quos temporibus eligendi, in tempore animi ex nemo quo esse? Tenetur, obcaecati!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- About  --}}
    <section id="about-home" data-aos="fade-up" data-aos-offset="300"> 
        <div class="container mb-5 mt-5">
            <div class="row">
                <div class="col-lg-6 ml-auto">
                    <h6 class="text-uppercase text-success fw-bold" data-aos="fade-right">Tentang Kami</h6>
                    <h1 class="text-body fw-bold" data-aos="fade-right">Membangun <br> Komunitas Hewan</h1>
                    <p class="fw-500">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam, cumque sed? Aliquid, tempore deleniti. Nisi iure fugit earum eligendi beatae, excepturi incidunt qui porro distinctio illum</p>
                    <p class="fw-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus omnis minima inventore dolorem illo similique voluptates voluptate et, ducimus sunt rerum cum ut expedita eveniet molestias magni. Saepe, omnis dolores!</p>
                    <a href="{{ url('/tentang') }}" style="padding: 15px;" class="btn btn-success rounded-0"> 
                        Baca Selengkapnya
                        <img src="{{ asset('assets/arrow-right (1).svg') }}" alt="" class="mx-2">
                    </a>
                </div>
                <div class="col-md-6 flex-item justify-content-end" data-aos="zoom-in" data-aos-offset="300">
                    <img src="{!! asset('assets/x1/alessandro-desantis-9_9hzZVjV8s-unsplash.png') !!}" alt="" max-width="100%" height="auto" class="img-fluid mt-2 me-1">
                    <img src="{!! asset('assets/x1/joshua-j-cotten-VCzNXhMoyBw-unsplash.png') !!}" float="left" max-width="100%" height="auto" class="img-fluid mt-2">
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
                <div class="card-group text-center" data-aos="zoom-in" data-aos-offset="200">
                    <div class="col-lg-3">
                        <div class="card mt-4 mb-5 mx-2 rounded-0 about-card">
                            <div class="card-body mt-4">
                                <img style="padding:15px;" src="{!! asset('assets/pawprint.svg') !!}" class="rounded-circle bg-success" alt="...">
                                <h5 class="card-title fw-bold text-center mt-4">Lorem Ipsum <br> Dolor Sit Amet</h5>
                                <p class="card-text fw-900 text-center text-secondary mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card mt-4 mb-5 mx-2 rounded-0 about-card">
                            <div class="card-body mt-4">
                                <img style="padding:15px;" src="{!! asset('assets/pawprint.svg') !!}" class="rounded-circle bg-success" alt="...">
                                <h5 class="card-title fw-bold text-center mt-4">Lorem Ipsum <br> Dolor Sit Amet</h5>
                                <p class="card-text fw-900 text-center text-secondary mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card mt-4 mb-5 mx-2 rounded-0 about-card">
                            <div class="card-body mt-4">
                                <img style="padding:15px;" src="{!! asset('assets/pawprint.svg') !!}" class="rounded-circle bg-success" alt="...">
                                <h5 class="card-title fw-bold text-center mt-4">Lorem Ipsum <br> Dolor Sit Amet</h5>
                                <p class="card-text fw-900 text-center text-secondary mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card mt-4 mb-5 mx-2 rounded-0 about-card">
                            <div class="card-body mt-4">
                                <img style="padding:15px;" src="{!! asset('assets/pawprint.svg') !!}" class="rounded-circle bg-success" alt="...">
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
                    <h6 class="text-uppercase text-success fw-bold">Berita</h6>
                    <h1 class="text-body fw-bold">Baca Berita Terbaru Kami <br> Dalam Tropisianimal</h1>
                </div>
            </div>
        </div>
        <div class="container mb-5 mt-5 d-flex">
            <div class="row">
                <div class="card-group text-center border-0">
                    <div class="col-lg-4">
                        <div class="card mx-2 mb-3 border-0 card-news-home">
                            <img src="{{ asset('assets/x2/rick-l-037fCBgZB10-unsplash@2x.png') }}" class="card-img-top rounded-0" alt="...">
                            <div class="card-body">
                                <h5 class="card-title fw-bold mt-2">Apa Kabar Kebun Binatang <br> Saat Wabah Covid-19?</h5>
                                <p class="card-text text-center text-secondary">Lorem ipsum dolor sit amet, <br> consectetur adipisicing elit sed do.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card mx-2 mb-3 border-0 card-news-home">
                            <img src="{{ asset('assets/x2/hans-veth-o33FMDaXJS8-unsplash@2x.png') }}" class="card-img-top rounded-0" alt="...">
                            <div class="card-body">
                                <h5 class="card-title fw-bold mt-2">Anugerah dari Hutan <br> Indonesia </h5>
                                <p class="card-text text-center text-secondary">Lorem ipsum dolor sit amet, <br> consectetur adipisicing elit sed do.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card mx-2 mb-3 border-0 card-news-home">
                            <img src="{{ asset('assets/x2/ronald-gijezen-7h06P9UKhYY-unsplash@2x.png') }}" class="card-img-top rounded-0" alt="...">
                            <div class="card-body">
                                <h5 class="card-title fw-bold mt-2"> 10 Hewan Herbivora <br> yang Berbahaya</h5>
                                <p class="card-text text-center text-secondary">Lorem ipsum dolor sit amet, <br> consectetur adipisicing elit sed do.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card mx-2 mb-3 border-0 card-news-home">
                            <img src="{{ asset('assets/x2/smit-patel-dGMcpbzcq1I-unsplash@2x.png') }}" class="card-img-top rounded-0" alt="...">
                            <div class="card-body">
                                <h5 class="card-title fw-bold mt-2"> 4 Penyakit yang Ditularkan <br> Hewan ke Manusia</h5>
                                <p class="card-text text-center text-secondary">Lorem ipsum dolor sit amet, <br> consectetur adipisicing elit sed do.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card mx-2 mb-3 border-0 card-news-home">
                            <img src="{{ asset('assets/x2/TERUMBU-KARANG (1)@2x.png') }}" class="card-img-top rounded-0" alt="...">
                            <div class="card-body">
                                <h5 class="card-title fw-bold mt-2"> Terumbu Karang: Pengertian, <br> Jenis, Sebaran, dan Masalah</h5>
                                <p class="card-text text-center text-secondary">Lorem ipsum dolor sit amet, <br> consectetur adipisicing elit sed do.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card mx-2 mb-3 border-0 card-news-home">
                            <img src="{{ asset('assets/x2/vladimir-kudinov-vmlJcey6HEU-unsplash@2x.png') }}" class="card-img-top rounded-0" alt="...">
                            <div class="card-body">
                                <h5 class="card-title fw-bold mt-2"> Ternyata, Tanduk Rusa Berasal  <br> dari Sel Kanker Tulang</h5>
                                <p class="card-text text-center text-secondary">Lorem ipsum dolor sit amet, <br> consectetur adipisicing elit sed do.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="gallery">
        <div class="container" data-aos="fade-right">
            <div class="row">
                <div class="col-lg-9 ml-auto">
                    <h6 class="text-uppercase text-success fw-bold">Galeri</h6>
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
    </section> --}}

    <div class="galeri_container mt-4">
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
    </div>
    </section>

    @include('layouts.component.footer')
@endsection