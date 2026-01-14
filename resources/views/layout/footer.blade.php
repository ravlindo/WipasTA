<footer class="footer-area">
    <div class="footer-top pt-100 pb-70">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-sm-6">
                    <div class="footer-content">
                        <div class="footer-conten-title">
                            <a href="{{ route('landingpage.home') }}">
                                <img src="{{ asset('template/assets/img/logoo.png') }}" alt="WIPASTA Logo">
                            </a>
                            <p>
                                Temukan keindahan pantai-pantai eksotis di Tulungagung melalui platform digital kami.
                                Jelajahi destinasi wisata pantai terbaik dengan informasi lengkap dan terkini.
                            </p>
                        </div>

                        <div class="newsleter-area">
                            <h3>Berlangganan Newsletter</h3>
                            <form class="newsletter-form" data-toggle="validator">
                                <input type="email" class="form-control" placeholder="Email Anda" name="EMAIL" required autocomplete="off">
                                <button class="subscribe-btn" type="submit">
                                    Berlangganan
                                </button>
                                <div id="validator-newsletter" class="form-result"></div>
                            </form>
                        </div>

                        <div class="footer-social">
                            <ul>
                                <li>
                                    <a href="https://www.facebook.com/" target="_blank" title="Facebook">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/" target="_blank" title="Instagram">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.youtube.com/" target="_blank" title="YouTube">
                                        <i class="fab fa-youtube"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.tiktok.com/" target="_blank" title="TikTok">
                                        <i class="fab fa-tiktok"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-sm-6">
                    <div class="footer-list">
                        <h3>Menu Utama</h3>
                        <ul>
                            <li>
                                <a href="{{ route('landingpage.home') }}">Beranda</a>
                            </li>
                            <li>
                                <a href="{{ route('about.home') }}">Tentang Kami</a>
                            </li>
                            <li>
                                <a href="{{ route('galeri.home') }}">Galeri</a>
                            </li>
                            <li>
                                <a href="{{ route('testimoni.home') }}">Testimonial</a>
                            </li>
                            <li>
                                <a href="{{ route('news.home') }}">Berita</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="footer-list ml-50">
                        <h3>Pantai Populer</h3>
                        <ul>
                            <li>
                                <a href="#">Pantai Popoh</a>
                            </li>
                            <li>
                                <a href="#">Pantai Gemah</a>
                            </li>
                            <li>
                                <a href="#">Pantai Kutang</a>
                            </li>
                            <li>
                                <a href="#">Pantai Ngeliyep</a>
                            </li>
                            <li>
                                <a href="#">Pantai Tamban</a>
                            </li>
                            <li>
                                <a href="#">Pantai Sine</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="footer-list">
                        <h3>Kontak Kami</h3>
                        <ul>
                            <li>
                                <a href="tel:+6281234567890">
                                    <i class="fas fa-mobile-alt"></i>
                                    +62 812-3456-7890
                                </a>
                            </li>
                            <li>
                                <a href="tel:+6289876543210">
                                    <i class="fas fa-mobile-alt"></i>
                                    +62 898-7654-3210
                                </a>
                            </li>
                            <li>
                                <a href="mailto:info@wipsata.com">
                                    <i class="far fa-envelope"></i>
                                    info@wipsata.com
                                </a>
                            </li>
                            <li>
                                <a href="mailto:contact@wipsata.com">
                                    <i class="far fa-envelope"></i>
                                    contact@wipsata.com
                                </a>
                            </li>
                            <li>
                                <i class="fas fa-map-marker-alt"></i>
                                Jl. Raya Pantai No. 123<br>
                                <span style="padding-left: 24px;">Tulungagung, Jawa Timur</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-7">
                    <div class="bottom-list">
                        <ul>
                            <li>
                                <a href="{{ route('landingpage.home') }}">Beranda</a>
                            </li>
                            <li>
                                <a href="{{ route('about.home') }}">Tentang Kami</a>
                            </li>
                            <li>
                                <a href="{{ route('galeri.home') }}">Galeri</a>
                            </li>
                            <li>
                                <a href="{{ route('testimoni.home') }}">Testimonial</a>
                            </li>
                            <li>
                                <a href="{{ route('news.home') }}">Berita</a>
                            </li>
                            <li>
                                <a href="#">Kebijakan Privasi</a>
                            </li>
                            <li>
                                <a href="#">Syarat & Ketentuan</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="bottom-text">
                        <p>© {{ date('Y') }} WIPASTA - Wisata Pantai Tulungagung. All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
