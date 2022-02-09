@extends('layouts.default')

@section('content')
<div class="lg:my-6 md:my-5 sm:my-4 my-3">

    <div class="max-w-screen-xl px-4 mx-auto md:items-center md:justify-center md:flex-row md:px-8 lg:px-8 py-5 mt-4 w-10/12">
        <div class="flex">

            <img src="{{ asset('img/materi.png') }}" class=" lg:w-20 md:w-16 sm:w-14 w-12 lg:h-20 md:h-16 sm:h-14 h-12 bg-balt rounded-full px-2 py-2" alt="">

            <div class="block">
                <h1 class="mb-1 font-bold text-3xl ml-6">{{ $posts->judul }}</h1>
                <p class="ml-6 text-base text-gray-500">{{ $posts->author->name }} {{ $posts->created_at->diffForHumans() }}
                <div class="w-full bg-bblue h-px my-6"></div>

                <article class="my-3 fs-5">
                    {!! $posts -> body !!}
                </article>

                <div class="border-2 px-2 py-2 rounded-2xl w-3/12 max-h-10 truncate flex flex-wrap content-center">
                    <a href="{{ $posts->link }}" class="flex">
                        <i data-feather="link" class="mr-3"></i> {{ $posts->link }}
                    </a>
                </div>
            </div>
        </div>


        {{-- </div> --}}
    </div>
</div>
@endsection
