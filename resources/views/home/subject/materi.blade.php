{{-- @dd($post->subject->slug) --}}
@extends('layouts.default')

@section('content')

    <div class="lg:mx-12 md:mx-10 sm:mx-8 mx-6 lg:my-6 md:my-5 sm:my-4 my-3">
    <div class="flex sm:flex-row flex-col sm:flex-wrap">

        @foreach ($posts as $post)

            <div class=" w-full sm:w-1/2 lg:mb-5 md:mb-4 sm:mb-3 mb-2 px-3">
                <a href="/subject/{{ $post->subject->slug }}/detail/{{ $post->slug }}">
                <div class="flex bg-bwhite filter drop-shadow-md rounded-md p-2 md:p-3">
                    <div class="bg-balt px-2 py-2">
                        @if($post->image)
                        <img src="{{ asset('storage/' . $post->image) }}" class=" lg:w-20 md:w-16 sm:w-14 w-12 lg:h-20 md:h-16 sm:h-14 h-12 bg-balt rounded-full px-2 py-2" alt="">
                        @else
                        <img src="{{ asset('img/materi.png') }}" class=" lg:w-20 md:w-16 sm:w-14 w-12 lg:h-20 md:h-16 sm:h-14 h-12 bg-balt rounded-full px-2 py-2" alt="">
                        @endif
                    </div>
                    <div class="block">
                        <h1
                            class="font-bserif lg:text-2xl md:text-lg sm:text-base text-sm text-bblack font-bold md:ml-4 sm:ml-3 ml-2 md:mt-2 mt-1">
                                {{ $post->judul }}</h1>
                        <div class="flex">
                            <div
                                class="bg-bblue  rounded-md px-2 py-1 h-auto ml-4 mt-3">
                                <p class="font-bsans md:text-base sm:text-sm text-xs font-bold text-bwhite text-center">Bab {{ $post->bab }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                </a>
            </div>

        @endforeach


    </div>
    <div class="bg-bblue w-24 rounded-2xl mt-14 ml-2 px-2 py-2 ">
        <a href="/home" class="flex text-center text-bwhite font-bold"><i data-feather="chevron-left" class="mr-1 text-bwhite "></i> Back</a>
    </div>
</div>

@endsection
