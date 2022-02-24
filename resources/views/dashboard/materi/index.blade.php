{{-- @dd($materi) --}}
@extends('dashboard.main')

@section('DashboardContent')
<h1 class="text-3xl text-black pb-4">Dashboard</h1>

@if(session()->has('success'))
<div class="alert shadow-lg bg-green-400">
    <div>
      <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
      <span>
          {{ session('success') }}
      </span>
    </div>
  </div>
@endif

<a href="/dashboard/materi/create" class="btn btn-active btn-primary"><i data-feather="file-plus" class="mr-2 text-bwhite "></i>Buat Materi Baru</a>

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
        @foreach ($posts as $post)
            <tr>
                <th>{{ $loop->iteration }}</th>
                <td>{{ $post->subject->name }}</td>
                <td>{{ $post->judul }}</td>
                <td>{{ $post->bab }}</td>
                <td class="flex">

                        <div class="bg-blue-400 p-1.5 mr-1 rounded-full">
                            <a href="/dashboard/materi/{{ $post->slug }}" class="flex text-center text-bwhite font-bold"><i data-feather="eye" class="text-bwhite"></i></a>
                        </div>

                        <div class="bg-yellow-400 p-1.5 mr-1 rounded-full">
                            <a href="/dashboard/materi/{{ $post->slug }}/edit" class="flex text-center text-bwhite font-bold"><i data-feather="edit" class="text-bwhite"></i></a>
                        </div>

                        <form action="/dashboard/materi/{{ $post->slug }}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                            <button class="bg-red-400 p-1.5 rounded-full flex text-center text-bwhite font-bold border-0" onclick="return confirm('are you sure?')">
                                <span data-feather="trash-2"></span>
                            </button>
                        </form>
                    </td>
            </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection

