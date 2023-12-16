<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perusahaan</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
    <div class="container d-flex justify-content-center pt-5 mt-5">
        <div class="card" style="width: 30rem;">
            <div class="card-header text-center">

    <form action="/perusahaan/post" method="post" enctype="multipart/form-data">
        @csrf
        <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Perusahaan</p>

        <div class="mb-3">
            <input type="text" class="form-control" name="nama_perusahaan" id="nama_perusahaan" placeholder="Nama Perusahaan" autofocus required>
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" name="deskripsi" id="deskripsi" placeholder="deskripsi" autofocus required>
        </div>
            <input type="file" class="form-control" name="foto" id="foto" placeholder="foto" autofocus required>
        </div>
    <button class="btn btn-primary">Simpan</button>
    </form>

</body>
</html>
