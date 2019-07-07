<?php 
include_once("config/Config.php");

class Buku {
    function __construct() {
        $this->dbh = Database::getInstance();
    }

    function simpanData($nama,$alamat,$no_hp,$email) {
        $rs = $this->dbh->query("INSERT INTO buku_tamu (nama,alamat,no_hp,email) 
        VALUES ('".$nama."', '".$alamat."', '".$no_hp."', '".$email."') ");
    }
}


?>