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
                        <a href="{{ route('admin.testimonial.create') }}" class="btn btn-success btn-sm">Tambah Testimonial Lagi</a>
                        <a href="{{ route('testimonial.index') }}" class="btn btn-primary btn-sm">Lihat Semua Testimonial</a>
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
                                <h4 class="mb-0">{{ isset($testimonialItem) ? 'Edit Testimonial' : 'Input Testimonial' }}</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="{{ route('testimonial.index') }}">Testimonial</a></li>
                                        <li class="breadcrumb-item active">{{ isset($testimonialItem) ? 'Edit' : 'Input' }}</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">

                                    <h4 class="card-title">{{ isset($testimonialItem) ? 'Edit Data Testimonial' : 'Form Data Testimonial' }}</h4>
                                    <p class="card-title-desc">{{ isset($testimonialItem) ? 'Edit data testimonial yang sudah ada.' : 'Silahkan isi data testimonial pengunjung.' }}</p>

                                    <form action="{{ isset($testimonialItem) ? route('admin.testimonial.update', $testimonialItem->id) : route('testimonial.store') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @if(isset($testimonialItem))
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
                                            <label for="image" class="col-md-2 col-form-label">Foto Profil</label>
                                            <div class="col-md-10">
                                                @if(isset($testimonialItem) && $testimonialItem->image)
                                                    <div class="mb-2">
                                                        <img src="{{ asset('storage/' . $testimonialItem->image) }}" alt="Current Image" class="img-thumbnail rounded-circle" style="max-width: 100px; max-height: 100px;">
                                                        <p class="text-muted small mt-1">Foto profil saat ini. Upload foto baru untuk mengganti.</p>
                                                    </div>
                                                @endif
                                                <input class="form-control @error('image') is-invalid @enderror" type="file" id="image"
                                                    name="image" accept="image/*">
                                                <div class="form-text">Upload foto profil (opsional).</div>
                                                @error('image')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="name" class="col-md-2 col-form-label">Nama</label>
                                            <div class="col-md-10">
                                                <input class="form-control @error('name') is-invalid @enderror" type="text" id="name" name="name" placeholder="Masukkan nama..." value="{{ isset($testimonialItem) ? $testimonialItem->name : old('name') }}" required>
                                                <div class="form-text">Nama pengunjung yang memberikan testimonial.</div>
                                                @error('name')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="rating" class="col-md-2 col-form-label">Rating</label>
                                            <div class="col-md-10">
                                                <select class="form-control @error('rating') is-invalid @enderror" id="rating" name="rating" required>
                                                    <option value="">Pilih Rating</option>
                                                    <option value="5" {{ (isset($testimonialItem) && $testimonialItem->rating == 5) || old('rating') == '5' ? 'selected' : '' }}>★★★★★ (5 Bintang)</option>
                                                    <option value="4" {{ (isset($testimonialItem) && $testimonialItem->rating == 4) || old('rating') == '4' ? 'selected' : '' }}>★★★★☆ (4 Bintang)</option>
                                                    <option value="3" {{ (isset($testimonialItem) && $testimonialItem->rating == 3) || old('rating') == '3' ? 'selected' : '' }}>★★★☆☆ (3 Bintang)</option>
                                                    <option value="2" {{ (isset($testimonialItem) && $testimonialItem->rating == 2) || old('rating') == '2' ? 'selected' : '' }}>★★☆☆☆ (2 Bintang)</option>
                                                    <option value="1" {{ (isset($testimonialItem) && $testimonialItem->rating == 1) || old('rating') == '1' ? 'selected' : '' }}>★☆☆☆☆ (1 Bintang)</option>
                                                </select>
                                                <div class="form-text">Rating yang diberikan pengunjung.</div>
                                                @error('rating')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="message" class="col-md-2 col-form-label">Pesan Testimonial</label>
                                            <div class="col-md-10">
                                                <textarea class="form-control @error('message') is-invalid @enderror" id="message" name="message" rows="4"
                                                    placeholder="Tuliskan testimonial di sini..." required>{{ isset($testimonialItem) ? $testimonialItem->message : old('message') }}</textarea>
                                                <div class="form-text">Pesan testimonial dari pengunjung.</div>
                                                @error('message')
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
        @if(session('success') && !isset($testimonialItem))
            document.getElementById('image').value = '';
            document.getElementById('name').value = '';
            document.getElementById('rating').value = '';
            document.getElementById('message').value = '';
        @endif
    </script>

</body>

</html>
