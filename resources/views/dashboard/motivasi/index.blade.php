@extends('dashboard.main')

@section('DashboardContent')
@include('dashboard.theme')
    <h1 class="text-3xl text-black pb-4">Motivasi</h1>
        <a href="/dashboard/motivasi/create" class="btn btn-active btn-primary"><i data-feather="file-plus"
                class="mr-2 text-bwhite "></i>Buat Tugas Baru</a>

        <div class="text-blue bg-white lg:order-1 p-3 lg:row-span-1 2xl:row-span-1 lg:col-span-2 rounded-lg shadow-xl mb-3 lg:mb-0">
            <table class="table table-compact w-full">
                <thead>
                    <tr>
                        <th class="w-5">No</th>
                        <th>Judul</th>
                        <th class="flex justify-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($motivations as $motivation)
                        <tr>
                            <th class="text-center">{{ $loop->iteration }}</th>
                            {{-- <td>{{ $post->subject->name }}</td> --}}
                            <td>{{ $motivation->judul }}</td>
                            {{-- <td>{{ $post->bab }}</td> --}}
                            <td class="flex justify-center gap-x-5">
                                <div class="bg-blue-400 p-1.5 mr-1 rounded-full">
                                    <a href="/dashboard/{{ $motivation->slug }}"
                                        class="flex text-center text-bwhite font-bold"><i data-feather="eye"
                                            class="text-bwhite"></i></a>
                                </div>
                                <div class="bg-yellow-400 p-1.5 mr-1 rounded-full">
                                    <a href="/dashboard/motivasi/{{$motivation->id}}/edit"
                                        class="flex text-center text-bwhite font-bold"><i data-feather="edit"
                                            class="text-bwhite"></i></a>
                                </div>

                                <form action="{{route('motivation.destroy', $motivation->id)}}" method="POST" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button
                                        class="bg-red-400 p-1.5 rounded-full flex text-center text-bwhite font-bold border-0">
                                        <span data-feather="trash-2"></span>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    {{-- @endforeach --}}
@endsection
