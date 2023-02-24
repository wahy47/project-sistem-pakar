@extends('secmain')
@section('navbar')
    @include('navbar')
@endsection
@section('content')
    <section id="hero-regist" class="d-flex" style="background-image: url('images/bg/bg-register.png')">
        <div class="container">
            <div class="row justify-content-end" style="margin: auto; margin-top: 70px;">
                <div class="col-lg-6 col-md-7 m-0 p-0">
                    <div class="card shadow-sm bg-body rounded mb-5">
                        <div class="card-body">
                            <h4 class="card-title text-center">SIMI - Registrasi</h4>
                            <hr>
                            @if (Session()->has('exist'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ Session('exist') }}
                                </div>
                            @endif
                            <form action="/daftar-baru" method="POST">
                                @csrf
                                <div class="input-group mb-3">
                                    <div class="form-floating">
                                        <input type="number"
                                            class="form-control value-black @error('nope') is-invalid @enderror"
                                            name="nope" placeholder="a" value="{{ old('nope') }}" required>
                                        <label for="nope">No. HP</label>
                                        @error('nope')
                                            <div class="invalid-feedback">
                                                Periksa Kembali Nomor Hp Anda.
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="form-floating">
                                        <input type="text"
                                            class="form-control value-black @error('nama') is-invalid @enderror"
                                            name="nama" placeholder="a" value="{{ old('nama') }}" required>
                                        <label for="nama">Nama</label>
                                        @error('nama')
                                            <div class="invalid-feedback">
                                                Periksa Kembali Nama Anda.
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="form-floating">
                                        <input type="number"
                                            class="form-control value-black @error('usia') is-invalid @enderror"
                                            name="usia" placeholder="a" value="{{ old('usia') }}" required>
                                        <label for="usia">Usia</label>
                                        @error('usia')
                                            <div class="invalid-feedback">
                                                Periksa Kembali Usia Anda.
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="input-group mb-3">
                                    <select class="form-select form-select-md" aria-label="Default select example"
                                        name="usiaPernikahan">
                                        <option selected disabled>Usia Pernikahan</option>
                                        <option value="Kurang 1 tahun">Kurang 1 tahun</option>
                                        <option value="1-2 tahun">1-2 tahun</option>
                                        <option value="3-4 tahun">3-4 tahun</option>
                                        <option value="Lebih Dari 5 tahun">Lebih Dari 5 tahun</option>
                                    </select>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="form-floating">
                                        <input type="text"
                                            class="form-control value-black @error('jenisKelamin') is-invalid @enderror"
                                            name="jenisKelamin" placeholder="a" value="Perempuan" required>
                                        <label>Jenis Kelamin</label>
                                        @error('jenisKelamin')
                                            <div class="invalid-feedback">
                                                Hanya Boleh Untuk Perempuan
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="form-floating">
                                        <input type="text"
                                            class="form-control value-black @error('alamat') is-invalid @enderror"
                                            name="alamat" placeholder="a" value="{{ old('alamat') }}" required>
                                        <label>Alamat</label>
                                        @error('alamat')
                                            <div class="invalid-feedback">
                                                Periksa Kembali Alamat Anda.
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="input-group">
                                    <div class="form-floating">
                                        <input type="password"
                                            class="form-control value-black @error('pass') is-invalid @enderror"
                                            name="pass" id="pass" placeholder="a" required>
                                        <label for="pass">Password</label>

                                    </div>
                                    <button class="btn btn-outline-secondary" type="button" onclick="btnSee()"><i
                                            class="fas fa-eye"></i></button>
                                </div>
                                <div class="mb-3">
                                    <span class="align-middle"><i class="fas fa-star-of-life align-middle"
                                            style="font-size: 8px; color: red;"></i>
                                        Password Minimal 8 Karakter</span>
                                </div>
                                <hr>
                                <div class="row justify-content-center">
                                    <div class="col-6 text-center">
                                        <button type="submit" class="btn btn-primary">Register</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
