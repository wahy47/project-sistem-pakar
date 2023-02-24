@extends('expert.main')
@section('navbar')
    @include('expert.navbar')
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

                <div class="row">

                    <!-- Area Chart -->
                    <div class="col-12">
                        <!-- Card Body -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">{{ $data->penyakit }}</h6>
                            </div>
                            <div class="card-body">
                                <form action="/save-deskripsi/{{ $data->id }}">
                                    <div class="m-3">
                                        <div class="mb-3">
                                            <label for="" class="" style="color: black">Deskripsi Singkat
                                                Penyakit</label>
                                            <textarea class="form-control" name="deskripsi" style="color: black"></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="" style="color: black">Penyebab Terjadinya
                                                Penyakit</label>
                                            <textarea class="form-control" name="penyebab" style="color: black"></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="" style="color: black">Pengobatan
                                                Penyakit</label>
                                            <textarea class="form-control" name="pengobatan" style="color: black"></textarea>
                                        </div>
                                    </div>
                                    <div class="text-center mb-3">
                                        <button class="btn btn-primary">Simpan</button>
                                    </div>
                                </form>
                                <div class="card">
                                    <div class="card-body">
                                        <h3 class="text-dark">{{ $data->penyakit }}</h3>
                                        @if ($data->deskripsi->deskripsi != '')
                                            @php
                                                // prettier-ignore
                                                $x = str_replace("\n", '<br />', $data->deskripsi->deskripsi);
                                                
                                            @endphp
                                            <span class="text-dark">@php
                                                echo $x;
                                            @endphp</span>
                                        @endif
                                    </div>
                                </div>
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
