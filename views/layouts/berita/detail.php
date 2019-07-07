<html>
	<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/berita.css">
    <link rel="stylesheet" href="assets/css/navbar.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Yeseva+One&display=swap" rel="stylesheet">  
	<style>
		.deskripsi {
			line-height:30px;
			text-align:justify;
		}
		.gambar {
			max-width:1000px;
		}
		@media (max-width: 700px) {
			.gambar {
				/* max-width:400px; */
				width:100%;
			}		
		}
	</style>   
	</head>
	<body>
	
	<?php require_once("views/components/navbar.php"); ?>
		<div class="row mx-0">
			<div class="col-sm-10 mx-auto">
				<h1 class="mt-5"><?php echo $rs['judul_berita'] ?></h1>
				<img src="assets/img/<?php echo $rs['gambar_berita'] ?>" class="gambar mt-4" alt="" srcset="">
				<p class="deskripsi mt-2"><?php echo $rs['deskripsi_berita'] ?></p>
			</div>
		</div>
	</body>
</html>

<html>
<head></head>

<body>



</body>
</html>