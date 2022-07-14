@extends('layouts.main')

@section('judul', 'Kontak | Tropisianimal')
@section('content')
    @include('layouts.component.navbar')
    <section class="hero">
        <div class="rest-cover img-fluid"></div>
        <div class="container mb-3">
            <div class="row">
                <div class="col-lg-6" style="margin-top: 150px">
                    <h1 class="fw-bold text-light" data-aos="fade-up">Kontak Kami</h1>
                </div>
            </div>
        </div>

        <div class="container" style="margin-top: 10rem; margin-bottom: 50vh;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.558851650408!2d107.66179861434766!3d-6.943206069898166!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e7c381e3c323%3A0x5f5160f6c9796e4b!2sCyberLabs%20%7C%20Digital%20Marketing%20Company!5e0!3m2!1sid!2sid!4v1652428638963!5m2!1sid!2sid" width="100%" height="250px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="maps-contact"></iframe>
            <div class="row">
                <div class="col-lg-6 ml-auto mt-5 mb-3">
                    <h1 class="fw-bold">Kontak Kami</h1>
                </div>
            </div>
            
            @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            @error('description', 'subject', 'email', 'name')
                <div class="alert alert-error alert-dismissible fade show mt-4" role="alert">
                    Oopps! Isi mailbox dengan benar!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @enderror

            <form action="{{ route('mailbox.tambah') }}" method="post">
                @csrf
                <textarea placeholder="Deskripsi" class="form-control img-fluid @error('description') is-invalid @enderror" id="deskripsi"  name="description"></textarea>
                <input type="text" name="subject" class="form-control img-fluid @error('subject') is-invalid @enderror" placeholder="Subject" id="subject">
                <input type="text" name="name" class="form-control img-fluid @error('name') is-invalid @enderror" placeholder="Nama" id="nama">
                <input type="text" name="email"class="form-control img-fluid @error('email') is-invalid @enderror" placeholder="Email" id="email">
                <button type="submit" value="Kirim" placeholder="Submit" class="form-control text-white img-fluid" id="submit">
                    Kirim <img src="{{ asset('assets/send.svg') }}" class="mx-2">
                </button>
            </form>
        </div>
        <div class="container mb-5" id="container-contact-link">
            <div class="row text-center" id="icon-links">
                @foreach ($contact as $row )
                <div class="col-lg-4 col-4">
                    <span class="mb-4">
                        <img src="{{ asset('assets/mail.svg') }}">
                    </span>
                    <h5 class="fw-bold">Email</h5>
                    <p style="font-family: 'Poppins Semi Bold';" class="opacity-50">{{ $row->email }}</p>
                </div>
                <div class="col-lg-4 col-4">
                    <span class="mb-4">
                        <img src="{{ asset('assets/phone.svg') }}" alt="">
                    </span>
                    <h5 class="fw-bold">Phone</h5>
                    <p style="font-family: 'Poppins Semi Bold';" class="opacity-50">{{ $row->telp }}</p>
                </div>
                <div class="col-lg-4 col-4">
                    <span class="mb-4">
                        <img src="{{ asset('assets/map-pin.svg') }}" alt="">
                    </span>
                    <h5 class="fw-bold">Location</h5>
                    <p style="font-family: 'Poppins Semi Bold';" class="opacity-50">{!! $row->location !!}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <script>
        $(".alert-success").fadeTo(2000, 500).slideUp(500, function(){
            $(".alert-success").slideUp(500);
        });
    </script>

    @include('layouts.component.footer')
@endsection