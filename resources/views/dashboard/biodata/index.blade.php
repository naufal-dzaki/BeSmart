{{-- @dd($biodata) --}}
@extends('dashboard.main')

@section('DashboardContent')
<div class="overflow-x-auto">
    <table class="table w-full">
      <!-- head -->
      <thead>
        <tr>
          <th></th>
          <th>Nama</th>
          <th>NISN</th>
          <th>TTL</th>
          <th>Gambar</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($biodata as $data)

        <tr>
            <th>{{ $data->user->id }}</th>
            <td>{{ $data->user->name }}</td>
            <td>{{ $data->nisn }}</td>
            <td>{{ $data->tgl_lahir }}</td>
            <td>
                    @if($data->image)
                    <img src="{{ asset('storage/' . $data->image) }}" class="lg:w-20 md:w-16 sm:w-7 w-6" alt="">
                    @else
                    <img src="/img/user-profille.png" class="lg:w-20 md:w-16 sm:w-7 w-6" alt="">
                    @endif
            </td>
        </tr>
        @endforeach
    </tbody>
    </table>
</div>
@endsection
