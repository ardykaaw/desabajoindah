-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Jun 2024 pada 18.35
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `amUHO 2024`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `agama`
--

CREATE TABLE `agama` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `agama`
--

INSERT INTO `agama` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Islam', '2024-06-29 16:04:31', '2024-06-29 16:04:31'),
(2, 'Kristen', '2024-06-29 16:04:31', '2024-06-29 16:04:31'),
(3, 'Katholik', '2024-06-29 16:04:31', '2024-06-29 16:04:31'),
(4, 'Hindu', '2024-06-29 16:04:32', '2024-06-29 16:04:32'),
(5, 'Budha', '2024-06-29 16:04:32', '2024-06-29 16:04:32'),
(6, 'Khonghucu', '2024-06-29 16:04:32', '2024-06-29 16:04:32'),
(7, 'Lainnya', '2024-06-29 16:04:32', '2024-06-29 16:04:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggaran_realisasi`
--

CREATE TABLE `anggaran_realisasi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tahun` int(11) NOT NULL,
  `detail_jenis_anggaran_id` bigint(20) UNSIGNED NOT NULL,
  `keterangan_lainnya` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nilai_anggaran` bigint(20) NOT NULL,
  `nilai_realisasi` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `konten` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `dilihat` bigint(20) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `cetak_surat`
--

CREATE TABLE `cetak_surat` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `surat_id` bigint(20) UNSIGNED NOT NULL,
  `nomor` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `arsip` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `darah`
--

CREATE TABLE `darah` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `golongan` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `darah`
--

INSERT INTO `darah` (`id`, `golongan`, `created_at`, `updated_at`) VALUES
(1, 'A', '2024-06-29 16:04:32', '2024-06-29 16:04:32'),
(2, 'A+', '2024-06-29 16:04:33', '2024-06-29 16:04:33'),
(3, 'A-', '2024-06-29 16:04:33', '2024-06-29 16:04:33'),
(4, 'B', '2024-06-29 16:04:33', '2024-06-29 16:04:33'),
(5, 'B+', '2024-06-29 16:04:33', '2024-06-29 16:04:33'),
(6, 'B-', '2024-06-29 16:04:33', '2024-06-29 16:04:33'),
(7, 'O', '2024-06-29 16:04:33', '2024-06-29 16:04:33'),
(8, 'O+', '2024-06-29 16:04:33', '2024-06-29 16:04:33'),
(9, 'O-', '2024-06-29 16:04:34', '2024-06-29 16:04:34'),
(10, 'AB', '2024-06-29 16:04:34', '2024-06-29 16:04:34'),
(11, 'AB+', '2024-06-29 16:04:34', '2024-06-29 16:04:34'),
(12, 'AB-', '2024-06-29 16:04:34', '2024-06-29 16:04:34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `desa`
--

CREATE TABLE `desa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_desa` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_kecamatan` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_kabupaten` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_kepala_desa` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_kepala_desa` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `channel_id` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `desa`
--

INSERT INTO `desa` (`id`, `nama_desa`, `nama_kecamatan`, `nama_kabupaten`, `alamat`, `nama_kepala_desa`, `alamat_kepala_desa`, `logo`, `channel_id`, `created_at`, `updated_at`) VALUES
(1, 'Arjasa', 'Arjasa', 'Jember', 'Jl. Rengganis Nomor 01 Arjasa 68191', 'WASI\'A', 'Dusun Gumitir Desa Arjasa  Kecamatan  Arjasa Kabupaten Jember', 'logo.png', NULL, '2024-06-29 16:04:31', '2024-06-29 16:04:31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_cetak`
--

CREATE TABLE `detail_cetak` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cetak_surat_id` bigint(20) UNSIGNED NOT NULL,
  `isian` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_dusun`
--

CREATE TABLE `detail_dusun` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dusun_id` bigint(20) UNSIGNED NOT NULL,
  `rw` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rt` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_jenis_anggaran`
--

CREATE TABLE `detail_jenis_anggaran` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jenis_anggaran_id` bigint(20) UNSIGNED NOT NULL,
  `kelompok_jenis_anggaran_id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `detail_jenis_anggaran`
--

INSERT INTO `detail_jenis_anggaran` (`id`, `jenis_anggaran_id`, `kelompok_jenis_anggaran_id`, `nama`, `created_at`, `updated_at`) VALUES
(411, 4, 41, 'Hasil Usaha Desa', '2024-06-29 16:04:53', '2024-06-29 16:04:53'),
(412, 4, 41, 'Hasil Aset Desa', '2024-06-29 16:04:53', '2024-06-29 16:04:53'),
(413, 4, 41, 'Swadaya, Partisipasi dan Gotong Royong', '2024-06-29 16:04:54', '2024-06-29 16:04:54'),
(414, 4, 41, 'Lain-Lain Pendapatan Asli Desa', '2024-06-29 16:04:54', '2024-06-29 16:04:54'),
(421, 4, 42, 'Dana Desa', '2024-06-29 16:04:54', '2024-06-29 16:04:54'),
(422, 4, 42, 'Bagi Hasil Pajak dan Retribusi', '2024-06-29 16:04:54', '2024-06-29 16:04:54'),
(423, 4, 42, 'Alokasi Dana Desa', '2024-06-29 16:04:54', '2024-06-29 16:04:54'),
(424, 4, 42, 'Bantuan Keuangan Provinsi', '2024-06-29 16:04:54', '2024-06-29 16:04:54'),
(425, 4, 42, 'Bantuan Keuangan Kabupaten/Kota', '2024-06-29 16:04:54', '2024-06-29 16:04:54'),
(431, 4, 43, 'Penerimaan dari Hasil Kerjasama Antar Desa', '2024-06-29 16:04:54', '2024-06-29 16:04:54'),
(432, 4, 43, 'Penerimaan dari Hasil Kerjasama dengan Pihak Ketiga', '2024-06-29 16:04:54', '2024-06-29 16:04:54'),
(433, 4, 43, 'Penerimaan Bantuan dari Perusahaan yang Berlokasi di Desa', '2024-06-29 16:04:54', '2024-06-29 16:04:54'),
(434, 4, 43, 'Hibah dan Sumbangan dari Pihak Ketiga', '2024-06-29 16:04:55', '2024-06-29 16:04:55'),
(435, 4, 43, 'Koreksi Kesalahan Belanja Tahun-tahun Sebelumnya', '2024-06-29 16:04:55', '2024-06-29 16:04:55'),
(436, 4, 43, 'Bunga Bank', '2024-06-29 16:04:55', '2024-06-29 16:04:55'),
(439, 4, 43, 'Lain-lain Pendapatan Desa Yang Sah', '2024-06-29 16:04:55', '2024-06-29 16:04:55'),
(511, 5, 51, NULL, '2024-06-29 16:04:55', '2024-06-29 16:04:55'),
(521, 5, 52, NULL, '2024-06-29 16:04:55', '2024-06-29 16:04:55'),
(531, 5, 53, NULL, '2024-06-29 16:04:55', '2024-06-29 16:04:55'),
(541, 5, 54, NULL, '2024-06-29 16:04:55', '2024-06-29 16:04:55'),
(551, 5, 55, NULL, '2024-06-29 16:04:55', '2024-06-29 16:04:55'),
(611, 6, 61, 'SILPA Tahun Sebelumnya', '2024-06-29 16:04:55', '2024-06-29 16:04:55'),
(612, 6, 61, 'Pencairan Dana Cadangan', '2024-06-29 16:04:56', '2024-06-29 16:04:56'),
(613, 6, 61, 'Hasil Penjualan Kekayaan Desa Yang Dipisahkan', '2024-06-29 16:04:56', '2024-06-29 16:04:56'),
(619, 6, 61, 'Penerimaan Pembiayaan Lainnya', '2024-06-29 16:04:56', '2024-06-29 16:04:56'),
(621, 6, 62, 'Pembentukan Dana Cadangan', '2024-06-29 16:04:56', '2024-06-29 16:04:56'),
(622, 6, 62, 'Penyertaan Modal Desa', '2024-06-29 16:04:56', '2024-06-29 16:04:56'),
(629, 6, 62, 'Pengeluaran Pembiayaan Lainnya', '2024-06-29 16:04:56', '2024-06-29 16:04:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dusun`
--

CREATE TABLE `dusun` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gallery` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `caption` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slider` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `isi_surat`
--

CREATE TABLE `isi_surat` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `surat_id` bigint(20) UNSIGNED NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_isi` tinyint(4) NOT NULL,
  `tampilkan` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_anggaran`
--

CREATE TABLE `jenis_anggaran` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jenis_anggaran`
--

INSERT INTO `jenis_anggaran` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(4, 'PENDAPATAN', '2024-06-29 16:04:51', '2024-06-29 16:04:51'),
(5, 'BELANJA', '2024-06-29 16:04:51', '2024-06-29 16:04:51'),
(6, 'PEMBIAYAAN', '2024-06-29 16:04:52', '2024-06-29 16:04:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelompok_jenis_anggaran`
--

CREATE TABLE `kelompok_jenis_anggaran` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kelompok_jenis_anggaran`
--

INSERT INTO `kelompok_jenis_anggaran` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(41, 'Pendapatan Asli Desa', '2024-06-29 16:04:52', '2024-06-29 16:04:52'),
(42, 'Pendapatan transfer', '2024-06-29 16:04:52', '2024-06-29 16:04:52'),
(43, 'Pendapatan Lain-lain', '2024-06-29 16:04:52', '2024-06-29 16:04:52'),
(51, 'BIDANG PENYELENGGARAN PEMERINTAHAN DESA', '2024-06-29 16:04:52', '2024-06-29 16:04:52'),
(52, 'BIDANG PELAKSANAAN PEMBANGUNAN DESA', '2024-06-29 16:04:52', '2024-06-29 16:04:52'),
(53, 'BIDANG PEMBINAAN KEMASYARAKATAN', '2024-06-29 16:04:53', '2024-06-29 16:04:53'),
(54, 'BIDANG PEMBERDAYAAN MASYARAKAT', '2024-06-29 16:04:53', '2024-06-29 16:04:53'),
(55, 'BIDANG PENANGGULANGAN BENCANA, DARURAT DAN MENDESAK DESA', '2024-06-29 16:04:53', '2024-06-29 16:04:53'),
(61, 'Penerimaan Biaya', '2024-06-29 16:04:53', '2024-06-29 16:04:53'),
(62, 'Pengeluaran Biaya', '2024-06-29 16:04:53', '2024-06-29 16:04:53');

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
(2, '2020_07_04_014808_create_surat_table', 1),
(3, '2020_07_04_015036_create_isi_surat_table', 1),
(4, '2020_07_04_084248_create_galleries_table', 1),
(5, '2020_07_08_170039_create_desa_table', 1),
(6, '2020_07_27_191902_create_sejarah_table', 1),
(7, '2020_07_30_140019_add_slider_to_galleries_table', 1),
(8, '2020_07_31_052632_add_channel_id_to_desa_table', 1),
(9, '2020_07_31_071706_create_videos_table', 1),
(10, '2020_08_03_125251_create_cetak_surat_table', 1),
(11, '2020_08_03_125449_create_detail_cetak_table', 1),
(12, '2020_08_07_064958_create_berita_table', 1),
(13, '2020_08_08_115504_add_nomor_to_cetak_surat_table', 1),
(14, '2020_09_23_141157_edit_table_isi_surat', 1),
(15, '2020_09_25_091559_create_status_hubungan_dalam_keluarga_table', 1),
(16, '2020_09_25_092606_create_status_perkawinan_table', 1),
(17, '2020_09_25_093740_create_darah_table', 1),
(18, '2020_09_25_095035_create_agama_table', 1),
(19, '2020_09_25_095908_create_pekerjaan_table', 1),
(20, '2020_09_25_100158_create_pendidikan_table', 1),
(21, '2020_09_25_100710_create_dusun_table', 1),
(22, '2020_09_25_102449_create_detail_dusun_table', 1),
(23, '2020_09_25_103214_create_penduduk_table', 1),
(24, '2020_09_29_182914_edit_penduduk_table', 1),
(25, '2020_10_05_192930_edit_surat_table', 1),
(26, '2020_10_05_205436_drop_column_api_key', 1),
(27, '2020_10_06_141802_create_jenis_anggaran_table', 1),
(28, '2020_10_06_152043_create_kelompok_jenis_anggaran_table', 1),
(29, '2020_10_06_155051_create_detail_jenis_anggaran_table', 1),
(30, '2020_10_06_161839_create_anggaran_realisasi_table', 1),
(31, '2020_10_13_130955_edit_sejarah_berita', 1),
(32, '2021_08_23_134224_add_arsip_cetak_surat', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pekerjaan`
--

CREATE TABLE `pekerjaan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pekerjaan`
--

INSERT INTO `pekerjaan` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'BELUM/TIDAK BEKERJA', '2024-06-29 16:04:35', '2024-06-29 16:04:35'),
(2, 'MENGURUS RUMAH TANGGA', '2024-06-29 16:04:35', '2024-06-29 16:04:35'),
(3, 'PELAJAR/MAHASISWA', '2024-06-29 16:04:35', '2024-06-29 16:04:35'),
(4, 'PENSIUNAN', '2024-06-29 16:04:35', '2024-06-29 16:04:35'),
(5, 'PEGAWAI NEGERI SIPIL (PNS)', '2024-06-29 16:04:35', '2024-06-29 16:04:35'),
(6, 'TENTARA NASIONAL INDONESIA (TNI)', '2024-06-29 16:04:35', '2024-06-29 16:04:35'),
(7, 'KEPOLISIAN RI (POLRI)', '2024-06-29 16:04:36', '2024-06-29 16:04:36'),
(8, 'PERDAGANGAN', '2024-06-29 16:04:36', '2024-06-29 16:04:36'),
(9, 'PETANI/PEKEBUN', '2024-06-29 16:04:36', '2024-06-29 16:04:36'),
(10, 'PETERNAK', '2024-06-29 16:04:36', '2024-06-29 16:04:36'),
(11, 'NELAYAN/PERIKANAN', '2024-06-29 16:04:36', '2024-06-29 16:04:36'),
(12, 'INDUSTRI', '2024-06-29 16:04:36', '2024-06-29 16:04:36'),
(13, 'KONSTRUKSI', '2024-06-29 16:04:36', '2024-06-29 16:04:36'),
(14, 'TRANSPORTASI', '2024-06-29 16:04:36', '2024-06-29 16:04:36'),
(15, 'KARYAWAN SWASTA', '2024-06-29 16:04:36', '2024-06-29 16:04:36'),
(16, 'KARYAWAN BUMN', '2024-06-29 16:04:37', '2024-06-29 16:04:37'),
(17, 'KARYAWAN BUMD', '2024-06-29 16:04:37', '2024-06-29 16:04:37'),
(18, 'KARYAWAN HONORER', '2024-06-29 16:04:37', '2024-06-29 16:04:37'),
(19, 'BURUH HARIAN LEPAS', '2024-06-29 16:04:37', '2024-06-29 16:04:37'),
(20, 'BURUH TANI/PERKEBUNAN', '2024-06-29 16:04:37', '2024-06-29 16:04:37'),
(21, 'BURUH NELAYAN/PERIKANAN', '2024-06-29 16:04:37', '2024-06-29 16:04:37'),
(22, 'BURUH PETERNAKAN', '2024-06-29 16:04:37', '2024-06-29 16:04:37'),
(23, 'PEMBANTU RUMAH TANGGA', '2024-06-29 16:04:37', '2024-06-29 16:04:37'),
(24, 'TUKANG CUKUR', '2024-06-29 16:04:38', '2024-06-29 16:04:38'),
(25, 'TUKANG LISTRIK', '2024-06-29 16:04:38', '2024-06-29 16:04:38'),
(26, 'TUKANG BATU', '2024-06-29 16:04:38', '2024-06-29 16:04:38'),
(27, 'TUKANG KAYU', '2024-06-29 16:04:38', '2024-06-29 16:04:38'),
(28, 'TUKANG SOL SEPATU', '2024-06-29 16:04:38', '2024-06-29 16:04:38'),
(29, 'TUKANG LAS/PANDAI BESI', '2024-06-29 16:04:39', '2024-06-29 16:04:39'),
(30, 'TUKANG JAHIT', '2024-06-29 16:04:39', '2024-06-29 16:04:39'),
(31, 'TUKANG GIGI', '2024-06-29 16:04:39', '2024-06-29 16:04:39'),
(32, 'PENATA RIAS', '2024-06-29 16:04:39', '2024-06-29 16:04:39'),
(33, 'PENATA BUSANA', '2024-06-29 16:04:39', '2024-06-29 16:04:39'),
(34, 'PENATA RAMBUT', '2024-06-29 16:04:39', '2024-06-29 16:04:39'),
(35, 'MEKANIK', '2024-06-29 16:04:40', '2024-06-29 16:04:40'),
(36, 'SENIMAN', '2024-06-29 16:04:40', '2024-06-29 16:04:40'),
(37, 'TABIB', '2024-06-29 16:04:40', '2024-06-29 16:04:40'),
(38, 'PARAJI', '2024-06-29 16:04:40', '2024-06-29 16:04:40'),
(39, 'PERANCANG BUSANA', '2024-06-29 16:04:40', '2024-06-29 16:04:40'),
(40, 'PENTERJEMAH', '2024-06-29 16:04:40', '2024-06-29 16:04:40'),
(41, 'IMAM MASJID', '2024-06-29 16:04:40', '2024-06-29 16:04:40'),
(42, 'PENDETA', '2024-06-29 16:04:40', '2024-06-29 16:04:40'),
(43, 'PASTOR', '2024-06-29 16:04:41', '2024-06-29 16:04:41'),
(44, 'WARTAWAN', '2024-06-29 16:04:41', '2024-06-29 16:04:41'),
(45, 'USTADZ/MUBALIGH', '2024-06-29 16:04:41', '2024-06-29 16:04:41'),
(46, 'JURU MASAK', '2024-06-29 16:04:41', '2024-06-29 16:04:41'),
(47, 'PROMOTOR ACARA', '2024-06-29 16:04:41', '2024-06-29 16:04:41'),
(48, 'ANGGOTA DPR-RI', '2024-06-29 16:04:41', '2024-06-29 16:04:41'),
(49, 'ANGGOTA DPD', '2024-06-29 16:04:41', '2024-06-29 16:04:41'),
(50, 'ANGGOTA KPK', '2024-06-29 16:04:42', '2024-06-29 16:04:42'),
(51, 'PRESIDEN', '2024-06-29 16:04:42', '2024-06-29 16:04:42'),
(52, 'WAKIL PRESIDEN', '2024-06-29 16:04:42', '2024-06-29 16:04:42'),
(53, 'ANGGOTA MAHKAMAH KONSTITUSI', '2024-06-29 16:04:42', '2024-06-29 16:04:42'),
(54, 'ANGGOTA KABINET KEMENTERIAN', '2024-06-29 16:04:42', '2024-06-29 16:04:42'),
(55, 'DUTA BESAR', '2024-06-29 16:04:42', '2024-06-29 16:04:42'),
(56, 'GUBERNUR', '2024-06-29 16:04:42', '2024-06-29 16:04:42'),
(57, 'WAKIL GUBERNUR', '2024-06-29 16:04:43', '2024-06-29 16:04:43'),
(58, 'BUPATI', '2024-06-29 16:04:43', '2024-06-29 16:04:43'),
(59, 'WAKIL BUPATI', '2024-06-29 16:04:43', '2024-06-29 16:04:43'),
(60, 'WALIKOTA', '2024-06-29 16:04:43', '2024-06-29 16:04:43'),
(61, 'WAKIL WALIKOTA', '2024-06-29 16:04:43', '2024-06-29 16:04:43'),
(62, 'ANGGOTA DPRD PROVINSI', '2024-06-29 16:04:43', '2024-06-29 16:04:43'),
(63, 'ANGGOTA DPRD KABUPATEN/KOTA', '2024-06-29 16:04:43', '2024-06-29 16:04:43'),
(64, 'DOSEN', '2024-06-29 16:04:44', '2024-06-29 16:04:44'),
(65, 'GURU', '2024-06-29 16:04:44', '2024-06-29 16:04:44'),
(66, 'PILOT', '2024-06-29 16:04:44', '2024-06-29 16:04:44'),
(67, 'PENGACARA', '2024-06-29 16:04:44', '2024-06-29 16:04:44'),
(68, 'NOTARIS', '2024-06-29 16:04:44', '2024-06-29 16:04:44'),
(69, 'ARSITEK', '2024-06-29 16:04:44', '2024-06-29 16:04:44'),
(70, 'AKUNTAN', '2024-06-29 16:04:45', '2024-06-29 16:04:45'),
(71, 'KONSULTAN', '2024-06-29 16:04:45', '2024-06-29 16:04:45'),
(72, 'DOKTER', '2024-06-29 16:04:45', '2024-06-29 16:04:45'),
(73, 'BIDAN', '2024-06-29 16:04:45', '2024-06-29 16:04:45'),
(74, 'PERAWAT', '2024-06-29 16:04:45', '2024-06-29 16:04:45'),
(75, 'APOTEKER', '2024-06-29 16:04:45', '2024-06-29 16:04:45'),
(76, 'PSIKIATER/PSIKOLOG', '2024-06-29 16:04:46', '2024-06-29 16:04:46'),
(77, 'PENYIAR TELEVISI', '2024-06-29 16:04:46', '2024-06-29 16:04:46'),
(78, 'PENYIAR RADIO', '2024-06-29 16:04:46', '2024-06-29 16:04:46'),
(79, 'PELAUT', '2024-06-29 16:04:46', '2024-06-29 16:04:46'),
(80, 'PENELITI', '2024-06-29 16:04:46', '2024-06-29 16:04:46'),
(81, 'SOPIR', '2024-06-29 16:04:46', '2024-06-29 16:04:46'),
(82, 'PIALANG', '2024-06-29 16:04:46', '2024-06-29 16:04:46'),
(83, 'PARANORMAL', '2024-06-29 16:04:47', '2024-06-29 16:04:47'),
(84, 'PEDAGANG', '2024-06-29 16:04:47', '2024-06-29 16:04:47'),
(85, 'PERANGKAT DESA', '2024-06-29 16:04:47', '2024-06-29 16:04:47'),
(86, 'KEPALA DESA', '2024-06-29 16:04:47', '2024-06-29 16:04:47'),
(87, 'BIARAWATI', '2024-06-29 16:04:47', '2024-06-29 16:04:47'),
(88, 'WIRASWASTA', '2024-06-29 16:04:47', '2024-06-29 16:04:47'),
(89, 'LAINNYA', '2024-06-29 16:04:47', '2024-06-29 16:04:47');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemerintahan_desa`
--

CREATE TABLE `pemerintahan_desa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `konten` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `dilihat` bigint(20) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendidikan`
--

CREATE TABLE `pendidikan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pendidikan`
--

INSERT INTO `pendidikan` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'TIDAK / BELUM SEKOLAH', '2024-06-29 16:04:47', '2024-06-29 16:04:47'),
(2, 'BELUM TAMAT SD/SEDERAJAT', '2024-06-29 16:04:48', '2024-06-29 16:04:48'),
(3, 'TAMAT SD / SEDERAJAT', '2024-06-29 16:04:48', '2024-06-29 16:04:48'),
(4, 'SLTP/SEDERAJAT', '2024-06-29 16:04:48', '2024-06-29 16:04:48'),
(5, 'SLTA / SEDERAJAT', '2024-06-29 16:04:48', '2024-06-29 16:04:48'),
(6, 'DIPLOMA I / II', '2024-06-29 16:04:48', '2024-06-29 16:04:48'),
(7, 'AKADEMI/ DIPLOMA III/S. MUDA', '2024-06-29 16:04:48', '2024-06-29 16:04:48'),
(8, 'DIPLOMA IV/ STRATA I', '2024-06-29 16:04:48', '2024-06-29 16:04:48'),
(9, 'STRATA II', '2024-06-29 16:04:48', '2024-06-29 16:04:48'),
(10, 'STRATA III', '2024-06-29 16:04:49', '2024-06-29 16:04:49');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penduduk`
--

CREATE TABLE `penduduk` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nik` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kk` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` tinyint(4) NOT NULL COMMENT '1: Laki-laki, 2: Perempuan',
  `tempat_lahir` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama_id` bigint(20) UNSIGNED NOT NULL,
  `pendidikan_id` bigint(20) UNSIGNED DEFAULT NULL,
  `pekerjaan_id` bigint(20) UNSIGNED DEFAULT NULL,
  `darah_id` bigint(20) UNSIGNED DEFAULT NULL,
  `status_perkawinan_id` bigint(20) UNSIGNED NOT NULL,
  `status_hubungan_dalam_keluarga_id` bigint(20) UNSIGNED NOT NULL,
  `kewarganegaraan` tinyint(4) NOT NULL,
  `nomor_paspor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nomor_kitas_atau_kitap` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nik_ayah` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nik_ibu` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_ayah` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_ibu` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detail_dusun_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `status_hubungan_dalam_keluarga`
--

CREATE TABLE `status_hubungan_dalam_keluarga` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `status_hubungan_dalam_keluarga`
--

INSERT INTO `status_hubungan_dalam_keluarga` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'KEPALA KELUARGA', '2024-06-29 16:04:49', '2024-06-29 16:04:49'),
(2, 'SUAMI', '2024-06-29 16:04:49', '2024-06-29 16:04:49'),
(3, 'ISTRI', '2024-06-29 16:04:49', '2024-06-29 16:04:49'),
(4, 'ANAK', '2024-06-29 16:04:49', '2024-06-29 16:04:49'),
(5, 'MENANTU', '2024-06-29 16:04:49', '2024-06-29 16:04:49'),
(6, 'CUCU', '2024-06-29 16:04:49', '2024-06-29 16:04:49'),
(7, 'ORANGTUA', '2024-06-29 16:04:49', '2024-06-29 16:04:49'),
(8, 'MERTUA', '2024-06-29 16:04:50', '2024-06-29 16:04:50'),
(9, 'FAMILI', '2024-06-29 16:04:50', '2024-06-29 16:04:50'),
(10, 'PEMBANTU', '2024-06-29 16:04:50', '2024-06-29 16:04:50'),
(11, 'LAINNYA', '2024-06-29 16:04:50', '2024-06-29 16:04:50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `status_perkawinan`
--

CREATE TABLE `status_perkawinan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `status_perkawinan`
--

INSERT INTO `status_perkawinan` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Belum Kawin', '2024-06-29 16:04:50', '2024-06-29 16:04:50'),
(2, 'Kawin', '2024-06-29 16:04:51', '2024-06-29 16:04:51'),
(3, 'Cerai Hidup', '2024-06-29 16:04:51', '2024-06-29 16:04:51'),
(4, 'Cerai Mati', '2024-06-29 16:04:51', '2024-06-29 16:04:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat`
--

CREATE TABLE `surat` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanda_tangan_bersangkutan` tinyint(1) NOT NULL DEFAULT 0,
  `perihal` tinyint(1) NOT NULL DEFAULT 0,
  `data_kades` tinyint(1) NOT NULL DEFAULT 0,
  `tampilkan` tinyint(1) NOT NULL DEFAULT 0,
  `persyaratan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_profil` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'noavatar.png',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '''user''',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `foto_profil`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@admin.com', 'public/foto_profil/GXrZQ6zLNlk3pPTQZVo9LhOUr3AQFNUevGe3IInE.png', '2024-06-29 16:04:31', '$2y$10$sXNXZXsMsuYmbHK4xJEDBuNL.WIB7G973R9epG6RDIims5eRT17gq', 'admin', NULL, '2024-06-29 16:04:31', '2024-06-29 16:31:58');

-- --------------------------------------------------------

--
-- Struktur dari tabel `videos`
--

CREATE TABLE `videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gambar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_id` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `caption` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `published_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `agama`
--
ALTER TABLE `agama`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `anggaran_realisasi`
--
ALTER TABLE `anggaran_realisasi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `anggaran_realisasi_detail_jenis_anggaran_id_foreign` (`detail_jenis_anggaran_id`);

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `cetak_surat`
--
ALTER TABLE `cetak_surat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cetak_surat_surat_id_foreign` (`surat_id`);

--
-- Indeks untuk tabel `darah`
--
ALTER TABLE `darah`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `desa`
--
ALTER TABLE `desa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `detail_cetak`
--
ALTER TABLE `detail_cetak`
  ADD PRIMARY KEY (`id`),
  ADD KEY `detail_cetak_cetak_surat_id_foreign` (`cetak_surat_id`);

--
-- Indeks untuk tabel `detail_dusun`
--
ALTER TABLE `detail_dusun`
  ADD PRIMARY KEY (`id`),
  ADD KEY `detail_dusun_dusun_id_foreign` (`dusun_id`);

--
-- Indeks untuk tabel `detail_jenis_anggaran`
--
ALTER TABLE `detail_jenis_anggaran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `detail_jenis_anggaran_jenis_anggaran_id_foreign` (`jenis_anggaran_id`),
  ADD KEY `detail_jenis_anggaran_kelompok_jenis_anggaran_id_foreign` (`kelompok_jenis_anggaran_id`);

--
-- Indeks untuk tabel `dusun`
--
ALTER TABLE `dusun`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `isi_surat`
--
ALTER TABLE `isi_surat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `isi_surat_surat_id_foreign` (`surat_id`);

--
-- Indeks untuk tabel `jenis_anggaran`
--
ALTER TABLE `jenis_anggaran`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `jenis_anggaran_nama_unique` (`nama`);

--
-- Indeks untuk tabel `kelompok_jenis_anggaran`
--
ALTER TABLE `kelompok_jenis_anggaran`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pekerjaan`
--
ALTER TABLE `pekerjaan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pemerintahan_desa`
--
ALTER TABLE `pemerintahan_desa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `penduduk_nik_unique` (`nik`),
  ADD KEY `penduduk_agama_id_foreign` (`agama_id`),
  ADD KEY `penduduk_pendidikan_id_foreign` (`pendidikan_id`),
  ADD KEY `penduduk_pekerjaan_id_foreign` (`pekerjaan_id`),
  ADD KEY `penduduk_darah_id_foreign` (`darah_id`),
  ADD KEY `penduduk_status_perkawinan_id_foreign` (`status_perkawinan_id`),
  ADD KEY `penduduk_status_hubungan_dalam_keluarga_id_foreign` (`status_hubungan_dalam_keluarga_id`),
  ADD KEY `penduduk_detail_dusun_id_foreign` (`detail_dusun_id`);

--
-- Indeks untuk tabel `status_hubungan_dalam_keluarga`
--
ALTER TABLE `status_hubungan_dalam_keluarga`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `status_perkawinan`
--
ALTER TABLE `status_perkawinan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `surat`
--
ALTER TABLE `surat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indeks untuk tabel `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `agama`
--
ALTER TABLE `agama`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `anggaran_realisasi`
--
ALTER TABLE `anggaran_realisasi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `cetak_surat`
--
ALTER TABLE `cetak_surat`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `darah`
--
ALTER TABLE `darah`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `desa`
--
ALTER TABLE `desa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `detail_cetak`
--
ALTER TABLE `detail_cetak`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `detail_dusun`
--
ALTER TABLE `detail_dusun`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `detail_jenis_anggaran`
--
ALTER TABLE `detail_jenis_anggaran`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=630;

--
-- AUTO_INCREMENT untuk tabel `dusun`
--
ALTER TABLE `dusun`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `isi_surat`
--
ALTER TABLE `isi_surat`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jenis_anggaran`
--
ALTER TABLE `jenis_anggaran`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `kelompok_jenis_anggaran`
--
ALTER TABLE `kelompok_jenis_anggaran`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT untuk tabel `pekerjaan`
--
ALTER TABLE `pekerjaan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT untuk tabel `pemerintahan_desa`
--
ALTER TABLE `pemerintahan_desa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pendidikan`
--
ALTER TABLE `pendidikan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `penduduk`
--
ALTER TABLE `penduduk`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `status_hubungan_dalam_keluarga`
--
ALTER TABLE `status_hubungan_dalam_keluarga`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `status_perkawinan`
--
ALTER TABLE `status_perkawinan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `surat`
--
ALTER TABLE `surat`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `anggaran_realisasi`
--
ALTER TABLE `anggaran_realisasi`
  ADD CONSTRAINT `anggaran_realisasi_detail_jenis_anggaran_id_foreign` FOREIGN KEY (`detail_jenis_anggaran_id`) REFERENCES `detail_jenis_anggaran` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `cetak_surat`
--
ALTER TABLE `cetak_surat`
  ADD CONSTRAINT `cetak_surat_surat_id_foreign` FOREIGN KEY (`surat_id`) REFERENCES `surat` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `detail_cetak`
--
ALTER TABLE `detail_cetak`
  ADD CONSTRAINT `detail_cetak_cetak_surat_id_foreign` FOREIGN KEY (`cetak_surat_id`) REFERENCES `cetak_surat` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `detail_dusun`
--
ALTER TABLE `detail_dusun`
  ADD CONSTRAINT `detail_dusun_dusun_id_foreign` FOREIGN KEY (`dusun_id`) REFERENCES `dusun` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `detail_jenis_anggaran`
--
ALTER TABLE `detail_jenis_anggaran`
  ADD CONSTRAINT `detail_jenis_anggaran_jenis_anggaran_id_foreign` FOREIGN KEY (`jenis_anggaran_id`) REFERENCES `jenis_anggaran` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_jenis_anggaran_kelompok_jenis_anggaran_id_foreign` FOREIGN KEY (`kelompok_jenis_anggaran_id`) REFERENCES `kelompok_jenis_anggaran` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `isi_surat`
--
ALTER TABLE `isi_surat`
  ADD CONSTRAINT `isi_surat_surat_id_foreign` FOREIGN KEY (`surat_id`) REFERENCES `surat` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `penduduk`
--
ALTER TABLE `penduduk`
  ADD CONSTRAINT `penduduk_agama_id_foreign` FOREIGN KEY (`agama_id`) REFERENCES `agama` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `penduduk_darah_id_foreign` FOREIGN KEY (`darah_id`) REFERENCES `darah` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `penduduk_detail_dusun_id_foreign` FOREIGN KEY (`detail_dusun_id`) REFERENCES `detail_dusun` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `penduduk_pekerjaan_id_foreign` FOREIGN KEY (`pekerjaan_id`) REFERENCES `pekerjaan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `penduduk_pendidikan_id_foreign` FOREIGN KEY (`pendidikan_id`) REFERENCES `pendidikan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `penduduk_status_hubungan_dalam_keluarga_id_foreign` FOREIGN KEY (`status_hubungan_dalam_keluarga_id`) REFERENCES `status_hubungan_dalam_keluarga` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `penduduk_status_perkawinan_id_foreign` FOREIGN KEY (`status_perkawinan_id`) REFERENCES `status_perkawinan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
