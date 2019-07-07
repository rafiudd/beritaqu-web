<?php 
require_once("models/Buku.php");

class BukuController {
    public $model;

    public function __construct() {
        $this->model = new Buku();
    }

    public function index() {
		  require_once('views/layouts/index.php');
    }

    public function simpanDataTamu() {
      $nama    = $_POST['nama'];
      $alamat  = $_POST['alamat'];
      $no_hp   = $_POST['no_hp'];
      $email   = $_POST['email'];

      $this->model->simpanData($nama,$alamat,$no_hp,$email);
      echo "<script type='text/javascript'>alert('success');</script>";
      header("Location: /portalBeritaqu/?aksi=berita");
    }
}


?>