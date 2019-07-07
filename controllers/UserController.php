<?php 
    require_once("models/User.php");
    
    class UserController {
        public $model;

        public function __construct() {
            $this->model = new User();
        }
    
        public function index() {
            require_once('views/layouts/login.php');
        }

        public function dashboard() {
            require_once('views/layouts/dashboard.php');
        }

        public function login() {
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

            $username = $_POST['username'];
            $password = $_POST['password'];

            $data = mysqli_query($koneksi , " SELECT * FROM users WHERE username='$username' AND password='$password' ");
 
            // menghitung jumlah data yang ditemukan
            $cek = mysqli_num_rows($data);
            if($cek > 0){
                $_SESSION['username'] = $username;
                $_SESSION['status'] = "login";
                echo '<script>
                alert("$cek,Login Berhasil");
                location="/portalBeritaqu/?aksi=dashboard"
                </script>';
            }else{
                echo '<script>
                alert("Login Gagal BROOO");
                location="/portalBeritaqu/?aksi=login"
                </script>';
            }
            
        }
        public function hapusTamu() {
            if(isset($_GET['i'])) {
                $rs = $this->model->hapus($_GET['i']);                
                header("location: /portalBeritaqu/?aksi=bukuTamu"); // Redirect ke halaman index.php            
            }
            require_once("views/layouts/buku.php");
        }
    }
?>