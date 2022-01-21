<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!--#######  css slick #######-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/slick.css') }}">
</head>

<body class="bg-bwhite lg:mx-12 md:mx-10 sm:mx-8 mx-6 lg:my-6 md:my-5 sm:my-4 my-3">

    <div class="filter drop-shadow bg-bwhite w-full h-auto rounded-sm px-2 py-1">
        <div class="flex">
            <div class="bg-balt lg:w-24 md:w-20 sm:w-16 w-14 my-1 mx-1">
                <img src="{{ asset('img/user-profille.png') }}" class="lg:w-24 md:w-20 sm:w-16 w-14" alt="">
            </div>
            <div class="block">
                <h1
                    class="font-bserif lg:text-4xl md:text-3xl sm:text-2xl text-xl text-bblack font-bold md:ml-4 sm:ml-3 ml-2 md:mt-2 mt-1">
                    Hai, Muhammad Bilal</h1>
                <div class="flex">
                    <div
                        class="bg-bblue  rounded-md md:w-16 sm:w-14 w-12 py-1 h-auto ml-4 absolute lg:left-28 md:left-24 sm:left-20 left-16 md:bottom-4 sm:bottom-3 bottom-2">
                        <p class="font-bsans md:text-base sm:text-sm text-xs font-bold text-bwhite text-center">Siswa
                        </p>
                    </div>
                    <h1
                        class="absolute lg:right-8 md:right-7 sm:right-6 right-5 md:bottom-4 sm:bottom-3 bottom-2 font-bsans text-bblue md:text-xl sm:text-base text-sm">
                        XII RPL 2</h1>
                </div>
            </div>
        </div>
    </div>

    <!-- ------------------------menu---------------------------- -->
    <h1
        class="text-bblue font-bold font-bserif lg:text-4xl md:text-3xl sm:text-2xl text-xl lg:mt-10 md:mt-9 sm:mt-8 mt-7 md:mb-6 sm:mb-5 mb-4">
        Menu</h1>
    <div class="flex">

        <div class="bg-bwhite filter drop-shadow-md rounded-md md:px-4 sm:px-3 px-2 md:py-4 sm:py-3 py-2 w-1/3">
            <a href="/biodata" class="flex sm:flex-row flex-col justify-center items-center">
                <img src="{{ asset('img/Biodata.png') }}"
                    class="flex flex-col justify-center items-center lg:w-16 md:w-14 sm:w-12 w-10" alt="">
                <h1
                    class="font-bdisplay text-bblack md:text-3xl sm:text-2xl text-xl font-bold lg:ml-7 md:ml-5 sm:ml-3 ml-0 my-auto">
                    Biodata</h1>
            </a>
        </div>

        <div
            class="bg-bwhite filter drop-shadow-md rounded-md md:px-4 sm:px-3 px-2 md:py-4 sm:py-3 py-2 w-1/3 lg:mx-10 md:mx-8 sm:mx-6 mx-5">
            <a href="/absen" class="flex sm:flex-row flex-col justify-center items-center">
                <img src="{{ asset('img/Absen.png') }}" class="flex flex-col justify-center items-center lg:w-16 md:w-14 sm:w-12 w-10"
                    alt="">
                <h1
                    class="font-bdisplay text-bblack md:text-3xl sm:text-2xl text-xl font-bold lg:ml-7 md:ml-5 sm:ml-3 ml-0 my-auto">
                    Absen</h1>
            </a>
        </div>

        <div class="bg-bwhite filter drop-shadow-md rounded-md md:px-4 sm:px-3 px-2 md:py-4 sm:py-3 py-2 w-1/3">
            <a href="/tugas" class="flex sm:flex-row flex-col justify-center items-center">
                <img src="{{ asset('img/Tugas.png') }}" class="flex flex-col justify-center items-center lg:w-16 md:w-14 sm:w-12 w-10"
                    alt="">
                <h1
                    class="font-bdisplay text-bblack md:text-3xl sm:text-2xl text-xl font-bold lg:ml-7 md:ml-5 sm:ml-3 ml-0 my-auto">
                    Tugas</h1>
            </a>
        </div>

    </div>

    <!-- ------------------------------mata pelajaran--------------------------------- -->
    <h1
        class="text-bblue font-bold font-bserif lg:text-4xl md:text-3xl sm:text-2xl text-xl lg:mt-10 md:mt-9 sm:mt-8 mt-7 md:mb-6 sm:mb-5 mb-4">
        Mata Pelajaran</h1>
    <div class="flex flex-wrap">

        @for ($i = 0; $i < 8; $i++)
            <div class="w-1/4 lg:mb-5 md:mb-4 sm:mb-3 mb-2">
                <div class="flex flex-col justify-center items-center">
                    <a href="/materi">
                        <div
                            class="flex items-center justify-center bg-bblue lg:w-28 md:w-24 sm:w-20 w-16 lg:h-28 md:h-24 sm:h-20 h-16 rounded-full">
                            <img src="{{ asset('img/Matemetika.png') }}" class="lg:w-16 md:w-14 sm:w-12 w-10" alt="">
                        </div>
                    </a>
                    <div class="md:mt-4 sm:mt-3 mt-2">
                        <h1 class="font-bdisplay text-bblack lg:text-2xl md:text-xl sm:text-lg xsm:text-sm text-xs">
                            Matematika</h1>
                    </div>
                </div>
            </div>
        @endfor

        {{-- <div class="w-1/4 lg:mb-5 md:mb-4 sm:mb-3 mb-2">
            <div class="flex flex-col justify-center items-center">
                <a href="">
                    <div
                        class="flex items-center justify-center bg-bblue lg:w-28 md:w-24 sm:w-20 w-16 lg:h-28 md:h-24 sm:h-20 h-16 rounded-full">
                        <img src="{{ asset('img/Matemetika.png') }}" class="lg:w-16 md:w-14 sm:w-12 w-10" alt="">
                    </div>
                </a>
                <div class="md:mt-4 sm:mt-3 mt-2">
                    <h1 class="font-bdisplay text-bblack lg:text-2xl md:text-xl sm:text-lg xsm:text-sm text-xs">
                        Matematika</h1>
                </div>
            </div>
        </div>

        <div class="w-1/4 lg:mb-5 md:mb-4 sm:mb-3 mb-2">
            <div class="flex flex-col justify-center items-center">
                <a href="">
                    <div
                        class="flex items-center justify-center bg-bblue lg:w-28 md:w-24 sm:w-20 w-16 lg:h-28 md:h-24 sm:h-20 h-16 rounded-full">
                        <img src="{{ asset('img/English.png') }}" class="lg:w-16 md:w-14 sm:w-12 w-10" alt="">
                    </div>
                </a>
                <div class="md:mt-4 sm:mt-3 mt-2">
                    <h1 class="font-bdisplay text-bblack lg:text-2xl md:text-xl sm:text-lg xsm:text-sm text-xs">English
                    </h1>
                </div>
            </div>
        </div>

        <div class="w-1/4 lg:mb-5 md:mb-4 sm:mb-3 mb-2">
            <div class="flex flex-col justify-center items-center">
                <a href="">
                    <div
                        class="flex items-center justify-center bg-bblue lg:w-28 md:w-24 sm:w-20 w-16 lg:h-28 md:h-24 sm:h-20 h-16 rounded-full">
                        <img src="{{ asset('img/Fisika.png') }}" class="lg:w-16 md:w-14 sm:w-12 w-10" alt="">
                    </div>
                </a>
                <div class="md:mt-4 sm:mt-3 mt-2">
                    <h1 class="font-bdisplay text-bblack lg:text-2xl md:text-xl sm:text-lg xsm:text-sm text-xs">Fisika
                    </h1>
                </div>
            </div>
        </div>

        <div class="w-1/4 lg:mb-5 md:mb-4 sm:mb-3 mb-2">
            <div class="flex flex-col justify-center items-center">
                <a href="">
                    <div
                        class="flex items-center justify-center bg-bblue lg:w-28 md:w-24 sm:w-20 w-16 lg:h-28 md:h-24 sm:h-20 h-16 rounded-full">
                        <img src="{{ asset('img/Biologi.png') }}" class="lg:w-16 md:w-14 sm:w-12 w-10" alt="">
                    </div>
                </a>
                <div class="md:mt-4 sm:mt-3 mt-2">
                    <h1 class="font-bdisplay text-bblack lg:text-2xl md:text-xl sm:text-lg xsm:text-sm text-xs">Biologi
                    </h1>
                </div>
            </div>
        </div>

        <div class="w-1/4 lg:mb-5 md:mb-4 sm:mb-3 mb-2">
            <div class="flex flex-col justify-center items-center">
                <a href="">
                    <div
                        class="flex items-center justify-center bg-bblue lg:w-28 md:w-24 sm:w-20 w-16 lg:h-28 md:h-24 sm:h-20 h-16 rounded-full">
                        <img src="{{ asset('img/Kimia.png') }}" class="lg:w-16 md:w-14 sm:w-12 w-10" alt="">
                    </div>
                </a>
                <div class="md:mt-4 sm:mt-3 mt-2">
                    <h1 class="font-bdisplay text-bblack lg:text-2xl md:text-xl sm:text-lg xsm:text-sm text-xs">Kimia
                    </h1>
                </div>
            </div>
        </div>

        <div class="w-1/4 lg:mb-5 md:mb-4 sm:mb-3 mb-2">
            <div class="flex flex-col justify-center items-center">
                <a href="">
                    <div
                        class="flex items-center justify-center bg-bblue lg:w-28 md:w-24 sm:w-20 w-16 lg:h-28 md:h-24 sm:h-20 h-16 rounded-full">
                        <img src="{{ asset('img/B Indo.png') }}" class="lg:w-16 md:w-14 sm:w-12 w-10" alt="">
                    </div>
                </a>
                <div class="md:mt-4 sm:mt-3 mt-2">
                    <h1 class="font-bdisplay text-bblack lg:text-2xl md:text-xl sm:text-lg xsm:text-sm text-xs">B Indo
                    </h1>
                </div>
            </div>
        </div>

        <div class="w-1/4 lg:mb-5 md:mb-4 sm:mb-3 mb-2">
            <div class="flex flex-col justify-center items-center">
                <a href="">
                    <div
                        class="flex items-center justify-center bg-bblue lg:w-28 md:w-24 sm:w-20 w-16 lg:h-28 md:h-24 sm:h-20 h-16 rounded-full">
                        <img src="{{ asset('img/Sejarah.png') }}" class="lg:w-16 md:w-14 sm:w-12 w-10" alt="">
                    </div>
                </a>
                <div class="md:mt-4 sm:mt-3 mt-2">
                    <h1 class="font-bdisplay text-bblack lg:text-2xl md:text-xl sm:text-lg xsm:text-sm text-xs">Sejarah
                    </h1>
                </div>
            </div>
        </div>

        <div class="w-1/4 lg:mb-5 md:mb-4 sm:mb-3 mb-2">
            <div class="flex flex-col justify-center items-center">
                <a href="">
                    <div
                        class="flex items-center justify-center bg-bblue lg:w-28 md:w-24 sm:w-20 w-16 lg:h-28 md:h-24 sm:h-20 h-16 rounded-full">
                        <img src="{{ asset('img/Penjas.png') }}" class="lg:w-16 md:w-14 sm:w-12 w-10" alt="">
                    </div>
                </a>
                <div class="md:mt-4 sm:mt-3 mt-2">
                    <h1 class="font-bdisplay text-bblack lg:text-2xl md:text-xl sm:text-lg xsm:text-sm text-xs">Penjas
                    </h1>
                </div>
            </div>
        </div> --}}

    </div>



    <!-- ------------------------------ Tips dan motivasi Belajar ------------------------------------- -->
    <h1
        class="text-bblue font-bold font-bserif lg:text-4xl md:text-3xl sm:text-2xl text-xl lg:mt-10 md:mt-9 sm:mt-8 mt-7 md:mb-6 sm:mb-5 mb-4">
        Tips & Motivasi Belajar</h1>
    <div class="slick_one">

        <div class="bg-bblue filter drop-shadow-md rounded-2xl">
            <a href="" class="flex">
                <div class="bg-bwhite rounded-full md:px-3 px-2 md:py-3 py-2 md:mx-3 mx-2 md:my-3 my-2">
                    <img src="{{ asset('img/efisien.png') }}" class="lg:w-16 md:w-14 sm:w-12 xsm:w-10 w-8" alt="">
                </div>
                <h1
                    class="font-bdisplay text-bblack lg:text-3xl md:text-2xl sm:text-xl xsm:text-lg text-base font-bold ml-5 my-auto">
                    Belajar yang efisien</h1>
            </a>
        </div>

        <div class="bg-bblue filter drop-shadow-md rounded-2xl">
            <a href="" class="flex">
                <div class="bg-bwhite rounded-full md:px-3 px-2 md:py-3 py-2 md:mx-3 mx-2 md:my-3 my-2">
                    <img src="{{ asset('img/tujuan.png') }}" class="mlgw-16 smdw-14 xm:w-12 wxsm:-10 w-8" alt="">
                </div>
                <h1
                    class="font-bdisplay text-bblack lg:text-3xl md:text-2xl sm:text-xl xsm:text-lg text-base font-bold ml-5 my-auto">
                    Tujuan Belajar</h1>
            </a>
        </div>

        <div class="bg-bblue filter drop-shadow-md rounded-2xl">
            <a href="" class="flex">
                <div class="bg-bwhite rounded-full md:px-3 px-2 md:py-3 py-2 md:mx-3 mx-2 md:my-3 my-2">
                    <img src="{{ asset('img/optimis.png') }}" class="lg:w-16 md:w-14 sm:w-12 xsm:w-10 w-8" alt="">
                </div>
                <h1
                    class="font-bdisplay text-bblack lg:text-3xl md:text-2xl sm:text-xl xsm:text-lg text-base font-bold ml-5 my-auto">
                    Optimis</h1>
            </a>
        </div>
    </div>




    <!-- ----------------------------------JS SLIDER---------------------------------------------------- -->
    <script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js')}}"></script>
    <script src="{{ asset('js/slick.js') }}"></script>
    <script src="{{ asset('js/slick.min.js') }}"></script>


    <script>
        $('.slick_one').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: true,
            arrows: false,
            autoplay: true,
            speed: 3000,
            autoplaySpeed: 3000,
            infinite: true,
        });
    </script>
</body>

</html>
