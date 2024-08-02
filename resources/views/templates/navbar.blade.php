<nav class="custom-navbar navbar fixed-top navbar-expand-md navbar-dark navbar-default" style="z-index: 10" arial-label="navigation bar">

    <div class="container">
        <a class="navbar-brand" href="/"><img src="/assets/images/Logo-Lets-Help-2-Gether-1.png"
                alt="Lets Help Together"></a>

        <button class="navbar-toggler mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbars"
            aria-controls="navbars" aria-expanded="false" aria-label="Toggle navigation">
            <h2 class="fa-solid fa-bars fw-bold text-black"></h2>
        </button>

        <div class="collapse navbar-collapse" id="navbars">
            <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
                <li class="nav-item {{ ($title == "Beranda") ? 'active' : '' }}">
                    <a class="nav-link fw-bold text-black" href="/">Beranda</a>
                </li>
                <li class="nav-item {{ ($title == "Edukasi") ? 'active' : '' }}"><a class="nav-link fw-bold text-black"
                        href="edukasi">Edukasi</a></li>
                <li class="nav-item {{ ($title == "Tes") ? 'active' : '' }}"><a class="nav-link fw-bold text-black"
                        href="#">Tes</a></li>
            </ul>

            <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
                <li><a class="nav-link fw-bold px-3 text-black" href="#">Daftar</a></li>
                <li><a class="nav-link btn btn-primary rounded fw-bold px-3 text-white" href="#">Masuk</a></li>
            </ul>
        </div>
    </div>

</nav>
