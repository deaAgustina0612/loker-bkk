<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="\css\bootstrap.min.css">
</head>
<body>
     <div class="container mt-3 py-5">
          <div class="card ">
          <div class="card-header text-center">
               <h2>Data Perusahaan</h2>
          </div>
               <div class="card-body">
                <form action="{{ url('perusahaan/update/{id}')}}" method="post" enctype="multipart/form-data">
             @csrf

                <div class="mb-3">
                     <label for="" class="form-label">Nama Perusahaan</label>
                     <input type="text" name="nama_perusahaan" class="form-control" id="" value="{{ $perusahaans -> nama_perusahaan}}" >
                </div>
                <div class="mb-3">
                     <label for="" class="form-label">Deskripsi</label>
                     <input type="text" name="deskripsi" class="form-control" id="" value="{{ $perusahaans -> deskripsi}}" >
                </div>
                <div class="mb-3">
                     <label for="" class="form-label">Foto</label>
                         <img src="/storage/{{ $perusahaans->foto }}" alt="" width="100" height="100"><br>
                     <input type="file" name="foto" id="foto">
                </div>
               <div>
                    <input type="submit" value="SIMPAN" name="simpan">
               </div>
          </form>
     </div>
     </div>
     </div>
    </body>
</html>
