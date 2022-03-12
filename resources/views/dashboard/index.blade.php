@extends('dashboard.main')

@section('DashboardContent')
    <div>
        <div class="flex justify-item-between gap-x-5">
            {{-- siswa --}}
            <div
                class="flex gap-x-5 text-blue bg-white lg:order-1 p-3 lg:row-span-1 2xl:row-span-1 lg:col-span-2 rounded-lg shadow-xl mb-3 lg:mb-0">
                <div>
                    <h1 class="text-bold font-xl">Siswa</h1>
                    <p>{{ $count['user'] }} </p>
                </div>
                <div class="ml-10">
                    <img src="{{ asset('img/user-profille.png') }} " alt="">
                </div>
            </div>
            {{-- materi --}}
            <div
                class="flex gap-x-5 text-blue bg-white lg:order-1 p-3 lg:row-span-1 2xl:row-span-1 lg:col-span-2 rounded-lg shadow-xl mb-3 lg:mb-0">
                <div>
                    <h1 class="text-bold font-xl">Materi</h1>
                    {{ $count['materi'] }}
                </div>
                <div class="ml-10">
                    <img src="{{ asset('img/efisien.png') }} " class="w-3/5">
                </div>
            </div>
            {{-- tugas --}}
            <div
                class="flex gap-x-5 text-blue bg-white lg:order-1 p-3 lg:row-span-1 2xl:row-span-1 lg:col-span-2 rounded-lg shadow-xl mb-3 lg:mb-0">
                <div>
                    <h1 class="text-bold font-xl">Tugas</h1>
                    {{ $count['tugas'] }}
                </div>
                <div class="ml-10">
                    <img src="{{ asset('img/materi.png') }} " class="w-12">
                </div>
            </div>
        </div>
        <div class="flex gap-x-5 ">
            {{-- content 1 --}}
            <div class="w-4/5">
                {{-- tugas --}}
                <div
                    class="text-blue bg-white lg:order-1 p-3 lg:row-span-1 2xl:row-span-1 lg:col-span-2 rounded-lg shadow-xl mb-3 lg:mb-0">
                    <div class="overflow-x-auto w-full">
                        <h1 class="text-2xl font-bold">Tugas</h1>
                        <table class="table table-compact w-full">
                            <td>
                                <tr class="font-bold">
                                    <th></th>
                                    <th>Mata Pelajaran</th>
                                    <th>Judul</th>
                                    <th class="">Subab</th>
                                </tr>
                            </td>
                            <tbody>
                                @foreach ($tugas as $tugas)
                                    <tr>
                                        <th>{{ $loop->iteration }}</th>
                                        <td>{{ $tugas->subject->name }}</td>
                                        <td>{{ $tugas->judul }}</td>
                                        <td>{{ $tugas->bab }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                {{-- materi --}}
                <div
                    class="text-blue bg-white lg:order-1 p-3 lg:row-span-1 2xl:row-span-1 lg:col-span-2 rounded-lg shadow-xl mb-3 lg:mb-0">
                    <div class="overflow-x-auto w-full">
                        <h1 class="text-2xl font-bold">Materi</h1>
                        <table class="table table-compact w-full">
                            <td>
                                <tr class="font-bold">
                                    <th></th>
                                    <th>Mata Pelajaran</th>
                                    <th>Judul</th>
                                    <th class="">Subab</th>
                                </tr>
                            </td>
                            <tbody>
                                @foreach ($materi as $materi)
                                    <tr>
                                        <th>{{ $loop->iteration }}</th>
                                        <td>{{ $materi->subject->name }}</td>
                                        <td>{{ $materi->judul }}</td>
                                        <td>{{ $materi->bab }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                {{-- motivasi --}}
                <div
                    class="text-blue bg-white lg:order-1 p-3 lg:row-span-1 2xl:row-span-1 lg:col-span-2 rounded-lg shadow-xl mb-5 lg:mb-0">
                    <table class="table table-compact w-full">
                        <h1 class="text-2xl font-bold">Motivasi</h1>
                        <thead>
                            <tr>
                                <th class="w-5">No</th>
                                <th>Judul</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($motivations as $motivation)
                                <tr>
                                    <th class="text-center">{{ $loop->iteration }}</th>
                                    <td>{{ $motivation->judul }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            {{-- content 2 --}}
            <div
                class="bg-white p-2 m-2 lg:order-3 lg:row-span-2 2xl:row-span-1 lg:col-span-1 rounded-lg shadow-xl mb-5 lg:mb-0 2xl:mb-8">
                <h1 class="text-xl font-bold ml-5">Siswa</h1>
                @foreach ($biodata as $biodata)
                    <div class="flex gap-x-5 my-2">
                        <div>
                        </div>
                        <div>
                            <img src="{{ asset('AdminLte/dist/img/user8.jpg') }}" class="w-14 h-14">
                            {{-- <p>{{ $biodata->image}} </p> --}}
                        </div>
                        <div>
                            <p>{{ $biodata->user->name }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
