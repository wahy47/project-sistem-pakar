@extends('admin.main')
@section('title')
    SIMI - Penyakit
@endsection
@section('navbar')
    @include('admin.navbar')
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
                    <h1 class="h3 mb-0 text-gray-800">Profil</h1>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <div class="cardz p-4 text-center">
                            <div class="" style="">
                                <script src="https://cdn.lordicon.com/fudrjiwc.js"></script>
                                <lord-icon src="https://cdn.lordicon.com/ljvjsnvh.json" trigger="loop-on-hover"
                                    delay="2000" colors="primary:#4be1ec,secondary:#cb5eee" state="hover-2"
                                    style="width:100px;height:100px">
                                </lord-icon>
                            </div>
                            <div class="card-details">
                                <h4>{{ auth()->user()->nama }}</h4>
                                <span>{{ auth()->user()->email }}</span><br>
                                <span>Usia {{ auth()->user()->usia }} Tahun</span><br>
                                <span>{{ auth()->user()->alamat }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="card shadow rounded mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Profil</h6>
                            </div>
                            <div class="card-body p-3">
                                <form action="/update-profil-expert/{{ auth()->user()->id }}" method="POST">
                                    @csrf
                                    <div class="mb-3 text-dark">
                                        <label class="form-label">Nama</label>
                                        <input type="text"
                                            class="form-control text-dark @error('nama') is-invalid @enderror"
                                            name="nama" value="{{ auth()->user()->nama }}">
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
                                            name="email" value="{{ auth()->user()->email }}">
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
                                            name="usia" value="{{ auth()->user()->usia }}">
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
                                            name="alamat" value="{{ auth()->user()->alamat }}">
                                        @error('alamat')
                                            <div class="invalid-feedback">
                                                Periksa Kembali Alamat Anda.
                                            </div>
                                        @enderror
                                    </div>
                                    <label class="form-label text-dark">Password</label>
                                    <div class="input-group mb-3">
                                        <input type="password"
                                            class="form-control value-black @error('pass') is-invalid @enderror"
                                            id="pass" name="pass" value="{{ auth()->user()->unhash }}">
                                        <button class="btn btn-outline-secondary" type="button" onclick="btnSee()"><i
                                                class="fas fa-eye"></i></button>
                                        @error('pass')
                                            <div class="invalid-feedback">
                                                Periksa Kembali Password Anda.
                                            </div>
                                        @enderror
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
