<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/berita.css">
    <link rel="stylesheet" href="assets/css/navbar.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Yeseva+One&display=swap" rel="stylesheet"> 
</head>
<body>
<?php require_once("views/components/navbar.php"); ?>
<section class="wrapper">
    <div class="row mx-0">
        <div class="col-sm">
            <img class="background" src="assets/img/web/cek-2.jpg" alt="">
        </div>
        <div class="col-sm ml-5 mt-5">
            <h1 class="heading mt-5">Hello Welcome to my mind</h1>
            <p class="mt-5">This is about me and me and me like contact and more</p>
            <p>Have a nice day and nice to meet you bro</p>
            <p>Thank you for visiting this web</p>
            <a href="#"><button class="btn-1 mt-3" id="down">More</button></a>
        </div>
    </div>
</section>

<section class="wrapper">
    <div class="container-fostrap">
        <div>
            <h1 class="heading mt-5" id="berita">
                Portal Berita
            </h1>
        </div>

        <div class="content mt-4">
            <div class="container">
                <div class="row">
                <?php 
                    foreach($rs as $berita => $list) {  
                        $num_char = 50;
						$text = $list['deskripsi_berita'];               
                ?>
                    <div class="col-xs-12 col-sm-4">
                        <div class="card">
                            <a class="img-card" href="?aksi=berita&i=<?php echo $list['id'] ?>">
                            <img src="assets/img/<?php echo $list['gambar_berita'] ?>" alt="" srcset="">
                          </a>
                            <div class="card-content">
                                <h4 class="card-title">
                                    <a href="?aksi=berita&i=<?php echo $list['id'] ?>"><?php echo $list['judul_berita']?>
                                  </a>
                                </h4>
                                <p class=""><?php echo substr($text, 0, $num_char) . '...';?></p>
                            </div>
                            <div class="card-read-more">
                                <a href="?aksi=berita&i=<?php echo $list['id'] ?>" class="btn btn-link btn-block">
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php }?>

                </div>
            </div>
        </div>
    </div>
</section>
<?php require("views/components/footer.php"); ?>
<a href="javascript:" id="return-to-top"><i class="icon-chevron-up"></i></a>

  <script src="assets/js/jquery.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <script>
    $(document).ready(function() {
        $('#down').click(function(){
            $('html, body').animate({scrollTop:$(document).height()}, 'slow');
            return false;
        });
    });
    // ===== Scroll to Top ==== 
    $(window).scroll(function() {
        if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
            $('#return-to-top').fadeIn(200);    // Fade in the arrow
        } else {
            $('#return-to-top').fadeOut(200);   // Else fade out the arrow
        }
    });
    $('#return-to-top').click(function() {      // When arrow is clicked
        $('body,html').animate({
            scrollTop : 0                       // Scroll to top of body
        }, 500);
    });
  </script>
</body>
</html>