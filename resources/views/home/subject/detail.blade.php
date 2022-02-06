@extends('layouts.default')

@section('content')
<div class="lg:my-6 md:my-5 sm:my-4 my-3">

    <div class="max-w-screen-xl px-4 mx-auto md:items-center md:justify-center md:flex-row md:px-8 lg:px-8 py-5 mt-4 w-10/12">
        <div class="flex">

            <img src="{{ asset('img/materi.png') }}" class=" lg:w-20 md:w-16 sm:w-14 w-12 lg:h-20 md:h-16 sm:h-14 h-12 bg-balt rounded-full px-2 py-2" alt="">

            <div class="block">
                <h1 class="mb-1 font-bold text-3xl ml-6">Ini Adalah Judul Lorem ipsum dolor sit amet consectetur adipisicing elit</h1>
                <p class="ml-6 text-xl">By. <a href="">Ini gruu</a> in <a href=""></a></p>
                <div class="w-full bg-bblue h-px my-6"></div>

                <article class="my-3 fs-5">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat nulla magnam saepe deleniti, optio modi! Facere, nulla aliquid, ut officia voluptas eaque iure dignissimos aut aspernatur totam cupiditate qui voluptate omnis maxime pariatur odio repudiandae voluptates laborum? Eos nesciunt ratione, nobis error, iste repudiandae autem dolor, necessitatibus soluta esse beatae!

                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum nulla eius quod hic. Beatae quo ab veritatis quos? Reiciendis ipsum cumque neque eos molestias debitis quia nostrum porro doloribus autem eveniet quo hic nemo, placeat voluptatem ad esse sunt vero. Explicabo rem obcaecati vero ut nesciunt autem voluptas repellat ab?

                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia sit, autem a animi dolore, aperiam inventore commodi suscipit rem repellendus reiciendis architecto eos numquam et libero nisi debitis voluptas enim illo unde accusantium? Debitis vero rem iusto nulla itaque minima magni facere expedita. Sed dolores mollitia laboriosam, minus voluptatum atque.

                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Et quasi deleniti quisquam ad! Officia quo cumque quis nesciunt ratione, quidem molestias eligendi earum consequatur possimus unde? At maxime magni incidunt soluta odio voluptates pariatur repellendus velit accusamus? Eos, quis? Aliquid accusamus tempora maiores reiciendis unde nemo architecto adipisci repellendus rem.
                </article>

                <div class="border-2 px-2 py-2 rounded-2xl w-4/12 max-h-10 truncate flex flex-wrap content-center">
                    <a href="https://feathericons.com/?query=link" class="flex">
                        <i data-feather="link" class="mr-3"></i> https://feathericons.com/?query=link
                    </a>
                </div>
            </div>
        </div>


        {{-- </div> --}}
    </div>
</div>
@endsection
