<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/dashboard.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">     
    <title>Document</title>
</head>
<body>

<div class="container">
  <div class="row">
    <div class="col-xs-12">
    <br><br>
    <a class="logout" href="/portalBeritaqu/?aksi=berita"><span>Logout</span></a>
    <h1 class="top-custom">Dashboard</h1>
      <div class="table-responsive mt-5">
        <h3>Daftar Berita</h3>
        <table summary="This table shows how to create responsive tables using Bootstrap's default functionality" class="table table-bordered table-hover top-custom-2">
          <thead>
            <tr>
              <th>Id</th>
              <th>Judul Berita</th>
              <th>Deskripsi Berita</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php 
                foreach($rs as $berita => $list) { 
                $num_char = 50;
                $text = $list['deskripsi_berita'];               
            ?>
                <tr>
                <td><?php echo $list['id'] ?></td>
                <td>
                    <a href="?aksi=berita&i=<?php echo $list['id'] ?>">
                    <?php echo $list['judul_berita']?>
                    </a>
                </td>
                <td><?php echo substr($text, 0, $num_char) . '...'; ?></td>
                <td><a href="?aksi=hapusBerita&i=<?php echo $list['id'] ?>">Hapus</a> <a href="?aksi=updateView&i=<?php echo $list['id'] ?>">Update</a></td>
                </tr>
            <?php } ?>
          </tbody>
          <a href="?aksi=tambahBerita" class="top-custom">Tambah Berita</a>
        </table>
      </div><!--end of .table-responsive-->
      <br>
      <a href="?aksi=bukuTamu" class="top-custom-2">Lihat Buku Tamu</a>
    </div>
  </div>
</div>

<?php 
include("views/components/footer.php");
?>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script>
</body>
</html>