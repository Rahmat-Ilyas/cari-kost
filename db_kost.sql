-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Feb 2020 pada 13.20
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kost`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `admins`
--

INSERT INTO `admins` (`id`, `nama`, `email`, `username`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'admin@carikost.com', 'admin', '$2y$10$qvDdH4jmo6f4GlfV30BX6.Dr0KfbcH9qOi2i7LVlpGuFPcIpJPcSu', 'ML9sAHl06lUVvTG8NfKwf66nN7zCmHRI41NtA2wM8jdQMQG34EhpkoTjzH6r', '2020-02-23 16:43:22', '2020-02-23 16:43:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kosts`
--

CREATE TABLE `kosts` (
  `id` int(10) UNSIGNED NOT NULL,
  `owner_id` int(10) UNSIGNED NOT NULL,
  `nama_kost` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipe_kost` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jangkawaktu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_kost` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `luas_kamar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fasilitas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lokasi_kost` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `longitude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `latitude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deksripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'view',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kosts`
--

INSERT INTO `kosts` (`id`, `owner_id`, `nama_kost`, `tipe_kost`, `jangkawaktu`, `harga_kost`, `luas_kamar`, `fasilitas`, `lokasi_kost`, `longitude`, `latitude`, `deksripsi`, `foto_1`, `foto_2`, `foto_3`, `foto_4`, `status`, `created_at`, `updated_at`) VALUES
(2, 1, 'Pondok Al Munawarah', 'Kost Putri', 'per Bulan, per Tahun', '300000, 1500000', '12', 'Wi-Fi, 24 Jam, WC Dalam, Kasur, Kipas, Lemari', 'Jl. Sultan Alauddin, No. 20', '119.49938034606325', '-5.205343608638299', 'Baik dan aman digunakan', 'IMG-11022020-035800-1.png', 'IMG-11022020-035800-2.png', 'IMG-11022020-035800-3.png', 'IMG-11022020-035800-4.png', 'view', '2020-02-11 07:58:00', '2020-02-11 07:58:00'),
(3, 1, 'Config Kost', 'Kost Campuran', 'per Bulan', '500000', '16', '24 Jam,WC Dalam, Kasur, Kipas', 'Jl. Samata City', '119.49463497532082', '-5.202044849991952', 'kos bebas', 'IMG-13022020-015751-1.png', 'IMG-13022020-015751-2.png', 'IMG-13022020-015751-3.png', 'IMG-13022020-015751-4.png', 'view', '2020-02-13 05:57:51', '2020-02-13 05:57:51'),
(4, 1, 'Pondok Padaidi', 'Kost Putri', 'per Tahun', '1500000', '12', 'WC Dalam, Kasur, Lemari, Kompor', 'Samping Mokula Coffee', '119.49748348129464', '-5.201724310538232', 'Kost yang aman', 'IMG-16022020-083633-1.png', 'IMG-16022020-083633-2.png', 'IMG-16022020-083633-3.png', 'IMG-16022020-083633-4.png', 'view', '2020-02-16 00:36:33', '2020-02-20 19:50:25'),
(5, 2, 'Pondok 88', 'Kost Campuran', 'per Tahun', '1500000', '16', '24 Jam, WC Dalam, Kasur, Lemari, Dapur', 'Samping Royal Mart', '119.49654470813942', '-5.202139892138506', 'Aman, buka 24 jam dan beas bawa teman yang jelas bayar', 'IMG-21022020-062421-1.png', 'IMG-21022020-062421-2.png', 'IMG-21022020-062421-3.png', 'IMG-21022020-062421-4.png', 'view', '2020-02-20 22:24:21', '2020-02-20 22:47:06'),
(6, 2, 'Pondok Mutiara', 'Kost Putra', 'per Bulan, per Tahun', '300000, 2000000', '20', 'Wi-Fi, WC Dalam, Kasur, Kipas, Lemari, Dapur', 'Depan Kampus UIN', '119.49684511554909', '-5.202023480700121', 'Kost VIP', 'IMG-21022020-065102-1.png', 'IMG-21022020-065102-2.png', 'IMG-21022020-065102-3.png', 'IMG-21022020-065102-4.png', 'view', '2020-02-20 22:51:02', '2020-02-20 22:51:02'),
(7, 5, 'Kost Bacot', 'Kost Putra', 'per Bulan, per Tahun', '250000, 110000', '12', 'Wi-Fi, 24 Jam, Kipas, Dapur', 'Depan Pintu Keluar UIN', '119.49903379810524', '-5.202621820597232', 'Cock untuk peria lajang', 'IMG-21022020-070043-1.png', 'IMG-21022020-070043-2.png', 'IMG-21022020-070043-3.png', 'IMG-21022020-070043-4.png', 'view', '2020-02-20 23:00:43', '2020-02-21 01:26:01'),
(8, 5, 'Pondok Samata', 'Kost Campuran', 'per Tahun', '1000000', '20', 'Wi-Fi, 24 Jam, WC Dalam, Kasur, Kipas, Lemari', 'Jl. Lorong Satu', '119.50198377963825', '-5.203378272109498', 'Sembarang', 'IMG-21022020-070921-1.png', 'IMG-21022020-070921-2.png', 'IMG-21022020-070921-3.png', 'IMG-21022020-070921-4.png', 'delete', '2020-02-20 23:09:21', '2020-02-21 01:46:59'),
(9, 3, 'Pondok Malika', 'Kost Putri', 'per Minggu, per Bulan, per Tahun', '100000, 400000, 1600000', '16', '24 Jam, WC Dalam, Kasur, Dapur', 'Jl. Macanda (Dekat Warkop Malgo)', '119.49202268787293', '-5.203003798580831', 'Rawan begal', 'IMG-21022020-095935-1.png', 'IMG-21022020-095935-2.png', 'IMG-21022020-095935-3.png', 'IMG-21022020-095935-4.png', 'view', '2020-02-21 01:59:35', '2020-02-21 01:59:35'),
(10, 1, 'Pondok Nuryah', 'Kost Putri', 'per Tahun', '5000000', '12', 'WC Dalam, Kasur', 'Jl. Bukit Samata', '119.49468861950112', '-5.201681571932063', 'Baik dan aman', 'IMG-23022020-090307-1.png', 'IMG-23022020-090307-2.png', 'IMG-23022020-090307-3.png', 'IMG-23022020-090307-4.png', 'view', '2020-02-23 01:03:07', '2020-02-23 01:03:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(5, '2020_01_24_092141_create_owners_table', 2),
(6, '2020_02_07_103621_create_kosts_table', 3),
(7, '2020_02_23_163049_create_admins_table', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `owners`
--

CREATE TABLE `owners` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kt_telp_wa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kt_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kt_fb` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kt_ig` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `owners`
--

INSERT INTO `owners` (`id`, `nama`, `alamat`, `kt_telp_wa`, `kt_email`, `kt_fb`, `kt_ig`, `username`, `password`, `foto`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Rahmat Ilyas', 'Jl. Bonto Tangga, Kab Gowa', '087326534543', 'rahmat.ilyas142@gmail.com', '', '', 'admin', '$2y$10$qvDdH4jmo6f4GlfV30BX6.Dr0KfbcH9qOi2i7LVlpGuFPcIpJPcSu', 'user_picture_20022020081841.png', 'Gd4DnFFeLD45FG70s77XLSobIR6ZRwDycuTh9v6iWyo8PsL4LwJ2LxFFBLo0', '2020-02-07 10:33:55', '2020-02-23 01:03:10'),
(2, 'Muhammad Ilham', 'Patalassang', '085299868548', 'ilham.muhammad@gmsil.com', '', '', 'admin123', '$2y$10$qvDdH4jmo6f4GlfV30BX6.Dr0KfbcH9qOi2i7LVlpGuFPcIpJPcSu', 'user_picture_20022020081842.png', 'mVy0DAcyNpWBS46DqX23r9eUaJQS1yR2OwEyzzGMJ1sJ4smaPpCGWmlpxZB6', '2020-02-06 08:51:52', '2020-02-20 08:51:52'),
(3, 'Widyawati', 'Jl. Samata City', '085345213879', 'widya142@gmail.com', '', '', 'widy123', '$2y$10$MTUONdI0xlAA6HTmRb97re1jBL6OZoYnDnpaVBaWG8RJAt2.KgHuW', 'user_picture_20022020081844.png', 'dM238tWrpr34HT3YXwWgdQGzDK2dciCCGpOC4A1NFqnrbLyJoF7lGeIaeqn8', '2020-02-20 00:18:44', '2020-02-21 01:59:35'),
(5, 'Nisrawati', 'Jl. Samata City', '085242657206', 'chaiy123@gmail.com', '', '', 'cai123', '$2y$10$DIRQggBfyu7h81aPJ3QmOuHK5vZnhi7Lsj86cSPRG6VVosNLBEp8e', 'user_picture_20022020085031.png', 'kHOnZSfJffDCQwQ3doGBbp9BgDnihGVk6weMVvMuogwJt27qBFqrxMqKw6lv', '2020-02-20 00:50:32', '2020-02-20 23:09:21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indeks untuk tabel `kosts`
--
ALTER TABLE `kosts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kosts_owner_id_foreign` (`owner_id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `owners`
--
ALTER TABLE `owners`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `owners_kt_email_unique` (`kt_email`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
-- AUTO_INCREMENT untuk tabel `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `kosts`
--
ALTER TABLE `kosts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `owners`
--
ALTER TABLE `owners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `kosts`
--
ALTER TABLE `kosts`
  ADD CONSTRAINT `kosts_owner_id_foreign` FOREIGN KEY (`owner_id`) REFERENCES `owners` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
