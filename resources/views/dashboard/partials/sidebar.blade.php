<aside class="relative bg-sidebar h-screen w-64 hidden sm:block shadow-xl z-10">
    <div class="flex py-4 pl-6">
        <img src="{{ asset('img/white-logo.png') }}" class="w-20 mr-2" alt="">
        <a href="index.html" class="text-bwhite text-2xl font-semibold uppercase hover:text-gray-300">BeSmart</a>
    </div>
    <nav class="text-white text-base font-semibold pt-3">
        <a href="index.html" class="flex items-center text-white py-4 pl-6 nav-item {{ Request::is('dashboard') ? 'active-nav-link' : '' }}">
            <i class="fas fa-tachometer-alt mr-3"></i>
            Dashboard
        </a>
        <a href="/dashboard/biodata" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item {{ Request::is('dashboard/biodata') ? 'active-nav-link' : '' }}">
            <i data-feather="users" class="mr-3 text-bwhite "></i>
            Biodata Siswa
        </a>
        <a href="/dashboard/task" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <i data-feather="edit-3" class="mr-3 text-bwhite "></i>
            Tugas
        </a>
        <a href="/dashboard/materi" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item {{ Request::is('dashboard/materi*') ? 'active-nav-link' : '' }}">
            <i data-feather="book-open" class="mr-3 text-bwhite "></i>
            Materi
        </a>
        <a href="/dashboard/motivasi" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <i data-feather="file-text" class="mr-3 text-bwhite "></i>
            Motivasi
        </a>
        <a href="/dashboard/presensi" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <i data-feather="clock" class="mr-3 text-bwhite "></i>
            Laporan Presensi
        </a>
    </nav>
</aside>
