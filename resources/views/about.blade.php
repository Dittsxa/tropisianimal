@extends('layouts.main')

@section('judul', 'Tentang | Tropisianimal')
@section('content')
    <header>
        @include('layouts.component.navbar')
    </header>

    <div class="jumbotron jumbotron-fluid bg-transparent">
        <div class="rest-cover img-fluid"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center" style="margin-top: 150px">
                    <h1 class="fw-bold text-light" data-aos="fade-up">Tentang Kami</h1>
                </div>
            </div>
        </div>
    </div>

    <section id="about">
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-6 ml-auto mt-5">
                    <h1 class="fw-bold">Tropisianimal</h1>
                    <p class="fw-normal">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iure ex voluptates perspiciatis ad nostrum quidem iusto labore nam. Vitae quibusdam impedit sequi quisquam alias atque nostrum obcaecati eaque assumenda ipsa!</p>
                    <p class="fw-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit ipsam et labore, id nulla distinctio vero molestias voluptatum illo ab deserunt aliquid tempore voluptatem molestiae soluta placeat alias inventore dicta!</p>
                </div>
                <div class="col-lg-6 flex-item justify-content-end" id="gambar_about">
                    <img src="{!! asset('assets/x1/kyaw-tun-_YIX48_4hgs-unsplash.png') !!}" alt="" max-width="100%" height="auto" class="img-fluid mt-2 me-1">
                    <img src="{!! asset('assets/x1/dawn-armfield-84n7c9cLEKM-unsplash.png') !!}" float="left" max-width="100%" height="auto" class="img-fluid mt-2">
                    <img src="{!! asset('assets/x1/smit-patel-dGMcpbzcq1I-unsplash.png') !!}"  float="left" width="97%" height="auto" class="img-fluid mt-2">
                </div>
            </div>
            <div class="row">
                <div class="col mt-5">
                    <h1 class="fw-bold">Visi</h1>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatibus sunt porro neque dicta accusamus provident, amet vero laborum tenetur quaerat voluptate! Nemo, corporis? Hic, sed alias. Dolore, laborum tempora! Placeat?</p>
                </div>
            </div>
            <div class="row">
                <div class="col mt-5 mb-5">
                    <h1 class="fw-bold">Misi</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur itaque repudiandae quas mollitia unde suscipit, voluptas cumque delectus, dolorem quasi similique labore quidem sequi? Assumenda minus sit reprehenderit modi nesciunt.</p>
                </div>
            </div>
        </div>
    </section>

    @include('layouts.component.footer')
@endsection