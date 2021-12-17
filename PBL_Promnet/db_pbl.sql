-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2018 at 05:24 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pbl`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_jawabanketuntasan`
--

CREATE TABLE `t_jawabanketuntasan` (
  `ID_jawabanKetuntasan` int(11) NOT NULL,
  `NISN` varchar(10) NOT NULL,
  `ID_pm` varchar(10) NOT NULL,
  `Jawaban` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_jawabanpengayaan`
--

CREATE TABLE `t_jawabanpengayaan` (
  `ID_jawabanPengayaan` int(11) NOT NULL,
  `NISN` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Jawaban` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `t_jawabanpengayaan`
--

INSERT INTO `t_jawabanpengayaan` (`ID_jawabanPengayaan`, `NISN`, `Jawaban`) VALUES
(16, '9901', 'dwihwihwqishdiwhdqiwhdiwhdiqwhdiwhdwhdihwdwidqwdwd');

-- --------------------------------------------------------

--
-- Table structure for table `t_ketuntasan`
--

CREATE TABLE `t_ketuntasan` (
  `ID_ketuntasan` int(11) NOT NULL,
  `ID_pm` int(11) NOT NULL,
  `Soal` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Kunci_Jawaban` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Pilihan1` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Pilihan2` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Pilihan3` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Pilihan4` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Pilihan5` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `t_ketuntasan`
--

INSERT INTO `t_ketuntasan` (`ID_ketuntasan`, `ID_pm`, `Soal`, `Kunci_Jawaban`, `Pilihan1`, `Pilihan2`, `Pilihan3`, `Pilihan4`, `Pilihan5`) VALUES
(1, 1, 'HTML kepanjangan dari ', 'Hyperlinks and Text Markup Language ', 'Hyper Text Markup Language ', 'Home Tool Markup Language ', 'Homepage Text Markup Language ', 'Hyper Tool Markup Language', 'Hyperlinks and Text Markup Language '),
(3, 2, 'Mentransfer file dari komputer lokal ke komputer server disebut...', 'Upload', 'Download', 'Koneksi', 'Upload', 'Server', 'Load Time'),
(4, 3, 'Sebutkan dan jelaskan ciri-ciri atau karakteristik masing-masing\r\nperiode perkembangan sistem operasi menurut Tanebaum!', '', '', '', '', '', ''),
(5, 4, 'Jenis sistem operasi yang paling pertama dibuat adalah..', '', '', '', '', '', ''),
(6, 5, 'Jelaskan fungsi atau peranan empat lapisan dalam arsitektur sistem\r\noperasi windows NT, yaitu 1) Hardware abstraction layer (HAL). 2)\r\nKernel. 3) Subsystems. 4) System services?', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `t_matpel`
--

CREATE TABLE `t_matpel` (
  `ID_matpel` int(11) NOT NULL,
  `Nama_Matpel` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Deskripsi` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `t_matpel`
--

INSERT INTO `t_matpel` (`ID_matpel`, `Nama_Matpel`, `Deskripsi`) VALUES
(1, 'Pemrograman Dasar', 'Pemrograman web 1 merupakan salah satu mata pelajaran wajib dasar yang mempelajari perintah-perintah dari HTML, pengintegrasian komponen multimedia, sehingga dapat menyajikan sebuah halaman web sesuai\r\ndengan aturan yang berlaku.'),
(2, 'Jaringan Dasar', 'Jaringan dasar komputer adalah salah satu mata pelajaran wajib dasar. Materi pada Konsep jaringan komputer yakni model OSI dalam jaringan\r\nkomputer,topologi jaringan, media yang sesuai dalam komunikasi data jaringan,\r\nprotokol jaringan.'),
(3, 'Sistem Operasi', 'Mata pelajaran sistem operasi merupakan salah satu pelajaran wajib dasar yang dipelajari pada semester 1.'),
(4, 'Perakitan Komputer', 'Mata pelajaran perakitan komputer dipelajari pada kelas 10 semester 1.'),
(5, 'Simulasi Digital', 'Mata pelajaran sistem digital dipelajari pada semester 1 kelas X SMK.');

-- --------------------------------------------------------

--
-- Table structure for table `t_pembelajaran`
--

CREATE TABLE `t_pembelajaran` (
  `ID_pm` int(11) NOT NULL,
  `Nama_sesi` varchar(10) NOT NULL,
  `Topik` varchar(50) NOT NULL,
  `Uraian` varchar(400) NOT NULL,
  `Konten1` varchar(50) NOT NULL,
  `Konten2` varchar(50) NOT NULL,
  `Konten3` varchar(50) NOT NULL,
  `Tugas` varchar(50) NOT NULL,
  `ID_matpel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_pembelajaran`
--

INSERT INTO `t_pembelajaran` (`ID_pm`, `Nama_sesi`, `Topik`, `Uraian`, `Konten1`, `Konten2`, `Konten3`, `Tugas`, `ID_matpel`) VALUES
(1, '1', 'Menyajikan format teks dalam dokumen web ', 'Sesi ini mempelajari tentang dasar-dasar HTML, memahami properti dokumen web, menyajikan teks dalam format tertentu pada halaman dokumen web.', 'Dasar-Dasar HTML.docx', 'Struktur Dasar Dokumen HTML.docx', 'Dokumen HTML5.pdf', 'Tugas 1', 1),
(2, '2', 'Menyajikan Pemformatan Teks dan Paragraf Web', 'Topik ini meliputi materi pemformatan teks, memahami pemformatan paragrapf web, dan menyajikan pemformatan paragraf pada halaman dokumen web.', 'Pemformatan Teks.docx', 'Pemformatan Paragraf.docx', 'Format Teks.PNG', 'Tugas 2', 1),
(3, '3', 'Menyajikan Hasil Pembuatan List Minimal ', 'Pembelajaran ini melipuyi pembahasan mengenai pembuatan list minimal dan menyajikan hasil pembuatan list minimal', 'Pengertian List.pdf', 'Tipe List dalam HTML.pdf', '', 'Tugas 3', 1),
(4, '4', 'Menyajikan Pembuatan List Kombinasi', 'Membuat dan menyajikan list kombinasi ', 'Pembuatan List Kombinasi.docx', '', '', 'Tugas 4', 1),
(5, '5', 'Menyajikan Pembuatan Tabel ', 'Memahami dan menyajikan tabel.', 'Pembuatan Tabel.docx', 'Contoh Penerapan Tabel.PNG', '', 'Tugas 5', 1),
(6, '6', 'Menyajikan Tabel dengan Spaning ', 'Membuat dan menyajikan tabel dengan spaning.', 'Pembuatan Tabel dengan Spanning.pdf', 'Contoh Tabel Spanning.PNG', 'Contoh Koding Colspan.PNG', 'Tugas 6', 1),
(7, '1', 'Jaringan Komputer PAN (Personal Area Network)', 'Memahami dan menganalisis jaringan komputer PAN.', 'Mengenal Jaringan PAN.docx', '', '', 'Tugas 1', 2),
(8, '2', 'Mengenal Jaringan LAN', 'Memahami dan menganalisis jaringan komputer LAN.', 'Mengenal Jaringan LAN.docx', '', '', 'Tugas 2', 2),
(9, '3', 'Mengenal Jaringan WAN', 'Memahami dan menganalisis jaringan komputer WAN.', 'Mengenal Jaringan WAN.docx', '', '', 'Tugas 3', 2),
(10, '1', 'Perkembangan Operasi Windows', 'Menelusuri perkembangan operasi windows  dari masa ke masa.', 'Perkembangan Operasi Windows.docx', '', '', 'Tugas 1', 3),
(11, '2', 'Arsitektur Sistem Operasi', 'Mengenal arsitektur sistem operasi.', 'Arsitektur Sistem Operasi.docx', '', '', 'Tugas 2', 3),
(12, '3', 'Arsitektur Windows', 'Mengenal arsitektur sistem operasi Windows.', 'Arsitektur Windows.docx', '', '', 'Tugas 3', 3),
(13, '1', 'Pengertian Sistem Operasi', 'Memahami dan menjelaskan pengertian sistem operasi komputer. ', 'Pengertian Sistem Operasi Komputer.docx', '', '', 'Tugas 1', 4),
(14, '2', 'Jenis Sistem Operasi', 'Memahami dan menjelaskan jenis sistem operasi komputer. ', 'Jenis sistem operasi.docx', '', '', 'Tugas 2', 4),
(15, '3', 'Perkembangan Sistem Operasi Windows', 'Memahami dan menjelaskan perkembangan sistem operasi Windows ', 'Perkembangan Sistem Operasi Windows.docx', '', '', 'Tugas 3', 4);

-- --------------------------------------------------------

--
-- Table structure for table `t_pengayaan`
--

CREATE TABLE `t_pengayaan` (
  `ID_pengayaan` int(11) NOT NULL,
  `Soal` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ID_pm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `t_pengayaan`
--

INSERT INTO `t_pengayaan` (`ID_pengayaan`, `Soal`, `ID_pm`) VALUES
(1, 'Dalam pembuatan tabel colspan, dapatkah jika value yang diinput adalah 0? Jelaskan alasannya!', 1),
(2, 'Jelaskan mengenai DNA jenis jaringan komputer!', 2),
(3, 'Apakah dalam satu komputer bisa memuat dua sistem operasi yang berbeda? Jelaskan secara rinci beserta contohnya!', 3),
(4, 'Pada saat perangkat PC telah dipasang, batre CMOS berbunyi bip putus-putus. Jelaskan fenomena tersebut!', 4),
(5, 'Dalam konversi biner ke desimal, apakah operasi pembagian dapat digunakan? Berikan alasannya!', 5);

-- --------------------------------------------------------

--
-- Table structure for table `t_siswa`
--

CREATE TABLE `t_siswa` (
  `ID_siswa` int(11) NOT NULL,
  `NISN` varchar(10) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_siswa`
--

INSERT INTO `t_siswa` (`ID_siswa`, `NISN`, `Nama`, `Password`) VALUES
(1, '9901', 'Agnes', 'agnes.01'),
(2, '9902', 'Bobby', 'bobby.02'),
(3, '9903', 'Citra', 'citra.03'),
(4, '9904', 'Dikta', 'dikta.04'),
(5, '9905', 'Eric', 'eric.05'),
(6, '9906', 'Faris', 'faris.06'),
(7, '9907', 'Gina', 'gina.07'),
(8, '9908', 'Hilman', 'hilman.08'),
(9, '9909', 'Ihsan', 'ihsan.09'),
(10, '9910', 'June', 'june.10');

-- --------------------------------------------------------

--
-- Table structure for table `t_soal`
--

CREATE TABLE `t_soal` (
  `ID_soal` int(11) NOT NULL,
  `ID_pm` int(11) NOT NULL,
  `Pertanyaan` varchar(100) NOT NULL,
  `Pilihan1` varchar(50) NOT NULL,
  `Pilihan2` varchar(50) NOT NULL,
  `Pilihan3` varchar(50) NOT NULL,
  `Pilihan4` varchar(50) NOT NULL,
  `Pilihan5` varchar(50) NOT NULL,
  `Kunci_Jawaban` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_soal`
--

INSERT INTO `t_soal` (`ID_soal`, `ID_pm`, `Pertanyaan`, `Pilihan1`, `Pilihan2`, `Pilihan3`, `Pilihan4`, `Pilihan5`, `Kunci_Jawaban`) VALUES
(1, 1, 'HTML merupakan singkatan dari…', 'Home Tool Markup Language', 'Hyperlinks and Text Markup Language', 'Hyper Text Markup Language', 'Hyper Tool Markup Language', 'Hyper Tricks Markup Language', 'Hyper Text Markup Language'),
(2, 1, 'Dalam penulisan file HTML, teks yang akan muncul pada title bar didefinisikan diantara tag…', 'tag head dan /head', 'tag title dan /title', 'tag bar dan /bar', 'tag titlebar dan /titlebar', 'tag body dan /body', 'tag title dan /title'),
(3, 1, 'Tag HTML yang digunakan untuk menandai sebuah paragraf dari dokumen HTML adalah…', 'p', 'paragraph', 'pg', 'paragraf', 'prg', 'p'),
(4, 1, 'Tag HR memiliki atribut…', 'size', 'width', 'height', 'size dan width', 'size dan height', 'size dan width'),
(5, 1, 'Perintah td valign=\"top\" Isi sel /td memiliki arti…', 'Isi sel dalam baris menjadi rata bawah', 'Isi sel dalam baris menjadi rata tengah', 'Isi sel dalam baris menjadi rata atas', 'Isi sel dalam kolom menjadi rata atas', 'Isi sel dalam kolom dan baris menjadi rata atas', 'Isi sel dalam baris menjadi rata atas'),
(6, 2, 'Fungsi dari tag center adalah...', 'Menampilkan informasi', 'Tulisan strong', 'Mempertebal tulisan', 'Rata tengah', 'Mendefinisikan tabel', 'Rata tengah'),
(7, 2, 'Tag yang digunakan untuk menampilkan informasi dalam bentuk list adalah...', 'li', 'ul', 'ol', 'tr', 'td', 'li'),
(8, 2, 'Tag ul dalam list berfungsi sebagai...', 'Membuat kolom', 'Ganti paragraf', 'Pindah baris', 'Membuat teks miring', 'Mendefinisian awal dan akhir list', 'Mendefinisian awal dan akhir list'),
(9, 2, 'List dalam format bullet adalah...', 'ol', 'h1', 'ul', 'big', 'h3', ''),
(10, 2, 'Tag HTML yang digunakan untuk menandai sebuah paragraf dari dokumen HTML adalah…', 'p', 'paragraph', 'pg', 'paragraf', 'prg', 'p'),
(11, 3, 'Tag HTML yang digunakan untuk membuat tabel adalah...', 'tab', 'tbl', 'tbody', 'table', 'thead', 'table'),
(12, 3, 'Untuk menentukan baris dalam tabel adalah...', 'tr', 'td', 'th', 'ts', 'tbody', 'tr'),
(13, 3, 'Berikut ini merupakan atribut pada tabel, kecuali...', 'bgcolor', 'align', 'width', 'border', 'font', 'font'),
(14, 3, 'Fungsi dari atribut colspan adalah...', 'Melebarkan baris', 'Melebarkan kolom', 'Melebarkan baris dan kolom', 'Membuat border kolom', 'Membuat border baris', 'Melebarkan kolom'),
(15, 3, 'rowspan=\"2\" merupakan arti dari...', 'Menggabungkan dua baris menjadi satu sel', 'Menggabungkan dua kolom menjadi satu sel', 'Memisahkan satu sel menjadi dua kolom', 'Memisahkan satu sel menjadi dua baris', 'Melebarkan tabel', 'Menggabungkan dua baris menjadi satu sel'),
(16, 4, 'Tag HTML yang digunakan untuk\r\nmenampilkan sebuah gambar dalam\r\nhalaman web adalah ....', 'img', 'image', 'gbr', 'pict', 'jpg', 'img'),
(17, 4, 'Tag HTML yang digunakan untuk\r\nmenampilkan sebuah video dalam halaman\r\nweb adalah ....', 'img_video', 'video', 'vid', 'recorder', 'img', 'vid'),
(18, 4, 'Yang tidak termasuk dalam format video adalah...', 'mp4', 'avi', 'flv', 'mkv', 'mp3', 'mp3'),
(19, 4, 'Multimedia adalah...', 'Teknologi yang memadukan daftar', 'Teknologi yang memadukan baris dan kolom', 'Teknologi yang memadukan gambar, video dan suara', 'Gabungan dari beberapa gambar', 'Gabungan dari beberapa teks', 'Teknologi yang memadukan gambar, video dan suara'),
(20, 4, 'Tag embed berfungsi untuk...', 'Memainkan musik latar belakang', 'Memainkan berkas dalam bentuk suara/film', 'Membuat baris baru', 'Merinci daftar media', 'Menghapus media', 'Memainkan berkas dalam bentuk suara/film'),
(21, 5, 'Tag yang digunakan untuk membuat hyperlink adalah...', 'a', 'p', 'br', 'link', 'hyperlink', 'a'),
(22, 5, 'Untuk membuat link yang menuju ke halaman lain, tag yang digunakan adalah ...', 'href', 'a href', 'a href to', 'a href webpage', 'a href smsto', 'a href'),
(23, 5, 'Fungsi dari hyperlink dalam halaman web adalah...', 'Untuk menggabungkan 2 atau lebih kolom pada baris ', 'Untuk memudahkan pengunjung web dalam menulusuri/m', 'Untuk membuat table', 'Untuk menggabungkan halaman web', 'Mengubah tampilan halaman web', 'Untuk memudahkan pengunjung web dalam menulusuri/m'),
(24, 5, 'Pengertian dari link absolut adalah...', 'Link yang akan menunjuk ke email seseorang', 'Link yang akan menunjuk ke halaman dari situs web ', 'Link yang akan menunjuk ke nomor telepon', 'Link yang akan menunjuk ke email yang tertera', 'Link yang akan menunjuk ke nomor telepon yang tert', 'Link yang akan menunjuk ke halaman dari situs web '),
(25, 5, 'Yang dimaksud dengan link relatif adalah...', 'Link yang tujuannya mengarah ke dokumen-dokumen la', 'Link yang tujuannya mengarah ke dokumen-dokumen la', 'Link yang akan menunjuk ke nomor telepon', 'Link yang akan menunjuk ke email yang tertera', 'Link yang akan menunjuk ke nomor telepon yang tert', 'Link yang tujuannya mengarah ke dokumen-dokumen la'),
(27, 6, 'Kegunaan form adalah...', 'Memperoleh informasi dari pengguna', 'Untuk mencetak miring dalam pembuatan web', 'Untuk melihat data-data yang tersedia', 'Untuk dapat mengakses internet lebih cepat', 'Untuk melakukan hubungan local antar komputer', 'Memperoleh informasi dari pengguna'),
(28, 6, 'Atribut yang masuk ke dalam tag textarea adalah...', 'name', 'action', 'method', 'value', 'option', 'name'),
(29, 6, 'Atribut maxlength dalam form berfungi untuk...', 'Untuk menamai kotak', 'Untuk menandai atau menampung teks', 'Mengatur ukuran teks pada kotak', 'Menentukan panjang maksimum teks', 'Mengatur warna kotak', 'Menentukan panjang maksimum teks'),
(30, 6, 'Yang tidak termasuk ke dalam contoh penggunaan form adalah...', 'Penjualan', 'Peminjaman buku', 'Pendaftaran anggota klub', 'Pembuatan kolom', 'Pendaftaran siswa baru', 'Pembuatan kolom'),
(31, 6, 'Definisi dari elemen button pada form adalah...', 'Merupakan daftar secara drop-down', 'Mendefinisikan group options yang berhubungan', 'Merupakan tombol yang dapat diklik', 'Merupakan hasil dari suatu perhitungan', 'Merupakan chechbox', 'Merupakan tombol yang dapat diklik');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_jawabanpengayaan`
--
ALTER TABLE `t_jawabanpengayaan`
  ADD PRIMARY KEY (`ID_jawabanPengayaan`);

--
-- Indexes for table `t_ketuntasan`
--
ALTER TABLE `t_ketuntasan`
  ADD PRIMARY KEY (`ID_ketuntasan`);

--
-- Indexes for table `t_matpel`
--
ALTER TABLE `t_matpel`
  ADD PRIMARY KEY (`ID_matpel`);

--
-- Indexes for table `t_pembelajaran`
--
ALTER TABLE `t_pembelajaran`
  ADD PRIMARY KEY (`ID_pm`);

--
-- Indexes for table `t_pengayaan`
--
ALTER TABLE `t_pengayaan`
  ADD PRIMARY KEY (`ID_pengayaan`);

--
-- Indexes for table `t_siswa`
--
ALTER TABLE `t_siswa`
  ADD PRIMARY KEY (`ID_siswa`);

--
-- Indexes for table `t_soal`
--
ALTER TABLE `t_soal`
  ADD PRIMARY KEY (`ID_soal`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_jawabanpengayaan`
--
ALTER TABLE `t_jawabanpengayaan`
  MODIFY `ID_jawabanPengayaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `t_ketuntasan`
--
ALTER TABLE `t_ketuntasan`
  MODIFY `ID_ketuntasan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `t_matpel`
--
ALTER TABLE `t_matpel`
  MODIFY `ID_matpel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `t_pembelajaran`
--
ALTER TABLE `t_pembelajaran`
  MODIFY `ID_pm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `t_pengayaan`
--
ALTER TABLE `t_pengayaan`
  MODIFY `ID_pengayaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `t_siswa`
--
ALTER TABLE `t_siswa`
  MODIFY `ID_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `t_soal`
--
ALTER TABLE `t_soal`
  MODIFY `ID_soal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
