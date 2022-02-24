{{-- @dd($learns) --}}
@extends('dashboard.main')

@section('DashboardContent')
<h1 class="text-3xl text-black pb-4">Dashboard</h1>

<a href="/dashboard/learns/create" class="btn btn-active btn-primary"><i data-feather="file-plus" class="mr-2 text-bwhite "></i>Buat Materi Baru</a>

<div class="overflow-x-auto w-full bg-bwhite">
    <table class="table table-compact w-full">
      <thead>
        <tr>
          <th></th>
          <th>Mata Pelajaran</th>
          <th>Judul</th>
          <th>Subab</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($learns as $learn)
            <tr>
                <th>{{ $loop->iteration }}</th>
                <td>{{ $learn->subject->name }}</td>
                <td>{{ $learn->judul }}</td>
                <td>{{ $learn->bab }}</td>
                <td class="flex">

                        <div class="bg-blue-400 p-1.5 mr-1 rounded-full">
                            <a href="/dashboard/learns/{{ $learn->slug }}" class="flex text-center text-bwhite font-bold"><i data-feather="eye" class="text-bwhite"></i></a>
                        </div>

                        <div class="bg-yellow-400 p-1.5 mr-1 rounded-full">
                            <a href="/dashboard/learns/{{ $learn->slug }}/edit" class="flex text-center text-bwhite font-bold"><i data-feather="edit" class="text-bwhite"></i></a>
                        </div>

                        <div class="bg-red-400 p-1.5 rounded-full">
                            <form action="/dashboard/learns/{{ $learn->slug }}">
                                @method('delete')
                                @csrf
                                <button class="flex text-center text-bwhite font-bold border-0">
                                    <i data-feather="trash-2" class="text-bwhite"></i>
                                </button>
                            </form>
                        </div>
                    </td>
            </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection

