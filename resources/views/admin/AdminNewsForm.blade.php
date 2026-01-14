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
                            <span class="d-none d-xl-inline-block ms-1 fw-medium font-size-15">Admin</span>
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
                    <div class="mt-2">
                        <a href="{{ route('admin.news.create') }}" class="btn btn-success btn-sm">Tambah Berita Lagi</a>
                        <a href="{{ route('news.index') }}" class="btn btn-primary btn-sm">Lihat Semua Berita</a>
                    </div>
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
                                <h4 class="mb-0">{{ isset($newsItem) ? 'Edit Berita' : 'Input Berita' }}</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="{{ route('news.index') }}">Berita</a></li>
                                        <li class="breadcrumb-item active">{{ isset($newsItem) ? 'Edit' : 'Input' }}</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">

                                    <h4 class="card-title">{{ isset($newsItem) ? 'Edit Data Berita' : 'Form Data Berita' }}</h4>
                                    <p class="card-title-desc">{{ isset($newsItem) ? 'Edit data berita yang sudah ada.' : 'Silahkan isi data berita tentang pantai.' }}</p>

                                    <form action="{{ isset($newsItem) ? route('admin.news.update', $newsItem->id) : route('news.store') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @if(isset($newsItem))
                                            @method('PUT')
                                        @endif

                                        {{-- Display Validation Errors --}}
                                        @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul class="mb-0">
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif

                                        <div class="mb-3 row">
                                            <label for="image" class="col-md-2 col-form-label">Gambar Berita</label>
                                            <div class="col-md-10">
                                                @if(isset($newsItem) && $newsItem->image)
                                                    <div class="mb-2">
                                                        <img src="{{ asset('storage/' . $newsItem->image) }}" alt="Current Image" class="img-thumbnail" style="max-width: 300px; max-height: 200px;">
                                                        <p class="text-muted small mt-1">Gambar berita saat ini. Upload gambar baru untuk mengganti.</p>
                                                    </div>
                                                @endif
                                                <input class="form-control @error('image') is-invalid @enderror" type="file" id="image"
                                                    name="image" accept="image/*">
                                                <div class="form-text">Upload gambar berita (opsional).</div>
                                                @error('image')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="title" class="col-md-2 col-form-label">Judul Berita</label>
                                            <div class="col-md-10">
                                                <input class="form-control @error('title') is-invalid @enderror" type="text" id="title" name="title" placeholder="Masukkan judul berita..." value="{{ isset($newsItem) ? $newsItem->title : old('title') }}" required>
                                                <div class="form-text">Judul berita tentang pantai.</div>
                                                @error('title')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="content" class="col-md-2 col-form-label">Konten Berita</label>
                                            <div class="col-md-10">
                                                <textarea class="form-control @error('content') is-invalid @enderror" id="content" name="content" rows="8"
                                                    placeholder="Tuliskan konten berita lengkap di sini..." required>{{ isset($newsItem) ? $newsItem->content : old('content') }}</textarea>
                                                <div class="form-text">Konten lengkap berita tentang pantai.</div>
                                                @error('content')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="publish_date" class="col-md-2 col-form-label">Tanggal Publikasi</label>
                                            <div class="col-md-10">
                                                <input class="form-control @error('publish_date') is-invalid @enderror" type="date" id="publish_date" name="publish_date" value="{{ isset($newsItem) ? $newsItem->publish_date : old('publish_date', date('Y-m-d')) }}">
                                                <div class="form-text">Tanggal publikasi berita (opsional, kosongkan untuk menggunakan tanggal hari ini).</div>
                                                @error('publish_date')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
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

    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="assets/js/app.js"></script>

    <script>
        // SweetAlert untuk success message
        @if(session('success'))
            Swal.fire({
                icon: 'success',
                title: 'Berhasil!',
                text: '{{ session("success") }}',
                timer: 3000,
                showConfirmButton: false
            });
        @endif

        // Reset form setelah berhasil submit (hanya untuk mode create)
        @if(session('success') && !isset($newsItem))
            document.getElementById('image').value = '';
            document.getElementById('title').value = '';
            document.getElementById('content').value = '';
            document.getElementById('publish_date').value = '';
        @endif
    </script>

</body>

</html>
