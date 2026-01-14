<!DOCTYPE html>
<html lang="zxx">

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
    <div class="inner-banner bg-shape2 bg-color2">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="conatiner">
                    <div class="inner-title text-center">
                        <h3>Berita</h3>
                        <ul>
                            <li>
                                <a href="{{ route('landingpage.home') }}">Home</a>
                            </li>
                            <li>
                                <i class="fas fa-chevron-right"></i>
                            </li>
                            <li>
                                Berita
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Inner Banner End -->

    <!-- News Area -->
    <section class="news-area pt-94 pb-70">
        <div class="container">
            <div class="section-title text-center mb-30">
                <h2>Berita Terbaru Seputar Pantai</h2>
            </div>
            <div class="row justify-content-center">
                @forelse($news as $item)
                <div class="col-lg-4 col-md-6">
                    <div class="news-card">
                        <div class="news-img">
                            @if($item->image)
                                <img src="{{ asset('storage/' . $item->image) }}" alt="Gambar Berita">
                            @else
                                <img src="{{ asset('template/assets/img/news/default.jpg') }}" alt="Default News Image">
                            @endif
                            <div class="sub-text">
                                <span>BERITA PANTAI</span>
                            </div>
                        </div>
                        <ul>
                            <li>
                                Admin
                            </li>
                            <li>{{ $item->publish_date ? \Carbon\Carbon::parse($item->publish_date)->format('d M Y') : $item->created_at->format('d M Y') }}</li>
                        </ul>
                        <div class="news-content">
                            <h3>{{ $item->title }}</h3>
                            <p>
                                {{ $item->content }}
                            </p>
                            <a href="#" class="news-icon">
                                Baca Selengkapnya
                            </a>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-12">
                    <div class="text-center">
                        <h4>Belum ada berita</h4>
                        <p>Berita seputar pantai akan muncul di sini setelah ditambahkan melalui admin dashboard.</p>
                    </div>
                </div>
                @endforelse
            </div>
        </div>
    </section>
    <!-- News Area End -->

    <!-- Footer Area -->
    @include('layout.footer')
    <!-- Footer Area End -->

    <!-- Jquery Min JS -->
    @include('layout.jquery')

</body>

</html>
