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
    <a class="logout" href="/portalBeritaqu/?aksi=berita"><span>Logout</span></a>
    <h1 class="top-custom">Dashboard</h1>
      <div class="table-responsive mt-5">
        <h3>Daftar Buku Tamu</h3>
        <table summary="This table shows how to create responsive tables using Bootstrap's default functionality" class="table table-bordered table-hover top-custom-2">
          <thead>
            <tr>
              <th>Id</th>
              <th>Nama</th>
              <th>Alamat</th>
              <th>No HP</th>
              <th>Email</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php 
                foreach($rs as $berita => $list) {                
            ?>
                <tr>
                <td><?php echo $list['id'] ?></td>
                <td>
                    <?php echo $list['nama']?>
                </td>
                <td><?php echo $list['alamat'] ?></td>
                <td><?php echo $list['no_hp'] ?></td>
                <td><?php echo $list['email'] ?></td>
                <td><a href="?aksi=hapusTamu&i=<?php echo $list['id'] ?>">Hapus</a></td>
                </tr>
            <?php } ?>
          </tbody>
        </table>
      </div><!--end of .table-responsive-->
      <br>
      <a href="?aksi=dashboard">Lihat Berita</a>
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