@extends('layouts.default')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

<style>
    #clock {
        font-size: 50px;
        text-align: center;
        padding-top: 20px;
        padding-bottom: 20px;
    }
    #date {
        font-size: 30px;
        text-align: left;
        padding-top: 15px;
        padding-bottom: 15px;
    }
</style>

<table>
    <thead>
        <tr>
            <td>Nama</td>
            <td>Tanggal</td>
            <td>Jam Masuk</td>
            <td>Jam Keluar</td>
            <td>Lama Sekolah</td>
        </tr>
    </thead>
    <tbody>
        @foreach ($presensi as $item)
        @if ($item->user->name == auth()->user()->name)
          <tr>
            <td>{{ $item->user->name }}</td>
            <td>{{ $item->tgl }}</td>
            <td>{{ $item->jam_masuk }}</td>
            <td>{{ $item->jam_keluar }}</td>
            <td>{{ $item->jam_kerja }}</td>
          </tr>
        @endif
        @endforeach
    </tbody>
</table>

<div class=" bg-bwhite lg:mx-12 md:mx-10 sm:mx-8 mx-6 lg:my-6 md:my-5 sm:my-4 my-3">

    <div class="flex sm:flex-row flex-col justify-center items-center">
        <div class="block w-3/5">
            <div class="bg-bblue rounded-t-lg mb-1">
                <p class="text-bwhite ml-6" id="date" onclick="currentTime()"></p>
            </div>
            <div class="bg-balt rounded-b-lg">
                <p class="text-bblack" id="clock" onclick="currentTime()"></p>
            </div>
        </div>
    </div>

    <div class="flex flex-wrap">
        <div class="flex flex-col justify-center items-center">
            <form action="{{ route('post-presensi-masuk') }}" method="post">
                @csrf
                <button class="bg-bblue rounded-xl mt-14 ml-2 px-4 py-2 text-center text-bwhite text-2xl font-medium" type="submit">Presensi Masuk</button>
            </form>
        </div>
        <div class="flex flex-col justify-center items-center">
            <form action="{{ route('post-presensi-keluar') }}" method="post">
                @csrf
                <button class="bg-bblue rounded-xl mt-14 ml-2 px-4 py-2 text-center text-bwhite text-2xl font-medium" type="submit">Presensi Keluar</button>
            </form>
        </div>
    </div>


    {{-- <div class="block">
    </div> --}}

    <script src="{{ asset('js/date.js') }}"></script>

</div>
@endsection
