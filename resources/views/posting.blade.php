<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</html>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posting</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
    <div class="container d-flex justify-content-center pt-5 mt-5">
        <div class="card" style="width: 30rem;">
            <div class="card-header text-center">

    <form action="/posting/post" method="post" enctype="multipart/form-data">
        @csrf

        <p class="text-center h1 fw-bold mb-4 mx-1 mx-md-4 mt-4">posting</p>
        <div class="mb-3">
            <input type="text" class="form-control" name="nama" id="" placeholder="Nama Perusahaan" autofocus required>
          
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" name="bidang_usaha" id="" placeholder="bidang_usaha" autofocus required>
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" name="persyaratan" id="" placeholder="persyaratan" autofocus required>
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" name="lowongan" id="" placeholder="lowongan" autofocus required>
        </div>
        <div class="mb-3">
            <input type="date" class="form-control" name="ttl_p" id="" placeholder="ttl_p" autofocus required>
        </div>
        <div class="mb-3">
            <input type="date" class="form-control" name="ttl_tp" id="" placeholder="ttl_tp" autofocus required>
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" name="deskripsi" id="" placeholder="deskripsi" autofocus required>
        </div>
    </div>

    <div class="mb-3">
        <input type="file" class="form-control" name="foto" id="foto" placeholder="foto" autofocus required>
    </div>
    <div class="mb-3">
        <input type="text" class="form-control" name="lokasi" id="" placeholder="lokasi" autofocus required>
    </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
</form>
