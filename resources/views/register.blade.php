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
                        <form>
                            <div class="row justify-content-center">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input type="text" class="form-control" placeholder="First Name">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input type="text" class="form-control" placeholder="Last Name">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>Your Email</label>
                                        <input type="text" class="form-control" placeholder="Your Email">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>Your Phone</label>
                                        <input type="text" class="form-control" placeholder="Your Phone">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>Your Subject</label>
                                        <input type="text" class="form-control" placeholder="Your Subject">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" class="form-control" placeholder="Password">
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Your Message</label>
                                        <textarea name="message" class="form-message textarea-hight"  cols="30" rows="5"  placeholder="Your Message"></textarea>
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
                    <p>Have already an account? <a href="{{ route('login.home') }}">Log In</a></p>
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
