<?php 
require_once("config/Config.php");

class Berita {
    function __construct() {
        $this->dbh = Database::getInstance();
    }

    public function getData() {
        $rs = $this->dbh->query("SELECT * FROM berita");
        return $rs;
    }

    public function getDataTamu() {
        $rs = $this->dbh->query("SELECT * FROM buku_tamu");
        return $rs;
    }

    public function getDataById($id) {
        $rs = $this->dbh->query("SELECT * FROM berita WHERE id=".$id);
		return $rs->fetch();// kalau hasil query hanya satu, gunakan method fetch() bawaan PDO
    }

    function simpanDataBerita($judul_berita,$gambar,$deskripsi_berita) {
        if(move_uploaded_file($path,$tmp)) {
            $rs = $this->dbh->query("INSERT INTO berita (judul_berita,gambar,deskripsi_berita) 
            VALUES ('".$judul_berita."', '".$gambar."', '".$deskripsi_berita."') ");
        } else {
            echo "gagal woi";
            echo $path,$tmp;
        }
    }

    function hapus($id) {
        $rs = $this->dbh->query("DELETE FROM berita WHERE id=".$id);
        return $rs;
    }
    
}

?>