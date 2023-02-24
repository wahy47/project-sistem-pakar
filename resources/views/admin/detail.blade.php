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
                    <h1 class="h3 mb-0 text-gray-800">Penyakit</h1>
                </div>

                <div class="row">

                    <!-- Area Chart -->
                    <div class="col-12">
                        <!-- Card Body -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                @if ($check == 'new')
                                    <div class="input-group mb-2">
                                        <input type="text" class="form-control value-black" id="submitPenyakit"
                                            placeholder="Ketikkan Nama Penyakit..." onblur="newPenyakit(value)">
                                        <div class="input-group-append">
                                            <button class="btn btn-success" type="button">
                                                <span>Submit</span>
                                            </button>
                                        </div>
                                    </div>
                                @elseif($check == 'edit')
                                    <input type="text" class="form-control value-black" value="{{ $penyakit->penyakit }}"
                                        onblur="editNamaPenyakit(value, {{ $penyakit->id }})">
                                @endif
                            </div>
                            <div class="card-body">
                                @if ($check == 'new')
                                    <div class="row">
                                        <div class="col-lg-8 col-md-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Tambah Gejala"
                                                    list="list-gejala" id="inputGejala" name="inputGejala" disabled>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-6 col-sm-6">
                                            <input type="text" class="form-control" name="bobot" placeholder="Bobot"
                                                disabled>
                                        </div>
                                        <div class="col-lg-2 col-md-6 col-sm-6">
                                            <button class="btn btn-primary" type="submit" disabled>Submit</button>
                                        </div>
                                    </div>
                                @elseif($check == 'edit')
                                    <form action="/tambah-gejala/{{ $penyakit->id }}" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-8 col-md-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control list-gejala"
                                                        placeholder="Tambah Gejala" list="list-gejala" id="inputGejala"
                                                        name="inputGejala">
                                                    <datalist id="list-gejala">
                                                        @if ($gejala != null)
                                                            @foreach ($gejala as $item)
                                                                <option value="{{ $item->id }}">{{ $item->gejala }}
                                                                </option>
                                                            @endforeach
                                                        @endif
                                                    </datalist>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-6 col-sm-6">
                                                <input type="text" class="form-control" name="bobot"
                                                    placeholder="Bobot">
                                            </div>
                                            <div class="col-lg-2 col-md-6 col-sm-6">
                                                <button class="btn btn-primary" type="submit">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                @endif
                                <script>
                                    document.addEventListener('DOMContentLoaded', e => {
                                        $('#inputGejala').autocomplete();
                                    }, false);
                                </script>
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th class="align-middle" style="width: 70%">Gejala</th>
                                            <th class="text-center" style="width: 20%">Bobot</th>
                                            <th class="text-center">Nilai</th>
                                            <th class="text-center">Hapus</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($bobot as $item)
                                            <tr>
                                                <td class="text-dark" style="font-size: 18px">
                                                    <span class="d-none">{{ $item->gejala->gejala }}</span>
                                                    {{ $item->gejala->gejala }}
                                                </td>
                                                <td class="text-center"> <input type="text"
                                                        class="form-control value-black" value="{{ $item->bobot }}"
                                                        onblur="saveBobot(value, {{ $item->id }})">
                                                </td>
                                                <td>
                                                    {{ $item->nilai }}
                                                </td>
                                                <td class="text-center"><button class="btn btn-sm btn-danger"
                                                        onclick="deleteExpert({{ $penyakit->id }},'bobot',{{ $item->id }})"><i
                                                            class="fas fa-trash"></i></button>
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
