<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- <link rel="stylesheet" href="{{ asset('bts/css/bootstrap.min.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('bts/css/bootstrap.min.css') }}">

</head>
<body>

    <main>
        <div class="container mt-5">
            <h2 class="text-center pt-3">Postingan</h2>
            <a href="posting/add"><button class="btn btn-primary" type="submit" name="submit" id="submit">Tambah Data</button></a>
            <table class="table table-bordered mt-2">
                <thead>
                  <tr>
                    <th scope="col">NO</th>
                    <th scope="col">NAMA PERUSAHAAN</th>
                    <th scope="col">BIDANG USAHA</th>
                    <th scope="col">PERSYARATAN</th>
                    <th scope="col">LOWONGAN</th>
                    <th scope="col">TANGGAL POSTING</th>
                    <th scope="col">TANGGAL TENGGAT POSTING</th>
                    <th scope="col">DESKRIPSI</th>
                    <th scope="col">FOTO</th>
                    <th scope="col">LOKASI</th>
                    <th scope="col">AKSI</th>
                  </tr>
                </thead>
                @foreach ($postings as $key => $item)
                <tbody>
                  <tr>
                    <th scope="row">{{ $key+1}}</th>
                    <td>{{ $item -> nama}}</td>
                    <td>{{ $item -> bidang_usaha}}</td>
                    <td>{{ $item -> persyaratan}}</td>
                    <td>{{ $item -> lowongan}}</td>
                    <td>{{ $item -> ttl_p}}</td>
                    <td>{{ $item -> ttl_tp}}</td>
                    <td>{{ $item -> deskripsi}}</td>
                    <td><center>
                      <img src="\storage\{{ $item->foto }}" alt="" width="100" height="100"></center>
                    </td>
                    <td>{{ $item -> lokasi }}</td>
                    <td> <a href="/posting/edit/{{ $item['id'] }}"><button class="btn btn-primary"><i class="fa fa-edit"></i></button>
                        <a href="/postinghapus/{{ $item['id'] }}"><button class="btn btn-danger"><i class="fa fa-trash"></i></button></td>
                    {{-- <td>
                      <a href="posting/delete/{{$item -> id}}"><button class="btn btn-danger" name="submit" type="submit">HAPUS</button></a>
                      <a href="posting/edit/{{$item -> id}}"><button class="btn btn-success" name="submit" type="submit">EDIT</button></a>
                    </td> --}}
                  </tr>
                </tbody>
                @endforeach
              </table>
        </div>
    </main>
</body>
</html>
