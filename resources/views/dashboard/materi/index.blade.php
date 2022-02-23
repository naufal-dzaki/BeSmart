{{-- @dd($materials) --}}
@extends('dashboard.main')

@section('DashboardContent')
<h1 class="text-3xl text-black pb-4">Dashboard</h1>

<a href="/dashboard/materials/create" class="btn btn-active btn-primary"><i data-feather="file-plus" class="mr-2 text-bwhite "></i>Buat Materi Baru</a>

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
        @foreach ($materials as $material)
            <tr>
                <th>{{ $loop->iteration }}</th>
                <td>{{ $material->subject->name }}</td>
                <td>{{ $material->judul }}</td>
                <td>{{ $material->bab }}</td>
                <td class="flex">
                        <a href="/dashboard/materials/{{ $material->slug }}" class="badge badge-md bg-info w-2"><i data-feather="eye"></i></a>
                        <a href="/dashboard/materials/{{ $material->slug }}/edit" class="badge badge-md bg-warning w-2"><i data-feather="edit"></i></a>
                        <form action="/dashboard/materials/{{ $material->slug }}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                            <button class="badge badge-md bg-danger border-0" onclick="return confirm('are you sure?')">
                                <i data-feather="trash-2"></i>
                            </button>
                        </form>
                    </td>
            </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection

