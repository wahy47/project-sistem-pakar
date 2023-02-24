@extends('secmain')
@section('navbar')
    @include('navbar')
@endsection
@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center"
        style="background-image: url('images/bg/tes-bg.png'); margin-bottom: -180px">
        <div class="container">
            <h1 class="">Always Mindfull</h1>
            <hr class="col-lg-6 p-0 m-0">
            <h5 class="col-lg-6">Jika kesehatan mental terganggu,
                maka
                timbul gangguan mental
                atau
                penyakit mental. Gangguan mental dapat mengubah cara seseorang dalam
                menangani
                stres, berhubungan dengan orang lain, membuat pilihan, dan memicu hasrat
                untuk
                menyakiti diri sendiri</h5>
            <a href="#mulai" class="btn-get-started scrollto">Lakukan Tes Mental Health</a>
        </div>
    </section><!-- End Hero -->
    <section id="why-us" class="why-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 d-flex align-items-stretch">
                    <div class="content">
                        <h3>Mengapa Menggunakan Website Kami</h3>
                        <p>
                            Website kami didukung oleh pakar pakar penyakit mental, dimana bobot gejala diberi langsung oleh
                            pakar penyakit mental dan dihitung menggunakan probabilitas bayesian network yang banyak
                            digunakan untuk melakukan tes kemungkinan penyakit
                        </p>
                    </div>
                </div>
                <div class="col-lg-8 d-flex align-items-stretch">
                    <div class="icon-boxes d-flex flex-column justify-content-center">
                        <div class="row">
                            <div class="col-xl-4 d-flex align-items-stretch">
                                <div class="icon-box mt-4 mt-xl-0">
                                    <lord-icon src="https://cdn.lordicon.com/kxoxiwrf.json" trigger="loop" delay="2000"
                                        style="width:50px;height:50px">
                                    </lord-icon>
                                    <h4>Mudah Digunakan</h4>
                                    <p>Sangat mudah untuk diakses dimana dan kapan saja
                                    </p>
                                </div>
                            </div>
                            <div class="col-xl-4 d-flex align-items-stretch">
                                <div class="icon-box mt-4 mt-xl-0">
                                    <lord-icon src="https://cdn.lordicon.com/uutnmngi.json" trigger="loop" delay="2000"
                                        style="width:50px;height:50px">
                                    </lord-icon>
                                    <h4>Tidak Memakan Waktu Lama</h4>
                                    <p>Hanya 15 menit untuk melakukan
                                    </p>
                                </div>
                            </div>
                            <div class="col-xl-4 d-flex align-items-stretch">
                                <div class="icon-box mt-4 mt-xl-0">
                                    <lord-icon src="https://cdn.lordicon.com/xqgancly.json" trigger="loop" delay="2000"
                                        style="width:50px;height:50px">
                                    </lord-icon>
                                    <h4>Akurat</h4>
                                    <p>Menggunakan metode probabilitas bayesian network menghitung sebab akibat dari tiap
                                        gejala</p>
                                </div>
                            </div>
                        </div>
                    </div><!-- End .content-->
                </div>
            </div>
        </div>
    </section>
    <div id="mulai" class="container">
        <div class="row">
            <div class="mb-3">
                <div class="card" style="box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;">
                    <div class="card-body">
                        <form action="/tes-submit" id="tes" method="POST">
                            @csrf
                            <h3>Tes Kesehatan Mental</h3>
                            {{-- <div class="row">
                                <div class="col-lg-6">
                                    <label class="form-label">Nama</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" name="nama" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <label class="form-label">Umur</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" name="umur" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <label class="form-label">Alamat</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" name="alamat" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <label class="form-label">Nomor HP</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" name="nope" required>
                                    </div>
                                </div>
                            </div> --}}
                            <h5>Pilihlah gejala yang menggambarkan diri anda</h5>

                            @livewire('simi')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('footer')
    @include('footer')
@endsection
