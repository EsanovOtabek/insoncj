@extends('base.admin')

@section('title', 'Bosh sahifa')

@section('content_name', 'Bosh sahifa')

@section('main_content')

    <div class="card card-solid ">

        <div class="card-header text-center">
            <h3>Mualliflar uchun talablar</h3>
        </div>

        <div class="card-body pb-0 row">

            <div class="col-md-6 bg-light p-3">
                <h3 class="text-primary"><i class="fa fa-check-circle"></i> Asosiy talablar</h3>
                <p class="text-dark text-justify">Muallif (yoki hammualliflar) tomonidan taqdim etilayotgan ilmiy maqola mavzusi “Inson kapitali va ijtimoiy rivojlanish jurnali. ” ilmiy jurnalining ruknlariga mos kelishi shart.
                    Maqola xalqaro andozalar talabi doirasidagi bandlarga ega bo’lishi lozim: - Maqola mavzusi (Title)
                    Maqola mavzusi qisqa ko’rinishga ega bo’lib, maqolaning tadqiqot yo’nalishini aniq ifodalashi lozim. Maqola mavzusi o’zbek, rus hamda ingliz tillarida taqdim etilishi shart.
                </p>
            </div>

            <div class="col-md-6 bg-light p-3">
                <h3 class="text-primary"><i class="fa fa-check-circle"></i> Maqola muallifi to’g’risida ma’lumot</h3>
                <p class="text-dark text-justify">
                    Ushbu qismga muallifning ismi-sharifi (otasining ismi bilan), ish joyi va lavozimi, ilmiy darajasi va unvoni, elektron pochta manzili,  telefon raqam kiritiladi.
                </p>
            </div>


            <div class="col-md-6 bg-light p-3">
                <h3 class="text-primary">
                    <i class="fa fa-check-circle"></i>
                    Maqola annotasiyasi
                </h3>
                <p class="text-dark text-justify">
                    Maqolalarning qisqacha annotasiyasi 10-12 qatordan oshmagan, o’zbek, rus va ingliz tillarida keltiriladi. Annotasiyada tadqiqot muammosi, uning dolzarbligi, tadqiqot muammosini ochib berish metodologiyasi, tadqiqot natijalari, maqolaning mazmunidan kelib chiqqib muallifning ilmiy va amaliy hissasini qisqacha bayoni keltiriladi.
                </p>
            </div>

            <div class="col-md-6 bg-light p-3">
                <h3 class="text-primary">
                    <i class="fa fa-check-circle"></i>
                    Kalit so’zlar
                </h3>
                <p class="text-dark text-justify">
                    Maqola mazmuni va maqsadini eng qisqa mazmunda ochib beruvchi kalit so’zlar hisoblanadi. google.com, scholar.google.com elektron qidiruv tizimida maqolani tez topish uchun kalit so’zlarning har biri asosiy matn tarkibida o’rtacha 6-8 marta takrorlanishi tavsiya qilinadi.
                </p>
            </div>


            <div class="col-md-6 bg-light p-3">
                <h3 class="text-primary">
                    <i class="fa fa-check-circle"></i>
                    Kirish
                </h3>
                <p class="text-dark text-justify">
                    Kirish qismida tadqiqot muammosi, uning maqsad va vazifalari yoritiladi. Kirish qismida tadqiqotning dolzarbligini, ilmiy ahamiyati yoritib berilishi lozim.
                </p>
            </div>


            <div class="col-md-6 bg-light p-3">
                <h3 class="text-primary">
                    <i class="fa fa-check-circle"></i>
                    Mavzuga oid adabiyotlarning sharhi
                </h3>
                <p class="text-dark text-justify">
                    Mavzuga doir adabiyotlar tahlili tadqiqot olib borilayotgan muammo yuzasidan muallifning bilim va tasavvurga ega ekanini namoyon etuvchi band hisoblanadi. Adabiyotlarning tahlili mazkur mavzu doirasidagi bilimlarni oshiradi va tadqiqot yuzasidan paydo bo’ladigan savollarni yanada oydinlashtirishga ko’maklashadi. Ma’lumki, har qanday tadqiqot ishi ushbu sohada yaratilgan avvalgi bilimlar negiziga yaratiladi. Adabiyotlar sharhi, sohadagi jurnal maqolalari va boshqa turdagi ma’lumot manbalari asosida amalga oshadi
                </p>
            </div>


            <div class="col-md-6 bg-light p-3">
                <h3 class="text-primary">
                    <i class="fa fa-check-circle"></i>
                    Tadqiqot metodologiyasi
                </h3>
                <p class="text-dark text-justify">
                    Tadqiqotning eng muhim qismi hisoblanib, o’tkazilayotgan tadqiqotning umumiy xaritasi, tadqiqot yo’nalishi va natijaga olib boruvchi hisoblanadi. Tadqiqot yo’nalishini belgilash, tadqiqot muammosining yechimiga qaraatilgan rejasini tuzish, tadqiqot uchun zaruriy axborotlarni yig’ish, tadqiqot etikasini belgilash, tadqiqot strategiyasini aniqlash bo’yicha qaror qabul qilish asosida qo’yilgan muammoning aniq yechimiga olib chiquvchi yo’lni belgilashdir. Metodologiya qismi tadqiqot uchun tanlangan yo’lning ishonchliligini asoslash orqali namoyon bo’ladi.
                </p>
            </div>


            <div class="col-md-6 bg-light p-3">
                <h3 class="text-primary">
                    <i class="fa fa-check-circle"></i>
                    Tahlil va natijalar
                </h3>
                <p class="text-dark text-justify">
                    Tadqiqotning tahlil qismida yig’ilgan ma’lumotlarning tahlilini amalga oshiradi. Bunda faqatgina tahlil usulining natijalari ifoda etiladi. Natijalar bo’yicha muhokama maqolaning keyingi qismining vazifasi hisoblanadi.
                </p>
            </div>


            <div class="col-md-6 bg-light p-3">
                <h3 class="text-primary">
                    <i class="fa fa-check-circle"></i>
                    Xulosa va takliflar
                </h3>
                <p class="text-dark text-justify">
                    Tadqiqotning maqsad va vazifalarining aniqlanganligi, tadqiqot bo’yicha tug’ilgan muammolarining yechimini topganligi, tadqiqotning asosiy natijalariga va tadqiqotga umumiy xulosalar, takliflar va tadqiqotdan kelib chiqib, tadqiqot ishi yo’nalishlari maqola xulosa va takliflari qismining asosini tashkil etishi lozim.
                </p>
            </div>

            <div class="col-md-6 bg-light p-3">
                <h3 class="text-primary">
                    <i class="fa fa-check-circle"></i>
                    Foydalanilgan adabiyotlar ro’yxati
                </h3>
                <p class="text-dark text-justify">
                        Ushbu qismda tadqiqotda foydalanilgan barcha adabiyotlarning ro’yxati [1], [2] yoki [3] ketma-ketligida qo’yiladi:
                    <ol>
                        <li>mualliflar ismi-sharifi, kitob nomi, nashr manzili nashriyot nomi, yili, betlari;</li>
                        <li>mualliflar ismi-sharifi, maqola nomi, jurnal nomi, nashri, yili, soni, betlari.</li>
                        <li>Maqola matni Microsoft Office Word dasturida yagona fayl ko’rinishida terilgan bo’lishi zarur. Sahifaning yuqori va pastki tomonidan, chap va o’ng tomonlaridan - 2,5 sm; oriyentasiyasi - kitob shaklida. Shrift - Times New Roman, o’lchami - 11 kegl, qatorlar orasi intervali - 1,0; bo’g’in ko’chirish - avtomatik. Grafiklar va diagrammalar qurishda Microsoft Office Excel dasturidan foydalanish lozim. Maqolaning maksimal hajmi 10 betdan oshmasligi, minimal hajmi esa 5 betdan kam bo’lmasligi hamda foydalanilgan adabiyotlar soni kamida 10-15 manbadan iborat bo’lishi lozim. Matndagi bibliografik havolalar (ssilka) kvadrat qavsda ro’yxatda keltirilgan tartibda qayd qilish lozim.</li>
                        <li>Maqolalar o’zbek, rus, yoki ingliz tillarida taqdim etilishi mumkin.</li>
                        <li>Jurnal talablariga mos kelmaydigan maqolalar tahririyat tomonidan ko’rib chiqilmaydi.</li>
                        <li>Yuborilgan maqolalarning barchasi “Antiplagiat” tizimida tekshiriladi.</li>

                    </ol>
                </p>
            </div>



        </div>
        <!-- /.card-body -->
    </div>



@endsection
