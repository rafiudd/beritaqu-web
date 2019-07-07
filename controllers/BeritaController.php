<?php 
require_once("models/Berita.php");

class BeritaController {
    public $model;

    public function __construct() {
        $this->model = new Berita();
    }

    public function index() {
        require_once("views/layouts/berita/index.php");
    }

    public function tambahBeritaView() {
        require_once("views/layouts/berita/tambah.php");
    }

    public function showBukuTamu() {
		if(!isset($_GET['i'])) {
            echo '<script language="javascript">';
            echo 'alert("message sent")';
            echo '</script>';
			//jika tidak ada parameter id yang dikirim, maka akan menampilkan semua data yang ada
            $rs = $this->model->getDataTamu();
            require_once("views/layouts/buku.php");
        } else {
            //ada parameter id yang dikirim, tampilkan detail dari salah satu data yang dipilih


            echo '<script language="javascript">';
            echo 'alert("message successfully sent")';
            echo '</script>';
            
            $rs = $this->model->getDataById($_GET['i']);
            require_once("views/layouts/berita/detail.php");
        }    
    }

	function showData() {
		if(!isset($_GET['i'])) {
            echo '<script language="javascript">';
            echo 'alert("message sent")';
            echo '</script>';
			//jika tidak ada parameter id yang dikirim, maka akan menampilkan semua data yang ada
			$rs = $this->model->getData();
            require_once("views/layouts/berita/index.php");
        } else {
            //ada parameter id yang dikirim, tampilkan detail dari salah satu data yang dipilih


            echo '<script language="javascript">';
            echo 'alert("message successfully sent")';
            echo '</script>';
            
            $rs = $this->model->getDataById($_GET['i']);
            require_once("views/layouts/berita/detail.php");
		}
    }
    function showDataDashboard() {
		if(!isset($_GET['i'])) {
            echo '<script language="javascript">';
            echo 'alert("message sent")';
            echo '</script>';
			//jika tidak ada parameter id yang dikirim, maka akan menampilkan semua data yang ada
            $rs = $this->model->getData();
            require_once("views/layouts/dashboard.php");
        } else {
            //ada parameter id yang dikirim, tampilkan detail dari salah satu data yang dipilih


            echo '<script language="javascript">';
            echo 'alert("message successfully sent")';
            echo '</script>';
            
            $rs = $this->model->getDataById($_GET['i']);
            require_once("views/layouts/berita/detail.php");
		}
    }
    
    public function simpanBerita() {
        $servername = 'localhost';
        $username = 'root';
        $password = '';
        $database = 'beritaqu';
        $koneksi = mysqli_connect($servername,$username,$password,$database);

        $judul_berita     = $_POST['judul_berita'];
        $gambar_berita    = $_FILES['gambar_berita']['name'];
        $deskripsi_berita = $_POST['deskripsi_berita'];
        $tmp              = $_FILES['gambar_berita']['tmp_name'];
        
        // Rename nama fotonya dengan menambahkan tanggal dan jam upload
        $renameGambar     = date('dmYHis').$gambar_berita;

        // Set path folder tempat menyimpan fotonya
        $path = "assets/img/".$renameGambar;

        // Proses upload
        if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
            // Proses simpan ke Database
            $query = "INSERT INTO berita (judul_berita,gambar_berita,deskripsi_berita) VALUES('".$judul_berita."', '".$renameGambar."', '".$deskripsi_berita."')";
            $sql = mysqli_query($koneksi, $query); // Eksekusi/ Jalankan query dari variabel $query
            echo 'cek';
            echo $query;
            if($sql){ // Cek jika proses simpan ke database sukses atau tidak
                // Jika Sukses, Lakukan :
                header("location: /portalBeritaqu/?aksi=dashboard"); // Redirect ke halaman index.php            
            }else{
                // Jika Gagal, Lakukan :
                echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
                echo "<br><a href='form_simpan.php'>Kembali Ke Form</a>";
            }
        }else{
            // Jika gambar gagal diupload, Lakukan :
            echo "Maaf, Gambar gagal untuk diupload.";
        }
    }

    public function hapusBerita() {
        if(isset($_GET['i'])) {
            $rs = $this->model->hapus($_GET['i']);                
            header("location: /portalBeritaqu/?aksi=dashboard"); // Redirect ke halaman index.php            
        }
        require_once("views/layouts/berita/dashboard.php");
    }

    public function updateView() {
        if(isset($_GET['i'])) {
            $rs = $this->model->getDataById($_GET['i']);
            require_once("views/layouts/berita/update.php");        
        }
    }

    public function update() {
        $servername = 'localhost';
        $username = 'root';
        $password = '';
        $database = 'beritaqu';
        $koneksi = mysqli_connect($servername,$username,$password,$database);

        $judul_berita     = $_POST['judul_berita'];
        $gambar_berita    = $_FILES['gambar_berita']['name'];
        $deskripsi_berita = $_POST['deskripsi_berita'];
        $tmp              = $_FILES['gambar_berita']['tmp_name'];

        // Rename nama fotonya dengan menambahkan tanggal dan jam upload
        $renameGambar     = date('dmYHis').$gambar_berita;

        // Set path folder tempat menyimpan fotonya
        $path = "assets/img/".$renameGambar;

        // Proses upload
        if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
            // Proses simpan ke Database
            $rs = $this->model->getDataById($_GET['i']);

            $query = "UPDATE berita SET judul_berita='$judul_berita', gambar_berita='$gambar_berita', deskripsi_berita='$deskripsi_berita' WHERE id=$id ";
            $sql = mysqli_query($koneksi, $query); // Eksekusi/ Jalankan query dari variabel $query
            echo 'cek';
            echo $id;
            echo $query;
            if($sql){ // Cek jika proses simpan ke database sukses atau tidak
                // Jika Sukses, Lakukan :
                header("location: /portalBeritaqu/?aksi=dashboard"); // Redirect ke halaman index.php            
            }else{
                // Jika Gagal, Lakukan :
                echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
                echo "<br><a href='form_simpan.php'>Kembali Ke Form</a>";
            }
        }else{
            // Jika gambar gagal diupload, Lakukan :
            echo "Maaf, Gambar gagal untuk diupload.";
        }    
    }

    public function showBuku() {

    }
}

?>