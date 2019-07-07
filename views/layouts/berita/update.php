<html>
	<head>
		<title>Native MVC Example</title>
		<link rel="stylesheet" href="/mvc-example/assets/css/bootstrap.css" />
		<script type="text/javascript" src="/mvc-example/assets/js/bootstrap.js"></script>
	</head>
	<body>
		<div class="row">
			<div class="col-md-12">
				<div class="col-md-4">&nbsp;</div>
				<div class="col-md-4"><h3>Berita</h3>
                    <form method="POST" action="/portalBeritaqu/?aksi=update?i=<?php echo $rs['id']?> " enctype="multipart/form-data">
                        <?php 

                            echo 'id:' . $rs['id'] . '<br/>';
                            echo 'judul :';
                            echo '<input type="text" name="judul_berita" value="' . $rs['deskripsi_berita'] . '">';
                            echo '<input type="file" name="gambar_berita">';
                            echo 'deskripsi :'; 
                            echo '<input type="text" name="deskripsi_berita" value="' . $rs['judul_berita'] . '">';
                        ?>
                        <button type="submit" class="btn btn-primary" name="" value="Simpan">Kirim</button>            
                    </form>
				</div>
				<div class="col-md-4">&nbsp;</div>
			</div>
		</div>
	</body>
</html>

<html>
<head></head>

<body>



</body>
</html>