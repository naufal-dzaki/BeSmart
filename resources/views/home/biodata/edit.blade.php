
@extends('layouts.default')

@section('content')

<div class="container w-10/12 border border-gray-200 rounded-lg my-8 py-4">

    <div class=" w-full h-auto px-2 py-1 ml-4 mt-5 mb-4">
        <div class="flex">
            <div class="bg-balt lg:w-24 md:w-20 sm:w-16 w-14 my-1 mr-1">
                <img src="/img/{{ $biodata->image }}" class="lg:w-24 md:w-20 sm:w-16 w-14" alt="">
            </div>
            <div class="block">
                <h1
                class="font-bserif lg:text-4xl md:text-3xl sm:text-2xl text-xl text-bblue font-bold md:ml-4 sm:ml-3 ml-2 md:mt-2 mt-1">
                {{ $biodata->user->name }}</h1>
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

    <form method="post" action="{{ route('biodata.update', $biodata) }}">
        @method('put')
        @csrf
        <div class="w-10/12 ml-6">

            <div class="my-4">
                <label for="slug" class="block font-medium text-sm text-gray-700"> slug </label>
                <input type="text" class="w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" id="slug" name="slug" required autofocus value="{{ old('slug', $biodata->slug) }}">
                @error('slug')
                <div class="alert-error">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="my-4">
                <label for="image" class="block font-medium text-sm text-gray-700"> image </label>
                <input type="text" class="w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" id="image" name="image" required autofocus value="{{ old('image', $biodata->image) }}">
                @error('image')
                <div class="alert-error">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="my-4">
                <label for="tgl_lahir" class="block font-medium text-sm text-gray-700"> tgl_lahir </label>
                <input type="text" class="w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" id="tgl_lahir" name="tgl_lahir" required autofocus value="{{ old('tgl_lahir', $biodata->tgl_lahir) }}">
                @error('tgl_lahir')
                <div class="alert-error">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="my-4">
                <label for="nisn" class="block font-medium text-sm text-gray-700"> nisn </label>
                <input type="number" class="w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" id="nisn" name="nisn" required autofocus value="{{ old('nisn', $biodata->nisn) }}">
                @error('nisn')
                <div class="alert-error">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="my-4">
                <label for="no_hp" class="block font-medium text-sm text-gray-700"> No. HP </label>
                <input type="number" class="w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" id="no_hp" name="no_hp" required autofocus value="{{ old('no_hp', $biodata->no_hp) }}">
                @error('no_hp')
                <div class="alert-error">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="my-4">
                <label for="jenis_kelamin" class="block font-medium text-sm text-gray-700"> Jenis Kelamin </label>
                <input type="text" class="w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" id="jenis_kelamin" name="jenis_kelamin" required autofocus value="{{ old('jenis_kelamin', $biodata->jenis_kelamin) }}">
                @error('jenis_kelamin')
                <div class="alert-error">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="my-4">
                <label for="agama" class="block font-medium text-sm text-gray-700"> Agama </label>
                <input type="text" class="w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" id="agama" name="agama" required autofocus value="{{ old('agama', $biodata->agama) }}">
                @error('agama')
                <div class="alert-error">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="my-4">
                <label for="nama_ayah" class="block font-medium text-sm text-gray-700"> Nama Ayah </label>
                <input type="text" class="w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" id="nama_ayah" name="nama_ayah" required autofocus value="{{ old('nama_ayah', $biodata->nama_ayah) }}">
                @error('nama_ayah')
                <div class="alert-error">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="my-4">
                <label for="nama_ibu" class="block font-medium text-sm text-gray-700"> Nama Ibu </label>
                <input type="text" class="w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" id="nama_ibu" name="nama_ibu" required autofocus value="{{ old('nama_ibu', $biodata->nama_ibu) }}">
                @error('nama_ibu')
                <div class="alert-error">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <button type="submit" class="bg-bblue rounded-2xl mt-6 ml-2 px-3 py-2 flex text-center text-bwhite font-bold">Simpan</button>

        </div>

    </form>
</div>






@endsection


