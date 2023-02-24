-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Feb 2023 pada 07.25
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `properti`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `gallery_propertis`
--

CREATE TABLE `gallery_propertis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `url` varchar(255) NOT NULL,
  `properti_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `gallery_propertis`
--

INSERT INTO `gallery_propertis` (`id`, `url`, `properti_id`, `created_at`, `updated_at`) VALUES
(3, 'gallery-properti/0O8n5GLhj1bJ1i35HcjWLOPWudxZ0r01FxD69pKk.jpg', 2, '2023-02-17 09:47:36', '2023-02-17 09:47:36'),
(4, 'gallery-properti/FakiC2zoiiGgWz2PlcGAY12o2K3ITJNABTdfJr6f.jpg', 2, '2023-02-17 09:47:36', '2023-02-17 09:47:36'),
(5, 'gallery-properti/z7l38iGZUnQcjsbJXvk6l0XP1hR78HbSmofPqWEx.jpg', 3, '2023-02-17 20:46:40', '2023-02-17 20:46:40'),
(6, 'gallery-properti/WmbaQQNqkV3GY81XoG4HMHkjbSAFnu0mDOWzhOTO.jpg', 3, '2023-02-17 20:46:40', '2023-02-17 20:46:40'),
(7, 'gallery-properti/KHzYLDOn1k1gGAAbIMyWBEBYGZryNmB3FJ8XobES.jpg', 3, '2023-02-17 20:46:40', '2023-02-17 20:46:40'),
(8, 'gallery-properti/JPIMEFU9HMzrb4ONt7TbolBJxaVwtAyD17Yj4sfz.jpg', 4, '2023-02-17 21:30:56', '2023-02-17 21:30:56'),
(9, 'gallery-properti/ewGiaFHf8q4HblfbMrvaQwACSe7bi1sVp3GL6yY1.jpg', 4, '2023-02-17 21:30:56', '2023-02-17 21:30:56'),
(10, 'gallery-properti/7fuJYQ8CIMAvvrHB5UeCawlTAaX1CmElOVA9E3O5.jpg', 4, '2023-02-17 21:30:56', '2023-02-17 21:30:56'),
(11, 'gallery-properti/Xy708L4YbMAKYFXDg2ibczMyMPYZmVhUtNoeOzBT.jpg', 5, '2023-02-17 21:36:10', '2023-02-17 21:36:10'),
(12, 'gallery-properti/Rch3kJgVjQ9NjkzGZIcPJPv618zbPoZPrkFPMhIh.jpg', 5, '2023-02-17 21:36:10', '2023-02-17 21:36:10'),
(13, 'gallery-properti/OAS35dOO77Rw63RBtUhxuHQILVFlQmMJdmxQnc9O.jpg', 5, '2023-02-17 21:36:10', '2023-02-17 21:36:10'),
(14, 'gallery-properti/H9DE0s34LzYSIIUQKk2KjPwDtrRiPlQpVs1nIHCZ.jpg', 5, '2023-02-17 21:36:10', '2023-02-17 21:36:10'),
(15, 'gallery-properti/WzOa0h1xpO2tuhVxmy9Iv1wiWdXDBJY4pgh3Cikw.jpg', 6, '2023-02-18 06:59:09', '2023-02-18 06:59:09'),
(16, 'gallery-properti/UWsD4MejTLlY4czsIdaxarGYsqI72DZPmpHmtFGJ.jpg', 6, '2023-02-18 06:59:09', '2023-02-18 06:59:09'),
(17, 'gallery-properti/0CqwkzXhREzSb9FqNiDChyVkDdwWThNIBP6wE3aS.jpg', 6, '2023-02-18 06:59:09', '2023-02-18 06:59:09'),
(18, 'gallery-properti/oTXdVN0L98mc1oHlsS2mwUekec5iXk6zPIFOnsf7.jpg', 6, '2023-02-18 06:59:09', '2023-02-18 06:59:09'),
(19, 'gallery-properti/kURppS0MgsK0qyEikBW4fqJEWWpFxTz2jNllqI86.jpg', 6, '2023-02-18 06:59:09', '2023-02-18 06:59:09'),
(20, 'gallery-properti/OhrW7penb4PVzcIfIjtfrpdZR0PUqLPhhJ8wqN4Y.jpg', 7, '2023-02-23 21:29:49', '2023-02-23 21:29:49'),
(21, 'gallery-properti/voKDcTMgP7bfETyKH4H9FILWhE0wv5Y5EMxCZyzq.jpg', 7, '2023-02-23 21:29:49', '2023-02-23 21:29:49'),
(22, 'gallery-properti/izv3hRiSnMEaritgGcbVaZ8U2JU6vT2aVFy4v7QY.jpg', 7, '2023-02-23 21:29:49', '2023-02-23 21:29:49');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lokasis`
--

CREATE TABLE `lokasis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_lokasi` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `lokasis`
--

INSERT INTO `lokasis` (`id`, `nama_lokasi`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Tangerang', 'tangerang', '2023-02-16 02:49:11', '2023-02-16 02:49:11'),
(2, 'Tangerang Selatan', 'tangerang-selatan', '2023-02-16 02:49:18', '2023-02-16 02:49:18'),
(3, 'Bekasi', 'bekasi', '2023-02-16 02:49:26', '2023-02-16 02:49:26'),
(4, 'Depok', 'depok', '2023-02-16 02:49:33', '2023-02-16 02:49:33'),
(5, 'Jakarta Timur', 'jakarta-timur', '2023-02-16 02:49:44', '2023-02-16 02:49:44'),
(6, 'Jakarta Selatan', 'jakarta-selatan', '2023-02-16 02:49:54', '2023-02-16 02:49:54'),
(8, 'Jakarta Utara', 'jakarta-utara', '2023-02-16 02:50:06', '2023-02-16 02:50:06'),
(9, 'Jakarta Barat', 'jakarta-barat', '2023-02-16 02:50:18', '2023-02-16 02:50:18'),
(10, 'Bandung Barat', 'bandung-barat', '2023-02-23 20:24:03', '2023-02-23 20:24:03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_11_21_062055_create_propertis_table', 1),
(6, '2022_11_22_142322_create_lokasis_table', 1),
(7, '2022_11_27_043224_create_tipe_propertis_table', 1),
(8, '2022_12_01_090039_create_gallery_propertis_table', 1),
(9, '2023_01_14_154012_create_tipe_units_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `propertis`
--

CREATE TABLE `propertis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lokasi_id` bigint(20) UNSIGNED NOT NULL,
  `tipe_properti_id` bigint(20) UNSIGNED NOT NULL,
  `nama_properti` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `nama_developer` varchar(255) NOT NULL,
  `cicilan` varchar(255) NOT NULL,
  `featured_image` varchar(255) NOT NULL,
  `deskripsi_properti` longtext NOT NULL,
  `fasilitas` longtext NOT NULL,
  `deskripsi_lokasi` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `propertis`
--

INSERT INTO `propertis` (`id`, `lokasi_id`, `tipe_properti_id`, `nama_properti`, `slug`, `nama_developer`, `cicilan`, `featured_image`, `deskripsi_properti`, `fasilitas`, `deskripsi_lokasi`, `created_at`, `updated_at`) VALUES
(2, 1, 1, 'Serpong Suradita Residence', 'serpong-suradita-residence', 'PT Adco Citra Asri', 'Rp 2.3 jt/bulan', 'featured_image/yD0dllW2bgNNiMsyW9zhOdL6emW3K8EehXsrNwxH.jpg', '<p>Adco Property Group kembali meluncurkan cluster baru bernama&nbsp;Serpong Suradita Residence. Cluster ini mengusung konsep hunian&nbsp;<em>One Stop Green Living&nbsp;</em>yang dilengkapi dengan area taman hijau serta wisata danau. Tak hanya itu, kawasan &nbsp;Serpong Suradita Residence sangatlah luas mencapai 45 hektar dengan penataan yang apik, sehingga Anda tidak perlu ragu untuk membeli rumah di cluster ini.</p>\r\n\r\n<p>Keunggulan utama dari Serpong Suradita Residence adalah tampilan rumahnya yang mengusung Modern Ethnic. Setiap unitnya didesain dengan memadukan warna netral seperti cream dan putih yang membuat tampilan rumah lebih cerah. Sentuhan modern pada bagian fasad juga mempercantik hunian.</p>\r\n\r\n<p>Selain itu, lokasi &nbsp;Serpong Suradita Residence juga sangat strategis. Lokasinya dekat dari kawasan BSD City yang dikelilingi oleh berbagai fasilitas umum seperti mall, rumah sakit, dan masih banyak lagi. Jika Anda membutuhkan informasi lebih lanjut, simak ulasan berikut.</p>', '<p>Berbagai fasilitas tersedia di Serpong Suradita Residence. Pada area cluster, tersedia fasilitas danau wisata yang bisa Anda kunjungi bersama keluarga. Jika Anda berencana tinggal bersama si kecil, area cluster ini juga dilengkapi dengan fasilitas taman bermain anak. Tak ketinggalan, akses pendukung lainnya seperti masjid, serta keamanan 24 jam dan One gate system juga tersedia di area cluster.</p>', '<p><img alt=\"map\" src=\"https://d3lfgix2a8jnun.cloudfront.net/cluster-files/serpong-suradita-residence.jpg\" /></p>\r\n\r\n<p>Lokasi Serpong Suradita Residence berada di sisi Jalan Utama Cisauk yang berjarak hanya sekitar 2 KM dari&nbsp; Stasiun KRL Cisauk. Lokasinya juga dekat dari Akses Tol yang terhubung ke berbagai kota. Adapun posisi Serpong Suradita Residence adalah sebagai&nbsp;berikut :</p>\r\n\r\n<ul>\r\n	<li>4 menit dari RS Selaras</li>\r\n	<li>7 menit dari Stasiun KRL Cisauk</li>\r\n	<li>10 menit dari The ICON Bussiness Park</li>\r\n	<li>10 menit dari Unika Atma Jaya BSD</li>\r\n	<li>13 menit dari AEON Mall BSD</li>\r\n</ul>\r\n\r\n<p>Untuk fasilitas yang tersedia di sekitar Serpong Suradita Residence adalah sebagai berikut :</p>\r\n\r\n<ul>\r\n	<li>Pusat perbelanjaan terdekat : RS Selaras, Eka Hospital, RS Hermina</li>\r\n	<li>Institusi pendidikan terdekat : Unika Atma Jaya BSD, Universitas Prasetya Mulya</li>\r\n	<li>Fasilitas kesehatan terdekat : Pasar Modern Intermoda BSD, The ICON, AEON Mall BSD</li>\r\n</ul>', '2023-02-17 09:47:36', '2023-02-17 09:47:36'),
(3, 1, 1, 'Botanical Puri Asri', 'botanical-puri-asri', 'PT Repower Asia Indonesia', 'Rp 8.8 jt/bulan', 'featured_image/VWjC6MdUyFZRAmSEIIL7hcAbOKwhsto4xt0rDge6.jpg', '<p>Botanical Puri Asri merupakan cluster perumahan terbaru di Kota Depok. Cluster ini mengusung konsep hunian asri lengkap dengan Thematic Garden yang membuat suasana rumah sangat nyaman. Dibangun oleh developer PT Repower Asia Indonesia, Botanical Puri Asri menyediakan unit yang dilengkapi Smart Home System, Solar Panel, serta jaringan FO bawah tanah.</p>\r\n\r\n<p>Selain suasana clusternya yang sejuk, lokasi Botanical Puri Asri juga sangat strategis. Dari area cluster, Anda bisa menjangkau akses Tol&nbsp; Cinere-Jagorawi dan Depok-Antasari hanya dalam waktu sekitar 5 menit berkendara. Lokasi Botanical Puri Asri juga dikelilingi oleh berbagai fasilitas, mulai dari fasilitas internal maupun eksternal.</p>\r\n\r\n<p>Jika Anda membutuhkan informasi lebih lanjut seputar Botanical Puri Asri, simak ulasan berikut.</p>', '<p>Berbagai fasilitas internal tersedia di area Botanical Puri Asri. Pada kawasan cluster, tersedia fasilitas kolam renang yang bisa diakses bersama keluarga. Ada juga taman komunal untuk sekedar bersantai atau bercengkrama dengan tetangga. Selain itu, tersedia juga fasilitas ibadah seperti musola.</p>\r\n\r\n<p>Untuk keamanan, Botanical Puri Asri dilengkapi dengan sistem keamanan One gate system, sehingga keamanannya tidak perlu diragukan lagi.</p>', '<p><img alt=\"map\" src=\"https://d3lfgix2a8jnun.cloudfront.net/cluster-files/botanical-puri-asri.jpg\" /></p>\r\n\r\n<p>Bicara soal lokasi, Botanical Puri Asri memiliki lokasi yang sangat strategis. Lokasinya berada dekat dari akses tol yang terhubung ke berbagai kota. Adapun posisi Botanical Puri Asri adalah sebagai berikut :</p>\r\n\r\n<ul>\r\n	<li>5 menit ke RS Graha Permata Ibu</li>\r\n	<li>7 menit dari Superindo</li>\r\n	<li>15 menit ke Stasiun Depok Baru</li>\r\n</ul>\r\n\r\n<p>Untuk fasilitas umum yang tersedia di Botanical Puri Asri adalah sebagai berikut :</p>\r\n\r\n<ul>\r\n	<li>Pusat perbelanjaan terdekat : Superindo, Depok Townsquare, DMall Depok</li>\r\n	<li>Institusi pendidikan terdekat : Universitas Indonesia, Universitas Gunadarma</li>\r\n	<li>Fasilitas kesehatan terdekat : RS Graha Permata Ibu, RS Hermina Depok RSUI</li>\r\n</ul>', '2023-02-17 20:46:40', '2023-02-17 20:46:40'),
(4, 1, 1, 'Clover Hills Residence', 'clover-hills-residence', 'Abdael Nusa Group', 'Rp 22.9 jt/bulan', 'featured_image/jatWPTRwNN5aReS7JGBPgjfQcaMFGJirgZVTRNfa.jpg', '<p>Salah satu cluster terbaru di Pusat Tangerang adalah Clover Hills Residence. Cluster ini mengusung konsep hunian premium dengan&nbsp;<em>Green Concept</em>&nbsp;yang didesain khusus untuk keluarga modern. Setiap unitnya dibangun dengan interior modern minimalis yang sangat nyaman, sehingga sangat cocok untuk dijadikan hunian jangka panjang.</p>\r\n\r\n<p>Keunggulan utama dari Clover Hills Residence adalah lokasinya yang strategis, yaitu dekat dari akses Tol Pintu Joglo yang hanya berjarak sekitar 3 KM dari area cluster. Tak hanya itu, Cluster Clover Hills Residence juga dilengkapi dengan berbagai fasilitas internal maupun eksternal yang memadai.</p>\r\n\r\n<p>Jika Anda ingin mengetahui lebih lanjut seputar Clover Hills Residence, simak ulasan berikut.</p>', '<p>Berbagai fasilitas tersedia di area Cluster Clover Hills Residence. Tersedia fasilitas taman bermain anak yang bisa dijadikan area eksplorasi si kecil. Ada juga fasilitas Family Park yang bisa Anda kunjungi bersama keluarga.</p>\r\n\r\n<p>Fasilitas penunjang lainnya juga tersedia, diantaranya yaitu :</p>\r\n\r\n<ul>\r\n	<li>Clubhouse</li>\r\n	<li>Kolam renang</li>\r\n	<li>Water treatment plant</li>\r\n	<li>Keamanan 24 jam</li>\r\n	<li>CCTV di area cluster&nbsp;</li>\r\n	<li>One gate system</li>\r\n	<li>dan masih banyak lagi</li>\r\n</ul>', '<p><img alt=\"map\" src=\"https://d3lfgix2a8jnun.cloudfront.net/cluster-files/clover-hills-residence.jpg\" /></p>\r\n\r\n<p>Berlokasi di&nbsp; Tangerang yang dekat dari Jakarta menjadikan lokasi Clover Hills Residence sangat strategis. Lokasinya dekat dari akses tol serta berbagai fasilitas umum. Adapun posisi Clover Hills Residence adalah sebagai berikut :</p>\r\n\r\n<ul>\r\n	<li>5 menit dari Universitas Budi Luhur</li>\r\n	<li>10 menit dari Gerbang Tol Joglo</li>\r\n	<li>10 menit dari&nbsp; Universitas Mercubuana</li>\r\n	<li>-+25 menit dari Bandara Soekarno Hatta</li>\r\n</ul>\r\n\r\n<p>Adapun fasilitas umum di sekitar cluster diantaranya adalah sebagai berikut :</p>\r\n\r\n<ul>\r\n	<li><strong>Pusat perbelanjaan terdekat :&nbsp;</strong>CBD Ciledug, ITC Cipulir</li>\r\n	<li><strong>Institusi pendidikan terdekat :&nbsp;</strong>Universitas Budi Luhur, Universitas Mercubuana, Ponpes Daarunnajah</li>\r\n	<li><strong>Fasilitas kesehatan terdekat :&nbsp;</strong>RS Bhakti Asih, RS Karang Tengah</li>\r\n</ul>', '2023-02-17 21:30:56', '2023-02-17 21:30:56'),
(5, 2, 1, 'Ruma Prana', 'ruma-prana', 'PT Ruma Digital Indonesia', 'Rp 19.5 jt/bulan', 'featured_image/AioYRtrZbFGjSAHGKUKQW5UqURQx5VZpJNDVT7BF.jpg', '<p>Salah satu cluster perumahan terbaru di dekat Pondok Indah adalah Ruma Prana. Cluster ini merupakan perumahan dengan konsep Private Cluster yang mengutamakan keamanan dan kenyamanan hunian. Setiap unitnya didesain dengan konsep Modern Tropical yang mengutamakan efisiensi ruangan, sehingga Anda bisa tinggal di rumah dengan nyaman.</p>\r\n\r\n<p>Keunggulan lain dari Ruma Prana adalah lokasinya yang super strategis. Berlokasi di kawasan Jakarta Selatan, lokasi Ruma Prana sangat dekat dari Mall dan area Perumahan Elite Pondok Indah. Area cluster juga dikelilingi oleh berbagai fasilitas, baik fasilitas internal maupun fasilitas eksternal.</p>\r\n\r\n<p>Cluster Ruma Prana hanya menyediakan sekitar 14 unit dengan dua tipe, yaitu Tipe Standard dan Hoek. Jika Anda tertarik dengan unit Ruma Prana, simak ulasan berikut.&nbsp;</p>', '<p>Berbagai fasilitas tersedia di Ruma Prana. Pada setiap unit, terdapat fasilitas rooftop dan backyard yang dapat dijadikan ruang tambahan. Tak hanya itu, Area cluster juga dilengkapi dengan fasilitas berikut :</p>\r\n\r\n<ul>\r\n	<li>Taman bermain anak</li>\r\n	<li>Keamanan 24 jam&nbsp;</li>\r\n	<li>CCTV</li>\r\n	<li>One Gate System</li>\r\n	<li>dan masih banyak lagi.</li>\r\n</ul>', '<p><img alt=\"map\" src=\"https://d3lfgix2a8jnun.cloudfront.net/cluster-files/ruma-prana.jpg\" /></p>\r\n\r\n<p>Bicara soal lokasi, Cluster Ruma Prana memiliki lokasi yang sangat strategis. Adapun posisi Ruma Prana adalah sebagai berikut :</p>\r\n\r\n<ul>\r\n	<li>5 menit ke Pondok Indah Mall</li>\r\n	<li>5 menit ke MRT Lebak Bulus</li>\r\n	<li>5 menit ke RS Pondok Indah</li>\r\n	<li>7 menit ke RS Siloam</li>\r\n</ul>\r\n\r\n<p>Adapun faslitas terdekat dari Ruma Prana adalah sebagai berikut :</p>\r\n\r\n<ul>\r\n	<li><strong>Pusat perbelanjaan terdekat :&nbsp;</strong>Mall Pondok Indah 1, 2 dan 3, Transmart</li>\r\n	<li><strong>Institusi pendidikan terdekat :&nbsp;</strong>Raffles Christian School, Sekolah Tinggi Parawisata Trisakti, Universitas Muhammadiyah Jakarta</li>\r\n	<li><strong>Fasilitas kesehatan terdekat :</strong>&nbsp;RS Pondok Indah, RS Siloam&nbsp;</li>\r\n	<li><strong>Tempat wisata terdekat :&nbsp;</strong>Pondok Indah Waterpark, Danau Bintaro</li>\r\n</ul>', '2023-02-17 21:36:10', '2023-02-17 21:36:10'),
(6, 2, 1, 'Wellspring House', 'wellspring-house', 'Easton Urban Kapital', 'Rp 6.9 jt/bulan', 'featured_image/jVKwyWnjlLaB6grGtJyQduvVLXpWhM35hf80tU2F.jpg', '<p>Salah satu cluster perumahan terbaru di kawasan Serpong Tangerang adalah Wellspring House. Lokasinya sangat dekat dengan area BSD City. Cluster ini mengusung konsep hunian modern yang privat dan eksklusif. Pada area cluster, unit yang ditawarkan sangat terbatas, yaitu hanya sekitar 68 unit saja.</p>\r\n\r\n<p>Wellspring House dibangun oleh developer ternama Easton Urban Kapital. Setiap unitnya memiliki kapasitas 3+1 kamar tidur dan 3+1 kamar mandi, sehingga sangat cocok untuk dijadikan hunian bersama keluarga. Menariknya lagi, interior setiap ruangan dilengkapi dengan jendela lebar yang memudahkan pencahayaan alami masuk ke dalam ruangan.</p>\r\n\r\n<p>Keunggulan lain dari Cluster Wellspring House adalah fasilitasnya yang lengkap, baik fasilitas internal maupun fasilitas eksternal. Jika Anda membutuhkan informasi lebih lanjut seputar Wellspring House, simak ulasan berikut.</p>', '<p><em>Fasilitas Wellspring House</em></p>\r\n\r\n<p>Berbagai fasilitas tersedia di Wellspring House. Pada area cluster, tersedia Clubhouse lengkap dengan fasilitas kolam renang, community longue dan gym. Selain itu, Anda juga bisa menemukan fasilitas perpustakaan di area cluster.&nbsp;</p>\r\n\r\n<p>Fasilitas pendukung lainnya juga tersedia, diantaranya :</p>\r\n\r\n<ul>\r\n	<li>Area taman dengan gazebo</li>\r\n	<li>Taman bermain anak</li>\r\n	<li>SpringWalk garden</li>\r\n	<li>One gate system</li>\r\n	<li>Keamanan ketat 24 jam</li>\r\n	<li>dan masih banyak lagi</li>\r\n</ul>', '<p><img alt=\"map\" src=\"https://d3lfgix2a8jnun.cloudfront.net/cluster-files/wellspring-house.jpg\" /></p>\r\n\r\n<p>Berlokasi di Serpong menjadikan lokasi Wellspring House sangat strategis. Lokasinya dekat dari kawasan BSD City serta akses tol yang terhubung ke Jakarta dan sekitarnya. Tak hanya itu, Wellspring House juga dikelilingi oleh berbagai fasilitas umum, diantaranya adalah sebagai berikut :&nbsp;</p>\r\n\r\n<ul>\r\n	<li>Pusat perbelanjaan terdekat : Paradise Walk Serpong, Pamulang Square, Pasar Modern BSD</li>\r\n	<li>Institusi pendidikan terdekat : Global Islamic School, Saint John Catholic School, MAN Insan Cendikia</li>\r\n	<li>Fasilitas kesehatan terdekat : RS Hermina, RS Permata Pamulang, RSUD Tangerang Selatan</li>\r\n</ul>', '2023-02-18 06:59:09', '2023-02-18 06:59:09'),
(7, 10, 1, 'Cendana residance', 'cendana-residance', 'anday', '22.9 jt/bulan', 'featured_image/OQP9LPhcYAy7npxZ47ulycSi8B1FZ3m95fKUk7q7.jpg', '<p>tes</p>', '<p>tes</p>', '<p>tes</p>', '2023-02-23 21:29:49', '2023-02-23 21:29:49');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tipe_propertis`
--

CREATE TABLE `tipe_propertis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_tipe` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tipe_propertis`
--

INSERT INTO `tipe_propertis` (`id`, `nama_tipe`, `created_at`, `updated_at`) VALUES
(1, 'Rumah', '2023-02-16 02:50:38', '2023-02-16 02:50:38'),
(2, 'Apartemen', '2023-02-16 02:50:43', '2023-02-16 02:50:43'),
(3, 'Ruko', '2023-02-16 02:50:48', '2023-02-16 02:50:48');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tipe_units`
--

CREATE TABLE `tipe_units` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `property_id` bigint(20) UNSIGNED NOT NULL,
  `image_tipe` varchar(255) NOT NULL,
  `nama_tipe` varchar(255) NOT NULL,
  `harga` text NOT NULL,
  `kamar_tidur` int(11) NOT NULL,
  `luas_tanah` int(11) NOT NULL,
  `luas_bangunan` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tipe_units`
--

INSERT INTO `tipe_units` (`id`, `property_id`, `image_tipe`, `nama_tipe`, `harga`, `kamar_tidur`, `luas_tanah`, `luas_bangunan`, `created_at`, `updated_at`) VALUES
(16, 2, 'image_tipe/tfF8r7WSyvh8TQQdu5SIFvEJAalHoS7LqYr5FeRR.jpg', 'Tipe Sentani', '399000000', 2, 72, 37, '2023-02-17 09:48:39', '2023-02-17 09:48:39'),
(17, 2, 'image_tipe/kdBrfcWw2d6flDljv0jzVQjH8vNLiNK0gITBp9oY.jpg', 'Tipe Maninjau', '700000000', 2, 72, 39, '2023-02-17 09:52:32', '2023-02-17 09:52:32'),
(18, 2, 'image_tipe/xNHjEHKNlf0svwwftm2njBeAlaS2FXjmGOT7VKCW.jpg', 'Tipe Canyon', '883000000', 4, 120, 70, '2023-02-17 20:41:21', '2023-02-17 20:41:21'),
(19, 3, 'image_tipe/49W2KxNRTC1Tanm7j47ixcauePobzj6XHYbPh4vQ.jpg', 'Tipe Bidara', '1500000000', 2, 90, 81, '2023-02-17 20:47:46', '2023-02-17 20:47:46'),
(20, 3, 'image_tipe/iv0I2mM3ewaIIezL508i6vQq642vDtQWaOIeIOSD.jpg', 'Tipe Tin', '1900000000', 3, 90, 122, '2023-02-17 20:52:07', '2023-02-17 20:52:07'),
(21, 3, 'image_tipe/79p02Xak82HZm8lUP0l4XYePQrNcUZapGLZgoqcI.jpg', 'Tipe Zaitun', '2500000000', 4, 120, 158, '2023-02-17 20:54:05', '2023-02-17 20:54:05'),
(22, 4, 'image_tipe/tCZIPsVgdUMgijzpSbXIIASPyIUQTJGau1gWOuig.jpg', 'Tipe Amoria', '4000000000', 3, 133, 135, '2023-02-17 21:31:54', '2023-02-17 21:31:54'),
(23, 4, 'image_tipe/1K3gY8Ed7kF8hMbxSKih84H6x4tch1RRj5wpJpPp.jpg', 'Tipe Friscana', '4200000000', 3, 165, 133, '2023-02-17 21:32:50', '2023-02-17 21:32:50'),
(24, 4, 'image_tipe/XTX2F1khM5CD3JVUetsHxdo5vhszpSNtlC6eyXdT.jpg', 'Tipe Grandia', '6000000000', 3, 199, 145, '2023-02-17 21:33:28', '2023-02-17 21:33:28'),
(25, 5, 'image_tipe/fHeANDiPYHfJkkxZi5iAtVBlwCPTV9bBx0kWB3SQ.jpg', 'Tipe Standard', '3400000000', 3, 78, 134, '2023-02-17 21:37:07', '2023-02-17 21:37:07'),
(26, 5, 'image_tipe/1wuQTfBknegwNcDIatIiHTxjcfjGfeL1cOGDvXTK.jpg', 'Tipe Hoek', '4400000000', 4, 117, 180, '2023-02-17 22:31:32', '2023-02-17 22:31:32'),
(27, 6, 'image_tipe/6IYBeQxKGpIZi8Q1ND3DpAKsQVpEv361wBqS7oEZ.jpg', 'Tipe Blessing House', '1200000000', 3, 66, 105, '2023-02-18 07:05:34', '2023-02-18 07:05:34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'alvika', 'alvika@gmail.com', NULL, '$2y$10$sUPAUy89oV6jf9QSvM98xO7mat/raGW027HDFQjZwM9X45IpGiZeG', NULL, '2023-02-16 02:48:27', '2023-02-16 02:48:27');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `gallery_propertis`
--
ALTER TABLE `gallery_propertis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `lokasis`
--
ALTER TABLE `lokasis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `propertis`
--
ALTER TABLE `propertis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tipe_propertis`
--
ALTER TABLE `tipe_propertis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tipe_units`
--
ALTER TABLE `tipe_units`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `gallery_propertis`
--
ALTER TABLE `gallery_propertis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `lokasis`
--
ALTER TABLE `lokasis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `propertis`
--
ALTER TABLE `propertis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tipe_propertis`
--
ALTER TABLE `tipe_propertis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tipe_units`
--
ALTER TABLE `tipe_units`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
