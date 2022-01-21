@extends('layouts.default')

@section('content')
    <div class="container">
        <div class=" w-full h-auto px-2 py-1 mt-8">
            <div class="flex">
                <div class="bg-balt lg:w-24 md:w-20 sm:w-16 w-14 my-1 mr-1">
                    <img src="img/user-profille.png" class="lg:w-24 md:w-20 sm:w-16 w-14" alt="">
                </div>
                <div class="block">
                    <h1
                        class="font-bserif lg:text-4xl md:text-3xl sm:text-2xl text-xl text-bblue font-bold md:ml-4 sm:ml-3 ml-2 md:mt-2 mt-1">
                            Muhammad Bilal</h1>
                    <div class="flex">
                        <div
                            class="bg-bblue  rounded-md md:w-16 sm:w-14 w-12 py-1 h-auto ml-4 mt-3">
                            <p class="font-bsans md:text-base sm:text-sm text-xs font-bold text-bwhite text-center">Siswa
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="pt-6">
            <table class="table-auto md:text-xl text-lg">
                <tr>
                    <td>TTL</td>
                    <td>:</td>
                    <td>Surabaya, 09 Mei 2003</td>
                </tr>
                <tr>
                    <td>NISN</td>
                    <td>:</td>

                    <td>988123098</td>
                </tr>
                <tr>
                    <td>No. Telp</td>
                    <td>:</td>
                    <td>089230123948</td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td>Laki-Laki</td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td>:</td>
                    <td>Islam</td>
                </tr>
                <tr>
                    <td class="font-semibold"><br>Nama Orang tua</td>
                </tr>
                <tr>
                    <td>Ayah</td>
                    <td>:</td>
                    <td>Bapak</td>
                </tr>
                <tr>
                    <td>Ibu</td>
                    <td>:</td>
                    <td>Emak</td>
                </tr>
            </table>
        </div>
    </div>
@endsection