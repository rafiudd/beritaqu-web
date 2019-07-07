<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/tambah.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Yeseva+One&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<div class="container">
  <div class="row">
    <div class="col-sm-12">
    <h1 class="top-custom">Dashboard</h1>
      <div class="mt-5">
        <h3>Tambah Berita</h3>
        <form method="POST" action="/portalBeritaqu/?aksi=simpanBerita" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="judul_berita" class="control-label">Judul Berita</label>
                    <input type="text" class="form-control" id="name" placeholder="Masukan Judul Berita" name="judul_berita">
                    
                    <label for="gambar_berita" class="control-label mt-4">Gambar</label>
                    <input type="file" name="gambar_berita">
                    <br>
                    <label for="deskripsi_berita" class="control-label mt-3">Deskripsi</label>
                    <textarea name="deskripsi_berita" id="" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <button type="submit" class="btn btn-primary btn-block btn-custom" name="" value="Simpan">Kirim</button>            
        </form>
      </div><!--end of .table-responsive-->
      <br>
      <a href="?aksi=dashboard" class="top-custom-2">Lihat Berita</a>
    </div>
  </div>
</div>
<br><br>
</body>
</html>
