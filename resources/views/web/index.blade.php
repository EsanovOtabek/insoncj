@extends('base.web')

@section('title', __('home.home'))
@section('description', __('home.journal_name'))
@section('og_image', '')

@section('body')
    <!-- Banner Search -->
    @include('web.web_banner')

    <!-- Sikshaa course 1st row -->
    @include('web.web_docs')
    <!-- Sikshaa course 1st row -->
    @include('web.web_journals')
    <!-- Sikshaa course 1st row -->
    @include('web.web_requirements')
    <!-- sections -->
    @include('web.web_ads')
    <!-- counter -->
    @include('web.web_counter')

@endsection

@push('page_js')
    <script>
        $('#more_btn').click(function (){

            $('#more_btn').addClass('d-none');
            $('#less_btn').removeClass('d-none');
            $('.reqd-none').removeClass('d-none');
        });

        $('#less_btn').click(function (){

            $('#more_btn').removeClass('d-none');
            $('#less_btn').addClass('d-none');
            $('.reqd-none').addClass('d-none');
        });
    </script>

@endpush
