     <div class="navbar-area">
         <!-- Menu For Mobile Device -->
         <div class="mobile-nav">
             <a href="{{ route('landingpage.home') }}" class="logo">
                 <img src="{{ asset('template/assets/img/logoo.png') }}" alt="Logo">
             </a>
         </div>

         <!-- Menu For Desktop Device -->
         <div class="main-nav">
             <div class="container">
                 <nav class="navbar navbar-expand-md navbar-light ">
                     <a class="navbar-brand" href="{{ route('landingpage.home') }}">
                         <img src="{{ asset('template/assets/img/logoo.png') }}" alt="Logo">
                     </a>
                     <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                         <ul class="navbar-nav m-auto">
                             <li class="nav-item">
                                 <a href="{{ route('landingpage.home') }}" class="nav-link active">
                                     Home

                                 </a>

                             </li>
                             <li class="nav-item">
                                 <a href="#" class="nav-link">
                                     Pages
                                     <i class="fas fa-chevron-right"></i>
                                 </a>
                                 <ul class="dropdown-menu">

                                     <li class="nav-item">
                                         <a href="{{ route('testimoni.home') }}" class="nav-link">
                                             Testimonials
                                         </a>
                                     </li>

                                     @auth
                                     <li class="nav-item">
                                         <a href="{{ route('AdminDasboard.home') }}" class="nav-link">
                                             Dashboard
                                         </a>
                                     </li>
                                     <li class="nav-item">
                                         <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                                             @csrf
                                             <button type="submit" class="nav-link" style="background: none; border: none; color: inherit; cursor: pointer;">
                                                 Logout
                                             </button>
                                         </form>
                                     </li>
                                     @else
                                     <li class="nav-item">
                                         <a href="{{ route('login') }}" class="nav-link">
                                             Log In
                                         </a>
                                     </li>
                                     <li class="nav-item">
                                         <a href="{{ route('register') }}" class="nav-link">
                                             Register
                                         </a>
                                     </li>
                                     @endauth
                                 </ul>
                             </li>
                             <li class="nav-item">
                                 <a href="{{ route('about.home') }}" class="nav-link">
                                     About
                                 </a>
                             </li>

                             <li class="nav-item">
                                 <a href="{{ route('galeri.home') }}" class="nav-link">
                                     Gallery
                                 </a>
                             </li>

                             <li class="nav-item">
                                 <a href="{{ route('news.home') }}" class="nav-link">
                                     News
                                 </a>
                             </li>

                          
                         </ul>

                         <div class="other-side">
                             <div class="search-area">
                                 <div class="other-option">
                                     <div class="search-item">
                                         <a href="#" class="search-btn">
                                             <i class="flaticon-magnifying-glass"></i>
                                         </a>
                                         <i class="close-btn fas fa-times"></i>
                                         <div class="search-overlay search-popup">
                                             <div class="search-box">
                                                 <form class="search-form">
                                                     <input class="search-input" name="search" placeholder="Search"
                                                         type="text">
                                                     <button class="search-button" type="submit">
                                                         <i class="flaticon-magnifying-glass"></i>
                                                     </button>
                                                 </form>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="search-text">
                                 Search
                             </div>


                         </div>
                     </div>
                 </nav>
             </div>
         </div>
     </div>
