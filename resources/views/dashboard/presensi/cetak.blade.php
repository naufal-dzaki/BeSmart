<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    {{-- feather icon --}}
    <script src="{{ asset('https://unpkg.com/feather-icons') }}"></script>


    <title>Laporan Absensi</title>
</head>

<body class="bg-bwhite">
        <section>
            <div class="container text-center w-2/3">
                <small>Tanggal : {{ date('d-M-Y') }}</small>
                <div class="h-2 bg-gray-500"></div>
                <h1>Data Presensi Siswa</h1>
                <div class="flex flex-col justify-center items-center">
                    <div class="max-h-80 overflow-x-auto overflow-x-auto sm:-mx-6 lg:-mx-8 w-full">
                    <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="overflow-hidden">
                        <table class="min-w-full border text-center">
                            <thead class="border-b">
                            <tr>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 border-r">
                                Nama
                                </th>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 border-r">
                                Tanggal
                                </th>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 border-r">
                                Jam Masuk
                                </th>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">
                                Jam Keluar
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($presensi as $item)
                                        <tr class="border-b">
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 border-r">
                                            {{ $item->user->name }}
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap border-r">
                                            {{ $item->tgl }}
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap border-r">
                                            {{ $item->jam_masuk }}
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            {{ $item->jam_keluar }}
                                        </td>
                                        </tr>
                                @endforeach
                            </tbody>
                        </table>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </section>
</body>

</html>
