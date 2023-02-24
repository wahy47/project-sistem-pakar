@extends('admin.main')
@section('title')
    SIMI - Dashboard
@endsection
@section('navbar')
    @include('admin.navbar')
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
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                    {{-- <a href="/detail?id=" class="btn btn-primary shadow-sm"><i class="fas fa-plus"
                            style="color: rgb(16, 173, 16)"></i> Penyakit</a> --}}
                </div>

                <div class="row">

                    <!-- Area Chart -->
                    <div class="col-12">
                        <!-- Card Body -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Gejala</h6>
                            </div>
                            <div class="card-body">
                                <div class="input-group mb-2">
                                    <input type="text" id="newGejala" class="form-control value-black"
                                        placeholder="Ketikkan Gejala Disini..." onblur="newGejala(value)">
                                    <div class="input-group-append">
                                        <button class="btn btn-success" id="submitGejala" type="button">
                                            <span>Submit</span>
                                        </button>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th class="align-middle">Gejala</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $item)
                                                <tr>
                                                    <td>
                                                        <span class="d-none">{{ $item->gejala }}</span>
                                                        <div class="input-group">
                                                            <input type="text" id="editGejala"
                                                                class="form-control value-black" value="{{ $item->gejala }}"
                                                                onblur="editGejala(value,{{ $item->id }})">
                                                            <div class="input-group-append">
                                                                <button class="btn btn-danger"
                                                                    onclick="deleteGejala({{ $item->id }})">
                                                                    <i class="fas fa-minus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
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
