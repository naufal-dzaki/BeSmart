@extends('layouts.default')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

<style>
    #clock {
        font-size: 50px;
        text-align: center;
        padding-top: 20px;
        padding-bottom: 20px;
    }
    #date {
        font-size: 30px;
        text-align: left;
        padding-top: 15px;
        padding-bottom: 15px;
    }
</style>




<div class=" bg-bwhite lg:mx-12 md:mx-10 sm:mx-8 mx-6 lg:my-6 md:my-5 sm:my-4 my-3">

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
                        @if ($item->user->name == auth()->user()->name)
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
                        @endif
                    @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

    <div class="flex sm:flex-row flex-col justify-center items-center mt-4">

        <div class="block w-3/5">
            <div class="bg-bblue rounded-t-lg mb-1">
                <p class="text-bwhite ml-6" id="date" onclick="currentTime()"></p>
            </div>
            <div class="bg-balt rounded-b-lg">
                <p class="text-bblack" id="clock" onclick="currentTime()"></p>
            </div>

            <div class="flex flex-wrap justify-center items-center">
                <div class="flex flex-col justify-center items-center">
                    <form action="{{ route('post-presensi-masuk') }}" method="post">
                        @csrf
                        <button class="bg-bblue rounded-xl mt-4 ml-2 px-4 py-2 text-center text-bwhite text-2xl font-medium" type="submit">Presensi Masuk</button>
                    </form>
                </div>
                <div class="flex flex-col justify-center items-center">
                    <form action="{{ route('post-presensi-keluar') }}" method="post">
                        @csrf
                        <button class="bg-bblue rounded-xl mt-4 ml-2 px-4 py-2 text-center text-bwhite text-2xl font-medium" type="submit">Presensi Keluar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="{{ asset('js/date.js') }}"></script>
    <script src="{{ asset('AdminLte/plugins/bootstrap/js/bootstrap.js') }}"></script>
    <script src="{{ asset('AdminLte/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    @include('sweetalert::alert')

</div>
@endsection
