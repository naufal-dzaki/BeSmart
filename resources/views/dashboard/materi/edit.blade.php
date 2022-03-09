@extends('dashboard.main')

@section('DashboardContent')
    <h1 class="text-3xl text-black pb-4">Edit Materi</h1>

    <div class="form-control ">
        <form method="post" action="/dashboard/materi/{{ $post->slug }}"  enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="w-full mb-3 mt-4">
                <label class="label label-text mb-1 pb-1" for="judul">
                  Judul
                </label>
                <input type="text" placeholder="Type here" class="input input-bordered w-10/12" id="judul" name="judul" required autofocus value="{{ old('judul', $post->judul) }}">
                @error('judul')
                <div class="alert-error">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="w-full mb-3 mt-4">
                <label class="label label-text mb-1 pb-1" for="slug">
                  slug
                </label>
                <input type="text" class="input input-bordered w-10/12" id="slug" name="slug" value="{{ old('slug', $post->slug) }}">
                @error('slug')
                <div class="alert-error">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="flex justify-start">
                <div class="mb-3">
                  <label for="image" class="form-label inline-block mb-2 text-gray-700">Gambar</label>
                  <input type="hidden" name="oldImage" value="{{ $post->image }}">
                  @if ($post->image)
                  <img src="{{ asset('storage/' . $post->image) }}" class="img-preview mb-2 max-w-1/2  overflow-hidden block">
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

            <div class="w-10/12">
                <label class="label" for="subject">
                  <span class="label-text">Mata Pelajaran</span>
                </label>
                <select class="select select-bordered" name="subject_id">
                    @foreach ($subjects as $subject)
                    @if ( old('subject_id', $post->subject_id) == $subject->id)
                    <option value="{{ $subject->id }}" selected>{{ $subject->name }}</option>
                    @else
                    <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                    @endif
                    @endforeach
                </select>
            </div>

            <div class="w-full mb-3 mt-4">
                <label class="label label-text mb-1 pb-1" for="bab">
                  bab
                </label>
                <input type="number" placeholder="Type here" class="input input-bordered w-10/12" id="bab" name="bab" required value="{{ old('bab', $post->bab) }}">
                @error('bab')
                <div class="alert-error">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="w-full mb-3 mt-4">
                <label class="label label-text mb-1 pb-1" for="body">
                  body
                </label>
                <input type="hidden" id="body" name="body" value="{{ old('body', $post->body) }}">
                <trix-editor input="body"></trix-editor>
                @error('body')
                <div class="alert-error">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <input type="hidden" id="tipe" name="tipe" value="0">

            <button class="btn btn-primary">Simpan Materi</button>
        </form>
    </div>

    <script>
        const judul = document.querySelector('#judul');
        const slug = document.querySelector('#slug');

        judul.addEventListener('change', function(){
            fetch('/dashboard/materi/checkSlug?judul=' + judul.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        });

        document.addEventListener('trix-file-accept', function(e){
            e.preventDefault();
        })

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
