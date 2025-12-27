<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from templates.hibootstrap.com/dobby/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Dec 2025 15:32:57 GMT -->
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

    <!-- Home Slider -->
    <div class="home-slider">
        <div class="slider-area owl-carousel owl-theme">
            <div class="slider-item slider-bg1">
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="container">
                            <div class="slider-text">
                                <h1>WIPASTA WISATA PANTAI TULUNGAGUNG</h1>
                                <p>
                                    Pantai-pantai di Tulungagung menawarkan keindahan alam yang masih terjaga dengan
                                    perpaduan pasir pantai, batuan karang, dan luasnya Samudra Hindia. Suasana yang
                                    tenang serta panorama alam yang menawan menjadikan kawasan ini sebagai tempat ideal
                                    untuk melepas penat dan menikmati keindahan alam pesisir.
                                </p>

                                <div class="slider-btn">
                                    <a href="about.html" class="default-btn1">Explore More</a>
                                    <a href="contact.html" class="default-btn2 ml-20">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="slider-item slider-bg2">
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="container">
                            <div class="slider-text">
                                <h1>Keindahan Alam Pantai Tulungagung</h1>
                                <p>
                                    Kabupaten Tulungagung memiliki deretan pantai eksotis dengan ciri khas
                                    masing-masing, mulai dari pantai berpasir putih hingga tebing karang yang megah.
                                    Keasrian lingkungan dan pemandangan matahari terbenam yang memukau membuat
                                    pantai-pantai ini menjadi destinasi favorit bagi wisatawan yang mencari pengalaman
                                    wisata alam.
                                </p>

                                <div class="slider-btn">
                                    <a href="about.html" class="default-btn1">Explore More</a>
                                    <a href="contact.html" class="default-btn2 ml-20">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="slider-item slider-bg3">
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="container">
                            <div class="slider-text">
                                <h1>Eksplorasi Pantai Tulungagung</h1>
                                <p>
                                    Pantai Tulungagung menyimpan pesona alam yang beragam, menghadirkan panorama laut
                                    yang luas, ombak yang menenangkan, serta keindahan alam yang masih alami. Destinasi
                                    ini cocok bagi wisatawan yang ingin berwisata, bersantai, maupun mengabadikan momen
                                    indah di tepi pantai.
                                </p>

                                <div class="slider-btn">
                                    <a href="about.html" class="default-btn1">Explore More</a>
                                    <a href="contact.html" class="default-btn2 ml-20">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Home Slider End -->

    <!-- Brand Area End -->
    <div class="brand-area pt-100">
        <div class="container">
            <div class="brand-slider owl-carousel owl-theme">
                <div class="brand-item">
                    <a href="index.html">
                        <img src="{{ asset('template/assets/img/brand/1.png') }}" class="brand-logo-one" alt="Images">
                        <img src="{{ asset('template/assets/img/brand/brand-logo1.png') }}" class="brand-logo-two"
                            alt="Images">
                    </a>
                </div>
                <div class="brand-item">
                    <a href="index.html">
                        <img src="{{ asset('template/assets/img/brand/2.png') }}" class="brand-logo-one" alt="Images">
                        <img src="{{ asset('template/assets/img/brand/brand-logo2.png') }}" class="brand-logo-two"
                            alt="Images">
                    </a>
                </div>
                <div class="brand-item">
                    <a href="index.html">
                        <img src="{{ asset('template/assets/img/brand/3.png') }}" class="brand-logo-one" alt="Images">
                        <img src="{{ asset('template/assets/img/brand/brand-logo3.png') }}" class="brand-logo-two"
                            alt="Images">
                    </a>
                </div>
                <div class="brand-item">
                    <a href="index.html">
                        <img src="{{ asset('template/assets/img/brand/4.png') }}" class="brand-logo-one" alt="Images">
                        <img src="{{ asset('template/assets/img/brand/brand-logo4.png') }}" class="brand-logo-two"
                            alt="Images">
                    </a>
                </div>
                <div class="brand-item">
                    <a href="index.html">
                        <img src="{{ asset('template/assets/img/brand/5.png') }}" class="brand-logo-one" alt="Images">
                        <img src="{{ asset('template/assets/img/brand/brand-logo5.png') }}" class="brand-logo-two"
                            alt="Images">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Brand Area End -->

    <!-- About Area -->
    <!-- About Area -->
    <div class="about-area pt-120 pb-80 bg-[#f8fafc] relative overflow-hidden">
        <div class="container">
            <div class="row align-items-center justify-content-center">

                <!-- TEXT AREA -->
                <div class="col-lg-6">
                    <div class="about-text pe-lg-5">
                        <div class="section-title mb-4">
                            <span
                                class="inline-block mb-3 px-4 py-1 text-sm font-semibold text-blue-600 bg-blue-100 rounded-full">
                                About Us
                            </span>

                            <h2 class="text-4xl fw-bold leading-tight mb-4">
                                {{ $about ? $about->title : 'Enjoy Safe and Affordable Diving & Swimming With Us' }}
                            </h2>

                            <p class="text-gray-600 leading-relaxed">
                                @if ($about)
                                    {{ $about->deskripsi }}
                                @else
                                    We provide the best experience with professional instructors, modern equipment,
                                    and a safe environment for all levels. Discover the beauty beneath the water with
                                    confidence.
                                @endif
                            </p>
                        </div>

                        <div class="about-btn mt-4">
                            <a href="{{ route('about.home') }}" class="default-btn2 shadow-lg">
                                Know More
                            </a>
                        </div>
                    </div>
                </div>

                <!-- IMAGE AREA -->
                <!-- IMAGE AREA -->
                <div class="col-lg-6">
                    <div class="about-right position-relative">

                        <!-- Floating Frame -->
                        <div class="relative" style="transform: translateY(-20px);">
                            <div class="bg-white rounded-4 p-3 shadow-xl"
                                style="
                    box-shadow:
                        0 25px 50px -12px rgba(0,0,0,.25),
                        0 10px 20px -5px rgba(0,0,0,.1);
                ">
                                <!-- Image Wrapper (Aspect Ratio) -->
                                <div class="overflow-hidden rounded-3" style="aspect-ratio: 4 / 5;">
                                    <img src="{{ $about && $about->gambar_besar ? asset('storage/' . $about->gambar_besar) : asset('images/about-default.jpg') }}"
                                        alt="About Image" class="w-100 h-100" style="object-fit: cover;">
                                </div>
                            </div>
                        </div>

                        <!-- Decorative Wave -->
                        <div class="icon-shape-1">
                            <i class="flaticon-waves"></i>
                        </div>
                        <div class="icon-shape-2">
                            <i class="flaticon-waves"></i>
                        </div>

                    </div>
                </div>


            </div>
        </div>

        <!-- Background Accent -->
        <div
            style="
        position:absolute;
        top:-120px;
        right:-120px;
        width:300px;
        height:300px;
        background:#e0f2fe;
        border-radius:50%;
        z-index:-1;
    ">
        </div>
    </div>
    <!-- About Area End -->

    <!-- About Area End -->

    <!-- Service Area -->

    <!-- Service Area End -->

    <!-- Apply Area -->

    <!-- Apply Area End -->

    <!-- Course Area -->
    <div class="course-area pt-100 pb-70">
        <div class="container-fluid m-0 p-0">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-xxl-6">
                    <div class="course-item">
                        <div class="course-text">
                            <span>Swimming Course</span>
                            <h2>Swimming Course Taken by Our Most Experienced Trainer</h2>
                            <p>
                                Attempt. Origin it the get and the been came into the fitted would another behind think
                                insur is ance sister hell
                                mild, back least on war, can of, remote become into and and that the that as a me
                                skyline was first him many instruments,
                                nearby a to he purpose series helplessly didn't has a long question tricoloured half
                                here, the links needed in considerable.
                            </p>
                            <p>
                                Months known was first own, them. Travelling of by velocity agreed by clock of this
                                to dedicat ed with days, and on viewings the brought we her with been decision-making.
                            </p>
                            <div class="course-btn">
                                <a href="courses.html" class="default-btn2">Take Course</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 col-xxl-6">
                    <div class="course-img">
                        <img src="{{ asset('template/assets/img/course/1.jpg') }}" alt="Course Images">
                    </div>
                    <div class="course-dots">
                        <img src="{{ asset('template/assets/img/shape/dots-blue.png') }}" alt="Dots Images">
                    </div>
                </div>
            </div>

            <div class="course-another pt-70">
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-xxl-6">
                        <div class="course-img-2">
                            <img src="{{ asset('template/assets/img/course/2.jpg') }}" alt="Course Images">
                        </div>
                        <div class="course-dots-2">
                            <img src="{{ asset('template/assets/img/shape/dots-pink.png') }}" alt="Dots Images">
                        </div>
                    </div>

                    <div class="col-lg-7 col-xxl-6">
                        <div class="course-item-2">
                            <div class="course-text">
                                <span>Diving Course</span>
                                <h2>Diving Course Taken by Our Most Experienced Trainer</h2>
                                <p>
                                    Attempt. Origin it the get and the been came into the fitted would another behind
                                    think insur is ance sister hell
                                    mild, back least on war, can of, remote become into and and that the that as a me
                                    skyline was first him many instruments,
                                    nearby a to he purpose series helplessly didn't has a long question tricoloured half
                                    here, the links needed in considerable.
                                </p>
                                <p>
                                    Months known was first own, them. Travelling of by velocity agreed by clock of this
                                    to dedicat ed with days, and on viewings the brought we her with been
                                    decision-making.
                                </p>
                                <div class="course-btn">
                                    <a href="courses.html" class="default-btn2">Take Course</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="icon-shape-3">
            <i class="flaticon-swimming"></i>
        </div>
        <div class="icon-shape-4">
            <i class="flaticon-diver"></i>
        </div>
    </div>
    <!-- Course Area End -->

    <!-- Product Area -->

    <!-- Product Area End -->

    <!-- Gallery Area -->
    <section class="gallery-area pt-100 pb-70">
        <div class="container">
            <div class="section-title text-center mb-50">
                <span>Our Gallery</span>
                <h2>Amazing Photos at Our Daily Dobby</h2>
                <p>
                    The introduced now, the they expect, animals the desk, and catch
                    temple. More seven my couldn't it the character using recommended.
                </p>
                <div class="section-btn text-center mt-4">
                    <a href="{{ route('galeri.home') }}" class="default-btn1">View All Gallery</a>
                </div>
            </div>
            <div class="gallery-view">
                <div class="row justify-content-center">
                    @forelse($galleries as $gallery)
                    <div class="col-lg-4 col-sm-6">
                        <div class="gallery-item">
                            <a href="{{ asset('storage/' . $gallery->gambar) }}">
                                <img src="{{ asset('storage/' . $gallery->gambar) }}" alt="Gallery Images">
                            </a>
                            <div class="gallery-text">
                                <h3>{{ $gallery->title }}</h3>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="col-12 text-center">
                        <p>Belum ada galeri yang ditambahkan.</p>
                    </div>
                    @endforelse
                </div>
            </div>
        </div>
    </section>
    <!-- Gallery Area End -->

    <!-- Trainers Area -->

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
                                <img src="{{ asset('template/assets/img/news/1.jpg') }}" alt="News Images">
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
                                <img src="{{ asset('template/assets/img/news/2.jpg') }}" alt="News Images">
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
                                <img src="{{ asset('template/assets/img/news/3.jpg') }}" alt="News Images">
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
    </section>
    <!-- News Area End -->

    <!-- Footer Area -->

    <!-- Footer Area End -->
    @include('layout.footer')

    <!-- Jquery Min JS -->
    @include('layout.jquery')
</body>

<!-- Mirrored from templates.hibootstrap.com/dobby/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Dec 2025 15:33:18 GMT -->

</html>
