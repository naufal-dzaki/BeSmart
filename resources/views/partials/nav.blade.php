<header class="container sticky top-0 bg-white z-50">
    <nav class="flex justify-between items-center py-4 mt-4">
        {{-- logo --}}
        <div class="text-3xl font-extrabold font-bserif">BeSmart</div>
        {{-- menu --}}
        <div class="font-bserif">
            <ul class="hidden sm:flex flex-1 justify-end items-center gap-12 text-bookmark-blue uppercase text-xs">
                <li><a href="/" class="text-base">Home</a></li>
                <li><a href="/menu" class="text-base" >Service</a></li>
                <li><a href="" class="text-base" >Cources</a></li>
                <li><a href="" class="text-base" >About</a></li>
            </ul>
        </div>
        <div class="flex gap-x-3 font-bserif">
            {{-- <button type="button" class="btn bg-gradient-to-r
                                from-purple-600 to-blue-500 text-white font-semibold">Login</button> --}}
            <a href="/login" class="btn bg-gradient-to-r from-purple-600 to-blue-500 text-white font-semibold">Login</a>
            <a href="/register" class="btn ">Register</a>
        </div>
    </nav>
</header>
