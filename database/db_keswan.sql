-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2016 at 09:31 PM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_keswan`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_atributgejala`
--

CREATE TABLE `t_atributgejala` (
  `id_atributgejala` varchar(5) NOT NULL,
  `nama_atributgejala` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_atributgejala`
--

INSERT INTO `t_atributgejala` (`id_atributgejala`, `nama_atributgejala`) VALUES
('G001', 'Hewan demam (+40- 41 derajat Celcius).'),
('G002', 'Nafsu makan turun'),
('G003', 'Pernapasan cepat'),
('G004', 'Denyut jantung tidak stabil'),
('G005', 'Hidung mengeluarkan \r\ncairan.'),
('G006', 'Hewan ngorok'),
('G007', 'Mati tiba-tiba'),
('G008', 'Demam biasa'),
('G009', 'Demam tremor (kejang- kejang)'),
('G010', 'Keluar darah dari \r\nseluruh tubuh setelah mati'),
('G011', 'Keguguran setelah 5 (bulan)'),
('G012', 'Keluarnya plasenta\r\n tertunda'),
('G013', 'Terjadi radang uterus'),
('G014', 'Mengalami radang\r\n kemaluan'),
('G015', 'Kurus\r'),
('G016', 'Mencret tidak berbau'),
('G017', 'Sapi terlihat lesu'),
('G018', 'Batuk sifatnya kronis'),
('G019', 'Bernapas susah'),
('G020', 'Kelenjar air susu dan ambing membengkak'),
('G021', 'Kesullitan makan dan\r\n menelan'),
('G022', 'Kelemahan palyse'),
('G023', 'Radang pada kelenjar air susu'),
('G024', 'kelenjar air susu tidak\r\n normal'),
('G025', 'Kelenjar air susu merah'),
('G026', 'Kelenjar air susu terasa\r\n panas'),
('G027', 'sapi meraung ketika kelenjar air susu disentuh'),
('G028', 'Air susu encer dan bercampur nanah'),
('G029', 'Terdapat selaput lendir di dalam mulut'),
('G030', 'Bibir dan gusi tampak merah, kering dan \r\npanas'),
('G031', 'Dari mulut keluar ludah yang panjang\r\n seperti benang'),
('G032', 'Bagian pergelangan kaki deket kuku  bengkak'),
('G033', 'Mencret bercampur darah');

-- --------------------------------------------------------

--
-- Table structure for table `t_detail_kasus`
--

CREATE TABLE `t_detail_kasus` (
  `id_detail_kasus` int(10) NOT NULL,
  `id_kasus` varchar(5) NOT NULL,
  `id_atributgejala` varchar(5) NOT NULL,
  `bobot` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_detail_kasus`
--

INSERT INTO `t_detail_kasus` (`id_detail_kasus`, `id_kasus`, `id_atributgejala`, `bobot`) VALUES
(1, 'P001', 'G001', 3),
(2, 'P001', 'G002', 1),
(3, 'P001', 'G003', 3),
(4, 'P001', 'G005', 1),
(5, 'P001', 'G006', 5),
(6, 'P002', 'G002', 5),
(7, 'P002', 'G003', 1),
(8, 'P002', 'G004', 3),
(9, 'P002', 'G009', 5),
(10, 'P002', 'G010', 1),
(11, 'P003', 'G011', 1),
(12, 'P003', 'G012', 3),
(13, 'P003', 'G013', 3),
(14, 'P003', 'G014', 5),
(15, 'P004', 'G015', 1),
(16, 'P004', 'G016', 5),
(17, 'P005', 'G002', 1),
(18, 'P005', 'G005', 5),
(19, 'P005', 'G015', 1),
(20, 'P005', 'G017', 1),
(21, 'P005', 'G018', 5),
(22, 'P006', 'G019', 1),
(23, 'P006', 'G020', 1),
(24, 'P006', 'G021', 3),
(25, 'P006', 'G022', 5),
(26, 'P007', 'G023', 5),
(27, 'P007', 'G023', 1),
(28, 'P007', 'G024', 5),
(29, 'P007', 'G025', 5),
(30, 'P007', 'G026', 5),
(31, 'P007', 'G027', 1),
(32, 'P007', 'G028', 5),
(33, 'P008', 'G002', 3),
(34, 'P008', 'G007', 1),
(35, 'P008', 'G008', 1),
(36, 'P008', 'G017', 1),
(37, 'P008', 'G033', 5),
(38, 'P009', 'G029', 5),
(39, 'P009', 'G030', 1),
(40, 'P009', 'G031', 3),
(41, 'P009', 'G032', 5),
(42, 'P009', 'G002', 1),
(43, 'P009', 'G008', 1),
(58, 'P010', 'G015', 1),
(66, 'P014', 'G008', 1),
(68, 'P015', 'G003', 5),
(69, 'P015', 'G005', 5),
(70, 'P015', 'G019', 5);

-- --------------------------------------------------------

--
-- Table structure for table `t_detail_komentar`
--

CREATE TABLE `t_detail_komentar` (
  `id_detail_komentar` int(5) NOT NULL,
  `id_komentar` int(5) NOT NULL,
  `nip` varchar(15) NOT NULL,
  `status` varchar(10) DEFAULT NULL,
  `tanggal_detail` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_detail_komentar`
--

INSERT INTO `t_detail_komentar` (`id_detail_komentar`, `id_komentar`, `nip`, `status`, `tanggal_detail`) VALUES
(5, 15, '0903001', '', '2016-01-31 21:53:19'),
(8, 16, '0910003', 'like', '2016-01-31 21:42:53'),
(9, 15, '0910003', 'like', '2016-01-31 21:42:58'),
(10, 48, '0910003', '', '2016-01-31 21:49:08'),
(11, 5, '0910003', 'like', '2016-01-31 21:50:21'),
(12, 10, '0910003', 'like', '2016-01-31 21:50:33'),
(13, 16, '0903001', 'like', '2016-01-31 21:53:44'),
(14, 51, '0903001', 'like', '2016-01-31 22:03:15'),
(15, 48, '0903001', 'like', '2016-01-31 22:03:19'),
(16, 53, '0903001', '', '2016-01-31 22:03:38');

-- --------------------------------------------------------

--
-- Table structure for table `t_dokumen`
--

CREATE TABLE `t_dokumen` (
  `id_dokumen` int(5) NOT NULL,
  `id_kategori` int(3) NOT NULL,
  `nip` varchar(15) NOT NULL,
  `nama_dokumen` varchar(150) NOT NULL,
  `dokumen_pengetahuan` varchar(255) NOT NULL,
  `tanggal_unggah` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_dokumen`
--

INSERT INTO `t_dokumen` (`id_dokumen`, `id_kategori`, `nip`, `nama_dokumen`, `dokumen_pengetahuan`, `tanggal_unggah`) VALUES
(10, 2, '0903001', 'SOP (Perawatan Kuku)', '../../data/dokumen/SOP (Perawatan Kuku).docx', '2016-01-17 15:06:42'),
(16, 1, '0910003', 'SOP (inseminasi Buatan)', '../../data/dokumen/SOP (inseminasi Buatan).doc', '2016-02-02 00:11:16'),
(19, 3, '0903001', 'pengendalian kesehatan sapi perah', '../../data/dokumen/pengendalian kesehatan sapi perah.pdf', '2016-02-18 19:14:12');

-- --------------------------------------------------------

--
-- Table structure for table `t_forum`
--

CREATE TABLE `t_forum` (
  `id_forum` int(5) NOT NULL,
  `nip` varchar(15) NOT NULL,
  `judul_forum` varchar(255) NOT NULL,
  `isi_forum` text NOT NULL,
  `tanggal_post` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_forum`
--

INSERT INTO `t_forum` (`id_forum`, `nip`, `judul_forum`, `isi_forum`, `tanggal_post`) VALUES
(1, '0911004', 'pemberian vaksin', 'berapa kali sekali dalam pemberian vaksin idealnya?', '2015-12-21 07:00:00'),
(2, '0903001', 'jadwal diklat di Kabupaten Bandung Barat', 'Jadwal Diklat dilaksanakan pukul 8:00 tanggal 21 November 2015', '2015-12-22 12:16:00'),
(3, '0910003', 'Kendala IB', 'Sapi tidak bunting meski sudah di IB?', '2015-12-22 21:01:14'),
(4, '0903001', 'Perawatan', 'Kegiatan perawatan pemotongan kuku dan perawatan tanduk harus dilakukan setiap sebulan 2 kali minimal!', '2016-01-20 14:33:47');

-- --------------------------------------------------------

--
-- Table structure for table `t_histori_penanganan`
--

CREATE TABLE `t_histori_penanganan` (
  `id_lesson_learned` int(5) NOT NULL,
  `no_anggota` int(7) NOT NULL,
  `nama_anggota` varchar(30) NOT NULL,
  `alamat_anggota` varchar(50) NOT NULL,
  `tanggal_penanganan` date NOT NULL,
  `nomor_telinga` int(3) NOT NULL,
  `nama_sapi` varchar(10) NOT NULL,
  `jenis_penanganan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_histori_penanganan`
--

INSERT INTO `t_histori_penanganan` (`id_lesson_learned`, `no_anggota`, `nama_anggota`, `alamat_anggota`, `tanggal_penanganan`, `nomor_telinga`, `nama_sapi`, `jenis_penanganan`) VALUES
(1, 1448, 'Fani Muhammad Zaelani', 'Cibadak', '2015-12-23', 5, 'Kaliber', 'Inseminasi Buatan'),
(2, 1446, 'Jimmi Irawan', 'Keratawangi', '2016-01-12', 5, 'Waja', 'Inseminasi Buatan');

-- --------------------------------------------------------

--
-- Table structure for table `t_identitas_kasus`
--

CREATE TABLE `t_identitas_kasus` (
  `id_identitas_kasus` int(10) NOT NULL,
  `jenis_kelamin` enum('jantan','betina') NOT NULL,
  `umur_sapi` int(10) NOT NULL,
  `nama_sapi` varchar(15) NOT NULL,
  `no_telinga` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_identitas_kasus`
--

INSERT INTO `t_identitas_kasus` (`id_identitas_kasus`, `jenis_kelamin`, `umur_sapi`, `nama_sapi`, `no_telinga`) VALUES
(110, 'jantan', 0, '', 0),
(111, 'betina', 0, '', 0),
(112, 'betina', 0, '', 0),
(113, 'betina', 0, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `t_kasus`
--

CREATE TABLE `t_kasus` (
  `id_kasus` varchar(5) NOT NULL,
  `nip` varchar(15) NOT NULL,
  `nama_kasus` varchar(150) NOT NULL,
  `solusi` text NOT NULL,
  `status_cbr` enum('Revisi','Retain') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_kasus`
--

INSERT INTO `t_kasus` (`id_kasus`, `nip`, `nama_kasus`, `solusi`, `status_cbr`) VALUES
('P001', '0903001', 'SeptichaemiaEpizooticae (Penyakit Ngorok)', '<b>Pengobatan :\r\n</b><br><ol><li>Streptomycine + 10-20 mg B.B.I.M&nbsp;</li><li>Tetracycline + 4 mg B.B.I.M&nbsp;</li><li>Chloram phenicol + 4 mg B.B.I.M&nbsp;</li><li>Serum anti.&nbsp;</li></ol><br><b>Pencegahan : </b><br><ol><li>Dengan vaksinasi S.E</li></ol>', 'Retain'),
('P002', '0903001', 'Antraks', '<b>Pengobatan :\r\n</b><br>a. Streptomycine + 8-10 gr tiap 2 hari\r\n<br>b. Anti Antrax serum 100-250 ml/hari\r\n<br><br>Pencegahan :\r\n<br>a. Menjaga kebersihan kandang\r\n<br>b. Menjauhkan ternak yang sakit dengan\r\nhewan ternak yang sehat', 'Retain'),
('P003', '0903001', 'Brucellosis', 'Pengobatan :\r\na. Streptomycine + 10-20 mg/kg B.B.I.M\r\nb. Chlor tetracyclin\r\nPencegahan :\r\na. Menjaga kebersihan kandang\r\nb. Vaksinasi\r\nc. Menghilangkan sumber penyakit', 'Retain'),
('P004', '0903001', 'Para Turberculosis – Jhone’s Disease', 'Pengobatan :\r\nStreptomycine + 50 mg/kg B.B.I.M tiap hari.\r\nPencegahan :\r\nSangat sulit karena masa inkubasi sangat panjang\r\ndan tanda – tanda tidak jelas maka harus\r\nmenyingkirkan hewan yang sakit.', 'Retain'),
('P005', '0903001', 'T.B.C(TuberCulosis)', 'Pengobatan :\r\nStreptomycine + 10-20 mg/kg B.B.I.M\r\ndiberikan dalam waktu yang lama\r\nPencegahan :\r\na. Menjaga kebersihan kandang dan hewan\r\nyang sehat.\r\nb. Vaksinasi\r\nc. Memisahkan hewan yang terjangkit penyakit\r\ndengan hewan yang sehat.', 'Retain'),
('P006', '0903001', 'Botulismus', 'Pengobatan :\r\na. Streptomycine + 10-20 mg/kg B.B.I.M\r\nb. Chlor tetracyclin\r\nPencegahan :\r\na. Menjaga kebersihan kandang\r\nb. Vaksinasi\r\nc. Menghilangkan sumber penyakit', 'Retain'),
('P007', '0903001', 'Mastitis', 'Pengobatan :\r\na. Akhiri masa laktasi sapi\r\nb. Dengan anti biotik brood Spectrum.\r\nc. Chloram phenicol + 4 mg/kg B.B.I.M\r\nd. Penicillin.\r\ne. Streptomycine + 5-8 mg/kg B.B.I.M.\r\nPencegahan :\r\na. Menjaga kebersihan kandang dan\r\nlingkungan.\r\nb. Kebersihan pekerja.', 'Retain'),
('P008', '0903001', 'Eryspelas', 'Pengobatan :\r\na. Dengan Pinicilin yang disuntikan di sekitar\r\nluka.\r\nb. Serta Intra Muscular\r\nc. Tetanus anti toxin dengan dosis 0.8 – 1\r\nml/kg berat badan setiap suntikan.\r\nPencegahan :\r\na. Penggunaan disenfektan pada kandang dan\r\ntanah.\r\nb. Hewan yang mati harus dibakar dan\r\ndikububur', 'Retain'),
('P009', '0903001', 'Penyakit mulut dan kuku', '<b>Pengobatan :&nbsp;</b><br><ol><li>Dengan injeksi antibiotik atau Sulva.</li><li>Dengan piciline powder. &nbsp;</li><li>Dan ditambah Vittamin A agar menguatkan\r\njaringan.</li></ol><br><b>Pencegahan :\r\n</b><br><ol><li>Menjaga kebersihan kandang dan\r\nkebersihan semua peralatan kerja.&nbsp;</li><li>Hindarkan tamu keluar masuk kedalam\r\nkandang.&nbsp;</li><li>Pisahkan hewan yang sehat dengan yang\r\nterjangkit penyakit.&nbsp;</li><li>Jika dipotong harus diawasi dengan ketat.</li></ol>', 'Retain'),
('P010', '0903001', 'gejala demam biasa', 'pengobatan dengan memberikan vaksin biasa', 'Retain'),
('P011', '0903001', 'Tidak ada kasus', 'Belum ada Solusi', 'Revisi'),
('P012', '0903001', 'Tidak ada kasus', 'Belum ada Solusi', 'Revisi'),
('P013', '0903001', 'Tidak ada kasus', 'Belum ada Solusi', 'Revisi'),
('P014', '0903001', 'Tidak ada kasus', 'Belum ada Solusi', 'Revisi'),
('P015', '0903001', 'Bloat', '<div><b>PENCEGAHAN</b></div><div><span>1.&nbsp;&nbsp;&nbsp;T</span>idak membiarkan ternak dalam kondisi terlalu lapar</div><div><span>2.&nbsp;&nbsp;&nbsp;M</span><span>emberikan tempat bagi ternak untuk leluasa melakukan gerakan seperti berjalan-jalan,&nbsp;&nbsp;</span>Sebelum diberikan hijauan segar diberikan terlebih dahulu jerami kering atau rumput kering</div><div><span>3.&nbsp;&nbsp;&nbsp;M</span>enghindari pemberian hijauan terutama legum maksimal 50%.</div><div><span>4.&nbsp;&nbsp;&nbsp;A</span>pabila ternak di gembalakan usahakan setelah tidak ada embun</div><div><br></div><div><b>PENGOBATAN</b></div><div><span>1.&nbsp;&nbsp;&nbsp;Pertolongan pertama dengan&nbsp;</span>men<span>empatkan&nbsp;</span><span>kaki ternak&nbsp;</span>pada tempat yang lebih tinggi, mulut dibuka dan sepotong kayu dimasukkan melintang pada kedua ujungnya dikaitkan tali yang dililitkan disamping kepala sampai ke belakang tanduknya agar tidak lepas dan gas dapat segera keluar.</div><div><span>2.&nbsp;&nbsp;&nbsp;Ternak&nbsp;</span>diberi minyak goreng 100-200 ml atau lebih, minyak kayu putih atau minyak atsiri lainnya diberikan melalui mulut maupun dicampur air hangat.</div><div><span>3.&nbsp;&nbsp;&nbsp;M</span><span>emberikan obat-obatan seperti&nbsp;<i>Anti Bloat&nbsp;</i>(bahan aktif:&nbsp;<i>Dimethicone</i>), dosis sapi/ kerbau: 100 ml obat diencerkan dengan 500 ml air, sedang untuk kambing/ domba: 25 ml obat diencerkan dengan 250 ml air, kemudian diminumkan.&nbsp;<i>Wonder Athympanicum</i>, dosis: sapi/ kerbau: 20 â€“ 50 gram, sedang untuk kambing/ domba: 5 â€“ 20 gram, dicampur air secukupnya, kemudian diminumkan.</span></div><div><span>4.&nbsp;&nbsp;&nbsp;Apabila keadaan ternak sudah parah maka&nbsp;</span>upaya pengeluaran gas<span>&nbsp;dengan cara menusuk perut ternak sebelah kiri dengan trocoar dan cannula.</span></div>', 'Retain');

-- --------------------------------------------------------

--
-- Table structure for table `t_kategori`
--

CREATE TABLE `t_kategori` (
  `id_kategori` int(3) NOT NULL,
  `nama_kategori` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_kategori`
--

INSERT INTO `t_kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'IB (Inseminasi Buatan'),
(2, 'Perawatan'),
(3, 'Pengobatan dan pengendalian penyakit');

-- --------------------------------------------------------

--
-- Table structure for table `t_komentar`
--

CREATE TABLE `t_komentar` (
  `id_komentar` int(5) NOT NULL,
  `id_forum` int(5) NOT NULL,
  `nip` varchar(15) NOT NULL,
  `isi_komentar` text NOT NULL,
  `tanggal_komentar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_komentar`
--

INSERT INTO `t_komentar` (`id_komentar`, `id_forum`, `nip`, `isi_komentar`, `tanggal_komentar`) VALUES
(1, 3, '0912005', 'lihat ada leleran lendir pada vulva tidak?', '2015-12-23 01:00:00'),
(4, 3, '0912005', 'perhatikan kualitas semen', '2015-12-23 02:00:00'),
(5, 3, '0910003', 'oh siap oke kalo begitu ', '2015-12-23 04:17:23'),
(10, 3, '0903001', 'lihat kondisi suhu sapi', '2015-12-30 13:49:13'),
(15, 1, '0910003', 'kurang lebih 1 sampai 2 minggu sekali', '2016-01-03 23:08:48'),
(16, 1, '0910003', 'tes', '2016-01-21 07:24:31'),
(48, 2, '0912005', 'berlaku untuk semua bagian ?', '2016-01-21 17:21:08'),
(51, 2, '0910003', 'iya berlaku untuk semua bagian', '2016-01-21 19:07:09'),
(53, 2, '0903001', 'tes', '2016-01-31 22:03:06'),
(58, 3, '0903001', 'gdfgdfg', '2016-02-03 05:51:17'),
(59, 3, '0911004', 'hati hati terjangkit virus pada uterus', '2016-02-04 03:44:57');

-- --------------------------------------------------------

--
-- Table structure for table `t_lesson_learned`
--

CREATE TABLE `t_lesson_learned` (
  `id_lesson_learned` int(5) NOT NULL,
  `nip` varchar(15) NOT NULL,
  `keterangan` text NOT NULL,
  `tanggal_posting` datetime NOT NULL,
  `kode_pejantan` int(7) DEFAULT NULL,
  `nama_pejantan` varchar(20) DEFAULT NULL,
  `penanganan_pkb` varchar(20) DEFAULT NULL,
  `penanganan_lainnya` text,
  `proses_ib` int(2) DEFAULT NULL,
  `dosis` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_lesson_learned`
--

INSERT INTO `t_lesson_learned` (`id_lesson_learned`, `nip`, `keterangan`, `tanggal_posting`, `kode_pejantan`, `nama_pejantan`, `penanganan_pkb`, `penanganan_lainnya`, `proses_ib`, `dosis`) VALUES
(1, '0903001', '<b>Hasil Penanganan pelayanan IB yaitu :<br></b><ol><li>Kondisi Straw Bagus</li><li>Kondisi Sapi Sehat dan Normal</li></ol><br>', '2016-02-17 10:06:03', 301701, 'Forte', '', '', 1, 1),
(2, '0910003', '<b>Hasil dari penanganan Inseminasi Buatan pada Sapi dengan no telinga 05 desa kertawangi yaitu&nbsp;<br></b><ol><li><b>Terdapat kendala pada semen yang agak beku</b></li><li><b>kondisi sapi 05 kurang normal, terlihat lesu&nbsp;</b></li></ol>', '2016-02-17 19:31:19', 2, 'Limo', '', '', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `t_pengguna`
--

CREATE TABLE `t_pengguna` (
  `nip` varchar(15) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_pengguna` varchar(200) NOT NULL,
  `level` varchar(80) NOT NULL,
  `email` varchar(150) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `status` enum('Aktif','Tidak Aktif') NOT NULL DEFAULT 'Aktif',
  `foto` varchar(255) DEFAULT NULL,
  `alamat` text NOT NULL,
  `tanggal_lahir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_pengguna`
--

INSERT INTO `t_pengguna` (`nip`, `username`, `password`, `nama_pengguna`, `level`, `email`, `jabatan`, `status`, `foto`, `alamat`, `tanggal_lahir`) VALUES
('0903001', 'kepala', 'kepala', 'H. Sunarya', 'kepala', 'Sunarya@gmail.com', 'Kepala Bagian Kesehatan Hewan', 'Aktif', '../../data/gambar/user.png', 'jalan kol masturi no 43 desa kertawangi kecamatan cisarua', '1969-06-04'),
('0905002', 'admin', 'admin', 'Usep Rahmat', 'admin', 'usep23@gmail.com', 'Administratif', 'Aktif', '../../data/gambar/user.png', 'JL Kol Masturi No 21 Desa Kertawangi Kecamatan Cisarua ', '1982-06-15'),
('0910003', 'petugas1', 'sukirman', 'Sukirman', 'petugas', 'sukirman@gmail.com', 'Petugas IB', 'Aktif', '../../data/gambar/img.jpg', 'jalan pameumpeuk no 18 kecamatan cisarua kabupaten bandung barat', '1972-10-27'),
('0911004', 'petugas2', 'petugas2', 'Asep Dadan', 'petugas', 'dadan123@gmail.com', 'Petugas Perawatan', 'Aktif', NULL, '', '0000-00-00'),
('0912005', 'petugas3', 'petugas3', 'Dede', 'petugas', 'andhieca.satria@gmail.com', 'Petugas Pengobatan', 'Aktif', NULL, '', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_atributgejala`
--
ALTER TABLE `t_atributgejala`
  ADD PRIMARY KEY (`id_atributgejala`);

--
-- Indexes for table `t_detail_kasus`
--
ALTER TABLE `t_detail_kasus`
  ADD PRIMARY KEY (`id_detail_kasus`),
  ADD KEY `FK_t_detail_kasus_1` (`id_kasus`),
  ADD KEY `FK_t_detail_kasus_2` (`id_atributgejala`);

--
-- Indexes for table `t_detail_komentar`
--
ALTER TABLE `t_detail_komentar`
  ADD PRIMARY KEY (`id_detail_komentar`),
  ADD KEY `FK_t_detail_komentar` (`id_komentar`),
  ADD KEY `FK_t_detail_komentar_2` (`nip`);

--
-- Indexes for table `t_dokumen`
--
ALTER TABLE `t_dokumen`
  ADD PRIMARY KEY (`id_dokumen`),
  ADD KEY `FK_t_dokumen_1` (`id_kategori`),
  ADD KEY `FK_t_dokumen` (`nip`);

--
-- Indexes for table `t_forum`
--
ALTER TABLE `t_forum`
  ADD PRIMARY KEY (`id_forum`),
  ADD KEY `FK_t_forum` (`nip`);

--
-- Indexes for table `t_histori_penanganan`
--
ALTER TABLE `t_histori_penanganan`
  ADD KEY `FK_t_histori_penanganan` (`id_lesson_learned`);

--
-- Indexes for table `t_identitas_kasus`
--
ALTER TABLE `t_identitas_kasus`
  ADD PRIMARY KEY (`id_identitas_kasus`);

--
-- Indexes for table `t_kasus`
--
ALTER TABLE `t_kasus`
  ADD PRIMARY KEY (`id_kasus`),
  ADD KEY `FK_t_kasus` (`nip`);

--
-- Indexes for table `t_kategori`
--
ALTER TABLE `t_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `t_komentar`
--
ALTER TABLE `t_komentar`
  ADD PRIMARY KEY (`id_komentar`),
  ADD KEY `FK_t_komentar_1` (`nip`),
  ADD KEY `FK_t_komentar` (`id_forum`);

--
-- Indexes for table `t_lesson_learned`
--
ALTER TABLE `t_lesson_learned`
  ADD PRIMARY KEY (`id_lesson_learned`),
  ADD KEY `FK_t_lesson_learned` (`nip`);

--
-- Indexes for table `t_pengguna`
--
ALTER TABLE `t_pengguna`
  ADD PRIMARY KEY (`nip`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_detail_kasus`
--
ALTER TABLE `t_detail_kasus`
  MODIFY `id_detail_kasus` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
--
-- AUTO_INCREMENT for table `t_detail_komentar`
--
ALTER TABLE `t_detail_komentar`
  MODIFY `id_detail_komentar` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `t_dokumen`
--
ALTER TABLE `t_dokumen`
  MODIFY `id_dokumen` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `t_forum`
--
ALTER TABLE `t_forum`
  MODIFY `id_forum` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `t_identitas_kasus`
--
ALTER TABLE `t_identitas_kasus`
  MODIFY `id_identitas_kasus` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;
--
-- AUTO_INCREMENT for table `t_kategori`
--
ALTER TABLE `t_kategori`
  MODIFY `id_kategori` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `t_komentar`
--
ALTER TABLE `t_komentar`
  MODIFY `id_komentar` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
--
-- AUTO_INCREMENT for table `t_lesson_learned`
--
ALTER TABLE `t_lesson_learned`
  MODIFY `id_lesson_learned` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `t_detail_kasus`
--
ALTER TABLE `t_detail_kasus`
  ADD CONSTRAINT `FK_t_detail_kasus_1` FOREIGN KEY (`id_kasus`) REFERENCES `t_kasus` (`id_kasus`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_t_detail_kasus_2` FOREIGN KEY (`id_atributgejala`) REFERENCES `t_atributgejala` (`id_atributgejala`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `t_detail_komentar`
--
ALTER TABLE `t_detail_komentar`
  ADD CONSTRAINT `FK_t_detail_komentar` FOREIGN KEY (`id_komentar`) REFERENCES `t_komentar` (`id_komentar`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_t_detail_komentar_2` FOREIGN KEY (`nip`) REFERENCES `t_pengguna` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `t_dokumen`
--
ALTER TABLE `t_dokumen`
  ADD CONSTRAINT `FK_t_dokumen` FOREIGN KEY (`nip`) REFERENCES `t_pengguna` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_t_dokumen_1` FOREIGN KEY (`id_kategori`) REFERENCES `t_kategori` (`id_kategori`);

--
-- Constraints for table `t_forum`
--
ALTER TABLE `t_forum`
  ADD CONSTRAINT `FK_t_forum` FOREIGN KEY (`nip`) REFERENCES `t_pengguna` (`nip`);

--
-- Constraints for table `t_histori_penanganan`
--
ALTER TABLE `t_histori_penanganan`
  ADD CONSTRAINT `FK_t_histori_penanganan` FOREIGN KEY (`id_lesson_learned`) REFERENCES `t_lesson_learned` (`id_lesson_learned`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `t_kasus`
--
ALTER TABLE `t_kasus`
  ADD CONSTRAINT `FK_t_kasus` FOREIGN KEY (`nip`) REFERENCES `t_pengguna` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `t_komentar`
--
ALTER TABLE `t_komentar`
  ADD CONSTRAINT `FK_t_komentar` FOREIGN KEY (`id_forum`) REFERENCES `t_forum` (`id_forum`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `t_lesson_learned`
--
ALTER TABLE `t_lesson_learned`
  ADD CONSTRAINT `FK_t_lesson_learned` FOREIGN KEY (`nip`) REFERENCES `t_pengguna` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
