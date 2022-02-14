
@extends('layouts.default')

@section('content')
<!-- component -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<div class="bg-white p-8 rounded-xl shadow">
  <div class="m-auto space-y-6">
    <div class="flex gap-4 bg-red-100 p-4 rounded-md">
        <div class="w-max">
            <div class="h-10 w-10 flex rounded-full bg-gradient-to-b from-red-100 to-red-300 text-red-700">
              <span class="material-icons material-icons-outlined m-auto" style="font-size:20px">gpp_bad</span>
            </div>
        </div>
        <div class="space-y-1 text-sm">
            <h6 class="font-medium text-red-900">Fatal error</h6>
            <p class="text-red-700 leading-tight">Your internet connection was lost, we can't upload your photo.</p>
        </div>
    </div>
    <div class="flex gap-4 bg-green-100 p-4 rounded-md">
        <div class="w-max">
            <div class="h-10 w-10 flex rounded-full bg-gradient-to-b from-green-100 to-green-300 text-green-700">
              <span class="material-icons material-icons-outlined m-auto" style="font-size:20px">check_circle</span>
            </div>
        </div>
        <div class="space-y-1 text-sm">
            <h6 class="font-medium text-green-900">Fatal error</h6>
            <p class="text-green-700 leading-tight">Your internet connection was lost, we can't upload your photo.</p>
        </div>
    </div>

  </div>
</div>

<div class="container w-10/12 border border-gray-200 rounded-lg my-8 py-8">
    <form method="post" action="biodata/{{ $biodata->slug }}">
        @csrf
        @method('PATCH')
        <div class="w-10/12 ml-6">

            <div class="my-4">
                <label for="TTL" class="block font-medium text-sm text-gray-700"> TTL </label>
                <input type="text" class="w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" id="TTL" name="TTL" required autofocus value="{{ old('TTL', $biodata->TTL) }}">
            </div>

            <div class="my-4">
                <label for="NISN" class="block font-medium text-sm text-gray-700"> NISN </label>
                <input type="number" class="w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" id="NISN" name="NISN" required autofocus value="{{ old('NISN', $biodata->NISN) }}">
            </div>

            <div class="my-4">
                <label for="no_hp" class="block font-medium text-sm text-gray-700"> No. HP </label>
                <input type="number" class="w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" id="no_hp" name="no_hp" required autofocus value="{{ old('no_hp', $biodata->NISN) }}">
            </div>

            <div class="my-4">
                <label for="jenis_kelamin" class="block font-medium text-sm text-gray-700"> Jenis Kelamin </label>
                <input type="number" class="w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" id="jenis_kelamin" name="jenis_kelamin" required autofocus value="{{ old('jenis_kelamin', $biodata->NISN) }}">
            </div>

            <div class="my-4">
                <label for="agama" class="block font-medium text-sm text-gray-700"> Agama </label>
                <input type="number" class="w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" id="agama" name="agama" required autofocus value="{{ old('agama', $biodata->NISN) }}">
            </div>

            <div class="my-4">
                <label for="nama_ayah" class="block font-medium text-sm text-gray-700"> Nama Ayah </label>
                <input type="number" class="w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" id="nama_ayah" name="nama_ayah" required autofocus value="{{ old('nama_ayah', $biodata->NISN) }}">
            </div>

            <div class="my-4">
                <label for="nama_ibu" class="block font-medium text-sm text-gray-700"> Nama Ibu </label>
                <input type="number" class="w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" id="nama_ibu" name="nama_ibu" required autofocus value="{{ old('nama_ibu', $biodata->NISN) }}">
            </div>

            <button type="submit" class="btn btn-primary">Update Biodata</button>

        </div>

    </form>
</div>






@endsection


