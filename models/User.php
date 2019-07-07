<?php 
    session_start();
	error_reporting(E_ERROR | E_PARSE);

	$servername = 'localhost';
	$username = 'root';
	$password = '';
	$database = 'beritaqu';
	$koneksi = new mysqli($servername,$username,$password,$database);
	if($koneksi->connect_error){
	  die("Koneksi pada database salah" . $conn->connect_error);
	}
    echo "";
    
    function cekLogin() {
		if (isset($_SESSION['username'],$_SESSION['status'] )) {
			return true;
		} else {
			return false;
		}
	}
class User {
	function __construct() {
        $this->dbh = Database::getInstance();
	}
	
	function hapus($id) {
        $rs = $this->dbh->query("DELETE FROM buku_tamu WHERE id=".$id);
        return $rs;
    }
}       

?>