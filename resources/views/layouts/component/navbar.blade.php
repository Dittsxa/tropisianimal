<nav class="navbar fixed-top navbar-expand-lg navbar-dark m-0 p-0" id="navbar">
    <div class="container pt-1">
        <a class="navbar-brand" href="/">
            <h4 class="mt-2 mb-0">Tropisianimal</h4>
            {{-- <img src="{{ asset('assets/x1/Tropisianimal.png') }}" alt="logo"> --}}
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav list-unstyled">
                <li class="nav-item px-4 mt-2 mb-0 {{ Request::is('/') ? 'active' : '' }}">
                    <a class="nav-link text-uppercase" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item px-4 mt-2 mb-0 {{ Request::is('/tentang') ? 'active' : '' }}">
                    <a class="nav-link text-uppercase" href="{{ url('/tentang') }}">Tentang</a>
                </li>
                <li class="nav-item px-4 mt-2 mb-0 {{ Request::is('/berita') ? 'active' : '' }}">
                    <a class="nav-link text-uppercase" href="{{ url('/berita') }}">Berita</a>
                </li>
                <li class="nav-item px-4 mt-2 mb-0 {{ Request::is('/galeri') ? 'active' : '' }}">
                    <a class="nav-link text-uppercase" href="{{ url('/galeri') }}">Galeri</a>
                </li>
                <li class="nav-item px-4 mt-2 mb-0 {{ Request::is('/kontak') ? 'active' : '' }}">
                    <a class="nav-link text-uppercase" href="{{ url('/kontak') }}">Kontak</a>
                </li>
            </ul>
        </div>
    </div>
</nav>