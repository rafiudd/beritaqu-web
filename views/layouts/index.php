<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">  
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300" type="text/css" />
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/custom.css">
</head>

<body>
  <section class="tamu">
    <div class="buku">
        <h1>Halo Selamat Datang <br> Harap Mengisi Buku Tamu Terlebih Dahulu</h1>
        <a href="" id="bukuku">
            <button class="btnBuku">Buku Tamu</button>
        </a>
    </div>
    <div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Buku Tamu</h4>
            </div>
            <div class="modal-body">
            <form method="POST" action="/portalBeritaqu/?aksi=simpan">
                <div class="form-group">
                    <label for="nama" class="control-label">Nama Lengkap</label>
                    <input type="text" class="form-control" id="name" placeholder="Masukan Nama Lengkap" name="nama">
                    
                    <label for="alamat">Alamat</label>
                    <textarea class="form-control" rows="5" id="comment" placeholder="Masukan Alamat" name="alamat"></textarea>
                
                    <label for="no_hp" class="control-label">No Hp</label>
                    <input type="text" class="form-control" id="no_hp" placeholder="Masukan No HP" name="no_hp">

                    <label for="email" class="control-label">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Masukan Email" name="email">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Kirim</button>            
            </div>
            </form>
        </div>
        </div>
    </div>
  </section>
 
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script>
    <script  src="assets/js/script.js"></script>
</body>

</html>
