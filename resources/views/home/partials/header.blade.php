<div class="filter drop-shadow bg-bwhite w-full h-auto rounded-sm px-2 py-1">
    <div class="flex">
        <div class="bg-balt lg:w-24 md:w-20 sm:w-16 w-14 my-1 mx-1">
            @if (auth()->user()->image)
                <img src="{{ asset('storage/' . auth()->user()->image) }}" class="lg:w-24 md:w-20 sm:w-16 w-14"
                    alt="">
            @else
                <img src="img/user-profille.png" class="lg:w-24 md:w-20 sm:w-16 w-14" alt="">
            @endif
        </div>

        <div class="block">
            <div class="flex">
                <h1
                    class="font-bserif lg:text-4xl md:text-3xl sm:text-2xl text-xl text-bblack font-bold md:ml-4 sm:ml-3 ml-2 md:mt-2 mt-1">
                    Hai, {{ auth()->user()->name }}</h1>

                <form action="/logout" method="post">
                    @csrf
                    <button type="submit"
                        class="border-1 absolute lg:right-8 md:right-7 sm:right-6 right-5  md:top-4 sm:top-3 top-2 font-bsans text-bblue md:text-base sm:text-sm text-xs bg-bblue"><i
                            data-feather="log-out" class="text-bblue"></i></button>
                </form>
            </div>
            <div class="flex">
                <div
                    class="bg-bblue  rounded-md md:w-16 sm:w-14 w-12 py-1 h-auto ml-4 absolute lg:left-28 md:left-24 sm:left-20 left-16 md:bottom-4 sm:bottom-3 bottom-2">
                    <p class="font-bsans md:text-base sm:text-sm text-xs font-bold text-bwhite text-center">Siswa
                    </p>
                </div>
                <h1
                    class="absolute lg:right-8 md:right-7 sm:right-6 right-5 md:bottom-4 sm:bottom-3 bottom-2 font-bsans text-bblue md:text-xl sm:text-base text-sm">
                    {{ auth()->user()->grade->grade }}</h1>
            </div>
        </div>
    </div>
</div>
