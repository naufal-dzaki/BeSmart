{{-- @dd($post) --}}
@extends('dashboard.main')

@section('DashboardContent')
<div class="">

    <div class="max-w-screen-xl px-4 mx-auto md:items-center md:justify-center md:flex-row md:px-8 lg:px-8 py-5 mt-4 w-10/12">
        <div class="flex">

            <img src="{{ asset('img/materi.png') }}" class=" lg:w-20 md:w-16 sm:w-14 w-12 lg:h-20 md:h-16 sm:h-14 h-12 bg-balt rounded-full px-2 py-2" alt="">

            <div class="block">
                <h1 class="mb-1 font-bold text-3xl ml-6">{{ $post->judul }}</h1>
                <div class="w-full bg-bblue h-px my-6"></div>

                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>
            </div>
        </div>
        {{-- </div> --}}
    </div>
</div>
@endsection
