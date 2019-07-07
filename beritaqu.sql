-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Jul 2019 pada 15.22
-- Versi server: 10.1.39-MariaDB
-- Versi PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `beritaqu`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `judul_berita` varchar(50) NOT NULL,
  `gambar_berita` varchar(50) NOT NULL,
  `deskripsi_berita` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id`, `judul_berita`, `gambar_berita`, `deskripsi_berita`) VALUES
(18, ' Ahok Kenang Sutopo Sebagai Pejuang ', '07072019101555Frame 2.png', 'Jakarta, CNN Indonesia -- Mantan Gubernur DKI Jakarta, Basuki Tjahaja Purnama (Ahok), mengenang sosok Kepala Pusat Data, Informasi, dan Humas Badan Nasional Penanggulangan Bencana (BNPB) Sutopo Purwo Nugroho sebagai seorang pejuang tangguh. Sutopo meninggal saat menjalani pengobatan penyakit kanker yang diidapnya.\r\n\r\nHal itu disampaikan Ahok lewat akun twitternya @basuki_btp. Dalam cuitannya itu, Ahok juga sekaligus menyampaikan rasa duka cita atas meninggalnya Sutopo.\r\nLihat juga: PDIP: Sutopo Adalah Pejuang Kemanusiaan\r\n\"Selamat jalan Pak @Sutopo_PN (akun twitter Sutopo), seorang pejuang yang tangguh dan sangat berdedikasi,\" kata Ahok dalam cuitannya, Minggu (7/7).\r\n\r\nAhok juga menyampaikan rasa terima kasihnya atas pelajaran dan sumbangsih yang diberikan oleh Sutopo selama hidupnya.\r\n\r\n'),
(25, 'Akhir Pencarian Pendaki Thoriq di Gunung Piramid ', '070720191337584376.png', 'Jakarta, CNN Indonesia -- Jasad Thoriq Rizki Maulana telah berhasil dievakuasi dan dimakamkan oleh pihak keluarga. Thoriq menjadi perhatian publik nasional setelah diketahui hilang sejak 23 Juni lalu saat melakukan pendakian di Gunung Piramid, Bondowoso.\r\n\r\nSaat itu, Thoriq melakukan pendakian bersama tiga rekannya. Namun karena cuaca buruk, mereka memutuskan untuk tidak melanjutkan pendakian. Saat perjalanan turun, ketiga rekannya baru menyadari bahwa Thoriq sudah tidak ada dalam rombongan.\r\n\r\nTim SAR gabungan pun segera melakukan operasi pencarian yang dimulai sejak 24 Juni. Pencarian dilakukan hingga 30 Juni dan tak membuahkan hasil. Proses pencarian resmi dihentikan dan keberadaan Thoriq sejak itu jadi misteri.\r\nLihat juga: Suhu Ekstrem di Gunung Lawu, Pendaki Diminta Waspada\r\n\r\nSetelah operasi pencarian dihentikan, tim SAR susulan dari Perhimpunan Penempuh Rimba dan Pendaki Gunung Wanadri berkeinginan untuk melanjutkan misi pencarian Thoriq. Tim susulan itu berangkat dengan alasan Thoriq masih punya harapan untuk bisa ditemukan.\r\n\r\n\r\n\"Dengan segala upaya dan pendekatan, tim Wanadri bersama beberapa tim SAR gabungan di lapangan yang masih ingin melalukan pencarian meminta izin kepada keluarga survivor (Thoriq) untuk kembali dilakukan pencarian,\" kata Humas Wanadri dalam keterangan resminya.\r\n\r\nSetelah pihak keluarga dan instansi pemerintah mengizinkan, tim kembali melakukan pencarian mulai 3 Juli.\r\n\r\nPada 5 Juli, anggota Wanadri bernama Eko Wahyu Prasetyo, menyampaikan kabar bahwa Thoriq telah ditemukan. Eko saat itu melihat Thoriq berada di Gunung Piramid bagian selatan dengan kondisi sudah tidak bernyawa.\r\n\r\n\"Melihat dari terjalnya medan tempat ditemukannya survivor (Thoriq), diduga survivor (Thoriq) terjatuh dan terperosok lalu tersangkut batang pohon,\" tutur Eko.\r\nLihat juga: Turis dan Pendaki Gunung Guntur Dipalak Preman\r\n\r\nBerdasarkan informasi tersebut, tim mulai melakukan evakuasi terhadap Thoriq pada Sabtu (6/7) kemarin. Evakuasi itu turut dibantu oleh tim evakuasi medan terjal yang sudah memiliki standar keamanan evakuasi.\r\n\r\nSabtu sore, tim akhirnya berhasil mengevakuasi jenazah Thoriq dari lembah. Proses evakuasi itu berlangsung selama 12 jam lantaran medan yang cukup berat di lokasi. Evakuasi itu dilakukan dengan menggunakan teknik vertical rescue.\r\n\r\nKomandan Tim Operasi SAR Gunung Piramid, Rudi Prahara menyampaikan kondisi medan yang cukup curam membuat jenazah Thoriq susah untuk diangkat sehingga memerlukan peralatan tambahan.\r\n\r\n\"Butuh tambahan alat dan tambahan tenaga untuk sampai di punggung gunung,\" kata Rudi.\r\nLihat juga: Jalur Pendakian Rinjani Dibuka Terbatas\r\n\r\nSetelah berhasil diangkat, jenazah Thoriq kemudian dibawa menggunakan ambulans yang ada di Pos Satu Dusun Tegal Tengah, Kecamatan Curahdami untuk dibawa ke Rumah Sakit Umum Doktor Koesnadi Bondowoso.\r\n\r\nKemudian, setelah proses autopsi selesai dilakukan, jenazah Thoriq bakal diserahkan kepada pihak keluarga untuk dimakamkan di Desa Wonokalang, Kecamatan Wonoayu, Sidoarjo. Pihak keluarga memutuskan untuk memakamkan jenazah Thoriq di pemakaman umum desa setempat.'),
(26, 'Kenangan Sutopo Bangga Jadi Orang Boyolali ', '07072019134257aqwsd-48.png', 'Jakarta, CNN Indonesia -- Jenazah Sutopo Purwo Nugroho akan disemayamkan di tanah kelahirannya, Boyolali. Sutopo meninggal dunia di Guangzhou Modern Hospital, Guangzhou, Tiongkok pada pada Minggu (7/7) dini hari tadi.\r\n\r\nKepala Pusat Data, Informasi, dan Humas Badan Nasional Penanggulangan Bencana (BNPB) dikenal sebagai sosok yang humoris dan aktif menggunakan media sosial.\r\nLihat juga: Jokowi Kenang Sutopo: Hidup Bukan Panjang-Pendek Usia\r\n\r\nSutopo sendiri aktif menggunakan Instagram dan Twitter. Pengikutnya di Instagram melalui akun @sutopopurwo sudah mencapai 95.5 ribu. Sementara pengikutinya di akun media sosial Twitternya, @Sutopo_PN mencapai 234 ribu.\r\n\r\nSisi humoris Sutopo pun terlihat saat secara tidak langsung merespons ucapan calon presiden nomor urut 02, Prabowo Subianto soal tampang Boyolali yang sempat viral ketika musim kampanye Pilpres 2019 lalu.\r\n\r\n\r\nKala itu, Prabowo melontarkan pernyataan yang mengaitkan masalah kesejahteraan warga, tarif hotel berbintang di Jakarta, dan tampang Boyolali.\r\nLihat juga: Megawati: Sutopo Adalah Pejuang Kemanusiaan\r\n\r\nMelalui akun Twitter pribadinya, Sutopo mengunggah fotonya berpose bersama Mantan Kepala Staf TNI Angkatan Darat (KSAD) Jendral (Purn) Mulyono. Dalam keterangan foto itu, Sutopo mengaku bangga menjadi warga Boyolali. Ia lantas memamerkan bahwa Mulyono dan dirinya sama-sama alumni dari SMA 1 Boyolali.\r\n\r\n\"Bangganya bisa berfoto bareng sama Pak Jenderal Mulyono (KSAD). Sama-sama alumni SMA 1 Boyolali. Sama-sama pernah mengalami prihatin saat sekolah. Sekarang kita tergabung dalam FBI = Forum Boyolali Indonesia. Dari Boyolali untuk Indonesia dan dunia. Mohon tidak diplintir,\" kata akun @Sutopo_PN pada 3 November 2018 lalu.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku_tamu`
--

CREATE TABLE `buku_tamu` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_hp` int(12) NOT NULL,
  `email` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `buku_tamu`
--

INSERT INTO `buku_tamu` (`id`, `nama`, `alamat`, `no_hp`, `email`) VALUES
(1, 'Rayhan ', 'asdasdasd', 123123123, 'rafi@a.c'),
(2, 'p', 'p', 12, 'aaa@b.c'),
(3, 'ps', 'ps', 122, 'aaa@b.cd'),
(4, 'halo', 'jatilawang', 909090, 'a@mail.com'),
(5, 'halo', 'jatilawang', 909090, 'a@mail.com'),
(6, 'halo', 'jatilawang', 909090, 'a@mail.com'),
(7, 'halo', 'jatilawang', 909090, 'a@mail.com'),
(8, 'halo', 'jatilawang', 909090, 'a@mail.com'),
(9, 'cek', 'jatilawangc', 99999, 'a@mail.com'),
(10, 'cek', 'jatilawangc', 99999, 'a@mail.com'),
(11, 'cek', 'jatilawangc', 99999, 'a@mail.com'),
(12, 'rafidu', 'jatilawangca', 123123, 'a@mail.com'),
(13, 'rayhan', 'jatilawangcanas', 534343, 'a@mail.com'),
(14, 'asd', 'asd', 333, 'a@bbb.c'),
(15, 'Rayhan Rafiud Darojat', 'Kedungwringin', 2147483647, 'ssss@gmail.com'),
(18, 'Rayhan Rafiud Darojat', 'Kedungwringin', 2147483647, 'rayhanrafiudd@gmail.com'),
(19, 'Rayhan Rafiud Darojat', 'Desa Kedungwringin Kecamatan Jatilawang, Kabupaten Banyumas\r\nKabupaten Banyumas', 2147483647, 'sirin6867@gmail.com'),
(20, 'Cek lewat hp', 'Cek', 898978, 'tugajjs@gamil.com'),
(21, 'a', 'A', 0, 'a@a.a'),
(22, '', '', 0, ''),
(23, 'Dwikydanov Inswardanu', 'New york', 2147483647, 'dwikydanov39@gmail.com'),
(24, 'Dwikydanov Inswardanu', 'New york', 2147483647, 'dwikydanov39@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(12) NOT NULL,
  `password` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `buku_tamu`
--
ALTER TABLE `buku_tamu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `buku_tamu`
--
ALTER TABLE `buku_tamu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
