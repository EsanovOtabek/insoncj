<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{ asset('assets/img/icon.png') }}">
    <title> @yield('title') </title>
    <meta name="author" content="InsonCJ">
    <meta name="description" content="@yield('description')" />
    <meta property="og:image" content="@yield('og_image')">
    <meta name="keywords" content="Jurnal, inson, kapitali, inson kapitali, ilmiy jurnal, iqtisodiy jurnal, ijtimoiy rivojlanish, ilmiy maqola, maqola, maqola yuborish" />
    <!-- Bootstrap CSS -->
    <!-- Jquery Js -->
    <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>

    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet"/>
    <!-- Custom Css -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <!-- slick Slider -->
    <link href="{{ asset('assets/vendor/slick/slick/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/slick/slick/slick-theme.css') }}" rel="stylesheet">
    <!-- Icofont -->
    <link href="{{ asset('assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('adassets/plugins/toastr/toastr.min.css') }}">
    <script src="{{ asset('adassets/plugins/toastr/toastr.min.js') }}"></script>


    @stack('page_css')

    @if ($errors->any())
        <script>
            @foreach ($errors->all() as $error)
            toastr.error('{{ $error }}');
            @endforeach
        </script>
    @endif


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
<body class="bg-light">
<!-- navbar -->

@include('web.web_header')


@yield('body')

<!-- Footer -->
@include('web.web_footer')

</body>

<!-- Bootstrap Bundle Js -->
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- Slick Js -->
<script src="{{ asset('assets/vendor/slick/slick/slick.min.js') }}"></script>
<!-- Custom Js -->
<script src="{{ asset('assets/js/custom.js')}}"></script>
@if(Session::has('success_msg'))
    <script>toastr.success("{{session('success_msg')}}")</script>
@endif
@if(Session::has('error_msg'))
    <script>toastr.error("{{session('error_msg')}}")</script>
@endif

<script>
    window.replainSettings = { id: '91cd1b36-9657-4834-934b-62b3d97bcacc' };
    (function(u){var s=document.createElement('script');s.async=true;s.src=u;
        var x=document.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);
    })('https://widget.replain.cc/dist/client.js');
</script>

@stack('page_js')

</html>
