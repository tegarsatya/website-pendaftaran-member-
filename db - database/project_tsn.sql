-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Okt 2020 pada 13.40
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_tsn`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `isi` text NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `id_user`, `isi`, `gambar`, `tanggal`) VALUES
(5, 15, '<p>oopsssss</p>', '6.jpg', '2020-10-01 05:02:37'),
(6, 15, '<p>Ooskjdfsjdfsdf</p>', 'api.jpg', '2020-10-01 15:38:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_redaksi`
--

CREATE TABLE `kategori_redaksi` (
  `id_kategori_redaksi` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_redaksi` varchar(100) NOT NULL,
  `slug_redaksi` varchar(100) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori_redaksi`
--

INSERT INTO `kategori_redaksi` (`id_kategori_redaksi`, `id_user`, `nama_redaksi`, `slug_redaksi`, `tanggal`) VALUES
(4, 0, 'membuat api menggunakan express.js', 'membuat-api-menggunakan-expressjs', '2020-10-04 13:29:50'),
(5, 0, 'membuat api menggunakan laravel', 'membuat-api-menggunakan-laravel', '2020-10-04 13:30:03'),
(6, 0, 'Object Oriented Programming', 'object-oriented-programming', '2020-10-06 02:54:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id_kegiatan` int(11) NOT NULL,
  `judul_kegiatan` varchar(70) NOT NULL,
  `keterangan` text NOT NULL,
  `gambar` varchar(30) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kegiatan`
--

INSERT INTO `kegiatan` (`id_kegiatan`, `judul_kegiatan`, `keterangan`, `gambar`, `tanggal`) VALUES
(1, 'Kegiatan Ngumpul di Lippo Cikarang', '<p>Semua Anggota Komunitas Mobil Honda Jazz Bekasi Wajib hadir pukul 20.00 WIB</p>', 'api.jpg', '2020-10-01 07:02:10'),
(2, 'Kegiatan Ngumpul di Lippo Cikarang', '<h3>Curabitur quis libero leo, pharetra mattis eros. Praesent consequat libero eget dolor convallis vel rhoncus magna scelerisque. Donec nisl ante, elementum eget posuere a, consectetur a metus. Proin a adipiscing sapien. Suspendisse vehicula porta lectus vel semper. Nullam sapien elit, lacinia eu tristique non.posuere at mi. Morbi at turpis id urna ullamcorper ullamcorper.</h3>', 'api1.jpg', '2020-10-02 03:10:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontak`
--

CREATE TABLE `kontak` (
  `id_kontak` int(11) NOT NULL,
  `nama` varchar(70) NOT NULL,
  `telepon` int(15) NOT NULL,
  `pesan` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kontak`
--

INSERT INTO `kontak` (`id_kontak`, `nama`, `telepon`, `pesan`, `email`, `tanggal`) VALUES
(2, 'Tegar Satya Negara', 2147483647, 'wfwcszfdsf', 'admin@lokerprogrammer.com', '2020-10-02 03:23:28'),
(3, 'Tegar Satya Negara', 2147483647, 'fdfdg', 'admin@lokerprogrammer.com', '2020-10-02 03:26:05'),
(4, 'Tegar Satya Negara', 2147483647, 'kj', 'admin@lokerprogrammer.com', '2020-10-04 14:12:40'),
(5, 'Tegar Satya Negara', 2147483647, 'oopss', 'admin@lokerprogrammer.com', '2020-10-04 14:41:54'),
(6, 'sdf', 2147483647, 'fsdfwwefw', 'amaliakirfani.26@gmail.com', '2020-10-20 03:14:06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id_pendaftaran` int(11) NOT NULL,
  `kode_member` varchar(120) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `plat_nomor` varchar(50) NOT NULL,
  `warna_mobil` varchar(20) NOT NULL,
  `nomor_telepon` int(15) NOT NULL,
  `keterangan` text NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pendaftaran`
--

INSERT INTO `pendaftaran` (`id_pendaftaran`, `kode_member`, `nama`, `alamat`, `plat_nomor`, `warna_mobil`, `nomor_telepon`, `keterangan`, `tanggal`) VALUES
(3, 'ID001', 'sanmsadsan', 'pekalongan Jawa Tengah', 'adaada', 'ffgf', 432424242, 'ada', '2020-10-03 15:40:00'),
(4, 'ID002', 'Tegar Satya Negara', 'vddfvd', 'sdss', 'ffgf', 87687, 'jhgj', '2020-10-03 15:48:02'),
(5, 'ID003', 'Ayang Sumayah', 'pekalongan Jawa Tengah', 'sdss', 'merah', 2147483647, 'popcroon', '2020-10-04 14:42:29'),
(6, 'ID004', 'Ayang Sumayah', 'bfbfgbfg', 'bfbfgb', 'fgfdfd', 2147483647, 'bfbffbf', '2020-10-07 02:58:31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `portofolio`
--

CREATE TABLE `portofolio` (
  `id_portofolio` int(11) NOT NULL,
  `judul_portofolio` varchar(50) NOT NULL,
  `gambar` varchar(20) NOT NULL,
  `link` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `client` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `portofolio`
--

INSERT INTO `portofolio` (`id_portofolio`, `judul_portofolio`, `gambar`, `link`, `category`, `client`, `keterangan`, `tanggal`) VALUES
(1, 'Aplikasi Pengarsipan Dokumen', 'download_(2)3.jpg', 'https://astraarsipdokumen.com', 'Web Development', 'PT. Astra Daihatsu Montor Karawang', '<p>PT ASTRA</p>', '2020-09-29 13:58:30'),
(2, 'Website Course Online', 'opps1.png', 'https://lokerprogrammer.com', 'Web Development', 'PT. Loker Programmer', '<p>Website Course Online menggunakan Arsitektur Mircoservice Dengan bahasa pemrogramman php dan javascript.</p>\r\n<p>untuk bagian frontennd menggunakan framework react.js, sedangkan di bagian backend menggunakan framework express.js dan laravel</p>', '2020-09-29 14:07:57');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil`
--

CREATE TABLE `profil` (
  `id_profil` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `isi` text NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `profil`
--

INSERT INTO `profil` (`id_profil`, `id_user`, `isi`, `gambar`, `tanggal`) VALUES
(3, 15, '<p>Profil Komunitas Mobil Honda Jazz Socienty Bekasi</p>', 'snap_sequence_regular.png', '2020-10-23 04:22:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `redaksi`
--

CREATE TABLE `redaksi` (
  `id_redaksi` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_kategori_redaksi` int(11) NOT NULL,
  `nama_redaksi` varchar(100) NOT NULL,
  `status_redaksi` varchar(20) NOT NULL,
  `gambar` varchar(20) NOT NULL,
  `keterangan` text NOT NULL,
  `slug_redaksi` varchar(100) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `redaksi`
--

INSERT INTO `redaksi` (`id_redaksi`, `id_user`, `id_kategori_redaksi`, `nama_redaksi`, `status_redaksi`, `gambar`, `keterangan`, `slug_redaksi`, `tanggal`) VALUES
(10, 15, 4, 'Belajar Fundamental Membuat Api ', 'Publish', '', '<p id=\"0922\" class=\"gm gn cr go b gp gq gr gs gt gu gv gw gx gy gz ha hb hc hd he hf hg hh hi hj cj dj\">Hallo teman-teman, pada tulisan ini saya ingin berbagi penggalaman tentang membuild sebuah REST API menggunakan bahasa Javascript dengan framework Express Js.</p>\r\n<p id=\"074d\" class=\"gm gn cr go b gp gq gr gs gt gu gv gw gx gy gz ha hb hc hd he hf hg hh hi hj cj dj\">Pertama-tama pastikan dulu di komputer/laptop anda sudah terinstall Node version 10.16.x&nbsp;<em class=\"hk\">or newer&nbsp;</em>serta npm 6.9.x&nbsp;<em class=\"hk\">or newer,&nbsp;</em>jika belum silahkan install terlebih dahulu node js&nbsp;<a class=\"bq eu gi gj gk gl\" href=\"https://nodejs.org/en/\" rel=\"noopener nofollow\">https://nodejs.org/en/</a>.</p>\r\n<p id=\"31be\" class=\"gm gn cr go b gp gq gr gs gt gu gv gw gx gy gz ha hb hc hd he hf hg hh hi hj cj dj\">Setelah sudah terinstall semua perlengkapan perangnya maka mari kita mulai, dimulai dengan membuat folder untuk project kita (disini saya menggunakan OS linux backbox)</p>\r\n<p id=\"d659\" class=\"gm gn cr go b gp gq gr gs gt gu gv gw gx gy gz ha hb hc hd he hf hg hh hi hj cj dj\">setelah itu kita inisialisasi projectnya menggunakan perintah&nbsp;<em class=\"hk\">npm init,&nbsp;</em>setelah itu akan muncul tampilan seperti dibawah ini, untuk bagian entry point harap berhati-hati untuk project ini saya memberikan nama server.js,</p>\r\n<p id=\"1356\" class=\"gm gn cr go b gp gq gr gs gt gu gv gw gx gy gz ha hb hc hd he hf hg hh hi hj cj dj\">setelah itu kita install&nbsp;<em class=\"hk\">package&nbsp;</em>body-parser, express, dan mysql dengan cara&nbsp;<em class=\"hk\">npm install mysql body-parser express&nbsp;</em>setelah semua terinstall dengan benar pastikan ada file-file seperti ini</p>\r\n<p id=\"4b0f\" class=\"gm gn cr go b gp gq gr gs gt gu gv gw gx gy gz ha hb hc hd he hf hg hh hi hj cj dj\">lalu kita buat database menggunakan mysql dengan nama simplerest dengan table user.</p>\r\n<p id=\"ea61\" class=\"gm gn cr go b gp gq gr gs gt gu gv gw gx gy gz ha hb hc hd he hf hg hh hi hj cj dj\">Selanjutnya, buka code editor kalian lalu buat file baru bernama server.js (nama ini harus sesuai saat kita npm init) dan import express dan body-parser serta insialisasi port servernya.</p>\r\n<blockquote class=\"ht\">\r\n<p id=\"faa3\" class=\"hu hv cr cs b hw hx hy hz ia ib hj az\">const express = require(&lsquo;express&rsquo;)</p>\r\n</blockquote>\r\n<blockquote class=\"ic id ie\">\r\n<p id=\"1b7a\" class=\"gm gn hk go b gp if gr gs gt ig gv gw gx ih gz ha hb ii hd he hf ij hh hi hj cj dj\">const app = express()</p>\r\n<p id=\"0d5b\" class=\"gm gn hk go b gp gq gr gs gt gu gv gw gx gy gz ha hb hc hd he hf hg hh hi hj cj dj\">const port = process.env.PORT || 3000</p>\r\n<p id=\"cf88\" class=\"gm gn hk go b gp gq gr gs gt gu gv gw gx gy gz ha hb hc hd he hf hg hh hi hj cj dj\">const bodyPraser = require(&lsquo;body-parser&rsquo;)</p>\r\n<p id=\"2e8a\" class=\"gm gn hk go b gp gq gr gs gt gu gv gw gx gy gz ha hb hc hd he hf hg hh hi hj cj dj\">app.use( bodyPraser.urlencoded({ extended: true }) ) app.use(bodyPraser.json())</p>\r\n<p id=\"b882\" class=\"gm gn hk go b gp gq gr gs gt gu gv gw gx gy gz ha hb hc hd he hf hg hh hi hj cj dj\">app.listen(port) console.log(&lsquo;Connect Succes On &lsquo; + port)</p>\r\n</blockquote>\r\n<p id=\"5641\" class=\"gm gn cr go b gp gq gr gs gt gu gv gw gx gy gz ha hb hc hd he hf hg hh hi hj cj dj\">Setelah itu jalankan server dengan perintah npm start, jika berhasil maka akan muncul&nbsp;<strong class=\"go ik\"><em class=\"hk\">Connect success on 3000</em></strong></p>\r\n<p id=\"199c\" class=\"gm gn cr go b gp gq gr gs gt gu gv gw gx gy gz ha hb hc hd he hf hg hh hi hj cj dj\">Sekarang kita akan buat config untuk databasenya, pertama buat folder src untuk menampung semua config yang ada di Back-end kita, setelah itu buat folder config dan buat file db.js</p>\r\n<p id=\"c58b\" class=\"gm gn cr go b gp gq gr gs gt gu gv gw gx gy gz ha hb hc hd he hf hg hh hi hj cj dj\">lalu kita masukan code berikut:</p>\r\n<figure class=\"fi fj fk fl fm fn\">\r\n<div class=\"fx s fq\">\r\n<div class=\"ip ga s\">&nbsp;</div>\r\n</div>\r\n<figcaption class=\"ge gf cd cb cc gg gh av aw ax ay az\">/src/config/db.js</figcaption>\r\n</figure>\r\n<p id=\"e8c6\" class=\"gm gn cr go b gp gq gr gs gt gu gv gw gx gy gz ha hb hc hd he hf hg hh hi hj cj dj\">agar bisa konek ganti semua yang menggunakan process.env dengan config yang ada di komputer/laptop anda pada kasus ini menggunakan localhost</p>\r\n<blockquote class=\"ic id ie\">\r\n<p id=\"5658\" class=\"gm gn hk go b gp gq gr gs gt gu gv gw gx gy gz ha hb hc hd he hf hg hh hi hj cj dj\">process.env.DB_HOST ganti dengan localhost</p>\r\n<p id=\"7162\" class=\"gm gn hk go b gp gq gr gs gt gu gv gw gx gy gz ha hb hc hd he hf hg hh hi hj cj dj\">process.env.DB_USER ganti dengan user untuk masuk ke phpmyadmin</p>\r\n<p id=\"3204\" class=\"gm gn hk go b gp gq gr gs gt gu gv gw gx gy gz ha hb hc hd he hf hg hh hi hj cj dj\">process.env.DB_PASS ganti dengan password untuk masuk ke phpmyadmin</p>\r\n<p id=\"cc0e\" class=\"gm gn hk go b gp gq gr gs gt gu gv gw gx gy gz ha hb hc hd he hf hg hh hi hj cj dj\">process.env.DB_NAME ganti dengan nama database yang anda gunakan</p>\r\n</blockquote>\r\n<p id=\"f112\" class=\"gm gn cr go b gp gq gr gs gt gu gv gw gx gy gz ha hb hc hd he hf hg hh hi hj cj dj\">lalu kita lanjutkan buat file untuk menghandle response yaitu buat folder di dalam /src yaitu helper dan buat file response.js, lalu ketikan code ini</p>\r\n<figure class=\"fi fj fk fl fm fn\">\r\n<div class=\"fx s fq\">\r\n<div class=\"ip ga s\">&nbsp;</div>\r\n</div>\r\n<figcaption class=\"ge gf cd cb cc gg gh av aw ax ay az\">src/helper/response.js</figcaption>\r\n</figure>\r\n<p id=\"a22f\" class=\"gm gn cr go b gp gq gr gs gt gu gv gw gx gy gz ha hb hc hd he hf hg hh hi hj cj dj\">oke next kita buat model untuk menggambil semua user, menggunakan Promise middleware.</p>\r\n<figure class=\"fi fj fk fl fm fn\">\r\n<div class=\"fx s fq\">\r\n<div class=\"ip ga s\">&nbsp;</div>\r\n</div>\r\n<figcaption class=\"ge gf cd cb cc gg gh av aw ax ay az\">/src/models/user.js</figcaption>\r\n</figure>\r\n<p id=\"8336\" class=\"gm gn cr go b gp gq gr gs gt gu gv gw gx gy gz ha hb hc hd he hf hg hh hi hj cj dj\">pertama kita mengimport config db yang telah kita buat sebelumnya, selanjutnya kita buat promise midllewarenya yang memiliki function berparameter resolve jika diterima dan reject jika ditolak, jadi gak diphpin hehehehe. Selanjutnya kita masukan query sql select untuk mengambil semua data yang ada di table user&nbsp;<em class=\"hk\">(ini hanya untuk pembelajaran ya, kalau dalam kasus sebenarnya jangan ada model yang kita buat untuk mengambil semua data user yang ada password atau data penting)&nbsp;</em>setelah ada arrow function yang mengembalikan nilai dari hasil query tadi.</p>\r\n<p id=\"a461\" class=\"gm gn cr go b gp gq gr gs gt gu gv gw gx gy gz ha hb hc hd he hf hg hh hi hj cj dj\">Oke next, kita buat Controllernya sebelumnya harus buat folder controllers yang ada didalam folder /src/controllers lalu buat file user.js dan ketikan kode berikut</p>\r\n<figure class=\"fi fj fk fl fm fn\">\r\n<div class=\"fx s fq\">\r\n<div class=\"ip ga s\">&nbsp;</div>\r\n</div>\r\n<figcaption class=\"ge gf cd cb cc gg gh av aw ax ay az\">/src/controllers/user.js</figcaption>\r\n</figure>\r\n<p id=\"d036\" class=\"gm gn cr go b gp gq gr gs gt gu gv gw gx gy gz ha hb hc hd he hf hg hh hi hj cj dj\">Maksud dari kodingan diatas adalah kita import model dan response yang telah kita buat tadi selanjutnya kita buat function untuk mengeksekusi model yang telah kita yaitu getUsers() function getUsers ini memiliki arrow function yang parameternya adalah request (req) dan response (res) response ini berbeda dengan response yang kita buat diatas ya, ini response bawaan dari javascript, kemudian kita panggil model getUser, karena kita menggunakan promise middleware pada modelnya maka dicontroller meresponnya dengan than dan catch&nbsp;<em class=\"hk\">(ini mirip try catch kalau di java)&nbsp;</em>ketika response dari modelnya benar (resolve) maka akan masuk kedalam then yang hasilnya ada diparameternya yang dimana ini adalah&nbsp;<em class=\"hk\">result&nbsp;</em>untuk parameternya bebas ya, tapi ingat baiknya parameter atau variable itu berbahasa inggris, lalu kita kita balikan nilai (retrun value) dengan response yang telah kita buat dengan parameter res (ini response dari javascript), result (ini result dari sql) dan 200 (ini adalah status code ketika success).</p>\r\n<p id=\"0395\" class=\"gm gn cr go b gp gq gr gs gt gu gv gw gx gy gz ha hb hc hd he hf hg hh hi hj cj dj\">Sekarang kita buat routenya, tapi seperti biasa kita buat folder buat routes didalam /src dan kemudian buat file user.js, Lalu ketikan kode ini</p>\r\n<figure class=\"fi fj fk fl fm fn\">\r\n<div class=\"fx s fq\">\r\n<div class=\"ip ga s\">&nbsp;</div>\r\n</div>\r\n<figcaption class=\"ge gf cd cb cc gg gh av aw ax ay az\">/src/routes/user.js</figcaption>\r\n</figure>\r\n<p id=\"7e3a\" class=\"gm gn cr go b gp gq gr gs gt gu gv gw gx gy gz ha hb hc hd he hf hg hh hi hj cj dj\">karena kita mengambil data maka didalam routenya kita pakai method get.</p>\r\n<p id=\"4516\" class=\"gm gn cr go b gp gq gr gs gt gu gv gw gx gy gz ha hb hc hd he hf hg hh hi hj cj dj\">setelah berhasil membuat routenya jangan lupa difile server.js kita import routenya jadi seperti ini</p>\r\n<figure class=\"fi fj fk fl fm fn\">\r\n<div class=\"fx s fq\">\r\n<div class=\"ip ga s\">&nbsp;</div>\r\n</div>\r\n<figcaption class=\"ge gf cd cb cc gg gh av aw ax ay az\">server.js</figcaption>\r\n</figure>\r\n<p id=\"6fe3\" class=\"gm gn cr go b gp gq gr gs gt gu gv gw gx gy gz ha hb hc hd he hf hg hh hi hj cj dj\">setelah semua sudah selesai semua jangan lupa restart servernya dengan cara buka terminal yang merun servernya lalu crtl+c dan <em class=\"hk\">npm start</em>.</p>\r\n<p id=\"d4b0\" class=\"gm gn cr go b gp gq gr gs gt gu gv gw gx gy gz ha hb hc hd he hf hg hh hi hj cj dj\">jika sudah mari kita coba menggunakan postman, masukan url :&nbsp;<a class=\"bq eu gi gj gk gl\" href=\"http://localhost:3000/user/\" rel=\"noopener nofollow\">http://localhost:3000/user/</a>&nbsp;dan jika muncul result : [] seperti ini maka anda telah berhasil, berikut saya tampilkan contoh database yang telah saya input sebelumnya.</p>\r\n<p id=\"175f\" class=\"gm gn cr go b gp gq gr gs gt gu gv gw gx gy gz ha hb hc hd he hf hg hh hi hj cj dj\">Selesai deh kamu sekarang sudah bisa membuat REST API dengan method get</p>\r\n<p id=\"77ed\" class=\"gm gn cr go b gp gq gr gs gt gu gv gw gx gy gz ha hb hc hd he hf hg hh hi hj cj dj\">untuk link source code nya ada disini :&nbsp;<a class=\"bq eu gi gj gk gl\" href=\"https://github.com/ayiangio/simplerest\" rel=\"noopener nofollow\">https://github.com/tegarsatya</a></p>', 'belajar-fundamental-membuat-api', '2020-10-07 08:12:43'),
(11, 15, 4, 'Belajar Fundamental', 'Publish', 'laravel.png', '<p>Kali ini saya akan membagikan tutorial cara membuat RESTful API dengan Framework Laravel, tapi sebelum masuk ke tutorialnya saya akan menjelaskan sedikit tentang&nbsp;<strong>REST</strong>,&nbsp;<strong>RESTful</strong>&nbsp;dan&nbsp;<strong>API</strong>&nbsp;itu sendiri. Ini cukup penting karena ketiganya saling berhubungan dan melengkapi satu sama lain.</p>\r\n<p>Bagi kalian yang sudah lama berkecimpung di dunia web terutama web&nbsp;<em>service</em>, pasti tidak asing lagi dengan istilah&nbsp;<strong>RESTful</strong>. Tapi banyak juga yang masih bingung antara&nbsp;<strong>REST</strong>,&nbsp;<strong>RESTful</strong>, dan&nbsp;<strong>API</strong>&nbsp;bagaimana mereka bisa terhubung satu sama lain?.</p>\r\n<p>Ok jadi bagi yang belum paham&nbsp;<strong>REST(&nbsp;<em>Representional State Transfer</em>&nbsp;)&nbsp;</strong>adalah sebuah&nbsp;<em>software arcitechture</em>&nbsp;yang didesain khusus untuk membuat&nbsp;<em>web service&nbsp;</em>melalui protokol&nbsp;<strong>HTTP</strong>, jadi&nbsp;<strong>REST</strong>&nbsp;bisa dibilang menjadi tulang punggung dari&nbsp;<em>web service</em>&nbsp;yang akan dibuat.</p>\r\n<p>Sementara&nbsp;<strong>RESTful&nbsp;</strong>adalah&nbsp;<em>web service&nbsp;</em>yang menggunakan&nbsp;<strong>REST</strong>&nbsp;sebagai arsitekturnya, perlu diketahui bahwa tidak semua&nbsp;<em>web service</em>&nbsp;itu berbasis&nbsp;<strong>REST</strong>&nbsp;ada juga yang menggunakan&nbsp;<strong>SOAP(&nbsp;<em>Simple Access Object Protocol</em>&nbsp;)</strong>.</p>\r\n<p>Yang terakhir ada&nbsp;<strong>API(&nbsp;<em>Application Programing Interface</em>&nbsp;)</strong>,&nbsp;<strong>API</strong>&nbsp;ini adalah sekumpulan kode yang siap pakai yang diperuntukan untuk tujuan tertentu. Misalkan pada Google Map kita ingin mencari titik kordinat dari suatu tempat kita tidak perlu lagi memikirkan perhitungan yang terjadi didalamnya cukup pakai&nbsp;<strong>API</strong>&nbsp;yang disediakan oleh Google maka masalah terselesaikan.</p>\r\n<p>Dimana dalam&nbsp;<em>web service</em>&nbsp;user(&nbsp;<em>client&nbsp;</em>) menggunakan protokol&nbsp;<strong>HTTP</strong>&nbsp;untuk mengakses/<em>request</em>&nbsp;ke sebuah&nbsp;<strong>API(&nbsp;<em>server )</em></strong>, dan dari&nbsp;<strong>API</strong>&nbsp;tersebut seperti yang sudah saya jelankan diatas berisi sekumpulan kode maka akan menghasilkan respon data yang dibutuhkan ke user nah dari penggabungan aktifitas diatas maka lahirlah yang disebut&nbsp;<strong>RESTful API</strong>.</p>\r\n<p>Ok setelah memahami bagaimana konsep dasar dari&nbsp;<strong>RESTful API</strong>&nbsp;ini, kita akan coba membuat web service sederhana berbasis&nbsp;<strong>RESTful</strong>&nbsp;menggunakan framework Laravel tentunya.</p>\r\n<p>&nbsp;</p>\r\n<h2>Persiapan</h2>\r\n<p>Ok pertama - tama tentunya install dulu Laravel-nya, setelah instalasi Laravel selesai selanjutnya kita akan menginstall library yang dinamakan&nbsp;<a href=\"https://github.com/dingo/api\">dingo api</a>. Nah dari library ini akan meng-handle keperluan untuk membangun RESTful API mulai dari routing, response, formatter, hingga error.</p>\r\n<p>Untuk menginstallnya cukup tambahkan library-nya pada file&nbsp;<strong>composer.json</strong>.</p>\r\n<pre class=\"language-php\"><code>\"require\": {\r\n    \"dingo/api\": \"^2\"\r\n}</code></pre>\r\n<p>Kemudian jalankan&nbsp;<strong>composer update</strong>.</p>\r\n<pre class=\"language-php\"><code>composer update</code></pre>\r\n<p>Jika proses instalasi sudah selesai maka kita bisa lanjut ketahap berikutnya.</p>\r\n<p>Oh iya sebelum ketahap berikutnya untuk mengetest api nantinya kita akan menggunakan&nbsp;<a href=\"https://www.getpostman.com/downloads/\">postman</a>, jadi jika belum punya silahkan download dan install terlebih dahulu.</p>\r\n<p>&nbsp;</p>\r\n<h2>Konfigurasi</h2>\r\n<p>Untuk mempublish file config-nya bisa jalankan perintah berikut.</p>\r\n<pre class=\"language-php\"><code>php artisan vendor:publish --provider=\"Dingo\\Api\\Provider\\LaravelServiceProvider\"</code></pre>\r\n<p>Setelah file&nbsp;<strong>api.php</strong>&nbsp;terpublish selanjutnya buka file&nbsp;<strong>.env</strong>&nbsp;kemudian buat tambahkan variabel berikut.</p>\r\n<pre class=\"language-php\"><code>API_PREFIX=api\r\nAPI_DEBUG=true</code></pre>\r\n<p><strong>API_PREFIX</strong>&nbsp;untuk menentukan prefix untuk&nbsp;<strong>route api</strong>&nbsp;yang kita buat nantinya, sementara&nbsp;<strong>API_DEBUG</strong>&nbsp;untuk keperluan debugging agar jika terjadi error maka akan menghasilkan message error. Sebenarnya ada banyak yang kalian bisa konfigurasi seperti nama api, versi, format error dll kalian bisa&nbsp;<em>explore</em>&nbsp;sendiri file-nya di&nbsp;<strong>config/api.php</strong>.</p>\r\n<p>&nbsp;</p>\r\n<h2>Membuat Endpoint</h2>\r\n<p>Langkah selanjutnya yaitu membuat endpoint atau jalur masuk utama dari&nbsp;<strong>api</strong>&nbsp;yang kita buat. Kita bisa membuat&nbsp;<em>endpoint&nbsp;</em>pada file&nbsp;<strong>web.php</strong>&nbsp;atau&nbsp;<strong>api.php</strong>.</p>\r\n<p>Sebagai contoh kita akan buat endpoint-nya pada file&nbsp;<strong>api.php</strong>, seperti yang saya katakan library&nbsp;<em>dingo api</em>&nbsp;ini sudah menjadi paket lengkap untuk membuat&nbsp;<strong>RESTful API&nbsp;</strong>jadi segala kebutuhannya ada pada library ini termasuk&nbsp;<strong>routing</strong>.</p>\r\n<p>Kita inisialisasi terlebih dahulu&nbsp;<strong>routing</strong>&nbsp;dari&nbsp;<em>dingo api</em>, semua proses ini dilakukan di file&nbsp;<strong>api</strong>.<strong>php</strong>&nbsp;tempat kita membuat&nbsp;<strong>endpoint</strong>&nbsp;nantinya.</p>\r\n<pre class=\"language-php\"><code>$api = app(\'Dingo\\Api\\Routing\\Router\');</code></pre>\r\n<p>Setelah diinisialisasi baru kita buat endpoint-nya.</p>\r\n<pre class=\"language-php\"><code>$api-&gt;version(\'v1\', function($api) {\r\n    // All routes goes here\r\n});</code></pre>\r\n<p>Nah disini bagian pentingnya, semua route kita nantinya akan dibungkus dengan<strong>&nbsp;version group</strong>&nbsp;dimana versi disini harus sama dengan yang ada pada file&nbsp;<strong>config/api.php</strong>&nbsp;tadi.</p>\r\n<p>Ok sekarang kita test apakah semua berjalan lancar atau tidak, kita akan coba buat route&nbsp;<strong>test</strong>&nbsp;dengan return 1.</p>\r\n<pre class=\"language-php\"><code>$api-&gt;get(\'test\', function() {\r\n     return 1;\r\n});</code></pre>\r\n<p>Jangan lupa jalankan Laravel virtual server-nya.</p>\r\n<pre class=\"language-php\"><code>php artisan serve</code></pre>\r\n<p>Kemudian buka aplikasi postman dan menuju&nbsp;url&nbsp;<strong>/api/test</strong>&nbsp;<strong><a href=\"http://127.0.0.1/api/test,\">,</a>&nbsp;</strong>jika responnya 1 api route yang kalian buat tidak ada masalah.</p>\r\n<p><img src=\"https://admin.kodinggen.com/storage/uploads/Screenshotfrom2019-08-0417-44-44_L.png\" alt=\"\" width=\"633\" height=\"374\" /></p>\r\n<p>Jika kalian mendapat error disini silahkan langsung dikolom komentar ya :) .</p>\r\n<p>&nbsp;</p>\r\n<h2>RESTful API</h2>\r\n<h3>Migration</h3>\r\n<p>Sekarang kita akan coba buat RESTful API sederhana, API-nya akan menangani operasi CRUD(&nbsp;<em>Create, Read, Update, Delete&nbsp;</em>) dan data yang digunakan adalah data dari tabel&nbsp;<strong>members</strong>.&nbsp;</p>\r\n<p>Pertama buatlah migration terlebih dahulu, disini saya asumsikan kalian sudah mengkonfigurasi database pada file&nbsp;<strong>.env</strong>.</p>\r\n<pre class=\"language-php\"><code>php artisan make:migration create_members_table</code></pre>\r\n<p>Kemudian&nbsp;<em>schema</em>&nbsp;kurang lebih seperti berikut.</p>\r\n<pre class=\"language-php\"><code>Schema::create(\'members\', function (Blueprint $table) {\r\n       $table-&gt;bigIncrements(\'id\');\r\n       $table-&gt;string(\'name\');\r\n       $table-&gt;string(\'email\')-&gt;unique();\r\n       $table-&gt;integer(\'age\')-&gt;unsigned();\r\n       $table-&gt;text(\'address\');\r\n       $table-&gt;timestamps();\r\n});</code></pre>\r\n<p>Lalu kemudian migrate.</p>\r\n<pre class=\"language-php\"><code>php artisan migrate</code></pre>\r\n<h3>Model dan Transformer</h3>\r\n<p>Setelah proses migrate selesai, ada 2 hal yang harus dipersiapkan yaitu&nbsp;<strong>Model</strong>&nbsp;dan&nbsp;<strong>Transformer</strong>. Untuk model saya anggap kalian sudah mengerti bagaimana cara membuat&nbsp;<strong>Model</strong>&nbsp;di Laravel. Nah untuk Transformer sendiri kita akan buat manual karena tidak ada command untuk meng-generate&nbsp;<strong>Transformer</strong>.</p>\r\n<p>Bagi yang belum tahu, Transformer bertugas untuk mentransform data yang dihasilkan dari model sehingga hasil response bisa lebih&nbsp;<em>readable</em>&nbsp;bagi user dan juga bisa lebih konsisten.</p>\r\n<p>Langsung saja yang pertama kita buat dulu sebuah&nbsp;<strong>Transformer</strong>&nbsp;untuk model&nbsp;<strong>Member</strong>. Pada folder&nbsp;<strong>app</strong>&nbsp;buat folder baru dengan nama&nbsp;<strong>Transformers</strong>, nah disinilah kita akan menampung kelas - kelas transformer yang lainnya.</p>\r\n<p>Buat dengan nama&nbsp;<strong>MemberTransformer.php</strong>&nbsp;dengan isi sebagai berikut.</p>\r\n<pre class=\"language-php\"><code>&lt;?php\r\n\r\nnamespace App\\Transformers;\r\n\r\nuse League\\Fractal\\TransformerAbstract;\r\nuse App\\Member;\r\n\r\nclass MemberTransformer extends TransformerAbstract\r\n{\r\n    public function transform(Member $member) {\r\n        return [\r\n            \'id\' =&gt; $member-&gt;id,\r\n            \'name\' =&gt; $member-&gt;name,\r\n            \'email\' =&gt; $member-&gt;email,\r\n            \'age\' =&gt; $member-&gt;age,\r\n            \'address\' =&gt; $member-&gt;address\r\n        ];\r\n    }\r\n}\r\n</code></pre>\r\n<p>Seperti yang saya katakan&nbsp;<strong>Transformer&nbsp;</strong>bertugas untuk mentransform data dari Model, jadi kita bebas membuat bentuk dari data yang akan diterima user sebelumnya. Misalkan saya ingin menerima data dengan bahasa Indonesia saya tinggal merubah key menjadi bahasa Indonesia.</p>\r\n<p>Karna&nbsp;<strong>Transformer</strong>&nbsp;membutuhkan&nbsp;<strong>Model</strong>&nbsp;yang bersangkutan jadi sekarang kita buat&nbsp;<strong>Model</strong>&nbsp;untuk&nbsp;<strong>Member</strong>.</p>\r\n<pre class=\"language-php\"><code>php artisan make:model Member</code></pre>\r\n<p><strong>Member.php</strong></p>\r\n<pre class=\"language-php\"><code>&lt;?php\r\n\r\nnamespace App;\r\n\r\nuse Illuminate\\Database\\Eloquent\\Model;\r\n\r\nclass Member extends Model\r\n{\r\n    protected $fillable = [\r\n        \'name\',\r\n        \'email\',\r\n        \'age\',\r\n        \'address\'\r\n    ];\r\n}\r\n</code></pre>\r\n<p>&nbsp;</p>\r\n<h2>Controller dan Route</h2>\r\n<p>Ok sekarang tinggal buat Controller dan Route. Untuk Controller terdapat sedikit perbedaan pada bagian responsenya, kita akan menggunakan&nbsp;<strong>response</strong>&nbsp;dari&nbsp;<em>dingo api&nbsp;</em>yang nantinya data dari model akan ditransform oleh Transformer.</p>\r\n<h3>Controller</h3>\r\n<p>Kita buat Controller dengan nama&nbsp;<strong>MemberController</strong>.</p>\r\n<pre class=\"language-php\"><code>php artisan make:controller MemberController</code></pre>\r\n<p>Oh iya sedikit tips, ketika membangun&nbsp;<strong>RESTful API</strong>&nbsp;dengan Laravel sangat direkomendasikan untuk memisahkan antara Controller untuk API dan Controller biasa agar lebih terstruktur dan tidak tidak bercampur dengan Controller lainnya.</p>\r\n<p>Jadi kita buat 1 folder lagi pada folder&nbsp;<strong>app/Http/Controllers</strong>&nbsp;dengan nama&nbsp;<strong>Api</strong>&nbsp;lalu pindahkan&nbsp;<strong>MemberController</strong>&nbsp;ke folder&nbsp;<strong>Api</strong>&nbsp;yang sudah dibuat dan jangan lupa mengganti namespacenya tambahkan&nbsp;<strong>\\Api</strong>.</p>\r\n<pre class=\"language-php\"><code>namespace App\\Http\\Controllers\\Api;</code></pre>\r\n<p>Sekarang tinggal kita buat&nbsp;<strong>method - method</strong>&nbsp;yang diperlukan untuk operasi CRUD, ada 5 method yang dibutuhkan yaitu:&nbsp;<strong>index</strong>,&nbsp;<strong>show</strong>,&nbsp;<strong>store</strong>,&nbsp;<strong>update</strong>,&nbsp;<strong>delete</strong>.</p>\r\n<pre class=\"language-php\"><code>&lt;?php\r\n\r\nnamespace App\\Http\\Controllers\\Api;\r\n\r\nuse App\\Http\\Controllers\\Controller;\r\nuse Illuminate\\Http\\Request;\r\nuse App\\Member;\r\nuse App\\Transformers\\MemberTransformer;\r\nuse Dingo\\Api\\Routing\\Helpers;\r\n\r\nclass MemberController extends Controller\r\n{\r\n    use Helpers;\r\n\r\n    public function index()\r\n    {\r\n        return $this-&gt;response-&gt;collection(Member::all(), new MemberTransformer);\r\n    }\r\n\r\n    public function show($id)\r\n    {\r\n        return $this-&gt;response-&gt;item(Member::find($id), new MemberTransformer);\r\n    }\r\n\r\n    public function store(Request $request)\r\n    {\r\n        Member::create($request-&gt;all());\r\n\r\n        return response()-&gt;json([\r\n            \'status\' =&gt; \'ok\',\r\n            \'message\' =&gt; \'Member was created!\'\r\n        ], 200);\r\n    }\r\n\r\n    public function update($id, Request $request)\r\n    {\r\n        Member::find($id)-&gt;update($request-&gt;all());\r\n\r\n        return response()-&gt;json([\r\n            \'status\' =&gt; \'ok\',\r\n            \'message\' =&gt; \'Member was updated\'\r\n        ], 200);\r\n    }\r\n\r\n    public function delete($id)\r\n    {\r\n        Member::destroy($id);\r\n\r\n        return response()-&gt;json([\r\n            \'status\' =&gt; \'ok\',\r\n            \'message\' =&gt; \'Member was deleted\'\r\n        ], 200);\r\n    }\r\n}\r\n</code></pre>\r\n<p>Kurang lebih bentuk Controllernya seperti itu. Untuk respon data ke user saya menggunakan response helper dari&nbsp;<em>dingo api</em>&nbsp;ada&nbsp;<strong>$this-&gt;response-&gt;</strong><strong>collection</strong>&nbsp;untuk banyak data dan&nbsp;<strong>$this-&gt;response-&gt;item</strong>&nbsp;untuk single data.</p>\r\n<h3>Route</h3>\r\n<p>Ok sekarang tinggal buat route untuk masing - masing method yang ada di&nbsp;<strong>MemberController</strong>.</p>\r\n<pre class=\"language-php\"><code>$api-&gt;group([\'namespace\' =&gt; \'App\\Http\\Controllers\\Api\'], function() use($api) {\r\n\r\n    $api-&gt;get(\'members\', \'MemberController@index\');\r\n    $api-&gt;get(\'members/{id}\', \'MemberController@show\');\r\n    $api-&gt;post(\'members\', \'MemberController@store\');\r\n    $api-&gt;put(\'members/{id}/update\', \'MemberController@update\');\r\n    $api-&gt;delete(\'members/{id}/delete\', \'MemberController@delete\');\r\n\r\n});</code></pre>\r\n<p>&nbsp;</p>\r\n<h2>Testing</h2>\r\n<p>Ok semua persiapan sudah selesai waktunya untuk testing semua route yang sudah dibuat.</p>\r\n<p><strong>1. Index</strong></p>\r\n<p><img src=\"https://admin.kodinggen.com/storage/uploads/Screenshotfrom2019-08-0422-50-09_L.png\" alt=\"\" width=\"629\" height=\"251\" /></p>\r\n<p>Untuk sementara karna belum ada data jadi responnya seperti itu.</p>\r\n<p><strong>2. create</strong></p>\r\n<p><strong><img src=\"https://admin.kodinggen.com/storage/uploads/Screenshotfrom2019-08-0422-54-21_L.png\" alt=\"\" width=\"638\" height=\"331\" /></strong></p>\r\n<p>Jika ingin menjalankan create data tinggal ganti method menjadi&nbsp;<strong>POST</strong>&nbsp;dan isi datanya pada tab&nbsp;<strong>Body</strong>&nbsp;dengan format&nbsp;<strong>json</strong>. Nah jika kita coba lagi ke route sebelumnya maka akan terlihat data yang sudah dicreate sebelumnya.</p>\r\n<p><img src=\"https://admin.kodinggen.com/storage/uploads/Screenshotfrom2019-08-0422-57-39_L.png\" alt=\"\" width=\"645\" height=\"329\" /></p>\r\n<p>Struktur dari respon data yang diterima pasti sama seperti yang ada dalam&nbsp;<strong>MemberTransformer&nbsp;</strong>dan kita dapat sewaktu - waktu merubah strukturnya disaat dibutuhkan.</p>\r\n<p>Jika diperhatikan key&nbsp;<strong>data</strong>&nbsp;pada json adalah berupa array karena kita sedang me-request&nbsp;<em>route method</em>&nbsp;<strong>index</strong>, jika kita ingin mendapatkan data user dengan id tertentu gunakan&nbsp;<em>route method</em>&nbsp;<strong>show</strong>.</p>\r\n<p><strong>3. show</strong></p>\r\n<p><img src=\"https://admin.kodinggen.com/storage/uploads/Screenshotfrom2019-08-0423-04-11_L.png\" alt=\"\" width=\"648\" height=\"318\" /></p>\r\n<p>Nah disana bisa dilihat bedanya, sekarang respon data pada&nbsp;<em>route method</em>&nbsp;<strong>show&nbsp;</strong>menghasilkan single object.</p>\r\n<p>&nbsp;</p>\r\n<p>Ok sisanya kalian bisa&nbsp;<em>explore</em>&nbsp;sendiri dan jika ada yang mau ditanyakan atau didiskusikan langsung dikolom komentar ya.<br /><em>Untuk kalian yg lagi cari monitor atau aksesoris seperti keyboard, mousepad dan mouse bisa lihat rekomendasi saya di&nbsp;<a href=\"https://tokopedia.by/sherdiyanto91\">tokopedia</a>&nbsp;ya.</em></p>', 'belajar-fundamental', '2020-10-04 13:38:48'),
(12, 15, 6, 'Konsep Dasar Oop Pada PHP', 'Publish', 'download.jpg', '<p>Pengertian OOP (Object Oriented Programming) adalah suatu metode pemrograman yang berorientasi kepada objek. Tujuan dari OOP diciptakan adalah untuk mempermudah pengembangan program dengan cara mengikuti model yang telah ada di kehidupan sehari-hari. Jadi setiap bagian dari suatu permasalahan adalah objek, nah objek itu sendiri merupakan gabungan dari beberapa objek yang lebih kecil lagi.</p>\r\n<p>Untuk mempermudah ilustrasi dalam belajar konsep OOP, saya akan ambil contoh Pesawat, Pesawat adalah sebuah objek. Pesawat itu sendiri terbentuk dari beberapa objek yang lebih kecil lagi seperti mesin, roda, baling-baling, kursi, dll. Pesawat sebagai objek yang terbentuk dari objek-objek yang lebih kecil saling berhubungan, berinteraksi, berkomunikasi dan saling mengirim pesan kepada objek-objek yang lainnya. Begitu juga dengan program, sebuah objek yang besar dibentuk dari beberapa objek yang lebih kecil, objek-objek itu saling berkomunikasi, dan saling berkirim pesan kepada objek yang lain.</p>\r\n<h3>Belajar OOP PHP : Membuat Class</h3>\r\n<p><strong>Class adalah</strong>&nbsp;sebuah konsep OOP yang digunakan untuk mengencapsulasi /membungkus data dan abstraksi prosedural yang diperlukan dalam menggambarkan isi dan tingkah laku berbagai entitas . Kelas juga merupakan deskripsi tergeneralisir (misal templet, pola, cetak biru) yang menggambarkan kumpulan objek yang sama, untuk membuat class dalam pemograman PHP bisa digunakan dengan nenambahkan keyword class lalu di ikuti oleh nama class yang akan dibuat seperti contoh berikut ini :</p>\r\n<pre class=\"lang:php decode:true \">&lt;?php \r\n	class person {\r\n \r\n	}\r\n?&gt;</pre>\r\n<h3>Belajar OOP PHP : Property Pada Sebuah Class</h3>\r\n<p>Property Dapat disebut juga variable dari Class sedangkan Method biasa dalam bentuk fungsi. Pada Class person kita akan menambahkan sebuah properti baru dengan nama name, pada konsep OOP dalam bahasa pemograman PHP untuk menyatakan sebuah properti bisa dengan menggunakan keyword var lalu di ikuti dengan nama propertinya seperti dibawah ini :</p>\r\n<pre class=\"lang:php decode:true \">&lt;?php \r\n	class person {\r\n		var $name;\r\n	}\r\n?&gt;</pre>\r\n<h3>Belajar OOP PHP : Method Dalam Konsep OOP PHP</h3>\r\n<p>Method adalah suatu operasi berupa fungsi-fungsi yang dapat dikerjakan oleh suatu object. Method didefinisikan pada class akan tetapi dipanggil melalui object. untuk membuat method bisa dengan dimulai dengan keyword function lalu di ikuti oleh nama function nya. berikut ini adalah contoh method Setter dan Getter untuk memberikan value kepada properti dan mengakses properti tersebut :</p>\r\n<pre class=\"lang:php decode:true\">&lt;?php \r\n	class person {\r\n		var $name; \r\n		function set_name($new_name) { \r\n			$this-&gt;name = $new_name;  \r\n 		}\r\n \r\n   		function get_name() {\r\n			return $this-&gt;name;\r\n		}\r\n	} \r\n?&gt;</pre>\r\n<h3>Belajar OOP PHP : Instance Object / Membuat Object</h3>\r\n<p>Object atau Objek adalah hasil cetak dari class, atau hasil &lsquo;konkrit&rsquo; dari class. Jika menggunakan analogi class person di atas maka object dari person bisa berupa anton, sari dan lain nya. sekarang kita akan membuat sebuah file baru dengan nama index.php yang akan kita gunakan sebagai file utama. setelah itu kita juga akan memanggil file class_lib.php tadi agar bisa menggunakan class yang sudah kita buat sebelumnya :</p>\r\n<pre class=\"lang:php decode:true \">&lt;?php include(\"class_lib.php\"); ?&gt;\r\n&lt;?php \r\n	$stefan = new person();\r\n	$jimmy = new person;\r\n \r\n	$stefan-&gt;set_name(\"Stefan Mischook\");\r\n	$jimmy-&gt;set_name(\"Nick Waddles\");\r\n \r\n	echo \"Stefan\'s full name: \" . $stefan-&gt;get_name();\r\n	echo \"Nick\'s full name: \" . $jimmy-&gt;get_name(); \r\n?&gt;</pre>\r\n<p>untuk mengakses sebuah properti sebenarnya tidak selalu harus melalui method, bisa saja anda memanggil properti itu langsung dari luar class dengan syarat bahwa properti itu bersifat public (akan kita bahas lebih lengkap pada pembahasan visibility setelah ini) seperti dibawah ini :</p>\r\n<pre class=\"lang:php decode:true \">&lt;?php include(\"class_lib.php\"); ?&gt;		\r\n&lt;?php \r\n	$stefan = new person();		\r\n	$jimmy = new person;\r\n \r\n	$stefan-&gt;set_name(\"Stefan Mischook\");\r\n	$jimmy-&gt;set_name(\"Nick Waddles\");	\r\n \r\n	// directly accessing properties in a class is a no-no.\r\n	echo \"Stefan\'s full name: \".$stefan-&gt;name;\r\n?&gt;</pre>\r\n<h3>Belajar OOP PHP : Method Constructor Dan Destructor</h3>\r\n<p><strong>Constructor</strong>&nbsp;adalah fungsi khusus / fungsi unik yang akan di panggil secara otomatis pada saat object dibuat. Secara umum, pada saat pembuatan object, class harus meng-inisialisasikan variablenya untuk menghindari error yang tidak diinginkan sedangkan&nbsp;adalah method khusus yang dijalankan secara otomatis pada saat sebuah objek dihapus. Di dalam PHP, seluruh objek secara otomatis dihapus ketika halaman PHP dimana objek itu berada selesai diproses. berikut ini adalah contoh nya :</p>\r\n<pre class=\"lang:php decode:true\">&lt;?php 		\r\n	class person {\r\n		var $name;\r\n		function __construct($persons_name) {		\r\n			echo \"&lt;p&gt;initialize class&lt;/p&gt;\";		\r\n		}		\r\n \r\n		function set_name($new_name) {\r\n		 	 $this-&gt;name = $new_name;\r\n		}	\r\n \r\n		function get_name() {		\r\n		 	 return $this-&gt;name;		\r\n		 }\r\n                function __destructor(){\r\n                         echo \"&lt;p&gt;end class&lt;/p&gt;\";\r\n                }		\r\n \r\n	}	 	\r\n?&gt;</pre>\r\n<h3>Melindungi Method Dan Property Dengan Enkapsulasi (Encapsulation)</h3>\r\n<p>Dengan enkapsulasi, kita bisa membuat pembatasan akses kepada property dan method, sehingga hanya property dan method tertentu saja yang bisa diakses dari luar class. Enkapsulasi juga dikenal dengan istilah &lsquo;information hiding&rsquo;. ada 3 jenis enkapsulasi yang bisa anda manfaatkan yaitu Public, Private Protected.</p>\r\n<h3>Belajar OOP PHP : Jenis Enkapsulasi Public</h3>\r\n<p>jika anda menggunakan jenis enkapsulasi public pada properti atau method dalam sebuah class, itu artinya method dan propertinya bisa di akses secara bebas baik dari dalam class, dari luar class bahkan dari class turunan nya sekalipun. berikut ini adalah contoh nya :</p>\r\n<pre class=\"lang:default decode:true \">&lt;?php \r\n	class person {\r\n		public $name; \r\n		function set_name($new_name) { \r\n			$this-&gt;name = $new_name;  \r\n 		}\r\n \r\n   		function get_name() {\r\n			return $this-&gt;name;\r\n		}\r\n	} \r\n?&gt;\r\n\r\n&lt;?php\r\n$person1 = new Person();\r\n// properti bisa di akses secara langsung\r\necho \"Hai \".$person1-&gt;name=\'Nuris Akbar\';\r\necho \"&lt;hr&gt;\";\r\n// method bisa di akses secara langsung\r\necho $person1-&gt;get_name();\r\n?&gt;</pre>\r\n<p>seperti yang anda lihat pada script di atas bahwa kita bisa mengakses method atau properti secara langsung jika menggunakan keyword public.</p>\r\n<h3>Belajar OOP PHP : Jenis Enkapsulasi Private</h3>\r\n<p>lain halnya jika anda menggunakan jenis enkapsulasi private, itu artinya method dan propertinya hanya bisa di akses dari dalam class itu sendiri dan dari class turunan nya, berikut ini adalah contoh nya :</p>\r\n<pre class=\"lang:default decode:true \">&lt;?php \r\n	class person {\r\n		private $name; \r\n		function set_name($new_name) { \r\n			$this-&gt;name = $new_name;  \r\n 		}\r\n \r\n   		function get_name() {\r\n			return $this-&gt;name;\r\n		}\r\n	} \r\n?&gt;\r\n\r\n&lt;?php\r\n$person1 = new Person();\r\n// properti bisa di akses secara langsung\r\necho \"Hai \".$person1-&gt;name=\'Nuris Akbar\';\r\necho \"&lt;hr&gt;\";\r\n// methob tidak bisa di akses secara langsung\r\necho $person1-&gt;get_name();\r\n?&gt;</pre>\r\n<p>Jika anda menggnati jenis enkapsulasinya menjadi private maka akan muncul error seperti ini jika anda melakukan akses properti dari luar class.</p>\r\n<h3>Belajar OOP PHP : Jenis Enkapsulasi Protected</h3>\r\n<p>Lalu yang terakhir adalah jenis enkapsulasi protected, jenis enkapsulasi ini biasanya digunakan untuk melindungsi informasi yang bersifat rahasia, dimana jika anda menggunakan protected pada method atau properti maka anda hanya bisa mengakses properti tersebut hanya dari dalam class tersebut, berikut contoh script nya :</p>\r\n<pre class=\"lang:default decode:true \">&lt;?php \r\n	class person {\r\n		protected $name; \r\n		function set_name($new_name) { \r\n			$this-&gt;name = $new_name;  \r\n 		}\r\n \r\n   		function get_name() {\r\n			return $this-&gt;name;\r\n		}\r\n	} \r\n?&gt;\r\n\r\n&lt;?php\r\n$person1 = new Person();\r\n// set value dari properti name\r\n$person1-&gt;set_name(\'Muhammad Hafidz Muzaki\');\r\n// akses value dari properti name\r\necho $person1-&gt;get_name();\r\n// properti tidak bisa di akses secara langsung, kana muncul error\r\necho \"Hai \".$person1-&gt;name=\'Nuris Akbar\';\r\necho \"&lt;hr&gt;\";\r\n\r\n?&gt;</pre>\r\n<p>seperti yang saya jelaskan di atas bahwa perbedaan utama antara private dan protected hanyalah jika protected tidak bisa diakses kecuali dari dalam class itu sendiri. jika anda mengakses nya dari luar class maka akan muncul error seperti ini :</p>\r\n<p>ekian postingan tentang Konsep OOP pada bahasa pemograman PHP.</p>\r\n<h3>Daftar Pustaka :</h3>\r\n<ol>\r\n<li>http://www.killerphp.com/tutorials/object-oriented-php/</li>\r\n<li>http://www.duniailkom.com/tutorial-belajar-oop-php-pemrograman-berbasis-objek-php/</li>\r\n</ol>', 'konsep-dasar-oop-pada-php', '2020-10-06 02:57:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `struktur`
--

CREATE TABLE `struktur` (
  `id_struktur` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `nama` varchar(80) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `struktur`
--

INSERT INTO `struktur` (`id_struktur`, `keterangan`, `nama`, `gambar`, `tanggal`) VALUES
(6, '<p>Wakil Ketua</p>', 'Andika Pratama', 'api.jpg', '2020-10-23 04:27:55'),
(7, '<p>Ketua Komunitas</p>', 'Andi Riyanto', 'api1.jpg', '2020-10-23 04:28:19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `akses_level` varchar(20) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `nama`, `email`, `username`, `password`, `akses_level`, `gambar`, `tanggal`) VALUES
(15, 'Admin-Tsn', 'admin@gmail.com', 'admintsn', '785fbcb91c8f9b4a5290783d91f70aa9ee739db8', 'Admin', '', '2020-09-28 23:24:51'),
(16, 'Dika ', 'dika@gmail.com', 'dika', 'f9c22e5c8b56ff08487e9a8e727df2a752438222', 'Admin', '', '2020-10-01 02:33:02'),
(17, 'admin', 'admin@gmail.com', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Admin', '', '2020-10-22 23:48:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `video`
--

CREATE TABLE `video` (
  `id_video` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `judul_video` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  `video` varchar(100) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `video`
--

INSERT INTO `video` (`id_video`, `id_user`, `judul_video`, `keterangan`, `video`, `tanggal`) VALUES
(2, 15, 'uji COba', '<p><span style=\"vertical-align: inherit;\"><span style=\"vertical-align: inherit;\">uji coba Gratisan</span></span></p>\r\n<p>&nbsp;</p>', 'watch?v=ci3sA0_Tm9Q&list=RDQPFQ6eCsWP4&index=8', '2020-10-01 06:29:14');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indeks untuk tabel `kategori_redaksi`
--
ALTER TABLE `kategori_redaksi`
  ADD PRIMARY KEY (`id_kategori_redaksi`);

--
-- Indeks untuk tabel `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`);

--
-- Indeks untuk tabel `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id_kontak`);

--
-- Indeks untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id_pendaftaran`);

--
-- Indeks untuk tabel `portofolio`
--
ALTER TABLE `portofolio`
  ADD PRIMARY KEY (`id_portofolio`);

--
-- Indeks untuk tabel `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id_profil`);

--
-- Indeks untuk tabel `redaksi`
--
ALTER TABLE `redaksi`
  ADD PRIMARY KEY (`id_redaksi`);

--
-- Indeks untuk tabel `struktur`
--
ALTER TABLE `struktur`
  ADD PRIMARY KEY (`id_struktur`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id_video`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `kategori_redaksi`
--
ALTER TABLE `kategori_redaksi`
  MODIFY `id_kategori_redaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id_kegiatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id_kontak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id_pendaftaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `portofolio`
--
ALTER TABLE `portofolio`
  MODIFY `id_portofolio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `profil`
--
ALTER TABLE `profil`
  MODIFY `id_profil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `redaksi`
--
ALTER TABLE `redaksi`
  MODIFY `id_redaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `struktur`
--
ALTER TABLE `struktur`
  MODIFY `id_struktur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `video`
--
ALTER TABLE `video`
  MODIFY `id_video` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
