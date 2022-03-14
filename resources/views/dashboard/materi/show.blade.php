{{-- @dd($posts) --}}
@extends('dashboard.main')

@section('DashboardContent')
@include('dashboard.theme')
<div class="">

    <div class="mt-4 w-10/12">
        <div class="flex">
            @if($posts->image)
            <img src="{{ asset('storage/' . $posts->image) }}" class=" lg:w-20 md:w-16 sm:w-14 w-12 lg:h-20 md:h-16 sm:h-14 h-12 bg-balt overflow-hidden " alt="">
            @else
            <img src="{{ asset('img/materi.png') }}" class=" lg:w-20 md:w-16 sm:w-14 w-12 lg:h-20 md:h-16 sm:h-14 h-12 bg-balt rounded-full px-2 py-2" alt="">
            @endif

            <div class="block">
                <h1 class="mb-1 font-bold text-3xl ml-5">{{ $posts->judul }}</h1>

                <div class="flex ml-5">
                    <div class="bg-yellow-400 p-2 mr-1 rounded-md">
                        <a href="/dashboard/materi/{{ $posts->slug }}/edit" class="flex text-center text-bwhite font-bold"><i data-feather="edit" class="text-bwhite mr-2"></i> Edit Materi</a>
                    </div>

                    <form action="/dashboard/materi/{{ $posts->slug }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="bg-red-400 p-2 mr-1 rounded-md flex text-center text-bwhite font-bold border-0" onclick="return confirm('are you sure?')">
                            <span data-feather="trash-2"></span> Delete Materi
                        </button>
                    </form>
                </div>

                <div class="w-full bg-bblue h-px my-4"></div>

                <article class="my-3 fs-5">
                    {!! $posts->body !!}
                </article>
            </div>
        </div>
        {{-- </div> --}}
    </div>
</div>
@endsection
