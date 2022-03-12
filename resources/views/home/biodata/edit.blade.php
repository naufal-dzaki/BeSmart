
@extends('layouts.default')

@section('content')

<div class="container w-10/12 border border-gray-200 rounded-lg my-8 py-4">

    <form method="post" action="{{ route('biodata.update', $biodata) }}" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="w-10/12 ml-6">

            <div class="flex justify-start">
                <div class="mb-3">
                  <label for="image" class="form-label inline-block mb-2 text-gray-700">Gambar</label>
                  <input type="hidden" name="oldImage" value="{{ $biodata->image }}">
                  @if ($biodata->image)
                  <img src="{{ asset('storage/' . $biodata->image) }}" class="img-preview mb-2 max-w-1/2  overflow-hidden block">
                  @else
                  <img class="img-preview mb-2 max-w-1/2  overflow-hidden">
                  @endif
                  <input class="form-control
                  block
                  w-full
                  px-3
                  py-1.5
                  text-base
                  font-normal
                  text-gray-700
                  bg-white
                  border border-solid border-gray-300
                  rounded
                  transition
                  ease-in-out
                  m-0
                  focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" type="file" id="image" name="image" onchange="previewImage()">
                  @error('image')
                    <div class="alert-error">
                        {{ $message }}
                    </div>
                  @enderror
                </div>
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

<script>
    function previewImage(){
        const image = document.querySelector('#image');
        const ImgPreview = document.querySelector('.img-preview');

        ImgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent) {
            ImgPreview.src = oFREvent.target.result;
        }
    }
</script>
@endsection


