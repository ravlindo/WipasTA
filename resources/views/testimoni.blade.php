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
                @forelse($testimonials as $testimonial)
                <div class="col-lg-6">
                    <div class="single-testominal">
                        @if($testimonial->image)
                            <img src="{{ asset('storage/' . $testimonial->image) }}" alt="Foto {{ $testimonial->name }}" class="rounded-circle">
                        @else
                            <img src="{{ asset('template/assets/img/testimonial/default-avatar.png') }}" alt="Default Avatar" class="rounded-circle">
                        @endif
                        <h3>{{ $testimonial->name }}</h3>
                        <span>Pengunjung</span>
                        <p>
                            "{{ $testimonial->message }}"
                        </p>
                        <ul>
                            @for($i = 1; $i <= 5; $i++)
                                @if($i <= $testimonial->rating)
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                @else
                                    <li>
                                        <i class="far fa-star"></i>
                                    </li>
                                @endif
                            @endfor
                        </ul>
                    </div>
                </div>
                @empty
                <div class="col-12">
                    <div class="text-center">
                        <h4>Belum ada testimonial</h4>
                        <p>Testimonial dari pengunjung akan muncul di sini setelah ditambahkan melalui admin dashboard atau form di bawah ini.</p>
                    </div>
                </div>
                @endforelse
            </div>
        </div>
    </div>
    <!-- Testimonials Inner End -->

    <!-- Submit Testimonial Section -->
    <div class="testimonials-submit pt-100 pb-70">
        <div class="container">
            <div class="section-title text-center mb-50">
                <span>Share Your Experience</span>
                <h2>Submit Your Testimonial</h2>
                <p>We value your feedback! Share your experience with us.</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="contact-form">
                        @if(session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif

                        @if($errors->any())
                            <div class="alert alert-danger" role="alert">
                                <ul class="mb-0">
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('testimoni.submit') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="name">Your Name <span class="text-danger">*</span></label>
                                        <input type="text" id="name" name="name" class="form-control" placeholder="Enter your name" value="{{ old('name') }}" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="rating">Rating <span class="text-danger">*</span></label>
                                        <select id="rating" name="rating" class="form-control" required>
                                            <option value="">Select Rating</option>
                                            <option value="5" {{ old('rating') == '5' ? 'selected' : '' }}>5 Stars</option>
                                            <option value="4" {{ old('rating') == '4' ? 'selected' : '' }}>4 Stars</option>
                                            <option value="3" {{ old('rating') == '3' ? 'selected' : '' }}>3 Stars</option>
                                            <option value="2" {{ old('rating') == '2' ? 'selected' : '' }}>2 Stars</option>
                                            <option value="1" {{ old('rating') == '1' ? 'selected' : '' }}>1 Star</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="image">Profile Image (Optional)</label>
                                        <input type="file" id="image" name="image" class="form-control" accept="image/*">
                                        <small class="form-text text-muted">Max file size: 2MB. Supported formats: JPG, JPEG, PNG</small>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="message">Your Testimonial <span class="text-danger">*</span></label>
                                        <textarea id="message" name="message" class="form-control" rows="5" placeholder="Share your experience..." required>{{ old('message') }}</textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <button type="submit" class="default-btn btn-two">
                                        Submit Testimonial
                                        <i class="flaticon-right"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Submit Testimonial Section End -->

    <!-- Footer Area -->
    @include('layout.footer')
    <!-- Footer Area End -->


    <!-- Jquery Min JS -->
    @include('layout.jquery')

    <!-- Mirrored from templates.hibootstrap.com/dobby/default/testimonials.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Dec 2025 15:33:42 GMT -->

</html>
