-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Mar 2025 pada 07.44
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
(1, 'qqqqqq', 'Kami Membantu Anda Sukses', 'Kami adalah perusahaan yang berdedikasi dalam memberikan layanan terbaik kepada pelanggan. Dengan tim profesional dan berpengalaman, kami berusaha untuk memberikan solusi terbaik dalam bidang kami.', 'uploads/about_us/1741058976_b7024879250ea6b179bd.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(2, 'admin', '$2y$10$2RLpLhSfcZjcbB/j8YIHEervFrbFdmDwIHtXAAbZJKnEZbd9XjLMW'),
(3, 'admin1', '$2y$10$34V/2iEODY9i.JqFb7SVC.74Xu2vZ.LD0LylOFIh.lp5r59zvC4Ba');

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
(1, 'assets/imgs/1741059059_8e600ef21a4074b1a604.png', 'aaaaaaaaa', 'https://twitter.com/example', 'https://www.youtube.com/example', 'https://www.instagram.com/example', 'https://www.linkedin.com/company/example', '2025-03-03 20:30:59');

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
(1, 'qqqqqqqq', 'AMARE PADEL ACADEMY', 'member of AMARE SPORT GROUP', 'uploads/1741058953_17d14e0e8945ca98a049.mp4', NULL, '2025-03-03 20:29:13');

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
(1, 'pppppp', 'uploads/materials/1740539097_f5c29798ae7ab205ddd7.png', '2025-02-17 20:17:32', '2025-03-03 21:15:04'),
(2, 'Agility', 'uploads/materials/1739848867_dff1425bce73d7352f7f.png', '2025-02-17 20:21:07', '2025-02-17 20:21:07'),
(4, 'xxxxxx', 'uploads/materials/1740543167_b8645996506d4340f6f0.png', '2025-02-17 20:23:13', '2025-02-25 21:28:48'),
(5, 'agility', 'uploads/materials/1741061569_e91201efc285c97a64fe.png', '2025-03-03 21:12:49', '2025-03-03 21:12:49');

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
(1, 'ssssss', 'lorem ipsum test', '2025-03-03 21:18:47');

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
(7, '1740466332_dd97bdab8c26a11d9254.jpg', 'wheofhoiweiofh', 'wefhwefhweof', '2025-02-24 23:52:12', '2025-02-24 23:52:12'),
(9, '1740538165_677a6c911dfb18aa360a.jpg', ' vfs f', 'sdsdfg', '2025-02-25 19:49:25', '2025-02-25 19:49:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `programs`
--

CREATE TABLE `programs` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `icon` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `programs`
--

INSERT INTO `programs` (`id`, `title`, `description`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'Kids Programs', 'We offer three levels designed to foster a love of padel from an early age.', 'bi-person-lines-fill', '2025-03-04 03:21:56', '2025-03-04 03:21:56'),
(2, 'Adult Programs', 'Our four levels cater to both beginners and advanced players.', 'bi-person-circle', '2025-03-04 03:21:56', '2025-03-04 03:21:56'),
(3, 'Competition Programs', 'Tailored training that emphasizes technical, tactical, and physical development.', 'bi-trophy', '2025-03-04 03:21:56', '2025-03-04 03:21:56');

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
(7, 'y', 'assets/logos/menshealth.png', '2025-02-19 20:08:44', '2025-02-19 20:08:44');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
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
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
-- AUTO_INCREMENT untuk tabel `sponsors`
--
ALTER TABLE `sponsors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
