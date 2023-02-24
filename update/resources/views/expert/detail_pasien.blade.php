@extends('expert.main')
@section('navbar')
    @if (auth()->user()->role == 'admin')
        @include('expert.navbar')
    @endif
    @if (auth()->user()->role == 'expert')
        @include('admin.navbar')
    @endif
@endsection
@section('content')
    <!-- Content Wrapper -->
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

                <div class="row">

                    <!-- Area Chart -->
                    <div class="col-lg-6">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Pasien</h6>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-3">
                                        <div class="bg-secondary bg-gradient bg-opacity-25"
                                            style="width:100px;height:100px; border-style: solid; border: 2px; border-radius: 50%; border-color: black">
                                            <script src="https://cdn.lordicon.com/fudrjiwc.js"></script>
                                            <lord-icon src="https://cdn.lordicon.com/dqxvvqzi.json" trigger="hover"
                                                colors="outline:#121331,primary:#ffc738,secondary:#4bb3fd"
                                                state="hover-nodding" style="width:100px;height:100px">
                                            </lord-icon>
                                        </div>
                                    </div>
                                    <div class="text-dark">
                                        <h4>{{ $pasien->nama }}</h4>
                                        <span>{{ $pasien->nope }}</span><br>
                                        <span>Usia {{ $pasien->usia }} Tahun</span><br>
                                        <span>Usia Pernikahan {{ $pasien->usia_pernikahan }} Tahun</span><br>
                                        <span>{{ $pasien->alamat }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Card Body -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Penyakit</h6>
                            </div>
                            <div class="card-body">
                                @foreach ($data as $item)
                                    @if ($item->nilai > 50)
                                        <div class="row align-items-center">
                                            <div class="col-4">
                                                <div class="progress-circle over50 p{{ $item->nilai }}">
                                                    <span>{{ $item->nilai }}%</span>
                                                    <div class="left-half-clipper">
                                                        <div class="first50-bar"></div>
                                                        <div class="value-bar"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <span>{{ $item->penyakit->penyakit }}</span>
                                            </div>
                                        </div>
                                        <hr>
                                    @else
                                        <div class="row align-items-center">
                                            <div class="col-4">
                                                <div class="progress-circle p{{ $item->nilai }}">
                                                    <span>{{ $item->nilai }}%</span>
                                                    <div class="left-half-clipper">
                                                        <div class="first50-bar"></div>
                                                        <div class="value-bar"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <span>{{ $item->penyakit->penyakit }}</span>
                                            </div>
                                        </div>
                                        <hr>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!-- Card Body -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Gejala Yang Dirasakan</h6>
                            </div>
                            <div class="card-body text-dark">
                                @foreach ($gejala as $item)
                                    <span> - {{ $item->gejala->gejala }}</span>
                                    <hr>
                                @endforeach
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
    <!-- End of Content Wrapper -->
@endsection
