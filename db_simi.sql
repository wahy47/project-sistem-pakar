-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 24, 2023 at 11:29 AM
-- Server version: 10.5.17-MariaDB-cll-lve
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `devalfun_db_simi`
--

-- --------------------------------------------------------

--
-- Table structure for table `bobots`
--

CREATE TABLE `bobots` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `penyakit_id` bigint(20) UNSIGNED NOT NULL,
  `gejala_id` bigint(20) UNSIGNED NOT NULL,
  `bobot` double NOT NULL,
  `nilai` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gejalas`
--

CREATE TABLE `gejalas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gejala` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gejalas`
--

INSERT INTO `gejalas` (`id`, `gejala`) VALUES
(1, 'Terganggunya rutinitas normal'),
(2, 'Muncul dorongan untuk melakukan suatu kegiatan berulang-ulang'),
(3, 'Kekhawatiran dan bayangan-bayangan yang terus mengganggu meyebabkan kegelisahan'),
(4, 'Tidak sedang dibawah pengaruh obat-obatan'),
(7, 'Terus-menerus mengecek kunci pintu dan ragu pintu rumah ditinggalkan terbuka'),
(8, 'Terus-menerus mengecek tabung gas dan ragu telah mematikan kompor'),
(9, 'Memastikan segala benda dalam susunan yang simetris dan berjumlah ganjil atau genap'),
(10, 'Muncul dengan agresif yang mengerikan misalnya berteriak di tempat ibadah'),
(11, 'Memburuknya hubungan sosial'),
(12, 'Munculnya rasa cemas dan khawatir yang berlebihan tentang permasalahan sehari-hari'),
(13, 'Mudah tersinggung, gelisah, gugup dan tersudut'),
(14, 'Ragu-ragu, takut dan suslit mengambil suatu keputusan'),
(15, 'Sulit untuk berkonsentrasi'),
(16, 'Mengalami gangguan tidur (termasuk sulit tidur atau selalu ingin tidur)'),
(17, 'Sakit kepala, nyeri otot, kra perut dan berbagai rasa sakit yang tidak ada penyebabnya'),
(18, 'Mudah berkeringat, kepala terasa ringan dan susah bernafas dengan normal'),
(19, 'Sering kali merasa lelah dan mudah terkejut'),
(20, 'Mudah merasa marah dan kesal'),
(21, 'Menyadari bahwa kekhawatirannya yang dirasakan berlebihan'),
(22, 'Tidak bisa mengontrol rasa khawatir atau rasa cemas yang dirasakan.'),
(23, 'Tidak bisa bekerja atau beraktivitas seperti biasa'),
(24, 'Menutup diri menghindar dengan teman atau keluarga'),
(25, 'Sulit berinteraksi bahkan sangat rentan menghadapi masalah dengan orang sekitar'),
(26, 'Mengabaikan atau membenci kegiatan yang sebelumnya sangat disukai'),
(27, 'Merasa sedih, murung, suasana hati kosong, putus asa dan perasaan gelisah'),
(28, 'Mudah kehilangan energi dan tenaga, perasaan letih, lemah, lesu dan kelelahan'),
(29, 'Merasa bersalah, pesismis, dan tidak berguna'),
(30, 'Sering menangis tersedu-sedu'),
(31, 'Menstruasi tidak teratur'),
(33, 'Merasa kesal gampang emosi dan toleran terhadap orang lain'),
(34, 'Muncul pikiran-pikiran untuk menyakiti diri sendiri hingga bunuh diri');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_12_24_104054_create_gejalas_table', 1),
(6, '2022_12_25_035035_create_penyakits_table', 2),
(8, '2022_12_25_052647_create_bobots_table', 3),
(12, '2014_10_12_000000_create_users_table', 5),
(14, '2023_01_07_133300_create_tes_statuses_table', 7),
(15, '2023_01_01_071118_create_pasiens_table', 8),
(17, '2023_01_12_120720_create_penyakit_deskripsis_table', 9),
(18, '2023_01_07_121245_create_tes_stores_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `pasiens`
--

CREATE TABLE `pasiens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `penyakit_id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `penyakits`
--

CREATE TABLE `penyakits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `penyakit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `penyakits`
--

INSERT INTO `penyakits` (`id`, `penyakit`) VALUES
(18, 'Obsessive compulsive disorder'),
(19, 'Gangguan Kecemasan Umum'),
(20, 'Depresi');

-- --------------------------------------------------------

--
-- Table structure for table `penyakit_deskripsis`
--

CREATE TABLE `penyakit_deskripsis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `penyakit_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `penyebab` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pengobatan` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tes_statuses`
--

CREATE TABLE `tes_statuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tes_stores`
--

CREATE TABLE `tes_stores` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `gejala_id` bigint(20) UNSIGNED NOT NULL,
  `penyakit_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nope` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `usia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usia_pernikahan` int(225) DEFAULT NULL,
  `jenis_kelamin` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unhash` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `nope`, `email`, `usia`, `usia_pernikahan`, `jenis_kelamin`, `alamat`, `password`, `unhash`, `role`) VALUES
(1, 'admin', 'admin', NULL, '-', NULL, NULL, '-', '$2y$10$FU39t5LhT70HHY9LsxsKH.IKpBa00vG0WiQRbQM1W9vvzZjjwbjzK', NULL, 'admin'),
(27, 'expert satu', '-', 'expert@gmail.com', '2', 1, '-', 'asdasd', '$2y$10$h.3Pyv24lNPw6DKd56okfObqgv6//U0XAfCq1Zcsb1u1sb5X58rFO', 'qweasdzxc', 'expert'),
(28, 'rental kucing', '082123123123', '-', '26', NULL, 'Perempuan', 'jalan sana', '$2y$10$BFzICPh7VrmrGBHhYnKRC.GuEXP1fWdChkWnnaPHNrUIlng2LfH6i', 'qweasdzxc', 'pasien'),
(29, 'saya', '08123456789', '-', '21', NULL, 'Perempuan', 'rumah', '$2y$10$TWU13L24dOBJ.iWThXXE5erIUBca/ht4lxqmiI/oyfVhorc5anFi.', 'satu1234', 'pasien'),
(32, 'expert satu', '', 'expert1@gmail.com', '1', 1, '-', 'jalan sana', '$2y$10$WaQLMH/CUIgiYMZRta8T8.kfhhhSfCPv3kC2xlnPeBGGBh68E6wnK', 'qweasdzxc', 'expert');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bobots`
--
ALTER TABLE `bobots`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gejalas`
--
ALTER TABLE `gejalas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pasiens`
--
ALTER TABLE `pasiens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penyakits`
--
ALTER TABLE `penyakits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penyakit_deskripsis`
--
ALTER TABLE `penyakit_deskripsis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tes_statuses`
--
ALTER TABLE `tes_statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tes_stores`
--
ALTER TABLE `tes_stores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bobots`
--
ALTER TABLE `bobots`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `gejalas`
--
ALTER TABLE `gejalas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `pasiens`
--
ALTER TABLE `pasiens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `penyakits`
--
ALTER TABLE `penyakits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `penyakit_deskripsis`
--
ALTER TABLE `penyakit_deskripsis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tes_statuses`
--
ALTER TABLE `tes_statuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tes_stores`
--
ALTER TABLE `tes_stores`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=261;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
