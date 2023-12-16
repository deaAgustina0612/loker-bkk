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
               <h2>Data Posting</h2>
          </div>
               <div class="card-body">
             <form action="{{ url('posting/update/{id}')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                     <label for="" class="form-label">Nama Perusahaan</label>
                     <input type="text" name="nama" class="form-control" id="" value="{{ $postings -> nama}}" >
                </div>
                <div class="mb-3">
                     <label for="" class="form-label">Bidang Usaha</label>
                     <input type="text" name="bidang_usaha" class="form-control" id="" value="{{ $postings -> bidang_usaha}}" >
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Persyaratan</label>
                    <input type="text" name="persyaratan" class="form-control" id="" value="{{ $postings -> persyaratan}}" >
               </div>
               <div class="mb-3">
                <label for="" class="form-label">Lowongan</label>
                <input type="text" name="lowongan" class="form-control" id="" value="{{ $postings -> lowongan}}" >
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">ttl_p</label>
                    <input type="date" name="ttl_p" class="form-control" id="" value="{{ $postings -> ttl_tp}}" >
               </div>
               <div class="mb-3">
                <label for="" class="form-label">ttl_tp</label>
                <input type="date" name="ttl_tp" class="form-control" id="" value="{{ $postings -> ttl_tp}}" >
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Deskripsi</label>
                    <textarea class="form-control" name="deskripsi" id="deskripsi" cols="30" rows="10">{{ $postings -> deskripsi}}</textarea>
               </div>

                <div class="mb-3">
                     <label for="" class="form-label">Foto</label>
                         {{-- @if(file_exists("storage/".$posting->foto)) --}}
                         <img src="/storage/{{ $postings->foto }}" alt="" width="100" height="100"><br>
                         {{-- @endif --}}
                     <input type="file" name="foto" id="foto">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Lokasi</label>
                    <input type="text" name="lokasi" class="form-control" id="" value="{{ $postings -> lokasi}}" >
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
