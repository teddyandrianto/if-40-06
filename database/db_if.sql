-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 12 Nov 2016 pada 00.51
-- Versi Server: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_if`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `carousel`
--

CREATE TABLE IF NOT EXISTS `carousel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gambar` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data untuk tabel `carousel`
--

INSERT INTO `carousel` (`id`, `gambar`) VALUES
(1, 'file_1478350030.png'),
(3, 'file_1478350499.png'),
(6, 'file_1478505977.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE IF NOT EXISTS `dosen` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nama` varchar(40) NOT NULL,
  `mata_kuliah` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tel` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`id`, `nama`, `mata_kuliah`, `email`, `tel`) VALUES
(1, 'ARIEF HUDA', 'PENGANTAR TEKNIK INFORMATIKA', 'afhuda@gmail.com', ' 081519703365'),
(2, 'APRI JUNAIDI', 'DASAR ALGORITMA DAN PEMROGRAMAN', 'apri.junaidi@gmail.com', '081214150100'),
(3, 'GUN GUN MAULANA', 'LITERASI TIK', 'gunmaulana@gmail.com', ''),
(4, 'ATENG ROHENDI', 'PENDIDIKAN AGAMA DAN ETIKA', '', ' 081223060967'),
(5, 'PREDARI SISWAYANI', 'BAHASA INGGRIS 1', 'predariku@gmail.com', '08156035849'),
(6, 'NIKEN NURAINI NISSA', 'LOGIKA MATEMTIKA A', 'nissa.niken@yahoo.com', ''),
(7, 'ENTIT PUSPITA', 'KALKULUS IB', '', '085624050581');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE IF NOT EXISTS `jadwal` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `kode` varchar(10) NOT NULL,
  `hari` enum('Senin','Selasa','Rabu','Kamis','Jumat','Sabtu') NOT NULL,
  `mata_kuliah` varchar(40) NOT NULL,
  `ruang` varchar(40) NOT NULL,
  `jam` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data untuk tabel `jadwal`
--

INSERT INTO `jadwal` (`id`, `kode`, `hari`, `mata_kuliah`, `ruang`, `jam`) VALUES
(1, 'CCH1A4', 'Senin', 'DASAR ALGORITMA DAN PEMROGRAMAN', 'LABIF-03', '06:30 - 09:30'),
(2, 'MSH1B3', 'Senin', 'LOGIKA MATEMTIKA A', 'KU1.02.14', '09:30 - 12:30'),
(3, 'MUH1B3', 'Rabu', 'KALKULUS IB', 'KU3.04.02', '06:30 - 09:30'),
(4, 'CCH1A4', 'Rabu', 'DASAR ALGORITMA DAN PEMROGRAMAN', 'KU1.02.16', '14:30 - 16:30'),
(5, 'CSH1F2', 'Kamis', 'PENGHANTAR TEKNIK INFORMATIKA', 'KU3.05.15', '08.30 - 10.30'),
(6, 'HUH1A2', 'Kamis', 'PENDIDIKAN AGAMA ISLAM DAN ETIKA', 'KU3.04.01', '11.30 - 13.30'),
(7, 'LUH1B2', 'Jumat', 'BAHASA INGGRIS ', 'KU3.05.14', '08.30 - 10.30'),
(8, 'CCH1A4', 'Jumat', 'DASAR ALGORITMA DAN PEMROGRAMAN', 'KU1.02.14 ', '10.30 - 11.30'),
(9, 'DUH1A2', 'Sabtu', 'LITERASI TIK', 'KU3.05.13', '10.30 - 12.30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `nim` varchar(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  PRIMARY KEY (`nim`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `email`) VALUES
('1301160009', 'AULIA WIDYA  CLARA', ''),
('1301160157', 'ARDI HENDRAWAN', 'ardi.hendrawan84@gmail.com'),
('1301160205', 'DANIT  HAFIZ PAMUNGKAS', 'danithafiz@gmail.com'),
('1301160328', 'BINANDA SMARTA AJI', 'nlbeing@gmail.com'),
('1301160434', 'AZIZ SABIRIN', 'azizsabirin98@gmail.com'),
('1301160466', 'RAIHAN  HAMID  SURAPERWATA', 'raihaniyai@gmail.com'),
('1301164021', 'RIYAN KUNCORO JATI', 'riyan.kuncorojati@gmail.com'),
('1301164034', 'FAKRY  ADI PERMANA', 'fakrypermana@gmail.com'),
('1301164047', 'YOUGA  PRATAMA', 'yougapratama45@gmail.com'),
('1301164060', 'BERNADHETA AYU PUTRI MARDIKA', 'bernadhetata@gmail.com'),
('1301164072', 'REINALDI DWI RAHARJA', 'reinaldidr@gmail.com'),
('1301164084', 'WAFI ASLAMARDIKA ASFARA', 'wafiaa17@outlook.com'),
('1301164096', 'AJI PRIAMBODO SANTOSO', 'ajisantoso12@gmail.com'),
('1301164109', 'CHODDY RABBANY', 'Choddyrabbany@icloud.com'),
('1301164121', 'DEANDRA ABIANTORO', 'deandraabiantoro@gmail.com'),
('1301164133', 'ABDUL AZIZ', 'Marskot.aziz@gmail.com'),
('1301164145', 'JATI KRISMANADI', 'j.krismanadi@gmail.com'),
('1301164169', 'RIFKI FAUZI', 'rifkifauzi309@gmail.com'),
('1301164181', 'MALIK ANHAR  MAULANA', 'mlkanhar@gmail.com'),
('1301164193', 'AHMAD  ARSYEL  ABDUL  HAKIM', 'ahmad.fire@gmail.com'),
('1301164217', 'JUNIFAR ADAM PAMUNGKAS', 'nickadamzordan.jackson@gmail.com'),
('1301164229', 'YULISTIA ELSA NURSIDA', 'elsa.nursida@gmail.com'),
('1301164241', 'AGNIYA  NOOR ILHAMIATI', 'agniyanoorilhamiatii@gmail.com'),
('1301164254', 'REYHAN  RAHMA  WINANDRI', 'rrahmawinandri@gmail.com'),
('1301164266', 'MUHAMMAD FAREL AT-THAARIQ', 'm.farelb@gmail.com'),
('1301164278', 'ZULIANA SANDRA PRASTIWI', 'zulianasandraprastiwi@gmail.com'),
('1301164291', 'ANISA SEPTIANI', 'anisasptia@gmail.com'),
('1301164304', 'FEBRIAN WARDI', 'f.wardi070299@gmail.com'),
('1301164316', 'MUHAMMAD FIRDAUS BASYUNI', 'emefbe28@gmail.com'),
('1301164341', 'SAGERI  FIKRI RAMADHAN', 'sagerir@gmail.com'),
('1301164353', 'FEBRIAN AJI PANGESTU', 'hidalgopendragon@gmail.com'),
('1301164366', 'SAID RAHADI KURNIA BAHASYIM', 'saidrahadi010898@gmail.com'),
('1301164378', 'MUHAMMAD NAUFAL DIVIAN MULIAWAN', 'naufal.divian@gmail.com'),
('1301164397', 'UMAR JAMIL', 'umarjami4@gmail.com'),
('1301164414', 'GHEA JHON CHRISDIANTO', 'gheajhon.cr7@gmail.com'),
('1301164451', 'GALIH YUDHASENA TRENGGALA', 'galihworkday@gmail.com'),
('1301164481', 'RANDI SALAM', 'randisalam10@gmail.com'),
('1301164496', 'HAFIZH FAIRUSSUFI', 'kirik@gmail.com'),
('1301164529', 'TEDDY  ANDRIANTO', 'andrianto.teddy@gmail.com'),
('1301164548', 'AMALIA WULAN SARI', 'sariamalia03@gmail.com'),
('1301164582 ', 'CAHYONO ROMADLONI ALIFIAN', 'sundaynism@gmail.com'),
('1301164606', 'AYUMI  RAHMADANI HASANUDDIN', 'ayumirahmadani06@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengumuman`
--

CREATE TABLE IF NOT EXISTS `pengumuman` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(40) NOT NULL,
  `isi` varchar(1000) NOT NULL,
  `waktu` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data untuk tabel `pengumuman`
--

INSERT INTO `pengumuman` (`id`, `judul`, `isi`, `waktu`) VALUES
(1, 'FUTSAL', '<ul>\r\n	<li>Sabtu 16-September-2016 &nbsp;Pukul 9.30 40-06 vs 38-05</li>\r\n</ul>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Jangan telat ya&nbsp;usahakan langsung bawa perlengkapan supaya gak bolak balik</p>\r\n', '09:12 16-09-2016'),
(2, 'Praktikum Pengganti', '<ul>\r\n	<li>Sabtu 17 September Jam 06.30</li>\r\n</ul>\r\n', '12:14 17-19-2016'),
(3, 'Tugas Agama', '<ul>\r\n	<li>Resume : Manusia dan Potensinya</li>\r\n	<li>References : Quraish Shihab</li>\r\n</ul>\r\n', '12:55 29-09-2016'),
(4, 'Jadwal Tambahan Logmat', '<ul>\r\n	<li>Saya udh booking kelas A204A (KU1.02.07) Hari Jumat 16:30-18:30</li>\r\n</ul>\r\n', '14:38 04-10-2016'),
(6, 'Wajib', '<ul>\r\n	<li>Baju angkatan IF 70K (+10K buat yg lengan panjang) all size, ditunggu sampe sabtu besok ke Zuliana Sandra (Gunanya buat Acara2 IF + Osjur)</li>\r\n</ul>\r\n', '16:41 06-10-2016'),
(7, 'PTI jadwal', '<ul>\r\n	<li>penggantinya hari sabtu, 29 Oktober Jam 13:00 Agama hari selasa, 25 Oktober setelah dzuhur Jam nya nyusul</li>\r\n</ul>\r\n', '12:40 09-10-2016'),
(9, 'Tugas PTI', '<ul>\r\n	<li>desain the web-site for yaour class</li>\r\n	<li>consider what is the purpose of the web-site? who are the users? what features and tools are needed in such a web-site?</li>\r\n	<li>choose the look-and-feel and layout.</li>\r\n	<li>you should have done this alreday .right?</li>\r\n</ul>\r\n', '01:31  01-11-2016'),
(10, 'Struktur Organisasi ', '<ul>\r\n	<li>KM: M farel</li>\r\n	<li>W.KM: Umar J</li>\r\n	<li>Sekretaris: Sagery</li>\r\n	<li>Bendahara: - Hafizh &amp;&nbsp;Zuliana S</li>\r\n</ul>\r\n', '01:19  10-11-2016'),
(11, 'Format Pengirimn Tugas PTI', '<ul>\r\n	<li>PTI_TUGAS9_NIM</li>\r\n</ul>\r\n', '01:20  10-11-2016');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sambutan`
--

CREATE TABLE IF NOT EXISTS `sambutan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(40) NOT NULL,
  `isi_sambutan` varchar(1000) NOT NULL,
  `gambar` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `sambutan`
--

INSERT INTO `sambutan` (`id`, `nama`, `isi_sambutan`, `gambar`) VALUES
(1, ' Siti Amatullah Karimah', '<p>Akhirnya kami mengharapkan masukan dari berbagai pihak untuk website ini agar kami terus belajar dan meng-up date diri, sehingga tampilan, isi dan mutu website akan terus berkembang dan lebih baik nantinya. Oleh karena itu, saya memberikan dukungan sepenuhnya kepada TIM ICT kelas IF-40-06 Telkom university selaku pengelola website sekolah agar terus mengembangkan website dengan penuh semangat tanpa mengenal menyerah. Terima kasih atas kerjasamanya, maju terus untuk mencapai kelas IF-40-06 Telkom university yang lebih cerdas.</p>\r\n\r\n<hr />\r\n<p><strong>Wassalam mu&rsquo;alaikum Wr. Wb.</strong></p>\r\n', 'file_1478509533.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_admin`
--

CREATE TABLE IF NOT EXISTS `user_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `user_admin`
--

INSERT INTO `user_admin` (`id`, `username`, `password`, `nama`, `email`) VALUES
(1, '1301164529', 'f482e25070bc5775b99ebf5adf1697ab', 'Teddy Andrianto', 'andrianto.teddy@gmail.com'),
(2, '1301164397', '3630510c29704ee604cbfe2f85f11f34', 'Umar Jamil', 'umarjami4@gmail.com'),
(3, '1301164133', 'a27410276e0f79d04d76fdb87b1bb889', 'ABDUL AZIZ', 'Marskot.aziz@gmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
