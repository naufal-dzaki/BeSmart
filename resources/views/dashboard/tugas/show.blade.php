{{-- @dd($posts) --}}
@extends('dashboard.main')

@section('DashboardContent')
@include('dashboard.theme')
<div class="lg:my-6 md:my-5 sm:my-4 my-3">

    <div class="max-w-screen-xl px-4 mx-auto md:items-center md:justify-center md:flex-row md:px-8 lg:px-8 py-5 mt-4 w-10/12">


        <h1 class="mb-1 font-bold text-4xl">{{ $motivation->judul }}</h1>
        <p class="text-base text-gray-500 mb-5">Di Buat {{ $motivation->created_at->diffForHumans() }}</p>
        <img src="{{asset('storage/' . $motivation->image)}}" class="h-64 bg-cover lg:rounded-lg lg:h-full mb-5 max-w-screen-lg min-w-full max-h-96" alt="">

        <article class="my-3 fs-5">
        {!! $motivation->body !!}
        </article>

        {{-- </div> --}}
        <div class="bg-bblue w-24 rounded-2xl mt-8 px-2 py-2 ">
            <a href="/home" class="flex text-center text-bwhite font-bold"><i data-feather="chevron-left" class="mr-1 text-bwhite "></i> Back</a>
        </div>
    </div>
</div>
@endsection
