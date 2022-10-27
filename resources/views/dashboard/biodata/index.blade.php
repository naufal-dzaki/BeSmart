{{-- @dd($biodata) --}}
@extends('dashboard.main')

@section('DashboardContent')
    <div class="overflow-x-auto">
        <table class="table w-full mb-5">
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
                        <th>{{ $data->id }}</th>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->nisn }}</td>
                        <td>{{ $data->tgl_lahir }}</td>
                        <td>
                            @if ($data->image)
                                <img src="{{ asset('storage/' . $data->image) }}" class="w-12" alt="">
                            @else
                                <img src="/img/user-profille.png" class="w-12" alt="">
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
