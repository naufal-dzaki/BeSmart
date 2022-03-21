{{-- @dd($posts) --}}
@extends('dashboard.main')

@section('DashboardContent')
@include('dashboard.theme')
<div>
    <h1 class="mb-1 font-bold text-4xl">{{ $motivation->judul }}</h1>
    <p class="text-base text-gray-500 mb-5">Di Buat {{ $motivation->created_at->diffForHumans() }}</p>
    <img src="{{ asset('storage/' . $motivation->image) }}" class="h-64 bg-cover lg:rounded-lg lg:h-full mb-5 max-w-screen-lg min-w-full max-h-96" alt="">

    <article class="my-3 fs-5">
    {!! $motivation->body !!}
    </article>
</div>
@endsection
