<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Cetak Laporan Presensi</title>
  <style>
    table {
        border-collapse: collapse;
    }
    table, th, td {
        border: 1px solid #342E37;
    }
    th, td {
        padding: 10px;
    }
    th {
        background-color: #3C91E6;
        color: #FAFFFD;
    }
</style>
</head>
<body>
  <!-- Awal Content -->
  <section>
    <div class="container-fluid content">
      <div class="container text-center col-md-8">
        {{-- <img src="{{ asset('frontend/img/logo.png') }}" alt="Logo-Presensi" width="220px" class="mt-4"> <br> --}}
        <small>Tanggal : {{ date('d-M-Y') }} </small>
        <hr class="mt-4 mb-5">
        <h1>Data Presensi Siswa</h1>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Nama Siswa</th>
              <th scope="col">Tanggal</th>
              <th scope="col">Jam Masuk</th>
              <th scope="col">Jam Keluar</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($presensi as $item)
              <tr>
                <td>{{ $item->user->name }}</td>
                <td>{{ $item->tgl }}</td>
                <td>{{ $item->jam_masuk }}</td>
                <td>{{ $item->jam_keluar }}</td>
              </tr>
            @endforeach
          </tbody>
        </table>

      </div>
    </div>
  </section>
  <!-- Akhir Content -->
</body>
</html>
