@extends('base.web')

@section('title', __('home.profile'))
@section('description',  __('home.journal_name') )
@section('og_image', '')

@section('body')
    <!-- Content -->
    <div class="bg-primary bg-gradient">
        <!-- Login -->
        <div class="container py-5 login">
            <!-- Login -->
            <div id="login">
                <div class="m-auto bg-white shadow-sm p-5 rounded-3 text-center col-md-4 mx-auto">
                    <h3 class="fw-bold text-black mb-2">{{  __('home.profile') }}</h3>
                    <form action="" class="text-start pt-4" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label small text-muted col-12">{{ __('home.email') }} <small class="text-danger">*</small></label>
                            <input type="email" name="email" class="form-control h-100" id="email" placeholder="Email">
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label small text-muted">{{ __('home.password') }} <small class="text-danger">*</small></label>
                            <input type="password" name="password" class="form-control" id="password" placeholder="********">
                        </div>

                        <button type="submit" class="btn btn-dark fw-bold fs-7 rounded-3 shadow-sm w-100 border-0 px-4 py-3 text-uppercase">{{ __('home.login') }}</button>
                    </form>

                    <p class="text-muted mb-0">{{ __('home.ask_register') }} <a href="{{ route('register') }}" class="text-mdinfo">{{ __('home.register') }}</a></p>
                </div>
                <p class="mb-0 text-center small text-white my-5">{{ __('home.login_problem') }} <a href="tel:+998932360433" class="text-decoration-underline text-white">{{ __('home.contact') }}</a></p>
            </div>
        </div>
    </div>



@endsection
