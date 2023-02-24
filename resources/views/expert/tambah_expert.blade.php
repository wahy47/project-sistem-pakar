@extends('admin.main')
@section('title')
    SIMI - Penyakit
@endsection
@section('navbar')
    @include('expert.navbar')
@endsection
@section('content')
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow d-lg-none d-md-none">
                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>
            </nav>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid pt-3">

                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Expert</h1>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="card shadow rounded mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Tambah Expert</h6>
                            </div>
                            <div class="card-body p-3">
                                @if (Session()->has('regiserror'))
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        {{ Session('regiserror') }}
                                    </div>
                                @endif
                                <form action="/tambah-expert" method="POST">
                                    @csrf
                                    <div class="mb-3 text-dark">
                                        <label class="form-label">Nama</label>
                                        <input type="text"
                                            class="form-control text-dark @error('nama') is-invalid @enderror"
                                            name="nama" value="{{ old('nama') }}" required>
                                        @error('nama')
                                            <div class="invalid-feedback">
                                                Periksa Kembali Nama Anda.
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3 text-dark">
                                        <label class="form-label">Email</label>
                                        <input type="email"
                                            class="form-control text-dark @error('email') is-invalid @enderror"
                                            name="email" value="{{ old('email') }}"required>
                                        @error('email')
                                            <div class="invalid-feedback">
                                                Periksa Kembali Email Anda.
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3 text-dark">
                                        <label class="form-label">Usia</label>
                                        <input type="number"
                                            class="form-control text-dark @error('usia') is-invalid @enderror"
                                            name="usia" value="{{ old('usia') }}"required>
                                        @error('usia')
                                            <div class="invalid-feedback">
                                                Periksa Kembali Usia Anda.
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3 text-dark">
                                        <label class="form-label">Alamat</label>
                                        <input type="text"
                                            class="form-control text-dark @error('alamat') is-invalid @enderror"
                                            name="alamat" value="{{ old('alamat') }}"required>
                                        @error('alamat')
                                            <div class="invalid-feedback">
                                                Periksa Kembali Alamat Anda.
                                            </div>
                                        @enderror
                                    </div>
                                    <label class="form-label text-dark">Password</label>
                                    <div class="input-group">
                                        <input type="password"
                                            class="form-control value-black @error('pass') is-invalid @enderror"
                                            id="pass" name="pass" required>
                                        <button class="btn btn-outline-secondary" type="button" onclick="btnSee()"><i
                                                class="fas fa-eye"></i></button>
                                        @error('pass')
                                            <div class="invalid-feedback">
                                                Periksa Kembali Password Anda.
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <span class="align-middle"><i class="fas fa-star-of-life align-middle"
                                                style="font-size: 8px; color: red;"></i>
                                            Password Minimal 8 Karakter</span>
                                    </div>

                                    <div class="text-center mb-3">
                                        <button class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; Your Website 2022</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

    </div>
@endsection
