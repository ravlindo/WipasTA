<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from templates.hibootstrap.com/dobby/default/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Dec 2025 15:33:43 GMT -->

@include("layout.head")

<body>
    <!-- Start Preloader -->
    <div class="preloader">
        <div class="preloader-wave"></div>
    </div>
    <!-- End Preloader -->

    <!-- Start Heder Area -->
    @include('layout.header')
    <!-- End Heder Area -->

    <!-- Start Navbar Area -->
    @include('layout.navbar')
    <!-- End Navbar Area -->

    <!-- Inner Banner -->
    <div class="inner-banner bg-shape1 bg-color1">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="conatiner">
                    <div class="inner-title text-center">
                        <h3>About Us</h3>
                        <ul>
                            <li>
                                <a href="index.html">Home</a>
                            </li>
                            <li>
                                <i class="fas fa-chevron-right"></i>
                            </li>
                            <li>
                                About Us
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Inner Banner End -->

    <!-- About Detl -->
    <div class="about-detl pt-100 pb-70">
        <div class="container">
            <div class="common-dtel-img">
                <img src="{{ asset('storage/' . $about->gambar_besar) }}" alt="About Images">
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="common-dtel-text">
                        <h2> {{ $about->title }}</h2>
                        <p>
                            @if($about)
                                {{ $about->deskripsi }}
                            @else
                                Selamat datang di layanan renang dan diving terpopuler sejak 2009. Kami menyediakan berbagai layanan berkualitas untuk kebutuhan renang dan diving Anda.
                            @endif
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="common-offer">
                        <div class="drive-img">
                            <img src="{{ asset('storage/' . $about->gambar_kanan) }}" alt="Images">
                        </div>
                        <div class="common-offer-text">
                            <h3>Learn Swimming or Diving</h3>
                            <a href="#" class="call-btn">Call Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Detl End -->

    {{-- <!-- Product Area -->
    <section class="product-area pt-100 pb-70">
        <div class="container">
            <div class="section-title text-center mb-50">
                <span>Our Products</span>
                <h2>Buy the Equipment You Need</h2>
                <p>
                    The introduced now, the they expect, animals the desk, and catch
                    temple. More seven my couldn't it the character using recommended.
                </p>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-3 col-sm-6">
                    <div class="product-item">
                        <a href="shop-details.html">
                            <img src="{{ asset("template/assets/img/product/1.jpg") }}" alt="Product Images">
                        </a>
                        <div class="product-cotent">
                            <div class="product-text">
                                <a href="shop-details.html">
                                    <h3>Diving Glass</h3>
                                </a>
                                <span>$35</span>
                            </div>
                            <a href="shop-details.html" class="add-product">
                                <i class="flaticon-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="product-item">
                        <a href="shop-details.html">
                            <img src="{{ asset("template/assets/img/product/2.jpg") }}" alt="Product Images">
                        </a>
                        <div class="product-cotent">
                            <div class="product-text">
                                <a href="shop-details.html">
                                    <h3>Diving Rite</h3>
                                </a>
                                <span>$30</span>
                            </div>
                            <a href="shop-details.html" class="add-product">
                                <i class="flaticon-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="product-item">
                        <a href="shop-details.html">
                            <img src="{{ asset("template/assets/img/product/3.jpg") }}" alt="Product Images">
                        </a>
                        <div class="product-cotent">
                            <div class="product-text">
                                <a href="shop-details.html">
                                    <h3>Fins Bungee</h3>
                                </a>
                                <span>$75</span>
                            </div>
                            <a href="shop-details.html" class="add-product">
                                <i class="flaticon-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="product-item">
                        <a href="shop-details.html">
                            <img src="{{ asset("template/assets/img/product/4.jpg") }}" alt="Product Images">
                        </a>
                        <div class="product-cotent">
                            <div class="product-text">
                                <a href="shop-details.html">
                                    <h3>Life Jacket</h3>
                                </a>
                                <span>$25</span>
                            </div>
                            <a href="shop-details.html" class="add-product">
                                <i class="flaticon-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Area End -->

    <!-- Trainers Area -->
    <section class="trainers-area pt-100 pb-70">
        <div class="container">
            <div class="section-title text-center mb-50">
                <span>Our Trainers</span>
                <h2>Our Professional Trainers</h2>
                <p>
                    The introduced now, the they expect,animals the desk, and catch temple.
                    More seven my couldn't it the character using recommended.
                </p>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-3 col-sm-6">
                    <div class="trainer-card">
                        <a href="instructor.html">
                            <img src="{{ asset("template/assets/img/trainers/1.jpg") }}" alt="Trainers Images">
                        </a>
                        <div class="trainer-content">
                            <a href="instructor.html">
                                <h3>John Doe</h3>
                            </a>
                            <span>Professional Diver</span>
                            <div class="social-icon">
                                <ul>
                                    <li>
                                        <a href="https://www.facebook.com/login/" target="_blank">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://twitter.com/i/flow/login" target="_blank">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/accounts/login/?hl=en" target="_blank">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.google.com/" target="_blank">
                                            <i class="fab fa-google-plus-g"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="trainer-card">
                        <a href="instructor.html">
                            <img src="{{ asset("template/assets/img/trainers/2.jpg") }}" alt="Trainers Images">
                        </a>
                        <div class="trainer-content">
                            <a href="instructor.html">
                                <h3>Evana Doe</h3>
                            </a>
                            <span>Professional Trainer</span>
                            <div class="social-icon">
                                <ul>
                                    <li>
                                        <a href="https://www.facebook.com/login/" target="_blank">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://twitter.com/i/flow/login" target="_blank">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/accounts/login/?hl=en" target="_blank">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.google.com/" target="_blank">
                                            <i class="fab fa-google-plus-g"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="trainer-card">
                        <a href="instructor.html">
                            <img src="{{ asset("template/assets/img/trainers/3.jpg") }}" alt="Trainers Images">
                        </a>
                        <div class="trainer-content active">
                            <a href="instructor.html">
                                <h3>Smith Doe</h3>
                            </a>
                            <span>Professional Swimmer</span>
                            <div class="social-icon active">
                                <ul>
                                    <li>
                                        <a href="https://www.facebook.com/login/" target="_blank">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://twitter.com/i/flow/login" target="_blank">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/accounts/login/?hl=en" target="_blank">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.google.com/" target="_blank">
                                            <i class="fab fa-google-plus-g"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="trainer-card">
                        <a href="instructor.html">
                            <img src="{{ asset("template/assets/img/trainers/4.jpg") }}" alt="Trainers Images">
                        </a>
                        <div class="trainer-content">
                            <a href="instructor.html">
                                <h3>Marida Doe</h3>
                            </a>
                            <span>Professional Instructor</span>
                            <div class="social-icon">
                                <ul>
                                    <li>
                                        <a href="https://www.facebook.com/login/" target="_blank">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://twitter.com/i/flow/login" target="_blank">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/accounts/login/?hl=en" target="_blank">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.google.com/" target="_blank">
                                            <i class="fab fa-google-plus-g"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Trainers Area End -->

    <!-- News Area -->
    <section class="news-area pb-70">
        <div class="container">
            <div class="section-title text-center mb-50">
                <span>Our News</span>
                <h2>Daily Updates of Our Dobby</h2>
                <p>
                    The introduced now, the they expect, animals the desk, and catch temple.
                    More seven my couldn't it the character using recommended.
                </p>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="news-card">
                        <div class="news-img">
                            <a href="news-details.html">
                                <img src="{{ asset("template/assets/img/news/1.jpg") }}" alt="News Images">
                            </a>
                            <div class="sub-text">
                                <a href="news-details.html">SCUBA DIVING</a>
                            </div>
                        </div>
                        <ul>
                            <li>
                                <a href="news-details.html">John Doe</a>
                            </li>
                            <li>26 APR 2024</li>
                        </ul>
                        <div class="news-content">
                            <a href="news-details.html">
                                <h3>New Scuba Diving Course Sheet Will Update Soon</h3>
                            </a>
                            <p>
                                Less entirely counter. Parent, curiously, must would frequency,
                                would very of wellfeigned legs, doctor back in the business.
                            </p>
                            <a href="news-details.html" class="news-icon">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="news-card">
                        <div class="news-img">
                            <a href="news-details.html">
                                <img src="{{ asset("template/assets/img/news/2.jpg") }}" alt="News Images">
                            </a>
                            <div class="sub-text">
                                <a href="news-details.html">
                                    SWIMMING EVENT
                                </a>
                            </div>
                        </div>
                        <ul>
                            <li>
                                <a href="news-details.html">John Doe</a>
                            </li>
                            <li>27 APR 2024</li>
                        </ul>
                        <div class="news-content">
                            <a href="news-details.html">
                                <h3>A Diving Event Will Happen at Dobby Center</h3>
                            </a>
                            <p>
                                Less entirely counter. Parent, curiously, must would frequency,
                                would very of wellfeigned legs, doctor back in the business.
                            </p>
                            <a href="news-details.html" class="news-icon">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4  col-md-6 ">
                    <div class="news-card">
                        <div class="news-img">
                            <a href="news-details.html">
                                <img src="{{ asset("template/assets/img/news/3.jpg") }}" alt="News Images">
                            </a>
                            <div class="sub-text">
                                <a href="news.html">EQUIPMENT</a>
                            </div>
                        </div>
                        <ul>
                            <li>
                                <a href="news-details.html">John Doe</a>
                            </li>
                            <li>28 APR 2024</li>
                        </ul>
                        <div class="news-content">
                            <a href="news-details.html">
                                <h3>A Swimming Event Will Happen at Dobby Center</h3>
                            </a>
                            <p>
                                Less entirely counter. Parent, curiously, must would frequency,
                                would very of wellfeigned legs, doctor back in the business.
                            </p>
                            <a href="news-details.html" class="news-icon">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- News Area End -->

    <!-- Footer Area -->
    @include('layout.footer')
    <!-- Footer Area End -->


    <!-- Jquery Min JS -->
    @include('layout.jquery')

</body>

<!-- Mirrored from templates.hibootstrap.com/dobby/default/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Dec 2025 15:33:44 GMT -->

</html>
