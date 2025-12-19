<!doctype html>
<html lang="en">

@include('admin.adminlayout.head')

<body>

    <div id="layout-wrapper">

        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex">
                    <div class="navbar-brand-box">
                        <a href="index.html" class="logo logo-dark">
                            <span class="logo-sm">
                                <img src="{{ asset('AdminPage/assets/images/logo-sm.png') }}" alt=""
                                    height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="{{ asset('AdminPage/assets/images/logo-dark.png') }}" alt=""
                                    height="20">
                            </span>
                        </a>

                        <a href="index.html" class="logo logo-light">
                            <span class="logo-sm">
                                <img src="{{ asset('AdminPage/assets/images/logo-sm.png') }}" alt=""
                                    height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="{{ asset('AdminPage/assets/images/logo-light.png') }}" alt=""
                                    height="20">
                            </span>
                        </a>
                    </div>

                    <button type="button"
                        class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn">
                        <i class="fa fa-fw fa-bars"></i>
                    </button>

                    <form class="app-search d-none d-lg-block">
                        <div class="position-relative">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="uil-search"></span>
                        </div>
                    </form>
                </div>

                <div class="d-flex">
                    <div class="dropdown d-inline-block d-lg-none ms-2">
                        <button type="button" class="btn header-item noti-icon waves-effect"
                            id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <i class="uil-search"></i>
                        </button>
                    </div>

                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="rounded-circle header-profile-user"
                                src="{{ asset('AdminPage/assets/images/users/avatar-4.jpg') }}" alt="Header Avatar">
                            <span class="d-none d-xl-inline-block ms-1 fw-medium font-size-15">Marcus</span>
                            <i class="uil-angle-down d-none d-xl-inline-block font-size-15"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item" href="#"><i
                                    class="uil uil-user-circle font-size-18 align-middle text-muted me-1"></i> <span
                                    class="align-middle">View Profile</span></a>
                            <a class="dropdown-item" href="#"><i
                                    class="uil uil-sign-out-alt font-size-18 align-middle me-1 text-muted"></i> <span
                                    class="align-middle">Sign out</span></a>
                        </div>
                    </div>

                </div>
            </div>
        </header>

        <div class="container mt-4">

            {{-- Alert Success --}}
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif
        </div>



        @include('admin.adminlayout.sidebar')
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="mb-0">Input About</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                                        <li class="breadcrumb-item active">About</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">

                                    <h4 class="card-title">Form Data About</h4>
                                    <p class="card-title-desc">Silahkan upload gambar dan isi deskripsi untuk halaman
                                        About.</p>

                                    <form action="{{ route('about.store') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf

                                        <div class="mb-3 row">
                                            <label for="gambar_gede" class="col-md-2 col-form-label">Gambar Gede
                                                (Banner)</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="file" id="gambar_gede"
                                                    name="gambar_gede" accept="image/*">
                                                <div class="form-text">Upload gambar banner utama (disarankan ukuran
                                                    besar/landscape).</div>
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="gambar_kanan" class="col-md-2 col-form-label">Gambar
                                                Kanan</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="file" id="gambar_kanan"
                                                    name="gambar_kanan" accept="image/*">
                                                <div class="form-text">Upload gambar pendamping di sisi kanan.</div>
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="title" class="col-md-2 col-form-label">Judul (Title)</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" id="title" name="title" placeholder="Masukkan judul..." required>
                                                <div class="form-text">Judul utama untuk bagian About.</div>
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="deskripsi" class="col-md-2 col-form-label">Deskripsi</label>
                                            <div class="col-md-10">
                                                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="6"
                                                    placeholder="Tuliskan deskripsi lengkap about di sini..."></textarea>
                                            </div>
                                        </div>

                                        <div class="row justify-content-end">
                                            <div class="col-md-10">
                                                <button type="submit"
                                                    class="btn btn-primary waves-effect waves-light w-md">Simpan
                                                    Data</button>
                                                <button type="reset"
                                                    class="btn btn-outline-danger waves-effect waves-light w-md">Reset</button>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> © Minible.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                Crafted with <i class="mdi mdi-heart text-danger"></i> by <a
                                    href="https://themesbrand.com/" target="_blank"
                                    class="text-reset">Themesbrand</a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    @include('admin.adminlayout.rightsidebar')
    <div class="rightbar-overlay"></div>

    @include('admin.adminlayout.javascript')

    <script src="assets/js/app.js"></script>

</body>

</html>
