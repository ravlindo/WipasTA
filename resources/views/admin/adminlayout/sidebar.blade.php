<div class="vertical-menu">

                <!-- LOGO -->
                <div class="navbar-brand-box">
                    <a href="index.html" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="{{ asset("template/assets/img/logoo.png") }}" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="{{ asset("template/assets/img/logoo.png") }}" alt="" height="20">
                        </span>
                    </a>

                    <a href="index.html" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="{{ asset("template/assets/img/logoo.png") }}" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="{{ asset("template/assets/img/logoo.png") }}" alt="" height="20">
                        </span>
                    </a>
                </div>

                <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn">
                    <i class="fa fa-fw fa-bars"></i>
                </button>

                <div data-simplebar class="sidebar-menu-scroll">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title">Menu</li>

                            <li>
                                <a href="{{ route('AdminDasboard.home') }}">
                                    <i class="uil-home-alt"></i>
                                    <span>Dashboard</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="uil-info-circle"></i>
                                    <span>About</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{ route('about.index') }}">Kelola About</a></li>
                                    <li><a href="{{ route('admin.about.create') }}">Tambah About</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="uil-image"></i>
                                    <span>Gallery</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{ route('gallery.index') }}">Kelola Gallery</a></li>
                                    <li><a href="{{ route('admin.gallery.create') }}">Tambah Gallery</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="uil-star"></i>
                                    <span>Testimonial</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{ route('testimonial.index') }}">Kelola Testimonial</a></li>
                                    <li><a href="{{ route('admin.testimonial.create') }}">Tambah Testimonial</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="uil-newspaper"></i>
                                    <span>Berita</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{ route('news.index') }}">Kelola Berita</a></li>
                                    <li><a href="{{ route('admin.news.create') }}">Tambah Berita</a></li>
                                </ul>
                            </li>

                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
