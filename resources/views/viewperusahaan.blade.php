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
        <a href="/perusahaan/add"><button class="btn btn-primary">Tambah Data</button></a>

        <div class="table-layout mt-4">
            <table class="table table-bordered mt-2">
    <tr>
        <th>No</th>
        <th>Nama Perusahaan</th>
        <th>Deskripsi</th>
        <th>Foto</th>
        <th colspan="2">Aksi</th>
    </tr>
    </thead>
    @foreach ($perusahaans as $key => $item)
    <tr>
        <td>{{ $key+1 }}</td>

        <td>{{ $item['nama_perusahaan'] }}</td>
        <td>{{ $item['deskripsi'] }}</td>
        <td><img src="{{ asset('storage/'.$item['foto']) }}" width="70px" alt=""></td>

        <td> <a href="/perusahaan/edit/{{ $item['id'] }}"><button class="btn btn-primary"><i class="fa fa-edit"></i></button>
            <a href="/perusahaanhapus/{{ $item['id'] }}"><button class="btn btn-danger"><i class="fa fa-trash"></i></button></td>
    </tr>
    @endforeach
    </table>
    </div>
</body>
</html>

