@extends('dashboard.main')

@section('DashboardContent')
    @include('dashboard.theme')
    <p>{{ $motivation->id }} </p>
    <h1 class="text-3xl text-black pb-4">Edit Motivasi</h1>

    <div class="form-control ">
        <form method="post" action="/dashboard/motivasi/{{ $motivation->slug }} " enctype="multipart/form-data">
            @method('put')
            @csrf
            <input type="hidden" name="id" value="{{ $motivation->id }}">
            <div class="w-full mb-3 mt-4">
                <label class="label label-text mb-1 pb-1" for="judul">
                    Judul
                </label>
                <input type="text" placeholder="Type here" class="input input-bordered w-10/12" id="judul"
                    name="judul" required autofocus value="{{ old('judul', $motivation->judul) }}">
                @error('judul')
                    <div class="alert-error">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            {{-- <div class="w-full mb-3 mt-4">
            <label class="label label-text mb-1 pb-1" for="slug">
              slug
            </label>
            <input type="text" class="input input-bordered w-10/12" id="slug" name="slug" value="{{ old('slug', $motivation->slug) }}">
            @error('slug')
            <div class="alert-error">
                {{ $message }}
            </div>
            @enderror
        </div> --}}

            <div class="flex justify-start">
                <div class="mb-3">
                    <label for="image" class="form-label inline-block mb-2 text-gray-700">Gambar</label>
                    <img class="img-preview mb-2 max-w-1/2  overflow-hidden">
                    <input
                        class="form-control
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
              focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                        type="file" id="image" name="image" onchange="previewImage()">
                    @error('image')
                        <div class="alert-error">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="w-full mb-3 mt-4">
                <label class="label label-text mb-1 pb-1" for="body">
                    body
                </label>
                <input type="hidden" id="body" name="body" value="{{ old('body', $motivation->body) }}">
                <trix-editor input="body"></trix-editor>
                @error('body')
                    <div class="alert-error">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <input type="hidden" id="tipe" name="tipe" value="1">

            <button class="btn btn-primary"><i data-feather="file-plus" class="mr-2 text-bwhite "></i>Update
                Motivasi</button>
        </form>
    </div>

    <script>
        const judul = document.querySelector('#judul');
        const slug = document.querySelector('#slug');

        judul.addEventListener('change', function() {
            fetch('/dashboard/motivasi/checkSlug?judul=' + judul.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        });

        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();
        })

        function previewImage() {
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
