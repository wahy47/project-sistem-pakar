@extends('main')
@section('navbar')
    @include('navbar')
@endsection
@section('content')
    <section id="hero-login" class="d-flex align-items-center" style="background-image: url('images/bg/bg-login.png')">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-7">
                    <div class="card shadow-sm bg-body rounded">
                        <div class="card-body">
                            <h4 class="card-title text-center">SIMI - Login</h4>
                            <hr>
                            @if (Session()->has('loginerror'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ Session('loginerror') }}
                                </div>
                            @endif
                            <form action="/login" method="POST">
                                @csrf
                                <div class="input-group mb-3">
                                    <div class="form-floating">
                                        <input type="text" class="form-control value-black" id="nope" name="nope"
                                            placeholder="a">
                                        <label for="nope">Email atau No. HP</label>
                                    </div>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="form-floating">
                                        <input type="password" class="form-control value-black" id="pass"
                                            name="pass" placeholder="a">
                                        <label for="pass">Password</label>

                                    </div>
                                    <button class="btn btn-outline-secondary" type="button" onclick="btnSee()"><i
                                            class="fas fa-eye"></i></button>
                                </div>
                                <hr>
                                <div class="row justify-content-center">
                                    <div class="col-6 text-center">
                                        <a class="btn btn-primary" href="/regist">Register</a>
                                    </div>
                                    <div class="col-6 text-center">
                                        <button class="btn btn-success">Login</button>
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
