@extends('layouts.main')

@section('judul')
@foreach ($post as $row)
    {{ $row->judul }} | Tropisianimal
@endforeach
@endsection
@section('content')
    @include('layouts.component.navbar')
        @foreach ($post as $row)
        <section class="hero" id="single-page" style="max-height: 100%">
            <div class="rest-cover img-fluid"></div>
            <div class="container mt-5">
                <div class="row">
                    <div class="col-lg-6 col-8" style="margin-top: 5rem">
                        <h1 class="fw-bold text-light" data-aos="fade-up">{{ $row->judul }}</h1>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-12 justify-content-center mb-5">
                        <img src="{{ asset("assets/x2/" . $row->image) }}" class="img-fluid rounded-0" style="height: 20rem; width: 200vh; object-fit: cover;" alt="...">
                    </div>
                    <div class="col-12">
                        {!! $row->body !!}
                    </div>
                </div>
            </div>
            
            <div class="container mt-5 mb-5">
                <a name="kembali" class="btn btn-success" href="{{ url('/berita') }}" role="button">
                    <i class="fa fa-arrow-left p-1 pe-2"></i>Kembali
                </a>
            </div>
        </section>     
        @endforeach

    @include('layouts.component.footer')
@endsection