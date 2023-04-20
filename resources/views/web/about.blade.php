@extends('base.web')

@section('title', 'Jurnal haqida')
@section('description', "Inson kapitali va ijtimoiy rivojlanish ilmiy jurnali")
@section('og_image', '')

@section('body')
    <!-- Content -->
    <div class="py-3">
        <div class="container">
            <nav>
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item">
                        <a href="{{ route('index') }}">
                            <i class="bi bi-house"></i> Bosh sahida
                        </a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Jurnal haqida</li>
                </ol>
            </nav>
        </div>
    </div>
    <hr class="m-0">
    <!-- Head -->
    <header class="py-5">
        <div class="container px-4">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="text-center my-5">
                        <h1 class="display-4 fw-bold text-body mb-3">Jurnalimiz haqida</h1>
                        <p class="lead fw-normal text-dark mb-4">
                            «Inson kapitali va ijtimoiy rivojlanish», «Human capital and social development», «Человеческий капитал и социальное развития»  jurnalining muassisi – Samarqand Davlat universiteti hisoblanadi
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- About section one-->
    <section class="py-5 bg-white" id="scroll-target">
        <div class="container my-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-4"><img class="img-fluid w-75 rounded-3 mb-5 mb-lg-0" src="{{ asset('images/site/journal.png') }}" alt="..." /></div>
                <div class="col-lg-8">
                    <h2 class="fw-bold mb-3 text-body">Jurnalning maqsadlari</h2>
                    <p class="lead fw-normal text-muted mb-0">
                        Iqtisodiyot, ijtimoiy va gumanitar fanlar sohasida  bajarilayotgan ilmiy-tadqiqot ishlarining natijalarini chop etish, raqobatbardosh  ishlanmalar va innovatsion yechimlar xususida ilmiy salohiyatli mutaxassislarniig tajribalarini  ommaviylashtirish, fundamental va innovatsion ilmiy jarayonlar xabarlari, monografiyalarga taqrizlar, xorijiy  mamlakatlar olimlari bilan aloqalarni keng yoritishdan iborat;
                        <br>
                        Ilm-fan sohasida olib borilayotgan tub islohotlarning mohiyatini tushuntirish;
                        <br>
                        O‘zbekiston Respublikasida va jahonda yuz berayotgan ilmiy, nazariy-uslubiy  yangiliklarni  yoritish;
                        <br>
                        Olimlar kengashining o‘z oldiga qo‘ygan vazifalari va tahririyat nizomi asosida faoliyat ko‘rsatadi. Ilmiy-nazariy, fanlar yo‘nalishida olib borilayotgan dolzarb ilmiy izlanishlar salohiyatini yana-da yuksaltirish, ilm-fan yutuqlarini keng targ‘ib qilish, yangi texnologiyalarni joriy etish,  olimlarning ilmiy faoliyatiga har tomonlama ko‘maklashish uchun imkoniyat yaratishlar jurnalning bosh maqsadidir.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <hr class="m-0">
    <!-- About section two-->
    <section class="py-5 bg-light">
        <div class="container my-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-4 order-first order-lg-last"><img class="img-fluid rounded-3 mb-5 mb-lg-0" src="{{ asset('images/site/guvohnoma.jpg') }}" alt="..." /></div>
                <div class="col-lg-8">
                    <h2 class="fw-bold mb-3 text-body">Jurnalning vazifalari</h2>
                    <p class="lead fw-normal text-muted mb-0">
                        O‘zbekiston Respublikasida fan va texnologiyalar modernizatsiyasi borasida amalga oshirilayotgan tub islohotlar, milliy istiqlol g‘oyasi targ‘iboti va ilmiy-maʼrifiy ishlar samaradorligini oshirish, iqtidorli va salohiyatli yoshlarni izlab topish va ularni  ilmiy-tadqiqot ishlariga yo‘naltirish orqali jamiyatimizda sohaning yetuk professional kadrlarini tayyorlashga erishish;
                        <br>
                        Ilmiy tahlil etish, uning natijalarini amaliyotga joriy etish bo‘yicha Mustaqil Davlatlar Hamdo‘stligi va boshqa davlatlar mutaxassislari ishlarini umumlashtirish va hamkorlikni yo‘lga qo‘yish;
                        <br>
                        Talabalar va xodimlarni ilm-fanning so‘nggi maʼlumotlaridan voqif etish maqsadida «Inson kapitali va ijtimoiy rivojlanish» sahifalarida mamlakatimizda olib borayotgan innovatsion ishlanmalar, ixtirolar, patentlar haqida maʼlumotlar berib borishni taʼminlash;
                        <br>
                        Iqtidorli talabalarning ilmiy ish yuzasidan malakasini oshirish borasida mamlakatda yaratilgan imkoniyatlar, shart-sharoitlar haqida maʼlumotlar berib borish;
                        <br>
                        Mintaqada yaratilgan yangi innovatsiyalarni ommalashtirishga va ishlab chiqarishga joriy etishga ko‘maklashishdan iborat bo‘ladi.

                    </p>
                </div>
            </div>
        </div>
    </section>

    @include('web.web_requirements')

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


