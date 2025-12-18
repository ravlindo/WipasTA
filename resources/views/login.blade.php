<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from templates.hibootstrap.com/dobby/default/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Dec 2025 15:33:43 GMT -->

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
                        <h3>Log In</h3>
                        <ul>
                            <li>
                                <a href="index.html">Home</a>
                            </li>
                            <li>
                                <i class="fas fa-chevron-right"></i>
                            </li>
                            <li>
                                Log In
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Inner Banner End -->

    <!-- Login Area -->
    <div class="login-area ptb-100">
        <div class="container">
            <div class="login-form">
                <div class="login-title">
                    <i class="far fa-user text-center"></i>
                    <h3>Log In</h3>
                </div>
                <div class="form-sing">
                    <form>
                        <div class="row justify-content-center">
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" class="form-control" placeholder="Username">
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" placeholder="Password">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-check form-group">
                                    <input type="checkbox" class="form-check-input" id="ExapleCheckbox">
                                    <label class="form-check-label" for="ExapleCheckbox">Remember me</label>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12 text-center">
                                <button type="submit" class="login-btn btn-two">
                                    Log In
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <p>Don't have an account? <a href="register.html">Resigter Now</a></p>
            </div>
        </div>
    </div>
    <!-- Login Area -->

    <!-- Footer Area -->
 @include("layout.footer")
    <!-- Footer Area End -->


    <!-- Jquery Min JS -->
@include("layout.jquery")

</body>

<!-- Mirrored from templates.hibootstrap.com/dobby/default/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Dec 2025 15:33:43 GMT -->

</html>
