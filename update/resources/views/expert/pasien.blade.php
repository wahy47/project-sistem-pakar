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
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">hallo! Admin</h1>

                </div>

                <div class="row">

                    <!-- Area Chart -->
                    <div class="col-12">
                        <!-- Card Body -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Pasien</h6>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th class="align-middle" style="width: 40%">Nama Pasien</th>
                                                <th class="align-middle" style="width: 20%">Nomor Hp</th>
                                                <th class="align-middle" style="width: 30%">Alamat</th>
                                                <th class="text-center">Hasil</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($pasien as $item)
                                                @php
                                                    $status = false;
                                                @endphp
                                                @foreach ($item->status as $x)
                                                    @php
                                                        $status = true;
                                                    @endphp
                                                @endforeach
                                                @if ($status == true)
                                                    <tr>
                                                        <td class="text-dark" style="font-size: 18px">
                                                            {{ $item->nama }}
                                                        </td>
                                                        <td class="text-dark" style="font-size: 18px">{{ $item->nope }}
                                                        </td>
                                                        <td class="text-dark" style="font-size: 18px">{{ $item->alamat }}
                                                        </td>
                                                        <td class="text-center"><a href="/detail-pasien/{{ $item->id }}"
                                                                class="btn btn-sm btn-warning"><i
                                                                    class="fas fa-eye"></i></a>
                                                        </td>
                                                    </tr>
                                                @endif
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
