{{-- @extends('viewpengajuan')
@section('content') --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('bts/css/bootstrap.min.css') }}">
</head>
<body>

</body>
</html>
    @if (session('success'))
    <script>alert('{{ session()->get('success') }}')</script>
    @elseif(session('failed'))
    <script>alert('{{ session()->get('failed') }}')</script>
    @endif
    <div class="container py-2">
        <a href="/pengajuan"><button class="btn btn-primary">Tambah Data</button></a>

        <div class="table-layout mt-4">
            <table class="table table-bordered mt-2">


            {{-- <table class="table table-striped text-center table-sm"> --}}
              {{-- <thead class="table table-striped text-center table-sm"> --}}
    <tr>
        <th>No</th>
        <th>Nama Lengkap</th>
        <th>Ttl</th>
        <th>Tempat</th>
        <th>Alamat</th>
        <th>No Hp</th>
        <th>Email</th>
        <th>Foto</th>
        <th>Dokumen</th>
        <th>Ttl_p</th>
        <th colspan="2">Aksi</th>
    </tr>
    </thead>
    @foreach ($pengajuans as $key => $item)
    <tr>
        <td>{{ $key+1 }}</td>

        <td>{{ $item['nama_lengkap'] }}</td>
        <td>{{ $item['ttl'] }}</td>
        <td>{{ $item['tempat'] }}</td>
        <td>{{ $item['alamat'] }}</td>
        <td>{{ $item['no_hp'] }}</td>
        <td>{{ $item['email'] }}</td>
        <td><img src="{{ asset('storage/'.$item['foto']) }}" width="70px" alt=""></td>
        <td>{{ $item['dokumen'] }}</td>
        <td>{{ $item['ttl_p'] }}</td>
        {{-- <td><center>
            <img src="\storage\{{ $item->foto }}" alt="" width="100" height="100"></center>
          </td> --}}
        {{-- <td>{{ $item['ttl_p'] }}</td> --}}
        <td> <a href="/pengajuan/edit/{{ $item['id'] }}"><button class="btn btn-primary"><i class="fa fa-edit"></i></button>
            <a href="/pengajuanhapus/{{ $item['id'] }}"><button class="btn btn-danger"><i class="fa fa-trash"></i></button></td>
    </tr>
    @endforeach
    </table>
    </div>
</body>
</html>
{{-- @endsection --}}
