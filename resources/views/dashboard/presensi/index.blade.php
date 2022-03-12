{{-- @dd($materi) --}}
@extends('dashboard.main')

@section('DashboardContent')
    <h1 class="text-3xl text-black pb-4">Dashboard</h1>

    @if (session()->has('success'))
        <div class="alert shadow-lg bg-green-400">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span>
                    {{ session('success') }}
                </span>
            </div>
        </div>
    @endif

    <div class="overflow-x-auto w-full bg-bwhite">
        <table class="table table-compact w-full">
            <thead>
                <tr>
                    <th></th>
                    <th>Nama</th>
                    <th>Tanggal</th>
                    <th>Jam Masuk</th>
                    <th>Jam Keluar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($presensi as $item)
                    <tr>
                        <th>{{ $loop->iteration }}</th>
                        <td>{{ $item->user->name }}</td>
                        <td>{{ $item->tgl }}</td>
                        <td>{{ $item->jam_masuk }}</td>
                        <td>{{ $item->jam_keluar }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="bg-bblue w-36 rounded-lg mt-2 ml-2 px-2 py-2 ">
        <a href="{{ route('cetak-laporan') }}" class="flex text-center text-bwhite font-bold"><i data-feather="printer" class="mr-1 text-bwhite "></i> Cetak Laporan </a>
    </div>
@endsection
