<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pengajuan</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
    <div class="container d-flex justify-content-center pt-5 mt-5">
        <div class="card" style="width: 30rem;">
            <div class="card-header text-center">

    <form action="/pengajuan/post" method="post" enctype="multipart/form-data">
        @csrf
        <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Pengajuan</p>

        <div class="mb-3">
            <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap" placeholder="Nama Lengkap" autofocus required>
        </div>
        <div class="mb-3">
            <input type="date" class="form-control" name="ttl" id="ttl" placeholder="ttl" autofocus required>
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" name="tempat" id="tempat" placeholder="tempat" autofocus required>
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" name="alamat" id="ttl" placeholder="alamat" autofocus required>
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" name="no_hp" id="no_hp" placeholder="No Hp" autofocus required>
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" name="email" id="email" placeholder="email" autofocus required>
        </div>
        <div class="mb-3">
            <input type="file" class="form-control" name="foto" id="foto" placeholder="foto" autofocus required>
        </div>
        <div class="mb-3">
            <input type="file" class="form-control" name="dokumen" id="dokumen" placeholder="dokumen" autofocus required>
        </div>
        <div class="mb-3">
            <input type="date" class="form-control" name="ttl_p" id="ttl_p" placeholder="ttl_p" autofocus required>
        </div>
    <button class="btn btn-primary">Simpan</button>
    </form>

</body>
</html>
