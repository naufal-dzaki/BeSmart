<header class="container sticky top-0 bg-white z-50">
    <nav class="flex justify-between items-center py-4 mt-4">
        {{-- logo --}}
        <div class="text-xl font-extrabold">Logo.</div>
        {{-- menu --}}
        <div>
            <ul class="hidden sm:flex flex-1 justify-end items-center gap-12 text-bookmark-blue uppercase text-xs">
                <li><a href="/">Home</a></li>
                <li><a href="/menu">Service</a></li>
                <li><a href="">Cources</a></li>
                <li><a href="">About</a></li>
            </ul>
        </div>
        <div>
            {{-- <button type="button" class="btn bg-gradient-to-r
                                from-purple-600 to-blue-500 text-white font-semibold">Login</button> --}}
            <a href="/login" class="btn bg-gradient-to-r
                                from-purple-600 to-blue-500 text-white font-semibold">Login</a>
            <a href="/register" class="btn rounded-none">Register</a>
        </div>
    </nav>
</header>
