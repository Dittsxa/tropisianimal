<footer class="site-footer" style="background-color: #121212;">
    <div class="container d-flex text-light">
        <div class="row" style="margin-top: 60px; margin-bottom: 60px;">
            <div class="col-lg-5 mb-4">
                <img src="{{ asset('assets/x1/Tropisianimal.png') }}" alt="logo" class="footer-heading mb-4">
                <p class="text-white opacity-75"style="width: 75%;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi quae alias ab! Accusamus obcaecati adipisci enim molestiae ipsam, doloribus qui.</p>
                <a href="#"><img src="{{ asset('assets/x1/001-facebook.png') }}"></a>
                <a href="#" class="mx-2"><img src="{{ asset('assets/x1/002-twitter.png') }}"></a>
            </div>
            
            <div id="footer-links" class="col-lg-2" tyle="margin-left: 200px;">
                <h5 class="footer-heading mb-4">Useful links</h5>
                <ul class="list-unstyled">
                    <li><a href="{{ url('/') }}" class="text-white" style="text-decoration: none;">Home</a></li>
                    <li><a href="{{ url('/berita') }}" class="text-white" >Berita</a></li>
                    <li><a href="{{ url('/galeri') }}" class="text-white" >Galeri</a></li>
                    <li><a href="{{ url('/kontak') }}" class="text-white" >Kontak</a></li>
                </ul>
            </div>
            
            <div id="footer-links" class="col-lg-2">
                <h5 class="footer-heading mb-4">Privacy</h5>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-white">Karir</a></li>
                    <li><a href="{{ url('/tentang') }}" class="text-white">Tentang Kami</a></li>
                    <li><a href="{{ url('/kontak') }}" class="text-white">Kontak Kami</a></li>
                    <li><a href="#" class="text-white">Servis</a></li>
                </ul>
            </div>

            <div id="footer-links" class="col-lg-3">
                <h5 class="footer-heading mb-4">Contact Info</h5>
                <ul class="list-unstyled">
                    <li><img src="{{ asset('assets/mail.svg') }}"><a class="mx-3 text-white">tropisianimal@gmail.com</a></li>
                    <li><img src="{{ asset('assets/phone.svg') }}"><a class="mx-3 text-white">+62 812 3456 7890</a></li>
                    <li><img src="{{ asset('assets/map-pin.svg') }}"><a class="mx-3 text-white">Kota Bandung, Jawa Barat</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="copy text-light d-flex justify-content-center opacity-75" style="padding-bottom: 25px;">
        <span>Copyright &copy; <script>document.write(new Date().getFullYear())</script> All right reserved</span>
    </div>
</footer>