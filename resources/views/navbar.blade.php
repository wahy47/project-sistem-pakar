<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

        <h1 class="logo me-auto"><a href="/">SIMI <i class="far fa-smile-wink"></i></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a class="nav-link scrollto" href="{{ request()->is('/') ? '#hero' : '/' }}">Home</a></li>
                <li><a class="nav-link scrollto"
                        href="{{ request()->is('/') ? '#services' : '/#services' }}">Jenis-Jenis</a></li>
                <li><a class="nav-link scrollto" href="{{ request()->is('/') ? '#about' : '/#about' }}">Penanganan</a>
                </li>
                <li><a class="nav-link scrollto" href="{{ request()->is('/') ? '#faq' : '/#faq' }}">FAQ</a></li>
                @if (auth()->user())
                    <li><a class="nav-link scrollto" href="/logout">Log Out <i class="fas fa-sign-out-alt"></i></a></li>
                @endif
                @if (!auth()->user())
                    <li><a class="nav-link scrollto" href="/login">Login <i class="fas fa-sign-in-alt"></i></a></li>
                @endif
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

        @if (request()->is('/'))
            <a href="/tes" class="appointment-btn scrollto"><span class="d-none d-md-inline">Tes Mental Illness</a>
        @endif
        @if (auth()->user())
            @if (auth()->user()->role == 'admin')
                <a href="/pasien" class="appointment-btn scrollto"><span class="d-none d-md-inline">Admin</a>
            @endif
            @if (auth()->user()->role == 'expert')
                <a href="/penyakit" class="appointment-btn scrollto"><span class="d-none d-md-inline">Admin</a>
            @endif
        @endif


    </div>
</header>
{{-- <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

        <h1 class="logo me-auto"><a href="index.html">SIMI <i class="far fa-smile-wink"></i></a></h1>
        

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a class="nav-link scrollto" href="{{ request()->is('/') ? '#hero' : '/' }}">Home</a></li>
                <li><a class="nav-link scrollto"
                        href="{{ request()->is('/') ? '#services' : '/#services' }}">Jenis-Jenis</a></li>
                <li><a class="nav-link scrollto" href="{{ request()->is('/') ? '#about' : '/#about' }}">Penanganan</a>
                </li>
                <li><a class="nav-link scrollto" href="{{ request()->is('/') ? '#faq' : '/#faq' }}">FAQ</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>

        <a href="/tes" class="appointment-btn scrollto"><span class="d-none d-md-inline">Tes Kesehatan
                Mental</a>

    </div>
</header> --}}
