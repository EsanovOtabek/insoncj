@extends('base.web')

@section('title', __('home.register'))
@section('description', __('home.journal_name'))
@section('og_image', '')

@push('page_js')
    <script src="https://cdn.jsdelivr.net/npm/jquery.maskedinput@1.4.1/src/jquery.maskedinput.min.js" type="text/javascript"></script>
    <script>
        $(function() {
            $.mask.definitions['9'] = false;
            $.mask.definitions['0'] = "[0-9]";
            $("#phone").mask("00-000-00-00");
        });
    </script>
@endpush

@section('body')
    <!-- Content -->
    <div class="bg-primary bg-gradient">
        <!-- Login -->
        <div class="container py-5 login">
            <!-- Login -->
            <div id="login">
                <div class="m-auto bg-white shadow-sm p-5 rounded-3 text-center col-md-4 mx-auto">
                    <h3 class="fw-bold text-black mb-2">{{ __('home.register') }}</h3>
                    <form action="{{ route('register') }}"  method="POST" class="text-start pt-4">
                        @csrf
                        <div class="mb-3">
                            <label for="fish" class="form-label small text-muted">{{ __('home.fish') }} <small class="text-danger">*</small></label>
                            <input type="text" name="fish" class="form-control" id="fio" placeholder="F.I.SH">
                        </div>
                        <div class="mb-3 row">
                            <label for="fish" class="form-label small text-muted col-12">{{ __('home.phone') }} <small class="text-danger">*</small></label>
                            <div class="input-group-append col-4 m-0">
                                <div class="input-group-prepend">
                                    <span class="input-group-text ps-md-4 ps-sm-2"><b>+998</b></span>
                                </div>
                            </div>
                            <div class="col-8 p-0"  style="height: 38px; margin-left: -10px">
                                <input type="tel" name="phone" class="form-control h-100" id="phone" placeholder="XX-XXX-XX-XX">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label small text-muted">Parol <small class="text-danger">*</small></label>
                            <input type="password" name="password" class="form-control" id="password" placeholder="********">
                        </div>

                        <button type="submit" class="btn btn-dark fw-bold fs-7 rounded-3 shadow-sm w-100 border-0 px-4 py-3 text-uppercase">{{ __('home.register') }}</button>
                    </form>

                    <p class="text-muted mb-0">{{ __('home.ask_login') }} <a href="{{ route('login') }}" class="text-mdinfo">{{ __('home.login') }}</a></p>
                </div>
                <p class="mb-0 text-center small text-white my-5">{{ __('home.login_problem') }} <a href="tel:+998932360433" class="text-decoration-underline text-white">{{ __('home.contact') }}</a></p>
            </div>
        </div>
    </div>



@endsection
