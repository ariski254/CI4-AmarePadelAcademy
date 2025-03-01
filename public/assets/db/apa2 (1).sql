-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Mar 2025 pada 02.05
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apa2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `about_us`
--

CREATE TABLE `about_us` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `about_us`
--

INSERT INTO `about_us` (`id`, `title`, `subtitle`, `description`, `image`) VALUES
(1, 'qqqqqq', 'Kami Membantu Anda Sukses', 'Kami adalah perusahaan yang berdedikasi dalam memberikan layanan terbaik kepada pelanggan. Dengan tim profesional dan berpengalaman, kami berusaha untuk memberikan solusi terbaik dalam bidang kami.', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `coaches`
--

CREATE TABLE `coaches` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `role` varchar(100) NOT NULL,
  `position` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `coaches`
--

INSERT INTO `coaches` (`id`, `name`, `role`, `position`, `image`, `twitter`, `facebook`, `instagram`, `created_at`, `updated_at`) VALUES
(6, 'aaaaaaaa', 'fsgfsfg', 'svsvsb', '1739868802_f015387358dd25ccabf5.jpg', 'sdfsdfs', 'sddsfsdfs', 'sfsfgs', '2025-02-18 01:53:22', '2025-02-25 20:55:56'),
(7, 'ascsadfse', 'sdvsdvfsd', 'asafva', '1740539143_4f97432eb2c12494b5bb.jpg', 'asfaef', 'aefaef', 'asfeaf', '2025-02-25 20:05:43', '2025-02-25 20:05:43');

-- --------------------------------------------------------

--
-- Struktur dari tabel `contact_details`
--

CREATE TABLE `contact_details` (
  `id` int(11) NOT NULL,
  `contact_description` text NOT NULL,
  `contact_address` varchar(255) NOT NULL,
  `contact_phone` varchar(255) NOT NULL,
  `contact_email` varchar(255) NOT NULL,
  `contact_map_url` text NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `contact_details`
--

INSERT INTO `contact_details` (`id`, `contact_description`, `contact_address`, `contact_phone`, `contact_email`, `contact_map_url`, `updated_at`) VALUES
(1, 'aaaaaaaaaa', 'Jl. Jenderal Sudirman No. 45, Jakarta, Indonesia', '+62 812-3456-7890', 'Test@example.com', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31681.936727972407!2d110.39627679214618!3d-6.980734503273582!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708b518752211d%3A0xd12561b2b560dd0b!2sKec.%20Semarang%20Tengah%2C%20Kota%20Semarang%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1739954133168!5m2!1sid!2sid', '2025-02-26 03:57:47');

-- --------------------------------------------------------

--
-- Struktur dari tabel `footer`
--

CREATE TABLE `footer` (
  `id` int(11) NOT NULL,
  `logo_path` varchar(255) NOT NULL,
  `facebook_link` varchar(255) DEFAULT NULL,
  `twitter_link` varchar(255) DEFAULT NULL,
  `youtube_link` varchar(255) DEFAULT NULL,
  `instagram_link` varchar(255) DEFAULT NULL,
  `linkedin_link` varchar(255) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `footer`
--

INSERT INTO `footer` (`id`, `logo_path`, `facebook_link`, `twitter_link`, `youtube_link`, `instagram_link`, `linkedin_link`, `updated_at`) VALUES
(1, 'assets/imgs/1740632446_3845a9fa01be9bad4cef.jpg', 'aaaaaaaaa', 'https://twitter.com/example', 'https://www.youtube.com/example', 'https://www.instagram.com/example', 'https://www.linkedin.com/company/example', '2025-02-26 22:00:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `goals`
--

CREATE TABLE `goals` (
  `id` int(11) NOT NULL,
  `vision` text NOT NULL,
  `mission` text NOT NULL,
  `key_success_factor` text NOT NULL,
  `services` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `goals`
--

INSERT INTO `goals` (`id`, `vision`, `mission`, `key_success_factor`, `services`) VALUES
(1, 'qqqqq', 'qqqqqq', 'aknzdkcnl', 'ariel');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hero`
--

CREATE TABLE `hero` (
  `id` int(11) NOT NULL,
  `welcome_text` varchar(255) NOT NULL,
  `main_title` varchar(255) NOT NULL,
  `sub_title` varchar(255) NOT NULL,
  `video_file` varchar(255) DEFAULT NULL,
  `poster_image` varchar(255) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `hero`
--

INSERT INTO `hero` (`id`, `welcome_text`, `main_title`, `sub_title`, `video_file`, `poster_image`, `updated_at`) VALUES
(1, 'qqqqqqqq', 'AMARE PADEL ACADEMY', 'member of AMARE SPORT GROUP', NULL, NULL, '2025-02-25 20:04:19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `materials`
--

CREATE TABLE `materials` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `materials`
--

INSERT INTO `materials` (`id`, `name`, `image_path`, `created_at`, `updated_at`) VALUES
(1, 'aaaaaa', 'uploads/materials/1740539097_f5c29798ae7ab205ddd7.png', '2025-02-17 20:17:32', '2025-02-25 21:33:42'),
(2, 'Agility', 'uploads/materials/1739848867_dff1425bce73d7352f7f.png', '2025-02-17 20:21:07', '2025-02-17 20:21:07'),
(4, 'xxxxxx', 'uploads/materials/1740543167_b8645996506d4340f6f0.png', '2025-02-17 20:23:13', '2025-02-25 21:28:48');

-- --------------------------------------------------------

--
-- Struktur dari tabel `padel_certifications`
--

CREATE TABLE `padel_certifications` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `padel_certifications`
--

INSERT INTO `padel_certifications` (`id`, `title`, `description`, `updated_at`) VALUES
(1, 'qqqqqq', 'Sertifikasi untuk pelatih pemula yang mencakup dasar-dasar permainan padel, teknik dasar, dan aturan pertandingan.', '2025-02-25 20:05:06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `portfolio`
--

INSERT INTO `portfolio` (`id`, `image`, `title`, `description`, `created_at`, `updated_at`) VALUES
(3, '1740538998_ca4f35d8aa518bbf603d.png', 'ssssss', 'aaaaa', '2025-02-18 00:11:44', '2025-02-25 21:33:54'),
(4, '1740538984_767323e932f6d161a2f5.png', 'aaaaa', 'qqqqq', '2025-02-18 00:11:50', '2025-02-25 20:03:04'),
(5, '1739862717_29e01e73fc83b5362b39.jpg', 'rsgsrg', 'rgsgsg', '2025-02-18 00:11:57', '2025-02-18 00:11:57'),
(6, '1739863013_14e55b9d7224fbba774d.jpg', 'dssdf', 'sdfsdf', '2025-02-18 00:16:53', '2025-02-18 00:16:53'),
(7, '1740466332_dd97bdab8c26a11d9254.jpg', 'wheofhoiweiofh', 'wefhwefhweof', '2025-02-24 23:52:12', '2025-02-24 23:52:12'),
(9, '1740538165_677a6c911dfb18aa360a.jpg', ' vfs f', 'sdsdfg', '2025-02-25 19:49:25', '2025-02-25 19:49:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `programs`
--

CREATE TABLE `programs` (
  `id` int(11) NOT NULL,
  `program_type` enum('Kids','Adult','Competition') NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `programs`
--

INSERT INTO `programs` (`id`, `program_type`, `title`, `description`, `image`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Kids', 'Kids Padel Program', 'Program khusus anak-anak untuk belajar dasar-dasar padel.', 'kids_padel.jpg', 'Program ini bertujuan untuk mengajarkan dasar-dasar olahraga padel kepada anak-anak dengan metode yang menyenangkan.', '2025-02-27 08:04:20', '2025-02-27 08:04:20'),
(2, 'Adult', 'Adult Padel Program', 'Program dewasa dari pemula hingga tingkat lanjut.', 'adult_padel.jpg', 'Kami menawarkan kelas dari tingkat pemula hingga tingkat lanjut untuk membantu peserta meningkatkan keterampilan padel mereka.', '2025-02-27 08:04:20', '2025-02-27 08:04:20'),
(3, 'Competition', 'Competition Training Program', 'Latihan kompetitif bagi pemain tingkat lanjut.', 'competition_padel.jpg', 'Program ini dirancang untuk pemain yang ingin meningkatkan kemampuan teknis dan strategi mereka dalam pertandingan padel.', '2025-02-27 08:04:20', '2025-02-27 08:04:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `program_items`
--

CREATE TABLE `program_items` (
  `id` int(11) NOT NULL,
  `program_id` int(11) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `program_items`
--

INSERT INTO `program_items` (`id`, `program_id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 'Mini-Padel (4-6 years)', 'Anak-anak belajar padel dengan permainan yang menyenangkan menggunakan bola lunak dan raket mini.', '2025-02-27 08:04:31', '2025-02-27 08:04:31'),
(2, 1, 'Kids Padel (7-10 years)', 'Fokus pada keterampilan teknis dengan pendekatan yang menyenangkan dan penuh motivasi.', '2025-02-27 08:04:31', '2025-02-27 08:04:31'),
(3, 1, 'Kids Padel (11-14 years)', 'Menyempurnakan teknik dan menerapkan strategi dasar dalam pertandingan nyata.', '2025-02-27 08:04:31', '2025-02-27 08:04:31'),
(4, 2, 'Beginners', 'Ideal untuk pemula. Fokus pada dasar-dasar memegang raket dan teknik dasar.', '2025-02-27 08:04:31', '2025-02-27 08:04:31'),
(5, 2, 'Bronze', 'Mengembangkan teknik dasar dan mengenalkan permainan taktis.', '2025-02-27 08:04:31', '2025-02-27 08:04:31'),
(6, 2, 'Silver', 'Meningkatkan keterampilan dengan teknik dan strategi lanjutan.', '2025-02-27 08:04:31', '2025-02-27 08:04:31'),
(7, 3, 'Physical Preparation', 'Latihan fisik 3 hingga 5 kali seminggu tergantung usia.', '2025-02-27 08:04:31', '2025-02-27 08:04:31'),
(8, 3, 'Match Analysis', 'Menganalisis pertandingan untuk meningkatkan pemahaman taktis.', '2025-02-27 08:04:31', '2025-02-27 08:04:31'),
(9, 3, 'Nutrition', 'Pola makan khusus untuk mendukung kinerja atlet mulai dari usia 4 tahun.', '2025-02-27 08:04:31', '2025-02-27 08:04:31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sponsors`
--

CREATE TABLE `sponsors` (
  `id` int(11) NOT NULL,
  `logo_name` varchar(255) NOT NULL,
  `logo_path` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `sponsors`
--

INSERT INTO `sponsors` (`id`, `logo_name`, `logo_path`, `created_at`, `updated_at`) VALUES
(2, 'a', 'assets/logos/barstool-store.png', '2025-02-19 20:07:58', '2025-02-19 20:07:58'),
(3, 'q', 'assets/logos/budweiser.png', '2025-02-19 20:08:07', '2025-02-19 20:08:07'),
(4, 'w', 'assets/logos/buzzfeed.png', '2025-02-19 20:08:17', '2025-02-19 20:08:17'),
(5, 'r', 'assets/logos/forbes.png', '2025-02-19 20:08:26', '2025-02-19 20:08:26'),
(6, 't', 'assets/logos/macys.png', '2025-02-19 20:08:37', '2025-02-19 20:08:37'),
(7, 'y', 'assets/logos/menshealth.png', '2025-02-19 20:08:44', '2025-02-19 20:08:44'),
(10, 'eeeeee', 'assets/logos/elastis.png', '2025-02-25 21:23:14', '2025-02-25 21:24:20');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `coaches`
--
ALTER TABLE `coaches`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `contact_details`
--
ALTER TABLE `contact_details`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `goals`
--
ALTER TABLE `goals`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `hero`
--
ALTER TABLE `hero`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `materials`
--
ALTER TABLE `materials`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `padel_certifications`
--
ALTER TABLE `padel_certifications`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `programs`
--
ALTER TABLE `programs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `program_items`
--
ALTER TABLE `program_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `program_id` (`program_id`);

--
-- Indeks untuk tabel `sponsors`
--
ALTER TABLE `sponsors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `coaches`
--
ALTER TABLE `coaches`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `contact_details`
--
ALTER TABLE `contact_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `footer`
--
ALTER TABLE `footer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `goals`
--
ALTER TABLE `goals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `hero`
--
ALTER TABLE `hero`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `materials`
--
ALTER TABLE `materials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `padel_certifications`
--
ALTER TABLE `padel_certifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `programs`
--
ALTER TABLE `programs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `program_items`
--
ALTER TABLE `program_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `sponsors`
--
ALTER TABLE `sponsors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `program_items`
--
ALTER TABLE `program_items`
  ADD CONSTRAINT `program_items_ibfk_1` FOREIGN KEY (`program_id`) REFERENCES `programs` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
