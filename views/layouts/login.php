<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="row mx-auto">
        <div class="col-4"></div>
        <div class="card col-xl-4 col-10 col-sm-4 mx-auto custom-card">
        <form method="POST" action="/portalBeritaqu/?aksi=cekLogin">
                <div class="form-group">
                    <label for="nama" class="control-label">Username</label>
                    <input type="text" class="form-control" id="name" placeholder="Username" name="username">
                    
                    <label for="password" class="control-label mt-3">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                </div>
                <button type="submit" class="btn btn-primary btn-block btn-custom" name="" value="masuk">Kirim</button>            
        </form>
        </div>
        <div class="col-4"></div>
    </div>

</body>
</html>
