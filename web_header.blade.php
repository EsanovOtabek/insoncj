<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm p-0 main-header-nav" id="nav-bar">
    <div class="container">
        <a href="{{ route('index') }}" class="brand d-flex align-items-center mb-0 text-decoration-none me-4">
            <img src="{{ asset('assets/img/logo.png') }}" class="img-fluid" alt="InsonCJ.eo" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto gap-2 mb-2 mb-lg-0">
                <li class="nav-item mx-2">
                    <a class="nav-link px-0 py-4 active" href="{{ route('index') }}">Bosh sahifa</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link px-0 py-4" href="{{ route('about') }}">Jurnal haqida</a>
                </li>

                <li class="nav-item mx-2">
                    <a class="nav-link px-0 py-4" href="{{ route('news') }}">E'lonlar</a>
                </li>

                <li class="nav-item mx-2">
                    <a class="nav-link px-0 py-4" href="{{ route('archive') }}">Arxiv</a>
                </li>

                <li class="nav-item mx-2">
                    <a class="nav-link px-0 py-4" href="{{ route('experts') }}">Tahririyat a'zolari</a>
                </li>

                <li class="nav-item mx-2">
                    <a class="nav-link px-0 py-4" href="{{ route('contact') }}">Bog'lanish</a>
                </li>
            </ul>
            <div class="d-flex gap-4 align-items-center">
                @if(auth()->check())
                    @if(auth()->user()->role == 'user')
                        <a href="{{ route('profile.index') }}" type="button" class="btn btn-primary btn-sm fw-bold">Tizimga kirish</a>
                    @endif
                @else
                    <a href="{{ route('login') }}" class="text-decoration-none text-black fw-bold">Kirish</a>
                    <a href="{{ route('register') }}" type="button" class="btn btn-primary btn-sm fw-bold">Ro'yxatdan o'tish</a>
                @endif
            </div>
        </div>
    </div>
</nav>
