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
               <h2>Data Pengajuan</h2>
          </div>
               <div class="card-body">
                <form action="{{ url('pengajuan/update/{id}')}}" method="post" enctype="multipart/form-data">
             @csrf

                <div class="mb-3">
                     <label for="" class="form-label">Nama Lengkap</label>
                     <input type="text" name="nama_lengkap" class="form-control" id="" value="{{ $pengajuans -> nama_lengkap}}" >
                </div>
                <div class="mb-3">
                     <label for="" class="form-label">Ttl</label>
                     <input type="text" name="ttl" class="form-control" id="" value="{{ $pengajuans -> ttl}}" >
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Tempat</label>
                    <input type="text" name="tempat" class="form-control" id="" value="{{ $pengajuans -> tempat}}" >
               </div>
               <div class="mb-3">
                <label for="" class="form-label">Alamat</label>
                <input type="text" name="alamat" class="form-control" id="" value="{{ $pengajuans -> alamat}}" >
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">No Hp</label>
                    <input type="date" name="no_hp" class="form-control" id="" value="{{ $pengajuans -> no_hp}}" >
               </div>
               <div class="mb-3">
                <label for="" class="form-label">email</label>
                <input type="date" name="email" class="form-control" id="" value="{{ $pengajuans -> email}}" >
                </div>
                <div class="mb-3">
                     <label for="" class="form-label">Foto</label>
                         <img src="/storage/{{ $pengajuans->foto }}" alt="" width="100" height="100"><br>
                     <input type="file" name="foto" id="foto">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Dokumen</label>
                    <input type="text" name="dokumen" class="form-control" id="" value="{{ $pengajuans -> dokumen}}" >
                    </div>

                <div class="mb-3">
                    <label for="" class="form-label">Ttl p</label>
                    <input type="text" name="ttl_p" class="form-control" id="" value="{{ $pengajuans -> ttl_p}}" >
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
