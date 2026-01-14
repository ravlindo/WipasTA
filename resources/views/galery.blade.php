<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from templates.hibootstrap.com/dobby/default/gallery.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Dec 2025 15:33:45 GMT -->

@include('layout.head')

<body>
    <!-- Start Preloader -->
    <div class="preloader">
        <div class="preloader-wave"></div>
    </div>
    <!-- End Preloader -->

    <!-- Start Heder Area -->
@include("layout.header")
    <!-- End Heder Area -->

    <!-- Start Navbar Area -->
   @include("layout.navbar")
    <!-- End Navbar Area -->

    <!-- Inner Banner -->
    <div class="inner-banner bg-shape3 bg-color4">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="conatiner">
                    <div class="inner-title text-center">
                        <h3>Gallery</h3>
                        <ul>
                            <li>
                                <a href="{{ route('landingpage.home') }}">Home</a>
                            </li>
                            <li>
                                <i class="fas fa-chevron-right"></i>
                            </li>
                            <li>
                                Gallery
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Inner Banner End -->

    <!-- Gallery Inner -->
    <div class="gallery-inner pt-100 pb-70">
        <div class="container">
            <div class="section-title text-center mb-50">
                <span>Our Gallery</span>
                <h2>Amazing Photos at Our Gallery</h2>
            </div>
            <div class="gallery-view">
                <div class="row justify-content-center">
                    @forelse($galleries as $gallery)
                    <div class="col-lg-4 col-sm-6">
                        <div class="single-gallery">
                            <img src="{{ asset('storage/' . $gallery->gambar) }}" alt="Gallery Images">
                            <a href="{{ asset('storage/' . $gallery->gambar) }}" class="single-icon">
                                <i class="fas fa-plus"></i>
                            </a>
                            <div class="gallery-content">
                                <h3>{{ $gallery->title }}</h3>
                                <p>{{ $gallery->deskripsi }}</p>
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
    </div>
    <!-- Gallery Inner End -->

    <!-- Footer Area -->
   @include("layout.footer")
    <!-- Footer Area End -->


    <!-- Jquery Min JS -->
  @include("layout.jquery")

</body>

<!-- Mirrored from templates.hibootstrap.com/dobby/default/gallery.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Dec 2025 15:33:45 GMT -->

</html>
