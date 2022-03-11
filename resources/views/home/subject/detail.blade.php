@extends('layouts.default')

@section('content')
    <div class="lg:my-6 md:my-5 sm:my-4 my-3">

        <div
            class="max-w-screen-xl px-4 mx-auto md:items-center md:justify-center md:flex-row md:px-8 lg:px-8 py-5 mt-4 w-10/12">
            <div class="flex">

                @if($posts->image)
                    <img src="{{ asset('storage/' . $posts->image) }}" class=" lg:w-20 md:w-16 sm:w-14 w-12 lg:h-20 md:h-16 sm:h-14 h-12 bg-balt rounded-full px-2 py-2" alt="">
                @else
                    <img src="{{ asset('/img/materi.png') }}" class=" lg:w-20 md:w-16 sm:w-14 w-12 lg:h-20 md:h-16 sm:h-14 h-12 bg-balt rounded-full px-2 py-2" alt="">
                @endif

                <div class="block">
                    <h1 class="mb-1 font-bold text-3xl ml-6">{{ $posts->judul }}</h1>
                    <p class="ml-6 text-base text-gray-500">Dibuat oleh {{ $posts->author->name }}
                        {{ $posts->created_at->diffForHumans() }}
                    <div class="w-full bg-bblue h-px my-6 min-w-full"></div>

                    <article class="my-3 fs-5">
                        {!! $posts->body !!}
                    </article>

                    <hr class="mt-3">
                    <div class="mt-5">
                        @foreach ($posts->chats as $item)
                            <div class="flex gap-x-5 my-4">
                                <div>
                                    <img src="{{ asset('img/user-profille.png') }}">
                                </div>
                                <div>
                                    <h3 class="font-semibold">{{ $item->user->name }}</h3>
                                    <p>{{ $item->message }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <form  action="{{ route('chat.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                        <input type="hidden" name="post_id" value="{{ $posts->id }}">
                        {{-- cht --}}
                        <div class="mt-3">
                            <textarea name="message" rows="3" class="w-full"></textarea>
                            <button type="submit"
                                class="border-2 border-blue-500 rounded-lg font-bold text-white px-4 py-3 transition duration-300 ease-in-out bg-blue-500 hover:bg-white hover:text-black">
                                Kirim
                            </button>
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>
@endsection
