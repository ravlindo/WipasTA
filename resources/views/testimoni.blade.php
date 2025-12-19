<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from templates.hibootstrap.com/dobby/default/testimonials.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Dec 2025 15:33:40 GMT -->

@include('layout.head')

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
                        <h3>Testimonials</h3>
                        <ul>
                            <li>
                                <a href="index.html">Home</a>
                            </li>
                            <li>
                                <i class="fas fa-chevron-right"></i>
                            </li>
                            <li>
                                Testimonials
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Inner Banner End -->

    <!-- Testimonials Inner -->
    <div class="testimonials-inner pt-100 pb-70">
        <div class="container">
            <div class="section-title text-center mb-50">
                <span>Testimonials</span>
                <h2>What Our Client's Say About Us</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="single-testominal">
                        <img src="{{ asset('template/assets/img/testimonial/t1.png') }}" alt="Images">
                        <h3>Smith Doe</h3>
                        <span>Software Engineer</span>
                        <p>
                            “Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do ei
                            usmod tempor incididunt ut labore et dolore magna aliqua.
                            Quis ipsum suspendisse ultrices gravida. Risus commodo.”
                        </p>
                        <ul>
                            <li>
                                <i class="fas fa-star"></i>
                            </li>
                            <li>
                                <i class="fas fa-star"></i>
                            </li>
                            <li>
                                <i class="fas fa-star"></i>
                            </li>
                            <li>
                                <i class="fas fa-star"></i>
                            </li>
                            <li>
                                <i class="fas fa-star"></i>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-testominal">
                        <img src="{{ asset('template/assets/img/testimonial/t2.png') }}" alt="Images">
                        <h3>Evana Doe</h3>
                        <span>Market Manager</span>
                        <p>
                            “Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do ei
                            usmod tempor incididunt ut labore et dolore magna aliqua.
                            Quis ipsum suspendisse ultrices gravida. Risus commodo.”
                        </p>
                        <ul>
                            <li>
                                <i class="fas fa-star"></i>
                            </li>
                            <li>
                                <i class="fas fa-star"></i>
                            </li>
                            <li>
                                <i class="fas fa-star"></i>
                            </li>
                            <li>
                                <i class="fas fa-star"></i>
                            </li>
                            <li>
                                <i class="fas fa-star"></i>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-testominal">
                        <img src="{{ asset('template/assets/img/testimonial/t3.png') }}" alt="Images">
                        <h3>John Doe</h3>
                        <span>Designer</span>
                        <p>
                            “Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do ei
                            usmod tempor incididunt ut labore et dolore magna aliqua.
                            Quis ipsum suspendisse ultrices gravida. Risus commodo.”
                        </p>
                        <ul>
                            <li>
                                <i class="fas fa-star"></i>
                            </li>
                            <li>
                                <i class="fas fa-star"></i>
                            </li>
                            <li>
                                <i class="fas fa-star"></i>
                            </li>
                            <li>
                                <i class="fas fa-star"></i>
                            </li>
                            <li>
                                <i class="fas fa-star"></i>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-testominal">
                        <img src="{{ asset('template/assets/img/testimonial/t4.png') }}" alt="Images">
                        <h3>Aana Smith</h3>
                        <span>Marketing Director</span>
                        <p>
                            “Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do ei
                            usmod tempor incididunt ut labore et dolore magna aliqua.
                            Quis ipsum suspendisse ultrices gravida. Risus commodo.”
                        </p>
                        <ul>
                            <li>
                                <i class="fas fa-star"></i>
                            </li>
                            <li>
                                <i class="fas fa-star"></i>
                            </li>
                            <li>
                                <i class="fas fa-star"></i>
                            </li>
                            <li>
                                <i class="fas fa-star"></i>
                            </li>
                            <li>
                                <i class="fas fa-star"></i>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12">
                    <div class="pagination-area">
                        <a href="testimonials.html" class="prev page-numbers">
                            <i class="fas fa-chevron-left"></i>
                        </a>
                        <a href="testimonials.html" class="page-numbers current" aria-current="page">1</a>
                        <a href="testimonials.html" class="page-numbers ">2</a>
                        <a href="testimonials.html" class="page-numbers">3</a>
                        <a href="testimonials.html" class="next page-numbers">
                            <i class="fas fa-chevron-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonials Inner End -->

    <!-- Footer Area -->
    @include('layout.footer')
    <!-- Footer Area End -->


    <!-- Jquery Min JS -->
    @include('layout.jquery')

    <!-- Mirrored from templates.hibootstrap.com/dobby/default/testimonials.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Dec 2025 15:33:42 GMT -->

</html>
