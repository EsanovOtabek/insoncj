<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm p-0 main-header-nav" id="nav-bar">
    <div class="container">
        <a href="{{ route('index') }}" class="brand d-flex align-items-center mb-0 text-decoration-none me-4">
            <img src="{{ asset('assets/img/' . __('home.logo')) }}" class="img-fluid" alt="InsonCJ.eo" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto gap-2 mb-2 mb-lg-0">
                <li class="nav-item mx-2">
                    <a class="nav-link px-0 py-4 active" href="{{ route('index') }}">{{ __('home.home') }}</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link px-0 py-4" href="{{ route('about') }}">{{ __('home.about') }}</a>
                </li>

                <li class="nav-item mx-2">
                    <a class="nav-link px-0 py-4" href="{{ route('news') }}">{{ __('home.ads') }}</a>
                </li>

                <li class="nav-item mx-2">
                    <a class="nav-link px-0 py-4" href="{{ route('archive') }}">{{ __('home.archive') }}</a>
                </li>

                <li class="nav-item mx-2">
                    <a class="nav-link px-0 py-4" href="{{ route('experts') }}">{{ __('home.experts') }}</a>
                </li>

                <li class="nav-item mx-2 dropdown">
                        <a class="nav-link dropdown-toggle px-0 py-4" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            @if(app()->getLocale() == 'uz')
                                <strong>O'zbek</strong>
                            @elseif(app()->getLocale() == 'en')
                                <strong>English</strong>
                            @elseif(app()->getLocale() == 'ru')
                                <strong>Русский</strong>
                            @endif

                        </a>
                    <ul class="dropdown-menu m-0 border-0 shadow-sm p-2">
                        @if(app()->getLocale() == 'uz')
                            <li><a class="dropdown-item px-3 py-2 rounded" href="{{ route('language','en') }}"><strong> English </strong></a></li>
                            <li><a class="dropdown-item px-3 py-2 rounded" href="{{ route('language','ru') }}"><strong> Русский </strong></a></li>
                        @elseif(app()->getLocale() == 'en')
                            <li><a class="dropdown-item px-3 py-2 rounded" href="{{ route('language','uz') }}"><strong> O'zbek </strong></a></li>
                            <li><a class="dropdown-item px-3 py-2 rounded" href="{{ route('language','ru') }}"><strong> Русский </strong></a></li>
                        @elseif(app()->getLocale() == 'ru')
                            <li><a class="dropdown-item px-3 py-2 rounded" href="{{ route('language','en') }}"><strong> English </strong></a></li>
                            <li><a class="dropdown-item px-3 py-2 rounded" href="{{ route('language','uz') }}"><strong> O'zbek </strong></a></li>
                        @endif
                    </ul>
                </li>


            </ul>
            <div class="d-flex gap-4 align-items-center">
                @if(auth()->check())
                    @if(auth()->user()->role == 'user')
                        <a href="{{ route('profile.index') }}" type="button" class="btn btn-primary btn-sm fw-bold">{{ __('home.profile') }}</a>
                    @endif
                @else
                    <a href="{{ route('login') }}" class="text-decoration-none text-black fw-bold">{{ __('home.login') }}</a>
                    <a href="{{ route('register') }}" type="button" class="btn btn-primary btn-sm fw-bold">{{ __('home.register') }}</a>
                @endif
            </div>
        </div>
    </div>
</nav>
