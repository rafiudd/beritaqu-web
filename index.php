<?php
    require_once("controllers/BukuController.php");
    require_once("controllers/BeritaController.php");
    require_once("controllers/UserController.php");

    $BukuController   = new BukuController();
    $BeritaController = new BeritaController();
    $UserController = new UserController();

    if(!isset($_GET['aksi'])) {
        $BukuController->index();
    } else {
        switch($_GET['aksi']) {
            case 'simpan' :
                $BukuController->simpanDataTamu();
                break;

            case 'berita' :
                $BeritaController->showData();
                break;

            case 'login' :
                $UserController->index();
                break;

            case 'cekLogin' :
                $UserController->login();
                break;

            case 'dashboard' :
                $BeritaController->showDataDashboard();
                break;
            
            case 'simpanBerita' :
                $BeritaController->simpanBerita();
                break;
            
            case 'tambahBerita' :
                $BeritaController->tambahBeritaView();
                break;

            case 'hapusBerita' :
                $BeritaController->hapusBerita();
                break;

            case 'updateView' :
                $BeritaController->updateView();
                break;
            
            case 'update' :
                $BeritaController->update();
                break;
            
            case 'bukuTamu' :
                $BeritaController->showBukuTamu();
                break;
            
            case 'hapusTamu' :
                $UserController->hapusTamu();
        }   
    }

?>