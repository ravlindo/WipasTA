<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from templates.hibootstrap.com/dobby/default/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Dec 2025 15:33:43 GMT -->
@include("layout.head")
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
        <div class="inner-banner bg-shape3 bg-color3">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="conatiner">
                        <div class="inner-title text-center">
                            <h3>Register Now</h3>
                            <ul>
                                <li>
                                    <a href="{{ route('landingpage.home') }}">Home</a>
                                </li>
                                <li>
                                    <i class="fas fa-chevron-right"></i>
                                </li>
                                <li>
                                    Register Now
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Inner Banner End -->

        <!-- Register Area -->
        <div class="register-area ptb-100">
            <div class="container">
                <div class="register-form">
                    <h3>Register Now</h3>
                    <div class="form-sing">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="row justify-content-center">
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Full Name</label>
                                        <input type="text" name="name" class="form-control" placeholder="Full Name" value="{{ old('name') }}" required>
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Your Email</label>
                                        <input type="email" name="email" class="form-control" placeholder="Your Email" value="{{ old('email') }}" required>
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                                        @error('password')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>Confirm Password</label>
                                        <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password" required>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12 text-center">
                                    <button type="submit" class="default-btn1 btn-two">
                                        Register Now
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <p>Have already an account? <a href="{{ route('login') }}">Log In</a></p>
                </div>
            </div>
        </div>
        <!-- Register Area End -->

        <!-- Footer Area -->
       @include("layout.footer")
        <!-- Footer Area End -->


      <!-- Jquery Min JS -->
       @include("layout.jquery")

    </body>

<!-- Mirrored from templates.hibootstrap.com/dobby/default/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Dec 2025 15:33:43 GMT -->
</html>
