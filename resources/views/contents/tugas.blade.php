@extends('layouts.default')

@section('content')
    
    <div class="lg:mx-12 md:mx-10 sm:mx-8 mx-6 lg:my-6 md:my-5 sm:my-4 my-3">
    <div class="flex sm:flex-row flex-col sm:flex-wrap">

        @for ($i = 0; $i < 3; $i++)
            <div class=" w-full sm:w-1/2 lg:mb-5 md:mb-4 sm:mb-3 mb-2 px-3">
                <div class="flex bg-bwhite filter drop-shadow-md rounded-md p-2 md:p-3">
                    <div class="bg-balt px-2 py-2">
                        <img src="{{ asset('img/ttugass.png') }}" class=" lg:w-20 md:w-16 sm:w-14 w-12" alt="">
                    </div>
                    <div class="block">
                        <h1
                            class="font-bserif lg:text-2xl md:text-lg sm:text-base text-sm text-bblack font-bold md:ml-4 sm:ml-3 ml-2 md:mt-2 mt-1">
                                Statistika</h1>
                        <div class="flex">
                            <div
                                class="bg-bblue  rounded-md px-2 py-1 h-auto ml-4 mt-3">
                                <p class="font-bsans md:text-base sm:text-sm text-xs font-bold text-bwhite text-center">Matematika
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endfor

        {{-- <div class=" w-full sm:w-1/2 lg:mb-5 md:mb-4 sm:mb-3 mb-2 px-3">
            <div class="flex bg-bwhite filter drop-shadow-md rounded-md p-2 md:p-3">
                <div class="bg-balt px-2 py-2">
                    <img src="{{ asset('img/ttugass.png') }}" class=" lg:w-20 md:w-16 sm:w-14 w-12" alt="">
                </div>
                <div class="block">
                    <h1
                        class="font-bserif lg:text-2xl md:text-lg sm:text-base text-sm text-bblack font-bold md:ml-4 sm:ml-3 ml-2 md:mt-2 mt-1">
                            Statistika</h1>
                    <div class="flex">
                        <div
                            class="bg-bblue  rounded-md px-2 py-1 h-auto ml-4 mt-3">
                            <p class="font-bsans md:text-base sm:text-sm text-xs font-bold text-bwhite text-center">Matematika
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-full sm:w-1/2 lg:mb-5 md:mb-4 sm:mb-3 mb-2 px-3">
            <div class="flex bg-bwhite filter drop-shadow-md rounded-md p-2 md:p-3">
                <div class="bg-balt px-2 py-2">
                    <img src="{{ asset('img/ttugass.png') }}" class=" lg:w-20 md:w-16 sm:w-14 w-12" alt="">
                </div>
                <div class="block">
                    <h1
                        class="font-bserif lg:text-2xl md:text-lg sm:text-base text-sm text-bblack font-bold md:ml-4 sm:ml-3 ml-2 md:mt-2 mt-1">
                            Surat Lamaran Pekerjaan</h1>
                    <div class="flex">
                        <div
                            class="bg-bblue  rounded-md px-2 py-1 h-auto ml-4 mt-3">
                            <p class="font-bsans md:text-base sm:text-sm text-xs font-bold text-bwhite text-center">B Indonesia
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="w-full sm:w-1/2 lg:mb-5 md:mb-4 sm:mb-3 mb-2 px-3">
            <div class="flex bg-bwhite filter drop-shadow-md rounded-md p-2 md:p-3">
                <div class="bg-balt px-2 py-2">
                    <img src="{{ asset('img/ttugass.png') }}" class=" lg:w-20 md:w-16 sm:w-14 w-12" alt="">
                </div>
                <div class="block">
                    <h1
                        class="font-bserif lg:text-2xl md:text-lg sm:text-base text-sm text-bblack font-bold md:ml-4 sm:ml-3 ml-2 md:mt-2 mt-1">
                            Biography Text</h1>
                    <div class="flex">
                        <div
                            class="bg-bblue  rounded-md px-2 py-1 h-auto ml-4 mt-3">
                            <p class="font-bsans md:text-base sm:text-sm text-xs font-bold text-bwhite text-center">English
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-full md:w-1/2 lg:mb-5 md:mb-4 sm:mb-3 mb-2 px-3">
            <div class="flex bg-bwhite filter drop-shadow-md rounded-md p-2 md:p-3">
                <div class="bg-balt px-2 py-2">
                    <img src="{{ asset('img/ttugass.png') }}" class=" lg:w-20 md:w-16 sm:w-14 w-12" alt="">
                </div>
                <div class="block">
                    <h1
                        class="font-bserif lg:text-2xl md:text-lg sm:text-base text-sm text-bblack font-bold md:ml-4 sm:ml-3 ml-2 md:mt-2 mt-1">
                            Application Letter</h1>
                    <div class="flex">
                        <div
                            class="bg-bblue  rounded-md px-2 py-1 h-auto ml-4 mt-3">
                            <p class="font-bsans md:text-base sm:text-sm text-xs font-bold text-bwhite text-center">English
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

    </div>
</div>

@endsection