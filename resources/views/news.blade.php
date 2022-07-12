@extends('layouts.main')

@section('judul', 'Berita | Tropisianimal')
@section('content')
    @include('layouts.component.navbar')

    <section class="hero">
        <div class="rest-cover img-fluid"></div>
        <div class="container mb-5">
            <div class="row">
                <div class="col-lg-6 align-self-center" style="margin-top: 150px">
                    <h1 class="fw-bold text-light" data-aos="fade-up">Berita</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="news" data-aos="fade" data-aos-offset="100">
        <div class="container mb-5" style="margin-top: 10rem;">
            <div class="row d-flex">
                <div class="col-lg-6 align-self-center d-inline-flex">
                    <img src="{!! asset('assets/x2/zoe-reeve-9hSejnboeTY-unsplash@2x.png') !!}" alt="" max-width="100%" class="img-fluid me-3 float-start" id="img-news-header-1">
                    <div class="img-news-right flex-column">
                        <img src="{!! asset('assets/x2/ronald-gijezen-7h06P9UKhYY-unsplash@2x.png') !!}" max-width="100%" height="auto" class="img-fluid float-end" id="img-news-header-2">
                        <img src="{!! asset('assets/x2/david-clode-AtCChdVhAmA-unsplash@2x.png') !!}" height="auto" class="img-fluid mt-3 img-news float-end" id="img-news-header-3">
                    </div>
                </div>
                <div class="col-lg-6 align-self-center ml-auto mt-5">
                    <h1 class="fw-bold">10 Hewan Herbivora <br> Yang Berbahaya</h1>
                    <p class="fw-normal">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iure ex voluptates perspiciatis ad nostrum quidem iusto labore nam. Vitae quibusdam impedit sequi quisquam alias atque nostrum obcaecati eaque assumenda ipsa!</p>
                    <p class="fw-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit ipsam et labore, id nulla distinctio vero molestias voluptatum illo ab deserunt aliquid tempore voluptatem molestiae soluta placeat alias inventore dicta!</p>
                    <a href="{{ url('/tentang') }}" style="padding: 15px;" class="btn btn-success rounded-0"> 
                        Baca Selengkapnya
                        <img src="{{ asset('assets/arrow-right (1).svg') }}" alt="" class="mx-2">
                    </a>
                </div>
            </div>
        </div>

        <div class="container mb-5">
            <div class="row">
                <div class="col-lg-6 ml-auto" data-aos="zoom-in" data-aos-offset="100">
                    <h1 class="text-body fw-bold">Berita Lainnya</h1>
                </div>
            </div>
        </div>
        <div class="container mb-5 mt-5 d-flex" data-aos="fade-up">
            <div class="row">
                <div class="card-group text-center border-0">
                    <div class="col-lg-4 col-6 align-self-center">
                        <div class="card mx-2 mb-3 border-0 card-news-home">
                            <img src="{{ asset('assets/x2/rick-l-037fCBgZB10-unsplash@2x.png') }}" class="card-img-top rounded-0" alt="...">
                            <div class="card-body">
                                <h5 class="card-title fw-bold mt-2">Apa Kabar Kebun Binatang <br> Saat Wabah Covid-19?</h5>
                                <p class="card-text text-center text-secondary">Lorem ipsum dolor sit amet, <br> consectetur adipisicing elit sed do.</p>
                                <div class="hover-image">
                                    <a class="btn read-more rounded-0" href="#">Baca Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-6 align-self-center">
                        <div class="card mx-2 mb-3 border-0 card-news-home">
                            <img src="{{ asset('assets/x2/hans-veth-o33FMDaXJS8-unsplash@2x.png') }}" class="card-img-top rounded-0" alt="...">
                            <div class="card-body">
                                <h5 class="card-title fw-bold mt-2">Anugerah dari Hutan <br> Indonesia </h5>
                                <p class="card-text text-center text-secondary">Lorem ipsum dolor sit amet, <br> consectetur adipisicing elit sed do.</p>
                                <div class="hover-image">
                                    <a class="btn read-more rounded-0" href="#">Baca Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-6 align-self-center">
                        <div class="card mx-2 mb-3 border-0 card-news-home">
                            <img src="{{ asset('assets/x2/ronald-gijezen-7h06P9UKhYY-unsplash@2x.png') }}" class="card-img-top rounded-0" alt="...">
                            <div class="card-body">
                                <h5 class="card-title fw-bold mt-2"> 10 Hewan Herbivora <br> yang Berbahaya</h5>
                                <p class="card-text text-center text-secondary">Lorem ipsum dolor sit amet, <br> consectetur adipisicing elit sed do.</p>
                                <div class="hover-image">
                                    <a class="btn read-more rounded-0" href="#">Baca Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-6 align-self-center">
                        <div class="card mx-2 mb-3 border-0 card-news-home">
                            <img src="{{ asset('assets/x2/smit-patel-dGMcpbzcq1I-unsplash@2x.png') }}" class="card-img-top rounded-0" alt="...">
                            <div class="card-body">
                                <h5 class="card-title fw-bold mt-2"> 4 Penyakit yang Ditularkan <br> Hewan ke Manusia</h5>
                                <p class="card-text text-center text-secondary">Lorem ipsum dolor sit amet, <br> consectetur adipisicing elit sed do.</p>
                                <div class="hover-image">
                                    <a class="btn read-more rounded-0" href="#">Baca Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-6 align-self-center">
                        <div class="card mx-2 mb-3 border-0 card-news-home">
                            <img src="{{ asset('assets/x2/TERUMBU-KARANG (1)@2x.png') }}" class="card-img-top rounded-0" alt="...">
                            <div class="card-body">
                                <h5 class="card-title fw-bold mt-2"> Terumbu Karang: Pengertian, <br> Jenis, Sebaran, dan Masalah</h5>
                                <p class="card-text text-center text-secondary">Lorem ipsum dolor sit amet, <br> consectetur adipisicing elit sed do.</p>
                                <div class="hover-image">
                                    <a class="btn read-more rounded-0" href="#">Baca Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-6 align-self-center">
                        <div class="card mx-2 mb-3 border-0 card-news-home">
                            <img src="{{ asset('assets/x2/vladimir-kudinov-vmlJcey6HEU-unsplash@2x.png') }}" class="card-img-top rounded-0" alt="...">
                            <div class="card-body">
                                <h5 class="card-title fw-bold mt-2"> Ternyata, Tanduk Rusa Berasal  <br> dari Sel Kanker Tulang</h5>
                                <p class="card-text text-center text-secondary">Lorem ipsum dolor sit amet, <br> consectetur adipisicing elit sed do.</p>
                                <div class="hover-image">
                                    <a class="btn read-more rounded-0" href="#">Baca Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    @include('layouts.component.footer')
@endsection