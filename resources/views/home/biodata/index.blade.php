{{-- @dd($biodata ?? '') --}}
@extends('layouts.default')

@section('content')
    <div class="container w-10/12 border border-gray-200 rounded-lg my-8 py-8">

        @foreach ($biodata ?? '' as $data)

            <div class="relative w-full">
                <div class="absolute lg:right-8 md:right-7 sm:right-6 right-5  md:top-0 top-3 bg-bblue  rounded-2xl
                w-auto py-1 h-auto ml-4 mt-3">
                    <a href="/biodata/{{ $data->slug }}/edit" class="flex text-center text-bwhite font-bold px-4 py-1"><i data-feather="edit" class="mr-1 text-bwhite "></i> Edit</a>
                </div>
            </div>

            <div class=" w-full h-auto px-2 py-1 ml-4">
                <div class="flex">
                    <div class="bg-balt lg:w-24 md:w-20 sm:w-16 w-14 my-1 mr-1">
                        <img src="img/{{ $data->image }}" class="lg:w-24 md:w-20 sm:w-16 w-14" alt="">
                    </div>
                    <div class="block">
                        <h1
                        class="font-bserif lg:text-4xl md:text-3xl sm:text-2xl text-xl text-bblue font-bold md:ml-4 sm:ml-3 ml-2 md:mt-2 mt-1">
                        {{ $data->user->name }}</h1>
                        <div class="flex">
                            <div
                            class="bg-bblue  rounded-md md:w-16 sm:w-14 w-12 py-1 h-auto ml-4 mt-3">
                            <p class="font-bsans md:text-base sm:text-sm text-xs font-bold text-bwhite text-center">Siswa
                            </p>
                        </div>
                    </div>
                </div>
                </div>
            </div>


            <div class="pt-6 ml-4">
                <table class="table-auto md:text-xl text-lg">
                    <tr>
                        <td>TTL</td>
                        <td>:</td>
                        <td> {{ $data->TTL }}</td>
                    </tr>
                    <tr>
                        <td>NISN</td>
                        <td>:</td>
                        <td> {{ $data->NISN }}</td>
                    </tr>
                    <tr>
                        <td>No. Telp</td>
                        <td>:</td>
                        <td> {{ $data->no_hp }}</td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td> {{ $data->jenis_kelamin }}</td>
                    </tr>
                    <tr>
                        <td>Agama</td>
                        <td>:</td>
                        <td> {{ $data->agama }}</td>
                    </tr>
                    <tr>
                        <td class="font-semibold"><br>Nama Orang tua</td>
                    </tr>
                    <tr>
                        <td>Ayah</td>
                        <td>:</td>
                        <td> {{ $data->nama_ayah }}</td>
                    </tr>
                    <tr>
                        <td>Ibu</td>
                        <td>:</td>
                        <td> {{ $data->nama_ibu }}</td>
                    </tr>
                </table>
            </div>

        @endforeach
    </div>
@endsection
