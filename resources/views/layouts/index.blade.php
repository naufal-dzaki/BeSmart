@extends('main')

@section('title', 'Home')

@section('content')
    <div class="font-bdisplay">
        {{-- hero --}}
        <section class="relative content" id="home">
            <div class="container flex flex-col-reverse lg:flex-row items-center gap-12 mt-14 lg:mt-28">
                <!-- Content -->
                <div class="flex flex-1 flex-col items-center lg:items-start" data-aos="fade-up-right"
                    data-aos-duration="1500">
                    <h2 class="text-bookmark-blue text-3xl md:text-4 lg:text-5xl text-center lg:text-left mb-6">
                        BeSmart
                    </h2>
                    <p class="text-bookmark-grey text-lg text-center lg:text-left mb-6">
                        Besmart is an online learning application that provides the best and largest tutoring service in
                        Indonesia, which will help students and teachers in learning and teaching.
                    </p>
                    <div class="flex justify-center flex-wrap gap-6">
                        <button type="button" class="btn bg-gradient-to-r from-purple-600 to-blue-500 text-white hover:bg-white hover:text-black">
                            Email now ->
                        </button>
                    </div>
                </div>
                <!-- Image -->
                <div class=" flex-1 mb-10 md:mb-16 lg:mb-0 z-10" data-aos="fade-up-left" data-aos-duration="1500">
                    <img class="w-5/6 h-5/6 sm:w-3/4 sm:h-3/4 md:w-full md:h-full" src="{{ asset('img/section.png') }}"
                        alt="" />
                    {{-- Illustration by <a href="https://icons8.com/illustrations/author/5eb2a7bd01d0360019f124e7">Olha Khomich</a>
                from <a href="https://icons8.com/illustrations">Ouch!</a> --}}
                </div>
            </div>
        </section>

        {{-- feature --}}
        <section class="flex flex-col gap-x-5 lg:flex-row my-36" data-aos="fade-up" data-aos-duration="1500">
            {{-- item kiri --}}
            <div class="px-10 mt-24">
                <h1 class="text-3xl font-bold">Why Choose</h1>
                <h1 class="text-3xl font-bold text-purple-700">BeSmart</h1>
                <p>BeSmart is the best application in the world of education and can make it easier for students and
                    teachers to learn and teach</p>
            </div>
            {{-- item kanan --}}
            <div
                class="grid grid-flow-row md:grid-cols-3 md:grid-rows-3 gap-4 md:my-0 mx-10 md:mx-0 justify-items-stretch inset-x-0">
                <div>
                    <img class="w-14 my-4 rounded-full" src="{{ asset('img/01.png') }}" alt="">
                    <h1 class="font-bold font-xl">Platfrom learn online first in Indonesia</h1>
                    <p>designed by 2 outstanding students from SMKN 1 Surabaya Bilal and Naufal</p>
                </div>
                <div>
                    <img class="w-14 my-4 rounded-full" src="{{ asset('img/02.png') }}" alt="">
                    <h1 class="font-bold font-xl">Besmart is open to the public</h1>
                    <p>You can register via BeSmart.com website. If there are things that are not clear you can ask directly via chat</p>
                </div>
                <div>
                    <img class="w-14 my-4 rounded-full" src="{{ asset('img/03.png') }}" alt="">
                    <h1 class="font-bold font-xl"> Relatively cheap cost</h1>
                    <p>For the price you can see directly on the BeSmart website, often chechk ya quite loh! there are many promos available</p>
                </div>
                <div>
                    <img class="w-14 my-4 rounded-full" src="{{ asset('img/04.png') }}" alt="">
                    <h1 class="font-bold font-xl">The learningmate is not in doubt </h1>
                    <p>BeSmart was selected as a master theacer at a renowned campus in Indonesia loh</p>
                </div>
                <div>
                    <img class="w-14 my-4 rounded-full" src="{{ asset('img/05.png') }}" alt="">
                    <h1 class="font-bold font-xl">Anak can learn flexibly</h1>
                    <p>BeSmart online bimbel is the latest learning method that is current because it uses gadgets. In addition, because it is present in </p>
                </div>
                <div>
                    <img class="w-14 my-4 rounded-full" src="{{ asset('img/06.png') }}" alt="">
                    <h1 class="font-bold font-xl">The full lesson is available</h1>
                    <p>You don't need to worry, BeSmart provides complete subject matter. Starting from elementary, junior high, high school, to vocational!</p>
                </div>
            </div>
        </section>

        {{-- content 3 --}}
        <section class="relative content" id="home">
            <div class="container flex flex-col lg:flex-row items-center gap-12">
                <!-- Image -->
                <div class=" flex-1 mb-10 md:mb-16 lg:mb-0 z-10" data-aos="fade-up-right" data-aos-duration="1500">
                    <img class="w-5/6 h-5/6 sm:w-3/4 sm:h-3/4 md:w-full md:h-full" src="{{ asset('img/section2.png') }}"
                        alt="" />
                    {{-- Illustration by <a href="https://icons8.com/illustrations/author/5eb2a7bd01d0360019f124e7">Olha Khomich</a>
                from <a href="https://icons8.com/illustrations">Ouch!</a> --}}
                </div>
                <!-- Content -->
                <div class="flex flex-1 flex-col items-center lg:items-start justify-items-center items-center"
                    data-aos="fade-up-left" data-aos-duration="1500">
                    <h2 class="text-bookmark-blue text-3xl md:text-4 lg:text-5xl text-center lg:text-left mb-10">
                        History of BeSmart
                    </h2>
                    <p class="text-bookmark-grey text-lg text-center lg:text-left mb-6">
                        History. BeSmart was founded in April 2022 by Muhammad Bilal and Muhammad Naufal Dzaki Ardani to help students find online mentors. Belva is a graduate of Nanyang University of Technology with a double degree in business and computer science.
                    </p>
                    <div class="grid md:grid-flow-ro    w grid-flow-col grid-cols-3 grid-rows-1 gap-12 text-center">
                        <div>
                            <h1 class="text-purple-700 font-semibold">23k</h1>
                            <p>Students</p>
                        </div>
                        <div>
                            <h1 class="text-purple-700 font-semibold">2k</h1>
                            <p>Cources</p>
                        </div>
                        <div>
                            <h1 class="text-purple-700 font-semibold">2000</h1>
                            <p>Countries</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- content 4 --}}
        <section class="py-40" data-aos="fade-up" data-aos-duration="2500">
            <div class="text-2xl font-bold pb-14 pl-10 md:pl-28">
                <h1>Discus The Variety</h1>
                <h1>Of Cources Here</h1>
            </div>

            {{-- slideshow --}}
            <div class="slideshow-container">

                {{-- slide pertama --}}
                <div class="mySlides fade">
                    <div class="flex md:flex-none px-16 justify-center gap-4">
                        <div class="box-border md:box-content max-w-xs hidden md:inline">
                            <img class="rounded-xl pb-3" src="{{ asset('img/contoh.jpg') }}" alt="">
                            <h1 class="font-semibold text-xl py-2">judul</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla impedit ratione aut natus?
                                Quas,
                                exercitationem!</p>
                            <div class="flex gap-4 py-3">
                                <h1 class="font-semibold text-xl">4.5</h1>
                                <div>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <p>(1093)</p>
                            </div>
                            <h1 class="font-semibold text-xl text-red-500">$450</h1>
                        </div>
                        <div class="box-border md:box-content max-w-xs hidden md:inline">
                            <img class="rounded-xl pb-3" src="{{ asset('img/contoh.jpg') }}" alt="">
                            <h1 class="font-semibold text-xl py-2">judul</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla impedit ratione aut natus?
                                Quas,
                                exercitationem!</p>
                            <div class="flex gap-4 py-3">
                                <h1 class="font-semibold text-xl">4.5</h1>
                                <div>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <p>(1093)</p>
                            </div>
                            <h1 class="font-semibold text-xl text-red-500">$450</h1>
                        </div>
                        <div class="box-border md:box-content max-w-xs">
                            <img class="rounded-xl pb-3" src="{{ asset('img/contoh.jpg') }}" alt="">
                            <h1 class="font-semibold text-xl py-2">judul</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla impedit ratione aut natus?
                                Quas,
                                exercitationem!</p>
                            <div class="flex gap-4 py-3">
                                <h1 class="font-semibold text-xl">4.5</h1>
                                <div>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <p>(1093)</p>
                            </div>
                            <h1 class="font-semibold text-xl text-red-500">$450</h1>
                        </div>
                    </div>
                </div>

                {{-- slide kedua --}}
                <div class="mySlides fade">
                    <div class="flex px-16 justify-center gap-4">
                        <div class="box-border md:box-content max-w-xs hidden md:inline">
                            <img class="rounded-xl pb-3" src="{{ asset('img/contoh.jpg') }}" alt="">
                            <h1 class="font-semibold text-xl py-2">judul</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla impedit ratione aut natus?
                                Quas,
                                exercitationem!</p>
                            <div class="flex gap-4 py-3">
                                <h1 class="font-semibold text-xl">4.5</h1>
                                <div>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <p>(1093)</p>
                            </div>
                            <h1 class="font-semibold text-xl text-red-500">$450</h1>
                        </div>
                        <div class="box-border md:box-content max-w-xs hidden md:inline">
                            <img class="rounded-xl pb-3" src="{{ asset('img/contoh.jpg') }}" alt="">
                            <h1 class="font-semibold text-xl py-2">judul</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla impedit ratione aut natus?
                                Quas,
                                exercitationem!</p>
                            <div class="flex gap-4 py-3">
                                <h1 class="font-semibold text-xl">4.5</h1>
                                <div>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <p>(1093)</p>
                            </div>
                            <h1 class="font-semibold text-xl text-red-500">$450</h1>
                        </div>
                        <div class="box-border md:box-content max-w-xs">
                            <img class="rounded-xl pb-3" src="{{ asset('img/contoh.jpg') }}" alt="">
                            <h1 class="font-semibold text-xl py-2">judul</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla impedit ratione aut natus?
                                Quas,
                                exercitationem!</p>
                            <div class="flex gap-4 py-3">
                                <h1 class="font-semibold text-xl">4.5</h1>
                                <div>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <p>(1093)</p>
                            </div>
                            <h1 class="font-semibold text-xl text-red-500">$450</h1>
                        </div>
                    </div>
                </div>

                {{-- slide ketiga --}}
                <div class="mySlides fade">
                    <div class="flex px-16 justify-center gap-4">
                        <div class="box-border md:box-content max-w-xs hidden md:inline">
                            <img class="rounded-xl pb-3" src="{{ asset('img/contoh.jpg') }}" alt="">
                            <h1 class="font-semibold text-xl py-2">judul</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla impedit ratione aut natus?
                                Quas,
                                exercitationem!</p>
                            <div class="flex gap-4 py-3">
                                <h1 class="font-semibold text-xl">4.5</h1>
                                <div>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <p>(1093)</p>
                            </div>
                            <h1 class="font-semibold text-xl text-red-500">$450</h1>
                        </div>
                        <div class="box-border md:box-content max-w-xs hidden md:inline">
                            <img class="rounded-xl pb-3" src="{{ asset('img/contoh.jpg') }}" alt="">
                            <h1 class="font-semibold text-xl py-2">judul</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla impedit ratione aut natus?
                                Quas,
                                exercitationem!</p>
                            <div class="flex gap-4 py-3">
                                <h1 class="font-semibold text-xl">4.5</h1>
                                <div>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <p>(1093)</p>
                            </div>
                            <h1 class="font-semibold text-xl text-red-500">$450</h1>
                        </div>
                        <div class="box-border md:box-content max-w-xs">
                            <img class="rounded-xl pb-3" src="{{ asset('img/contoh.jpg') }}" alt="">
                            <h1 class="font-semibold text-xl py-2">judul</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla impedit ratione aut natus?
                                Quas,
                                exercitationem!</p>
                            <div class="flex gap-4 py-3">
                                <h1 class="font-semibold text-xl">4.5</h1>
                                <div>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <p>(1093)</p>
                            </div>
                            <h1 class="font-semibold text-xl text-red-500">$450</h1>
                        </div>
                    </div>
                </div>


                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>

            </div>
            <br>

            <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
            </div>


        </section>

        {{-- content 5 --}}
        <section class="relative content" id="home">
            <div class="container flex flex-col lg:flex-row items-center gap-12 mt-14 lg:mt-28">
                <!-- Image -->
                <div class=" flex-1 mb-10 md:mb-16 lg:mb-0 z-10" data-aos="fade-up-right" data-aos-duration="1500">
                    <img class="w-5/6 h-5/6 sm:w-3/4 sm:h-3/4 md:w-full md:h-full" src="{{ asset('img/section3.png') }}"
                        alt="" />
                    {{-- Illustration by <a href="https://icons8.com/illustrations/author/5eb2a7bd01d0360019f124e7">Olha Khomich</a>
                from <a href="https://icons8.com/illustrations">Ouch!</a> --}}
                </div>
                <!-- Content -->
                <div class="flex flex-1 flex-col items-center lg:items-start justify-items-center items-center"
                    data-aos="fade-up-left" data-aos-duration="1500">
                    <h2 class="text-bookmark-blue text-3xl md:text-4 lg:text-5xl text-center lg:text-left mb-10">
                        Apa Keunggulan BeSmart?
                    </h2>
                    <p class="text-bookmark-grey text-lg text-center lg:text-left mb-6">
                        Besmart adalah aplikasi belajar online yang menyediakan layanan bimbel (bimbingan belajar) terbaik dan terbesar di Indonesia, dimana akan membantu siswa dalam menyelesaikan permasalahan belajar.
                    </p>
                    <p>
                        Dengan aplikasi bimbingan belajar online BeSmart, kamu akan dimudahkan dalam memahami beragam materi pelajaran serta dapat diakses kapan pun dan di mana pun. Sampai dengan saat ini 75% total pelajar di Indonesia telah mempercayakan Ruangguru sebagai solusi belajar terbaik.</p>

                </div>
            </div>
        </section>

        <section class="container pt-32" data-aos="zoom-in" data-aos-duration="1500">
            <div
                class="flex flex-col md:flex-row bg-gradient-to-r
                                                                                                                                                                                                                                                                                                                                                                                                                                            from-purple-600 to-blue-500 px-16 py-20 rounded-3xl justify-between max-w-6xl mx-auto">
                <div>
                    <h1 class="text-3xl font-bold text-white">Semua kebutuhan belajar kamu ada di BeSmarts!
                    </h1>
                </div>
                <div class="flex flex-col md:flex-row justify-center pt-10 md:pt-0" style="width: 24vw">
                    <button type="button" class="btn bg-white" style="width: 120%">Lets Get Started</button>
                    <button class="btn hover:bg-white border-2 border-white mt-3 md:mt-0 w-full text-white hover:text-black">Contact us</button>
                </div>
            </div>
        </section>

        {{-- footer --}}

        <footer class="pt-36 mb-10" data-aos="fade-up" data-aos-duration="1500">
            <div class="flex flex-col md:flex-row justify-between text-center md:text-start">
                <div>
                    <h1 class="text-2xl font-semibold pt-5">BeSmart</h1>
                    <p class="text-gray-500 py-5">1920 Holden Street San Deig. CA 9182</p>
                    <p class="pb-5">Call us: +62 918092810</p>
                    <i class="fab fa-facebook"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-instagram"></i>
                </div>
                <div>
                    <h1 class="font-semibold pb-3">Take a Tutor</h1>
                    <p class="text-gray-500 pb-3">Feature</p>
                    <p class="text-gray-500 pb-3">Pricing</p>
                    <p class="text-gray-500 pb-3">Product</p>
                    <p class="text-gray-500 pb-3">Support</p>
                </div>
                <div>
                    <h1 class="font-semibold pb-3">Our Company</h1>
                    <p class="text-gray-500 pb-3">About us</p>
                    <p class="text-gray-500 pb-3">Blog</p>
                    <p class="text-gray-500 pb-3">Media</p>
                    <p class="text-gray-500 pb-3">Contact Us</p>
                </div>
                <div>
                    <h1 class="font-semibold pb-3">Subscribe</h1>
                    <p class="text-gray-500 pb-3">subscribe to get the latest news from us</p>
                    <div
                        class="md:flex hidden w-full col-span-2 mt-5 md:mt-0 md:col-span-1 mx-auto md:order-2 bg-white rounded-lg shadow-md pl-3 pr- py-3 row-start-2 row-end-3 md:row-span-2 justify-between">
                        <input class="focus:outline-none border-none" type="text" placeholder="Email Address "
                            onchange="inputTyping">
                        <i class="fa fa-arrow-right  justify-center mr-3"></i>
                    </div>
                </div>
            </div>
            <p class="mt-10 text-center">Copy right, by BeSmart</p>

        </footer>
    </div>
    <!-- javascript -->
    <script src="{{ mix('js/app.js') }}"></script>

    <script>
        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            if (n > slides.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
        }
    </script>

@endsection
