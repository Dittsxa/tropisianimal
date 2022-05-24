@extends('layouts.main')

@section('judul', 'Kontak | Tropisianimal')
@section('content')
    @include('layouts.component.navbar')

    <section class="hero">
        <img src="{{ asset('assets/x1/pascal-muller-iSz0IMtulos-unsplash.png') }}" alt="" class="rest-cover img-fluid">
        <div class="container mb-3">
            <div class="row">
                <div class="col-lg-6 align-self-center" style="margin-top: 150px">
                    <h1 class="fw-bold text-light" data-aos="fade-up">Kontak Kami</h1>
                </div>
            </div>
        </div>

        <div class="container" style="margin-top: 10rem; margin-bottom: 60vh;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.558851650408!2d107.66179861434766!3d-6.943206069898166!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e7c381e3c323%3A0x5f5160f6c9796e4b!2sCyberLabs%20%7C%20Digital%20Marketing%20Company!5e0!3m2!1sid!2sid!4v1652428638963!5m2!1sid!2sid" width="100%" height="250px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="maps-contact"></iframe>
            <div class="row">
                <div class="col-lg-6 ml-auto mt-5 mb-3">
                    <h1 class="fw-bold">Kontak Kami</h1>
                </div>
            </div>
            <form action="#" method="post">
                <textarea placeholder="Deskripsi" class="form-control" id="deskripsi"  name="deskripsi"></textarea>
                <input type="text" name="subject" class="form-control" placeholder="Subject" id="subject">
                <input type="text" name="nama" class="form-control" placeholder="Nama" id="nama">
                <input type="text" name="email"class="form-control" placeholder="Email" id="email">
                <button type="submit" value="Kirim" placeholder="Submit" class="form-control text-white" id="submit">
                    Kirim <img src="{{ asset('assets/send.svg') }}" class="mx-2">
                </button>
            </form>
        </div>
        <div class="container mb-5">
            <div class="row text-center" id="icon-links">
                <div class="col-lg-4">
                    <span class="mb-4">
                        <img src="{{ asset('assets/mail.svg') }}">
                    </span>
                    <h5 class="fw-bold">Email</h5>
                    <p style="font-family: 'Poppins Semi Bold';" class="opacity-50">tropisianimal@gmail.com</p>
                </div>
                <div class="col-lg-4">
                    <span class="mb-4">
                        <img src="{{ asset('assets/phone.svg') }}" alt="">
                    </span>
                    <h5 class="fw-bold">Phone</h5>
                    <p style="font-family: 'Poppins Semi Bold';" class="opacity-50">+62 812 3456 7890</p>
                </div>
                <div class="col-lg-4">
                    <span class="mb-4">
                        <img src="{{ asset('assets/map-pin.svg') }}" alt="">
                    </span>
                    <h5 class="fw-bold">Location</h5>
                    <p style="font-family: 'Poppins Semi Bold';" class="opacity-50">Kota Bandung, Jawa Barat <br> Indonesia</p>
                </div>
            </div>
        </div>
    </section>

    @include('layouts.component.footer')
@endsection