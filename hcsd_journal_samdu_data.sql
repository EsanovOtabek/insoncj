-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Время создания: Сен 16 2023 г., 11:54
-- Версия сервера: 10.6.15-MariaDB-1:10.6.15+maria~deb11
-- Версия PHP: 8.1.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `hcsd_journal_samdu_data`
--

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `authors` varchar(255) NOT NULL,
  `abstract` text NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `status` enum('waiting','rejected','accepted') NOT NULL DEFAULT 'waiting',
  `comment` text DEFAULT NULL,
  `file` varchar(255) NOT NULL,
  `issue_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`id`, `title`, `authors`, `abstract`, `keywords`, `status`, `comment`, `file`, `issue_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Video ma\'lumotlarni tasniflash', 'Esanov Otabek Olimjon o\'g\'li, Nazarov Fayzullo Maxmadiyarovich', 'Maqola annotatsiyasi, Maqola annotatsiyasi.,Maqola annotatsiyasi, Maqola annotatsiyasi.,Maqola annotatsiyasi, Maqola annotatsiyasi.,', 'video, sammari', 'waiting', '<hr><i>sdgfsa</i><br><p><b>Yozilgan vaqt: </b>23.05.2023 05:49:34</p><br>', '670466e9f5543381deab6d5a91834721.docx', 1, 2, '2023-04-19 13:21:08', '2023-05-23 02:49:34'),
(2, 'Ajaxda ishlash', 'Obloqulov Shoyim, Esanov Otavek', 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Why do we use it? Yashirish\r\n', 'lorem, maqola, ajax', 'waiting', NULL, '2eda4be565d4c01655fa7394975d7bcb.docx', 2, 3, '2023-05-08 07:06:35', '2023-05-08 07:06:35'),
(3, 'Ajaxda ishlash', 'Obloqulov Shoyim, Esanov Otavek', 'sdfdfs', 'lorem, maqola, ajax', 'accepted', '<hr><i>sadsadsa</i><br><p><b>Yozilgan vaqt: </b>10.05.2023 06:04:15</p><br><hr><i>sadsadsad</i><br><p><b>Yozilgan vaqt: </b>10.05.2023 06:07:33</p><br>', '82e880d3f4e86e9fb469c88ef5ed7555.docx', 2, 3, '2023-05-08 07:39:52', '2023-05-10 03:07:33'),
(4, 'Ajaxda ishlash', 'Obloqulov Shoyim, Esanov Otavek', 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Why do we use it? Yashirish\r\n', 'sdg , gh', 'rejected', '<hr><i>das f fsd fasdfs</i><br><p><b>Yozilgan vaqt: </b>23.05.2023 05:51:17</p><br>', '3070f5f5576147e30688b4e3acc4c89b.docx', 5, 11, '2023-05-23 02:50:06', '2023-08-29 10:51:04');

-- --------------------------------------------------------

--
-- Структура таблицы `dois`
--

CREATE TABLE `dois` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `doi_file` varchar(255) NOT NULL,
  `doi_url` varchar(255) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `authors` varchar(255) NOT NULL,
  `abstract` text NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `issue_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `experts`
--

CREATE TABLE `experts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `fio` varchar(255) NOT NULL,
  `lavozim` varchar(255) NOT NULL,
  `ishjoyi` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `experts`
--

INSERT INTO `experts` (`id`, `image`, `fio`, `lavozim`, `ishjoyi`, `created_at`, `updated_at`) VALUES
(1, 'f0373a358df7b867be19df910b2d4b93.jpg', 'Esanov Otabek Olimjon o\'g\'li', 'DSc', 'Samarqand davlat universiteti', '2023-04-24 01:39:19', '2023-08-29 10:53:00'),
(2, '57a03d0ab0345ffc26b2c441557a5c8f.jpg', 'Rabbimov Muxriddin Musoqul o\'g\'li', 'PhD (Tayanch doktorant)', 'Samarqand davlat universiteti', '2023-08-29 10:46:07', '2023-08-29 10:52:30');

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
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
-- Структура таблицы `issues`
--

CREATE TABLE `issues` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `number` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `year_id` bigint(20) UNSIGNED DEFAULT NULL,
  `yil` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `issues`
--

INSERT INTO `issues` (`id`, `number`, `image`, `file`, `year_id`, `yil`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, '', '2023_yil_1_son.pdf', 3, 2023, '2023-05-22 05:36:37', '2023-04-19 07:11:41', '2023-05-22 05:36:37'),
(2, 1, '', '2022_yil_1_son.pdf', 2, 2022, '2023-05-22 05:36:39', '2023-04-24 03:05:46', '2023-05-22 05:36:39'),
(3, 1, 'd291dee056007699f34b28a2df230866.png', '2023_yil_1_son.pdf', 3, 2023, '2023-05-22 05:38:19', '2023-05-22 05:37:43', '2023-05-22 05:38:19'),
(4, 1, 'feec45548835bcc1b850640878432d28.png', '2023_yil_1_son.pdf', 3, 2023, '2023-05-22 05:39:31', '2023-05-22 05:38:32', '2023-05-22 05:39:31'),
(5, 1, 'eb8b9c291aa281590a382609ca5a70fc.png', '2023_yil_1_son.pdf', 3, 2023, '2023-08-29 10:59:04', '2023-05-22 05:39:41', '2023-08-29 10:59:04'),
(6, 1, '00804a302332d4a4761503d82fbdc9f6.jpg', '2021_yil_1_son.pdf', 1, 2021, '2023-08-29 11:03:26', '2023-08-29 11:03:20', '2023-08-29 11:03:26'),
(7, 1, '1d6b1846052a79b8aceb80cf05837ef6.jpg', '2021_yil_1_son.pdf', 4, 2021, NULL, '2023-08-29 11:14:20', '2023-08-29 11:14:20'),
(8, 2, '2f5c77151fef11cb040c9dbba2a34206.jpg', '2021_yil_2_son.pdf', 5, 2021, NULL, '2023-08-29 11:27:55', '2023-08-29 11:27:55'),
(9, 3, '90ff45cc7e44118ab85e7306a8efa0b3.jpg', '2022_yil_3_son.pdf', 6, 2022, NULL, '2023-08-29 11:38:45', '2023-08-29 11:38:45'),
(10, 4, '0279e3948fd7d4642575f17c189cb423.jpg', '2023_yil_4_son.pdf', 7, 2023, NULL, '2023-08-29 11:57:14', '2023-08-29 11:57:14');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_03_03_070728_create_roles_table', 1),
(6, '2023_03_07_123123_create_years_table', 1),
(7, '2023_03_09_080903_create_issues_table', 1),
(8, '2023_03_11_111908_create_news_table', 1),
(9, '2023_03_26_082046_create_experts_table', 1),
(11, '2023_03_31_103619_create_articles_table', 2),
(12, '2019_05_11_000000_create_otps_table', 3),
(13, '2023_05_23_073631_create_telegrams_table', 4),
(15, '2023_08_05_071834_create_dois_table', 5),
(16, '2023_09_16_110059_create_statiks_table', 6);

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_uz` varchar(255) NOT NULL,
  `title_ru` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `image` varchar(255) NOT NULL,
  `text_uz` text NOT NULL,
  `text_en` text NOT NULL,
  `text_ru` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `title_uz`, `title_ru`, `title_en`, `date`, `image`, `text_uz`, `text_en`, `text_ru`, `created_at`, `updated_at`) VALUES
(3, 'Samarqand davlat universiteti Xalqaro ta’lim dasturlari markazi 2023-2024 o’quv yili uchun quyidagi bakalavriat ta’lim yo’nalishlari va magistratura mutaxassisliklari bo\'yicha to’lov-kontrakt asosida o\'qishga qabul qiladi:', 'Центр международных образовательных программ Самаркандского государственного университета осуществляет прием студентов на следующие программы бакалавриата и магистратуры на 2023-2024 учебный год на платно-контрактной основе:', 'The Center of International Education Programs of Samarkand State University accepts students for the following bachelor\'s degrees and master\'s degrees for the 2023-2024 academic year on a fee-contract basis:', '2023-08-29', '502786b3d56d35434428c2939bb73672.png', 'BAKALAVRIAT\r\n\r\n- 60220300 - Tarix (mamlakatlar va yo‘nalishlar bo‘yicha)\r\n- 60310100 - Iqtisodiyot (tarmoqlar va sohalar bo‘yicha)\r\n- 60310800 - Xalqaro munosabatlar\r\n\r\nMAGISTRATURA\r\n\r\n- 70211004 - Muzeyshunoslik, tarixiy-madaniy obyektlarni konservatsiya qilish, ta’mirlash va saqlash\r\n- 70310801 - Xalqaro munosabatlar va zamonaviy siyosiy jarayonlar\r\n- 70320301 - Hujjatchilik, hujjatshunoslik va arxivshunoslik\r\n- 70411401 - Inson resurslarini boshqarish\r\n- 70530901 - Fizika (yo‘nalishlar bo‘yicha)\r\n- 70310901 - Psixologiya (faoliyat turlari bo‘yicha)\r\n- 70510103 - Biotexnologiya\r\n- 70610701 - Sun’iy intellekt\r\n- 70530402 - Geografiya (o‘rganish obyekti bo‘yicha)\r\n- 70710402 - Ekologiya (yaylov ekologiyasi)\r\n- 70711501 - Mexatronika va robototexnika\r\n- 70711801 - Tibbiy-biologik apparatlar, tizimlar va majmualar (qo‘llanish sohasi bo‘yicha)\r\n\r\nSamarqand davlat universiteti xalqaro ta’lim dasturlari markazi AQSh, Belorus, Koreya, Xitoy, Rossiya davlatlari oliy ta’lim muassasalari bilan hamkorlik qilmoqda. Qo’shma ta’lim dasturlari asosida tahsil olgan talabalar ikkita universitetning diplomlariga ega bo‘ladi.\r\n\r\nBu oliy ma’lumot olish istagida bo‘lgan yoshlar uchun ajoyib imkoniyatlar demakdir!\r\n\r\nHujjatlar  https://fiep.admission.samdu.uz sayti orqali online qabul qilinadi.', 'BACHELOR\'S DEGREE\r\n\r\n- 60220300 - History (by countries and directions)\r\n- 60310100 - Economy (by branches and sectors)\r\n- 60310800 - International relations\r\n\r\nMASTER\'S\r\n\r\n- 70211004 - Museum studies, conservation, repair and maintenance of historical and cultural objects\r\n- 70310801 - International relations and modern political processes\r\n- 70320301 - Documentation, document studies and archival studies\r\n- 70411401 - Human resources management\r\n- 70530901 - Physics (by directions)\r\n- 70310901 - Psychology (by types of activity)\r\n- 70510103 - Biotechnology\r\n- 70610701 - Artificial intelligence\r\n- 70530402 - Geography (by subject of study)\r\n- 70710402 - Ecology (pasture ecology)\r\n- 70711501 - Mechatronics and robotics\r\n- 70711801 - Medical and biological devices, systems and complexes (by field of application)\r\n\r\nThe Center of International Education Programs of Samarkand State University cooperates with higher education institutions of the USA, Belarus, Korea, China, and Russia. Students studying on the basis of joint educational programs will receive diplomas from two universities.\r\n\r\nThis means great opportunities for young people who want to get higher education!\r\n\r\nDocuments are accepted online through https://fiep.admission.samdu.uz.', 'СТЕПЕНЬ БАКАЛАВРА\r\n\r\n- 60220300 - История (по странам и направлениям)\r\n- 60310100 - Экономика (по отраслям и секторам)\r\n- 60310800 – Международные отношения\r\n\r\nМАСТЕРСКАЯ\r\n\r\n- 70211004 - Музееведение, консервация, ремонт и содержание объектов истории и культуры\r\n- 70310801 - Международные отношения и современные политические процессы\r\n- 70320301 - Документация, документоведение и архивоведение\r\n- 70411401 - Управление персоналом\r\n- 70530901 - Физика (по направлениям)\r\n- 70310901 - Психология (по видам деятельности)\r\n- 70510103 - Биотехнология\r\n- 70610701 - Искусственный интеллект\r\n- 70530402 - География (по предметам обучения)\r\n- 70710402 - Экология (экология пастбищ)\r\n- 70711501 - Мехатроника и робототехника\r\n- 70711801 - Приборы, системы и комплексы медицинские и биологические (по областям применения)\r\n\r\nЦентр международных образовательных программ Самаркандского государственного университета сотрудничает с высшими учебными заведениями США, Беларуси, Кореи, Китая и России. Студенты, обучающиеся по совместным образовательным программам, получат дипломы двух вузов.\r\n\r\nЭто означает большие возможности для молодых людей, желающих получить высшее образование!\r\n\r\nДокументы принимаются онлайн через https://fiep.admission.samdu.uz.', '2023-08-29 12:22:17', '2023-09-01 03:50:50');

-- --------------------------------------------------------

--
-- Структура таблицы `otps`
--

CREATE TABLE `otps` (
  `id` int(10) UNSIGNED NOT NULL,
  `identifier` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `validity` int(11) NOT NULL,
  `valid` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `otps`
--

INSERT INTO `otps` (`id`, `identifier`, `token`, `validity`, `valid`, `created_at`, `updated_at`) VALUES
(7, 'erali@gmail.com', '589926', 5, 0, '2023-05-22 04:35:55', '2023-05-22 04:36:05'),
(9, 'esanovotabek3@gmail.com', '934853', 5, 0, '2023-05-22 04:50:15', '2023-05-22 04:50:26'),
(10, 'esanovotabek3@gmail.com', '896817', 5, 0, '2023-05-22 04:51:19', '2023-05-22 04:51:26'),
(11, 'esanovotabek3@gmail.com', '400803', 5, 0, '2023-05-22 04:53:40', '2023-05-22 04:53:48'),
(12, 'esanovoasdgli@mail.ru', '696219', 5, 0, '2023-08-29 03:30:53', '2023-08-29 03:31:47'),
(13, 'muhriddin5678@hcsd.eo', '622122', 5, 0, '2023-08-29 06:08:40', '2023-08-29 06:08:54'),
(14, 'releyo5794@xgh6.com', '046514', 5, 1, '2023-08-29 07:02:42', '2023-08-29 07:02:42'),
(19, 'bii23.uz@gmail.com', '933090', 5, 1, '2023-09-06 03:16:02', '2023-09-06 03:16:02'),
(20, 'pemed53532@searpen.com', '984431', 5, 1, '2023-09-06 06:28:54', '2023-09-06 06:28:54'),
(21, 'nodirxxx@gmail.com', '812529', 5, 0, '2023-09-08 07:02:10', '2023-09-08 07:02:58'),
(23, 'muhriddin4545@hcsd.eo', '455725', 5, 1, '2023-09-14 09:19:54', '2023-09-14 09:19:54');

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Admin', NULL, NULL),
(2, 'user', 'Foydalanuvchi', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `statiks`
--

CREATE TABLE `statiks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `static_tel1` varchar(255) NOT NULL,
  `static_tel2` varchar(255) NOT NULL,
  `static_tel3` varchar(255) NOT NULL,
  `static_email` varchar(255) NOT NULL,
  `adress_uz` text NOT NULL,
  `adress_en` text NOT NULL,
  `adress_ru` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `statiks`
--

INSERT INTO `statiks` (`id`, `static_tel1`, `static_tel2`, `static_tel3`, `static_email`, `adress_uz`, `adress_en`, `adress_ru`, `created_at`, `updated_at`) VALUES
(1, '+998942835678', '+998905021303', 'ikromnasimov2020@gmail.com', 'muhriddinrabbimov@gmail.com', 'Samarqand shahar, Bostonsaroy 93', 'Samarqand shahar, Bostonsaroy 93', 'Samarqand shahar, Bostonsaroy 93', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `telegrams`
--

CREATE TABLE `telegrams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fish` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `workplace` varchar(255) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `role` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `fish`, `email`, `workplace`, `position`, `phone`, `role`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Esanov Otabek Olimjon', 'esanovotabek688@gmail.com', 'Samarqand davlat universiteti', 'Talaba', '932360433', 'admin', '$2y$10$lDs.wdnlgVa4te8JFFchN.3ZLOql4cUAGg/phsTbIVzu/lwBFyXeO', NULL, '2023-04-15 04:53:26', '2023-04-15 04:53:26'),
(2, 'Asliddin Sayidqulov', 'esanov_otabek_olimjon_ogli@mail.ru', NULL, NULL, '915438331', 'admin', '$2y$10$dbXrN9mPmELr8QPwKSmIzukC/EjhvjbZZHZENwybk.Q29FO/uhFsq', NULL, '2023-04-19 07:12:36', '2023-04-22 03:21:06'),
(3, 'Obloqulov Shoyim', NULL, NULL, NULL, '993436820', 'user', '$2y$10$W/d3uePQoDRFY90Qu0aJf.Gu6R8Rbp6EgDMoHHvm8FtOrYwKu1xci', NULL, '2023-05-08 07:05:45', '2023-05-08 07:05:45'),
(11, 'Norbek Esanov', 'esanovotabek3@gmail.com', 'SamDU', 'talaba', '+998932003603', 'user', '$2y$10$BcyLWfqo0nNsiKRkSUObEu0OU63PMZhhr6zJFThyQ9jQoa0QenHW6', NULL, '2023-05-22 04:53:49', '2023-05-22 04:56:31'),
(12, 'Qudratov Doniyor', 'esanovoasdgli@mail.ru', NULL, NULL, NULL, 'user', '$2y$10$lDs.wdnlgVa4te8JFFchN.3ZLOql4cUAGg/phsTbIVzu/lwBFyXeO', NULL, '2023-08-29 03:31:47', '2023-08-29 03:31:47'),
(13, 'Muhriddin Rabbimov', 'muhriddin5678@hcsd.eo', NULL, NULL, NULL, 'admin', '$2y$10$uwSz3idwnYIaxtSR4BARJO.x/mTypY1AfOAVPutUThCW9bhfCEleC', NULL, '2023-08-29 06:08:54', '2023-08-29 06:08:54'),
(14, 'Allayev Nodir', 'nodirxxx@gmail.com', NULL, NULL, NULL, 'user', '$2y$10$S7cSlxcGbvVBDY7OPlBHAeNLL8VoXuI6TZ/oe98qJvebdz9kyP.tK', NULL, '2023-09-08 07:02:58', '2023-09-08 07:02:58');

-- --------------------------------------------------------

--
-- Структура таблицы `years`
--

CREATE TABLE `years` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `year` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `years`
--

INSERT INTO `years` (`id`, `year`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 2021, '2023-08-29 11:05:21', '2023-04-19 06:58:51', '2023-08-29 11:05:21'),
(2, 2022, '2023-08-29 11:05:17', '2023-04-19 07:09:51', '2023-08-29 11:05:17'),
(3, 2023, '2023-08-29 11:05:13', '2023-04-19 07:09:55', '2023-08-29 11:05:13'),
(4, 2021, NULL, '2023-08-29 11:05:27', '2023-08-29 11:05:27'),
(5, 2021, NULL, '2023-08-29 11:16:07', '2023-08-29 11:16:07'),
(6, 2022, NULL, '2023-08-29 11:34:22', '2023-08-29 11:34:22'),
(7, 2023, NULL, '2023-08-29 11:47:29', '2023-08-29 11:47:29');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `articles_issue_id_foreign` (`issue_id`);

--
-- Индексы таблицы `dois`
--
ALTER TABLE `dois`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dois_issue_id_foreign` (`issue_id`);

--
-- Индексы таблицы `experts`
--
ALTER TABLE `experts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Индексы таблицы `issues`
--
ALTER TABLE `issues`
  ADD PRIMARY KEY (`id`),
  ADD KEY `issues_year_id_foreign` (`year_id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `otps`
--
ALTER TABLE `otps`
  ADD PRIMARY KEY (`id`),
  ADD KEY `otps_id_index` (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Индексы таблицы `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Индексы таблицы `telegrams`
--
ALTER TABLE `telegrams`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Индексы таблицы `years`
--
ALTER TABLE `years`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `dois`
--
ALTER TABLE `dois`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `experts`
--
ALTER TABLE `experts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `issues`
--
ALTER TABLE `issues`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `otps`
--
ALTER TABLE `otps`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT для таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `telegrams`
--
ALTER TABLE `telegrams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблицы `years`
--
ALTER TABLE `years`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_issue_id_foreign` FOREIGN KEY (`issue_id`) REFERENCES `issues` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `dois`
--
ALTER TABLE `dois`
  ADD CONSTRAINT `dois_issue_id_foreign` FOREIGN KEY (`issue_id`) REFERENCES `issues` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `issues`
--
ALTER TABLE `issues`
  ADD CONSTRAINT `issues_year_id_foreign` FOREIGN KEY (`year_id`) REFERENCES `years` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
