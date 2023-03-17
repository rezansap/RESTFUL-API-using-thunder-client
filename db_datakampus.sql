-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 16 Mar 2023 pada 10.04
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
-- Database: `db_datakampus`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `Pendidikan_Kebudayaan_Riset_dan_Teknologi_Menurut_Provinsi_2022`
--

CREATE TABLE `Pendidikan_Kebudayaan_Riset_dan_Teknologi_Menurut_Provinsi_2022` (
  `id` int(11) NOT NULL,
  `Provinsi` varchar(25) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `Jumlah_Perguruan_Tinggi_di_Bawah_KemristekDikti_Negeri` int(11) DEFAULT NULL,
  `Jumlah_Perguruan_Tinggi_di_Bawah_KemristekDikti_Swasta` int(11) DEFAULT NULL,
  `Perguruan_Tinggi_di_Bawah_KemristekDikti_Negeri_dan_Swasta` int(11) DEFAULT NULL,
  `Jumlah_Mahasiswa_di_Bawah_KemristekDikti_Negeri` int(11) DEFAULT NULL,
  `Jumlah_Mahasiswa_di_Bawah_KemristekDikti_Swasta` int(11) DEFAULT NULL,
  `Jumlah_Mahasiswa_di_Bawah_KemristekDikti_Negeri_dan_Swasta` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `Pendidikan_Kebudayaan_Riset_dan_Teknologi_Menurut_Provinsi_2022`
--

INSERT INTO `Pendidikan_Kebudayaan_Riset_dan_Teknologi_Menurut_Provinsi_2022` (`id`, `Provinsi`, `Jumlah_Perguruan_Tinggi_di_Bawah_KemristekDikti_Negeri`, `Jumlah_Perguruan_Tinggi_di_Bawah_KemristekDikti_Swasta`, `Perguruan_Tinggi_di_Bawah_KemristekDikti_Negeri_dan_Swasta`, `Jumlah_Mahasiswa_di_Bawah_KemristekDikti_Negeri`, `Jumlah_Mahasiswa_di_Bawah_KemristekDikti_Swasta`, `Jumlah_Mahasiswa_di_Bawah_KemristekDikti_Negeri_dan_Swasta`) VALUES
(1, 'Banten', 2, 111, 113, 1154332, 228657, 1382989),
(2, 'Jawa Timur', 17, 324, 341, 335841, 553920, 889761),
(3, 'Jawa Barat', 12, 376, 388, 196690, 663307, 859997),
(4, 'DKI Jakarta', 4, 272, 276, 104251, 597115, 701366),
(5, 'Jawa Tengah', 9, 241, 250, 200264, 424727, 624991),
(6, 'DI Yogyakarta', 5, 104, 109, 122564, 279299, 401863),
(7, 'Sumatera Utara', 3, 211, 214, 83159, 299299, 382458),
(8, 'Sulawesi Selatan', 5, 187, 192, 98490, 241683, 340173),
(9, 'Sumatera Barat', 5, 87, 92, 90135, 92304, 182439),
(10, 'Bali', 4, 56, 60, 58588, 89156, 147744),
(11, 'Aceh', 7, 89, 96, 81214, 63902, 145116),
(12, 'Riau', 2, 81, 83, 38618, 104411, 143029),
(13, 'Sumatera Selatan', 2, 99, 101, 48606, 92127, 140733),
(14, 'Nusa Tenggara Timur', 4, 61, 65, 54192, 72293, 126485),
(15, 'Lampung', 3, 71, 74, 53002, 71375, 124377),
(16, 'Papua', 3, 53, 56, 76568, 44867, 121435),
(17, 'Nusa Tenggara Barat', 1, 54, 55, 36895, 75917, 112812),
(18, 'Sulawesi Tenggara', 2, 51, 53, 65283, 43520, 108803),
(19, 'Sulawesi Utara', 4, 47, 51, 68158, 36970, 105128),
(20, 'Kalimantan Timur', 5, 49, 54, 44714, 51377, 96091),
(21, 'Kalimantan Selatan', 3, 46, 49, 39759, 53641, 93400),
(22, 'Kalimantan Barat', 4, 46, 50, 50497, 40597, 91094),
(23, 'Sulawesi Tengah', 1, 36, 37, 48484, 42347, 90831),
(24, 'Jambi', 1, 40, 41, 36330, 34801, 71131),
(25, 'Maluku', 3, 30, 33, 39878, 26315, 66193),
(26, 'Gorontalo', 1, 11, 12, 28850, 21781, 50631),
(27, 'Bengkulu', 2, 15, 17, 25258, 23760, 49018),
(28, 'Kepulauan Riau', 2, 32, 34, 15850, 32657, 48507),
(29, 'Maluku Utara', 1, 18, 19, 18038, 22636, 40674),
(30, 'Papua Barat', 2, 20, 22, 12640, 27322, 39962),
(31, 'Kalimantan Tengah', 1, 23, 24, 21175, 16065, 37240),
(32, 'Sulawesi Barat', 1, 19, 20, 15109, 15545, 30654),
(33, 'Kepulauan Bangka Belitung', 2, 14, 16, 7136, 7266, 14402),
(34, 'Kalimantan Utara', 2, 8, 10, 9260, 4494, 13754);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `Pendidikan_Kebudayaan_Riset_dan_Teknologi_Menurut_Provinsi_2022`
--
ALTER TABLE `Pendidikan_Kebudayaan_Riset_dan_Teknologi_Menurut_Provinsi_2022`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
