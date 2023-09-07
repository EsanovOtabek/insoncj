-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 07 2023 г., 10:22
-- Версия сервера: 8.0.19
-- Версия PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `hcsd`
--

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

CREATE TABLE `articles` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `authors` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abstract` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `keywords` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('waiting','rejected','accepted') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'waiting',
  `comment` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `file` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `issue_id` bigint UNSIGNED DEFAULT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
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
(4, 'Ajaxda ishlash', 'Obloqulov Shoyim, Esanov Otavek', 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Why do we use it? Yashirish\r\n', 'sdg , gh', 'accepted', '<hr><i>das f fsd fasdfs</i><br><p><b>Yozilgan vaqt: </b>23.05.2023 05:51:17</p><br>', '3070f5f5576147e30688b4e3acc4c89b.docx', 5, 11, '2023-05-23 02:50:06', '2023-08-29 00:01:27');

-- --------------------------------------------------------

--
-- Структура таблицы `dois`
--

CREATE TABLE `dois` (
  `id` bigint UNSIGNED NOT NULL,
  `doi_file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doi_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `authors` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abstract` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `keywords` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `issue_id` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `dois`
--

INSERT INTO `dois` (`id`, `doi_file`, `doi_url`, `title`, `authors`, `abstract`, `keywords`, `issue_id`, `created_at`, `updated_at`) VALUES
(1, 'T1ucMpcCNdQzA9bAwoVR1693305615doi.pdf', NULL, 'Oʻzgarmas va oʻzgaruvchan tok kuchini oʻlchaydigan asbob; ', 'Esanov Otabek Olimjon o\'g\'li, Nazarov Fayzullo Maxmadiyarovich', 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Why do we use it? Yashirish', 'sedana, sedana yog\'i, dorilar, halal', 5, '2023-08-29 05:40:15', '2023-08-29 05:40:15');

-- --------------------------------------------------------

--
-- Структура таблицы `experts`
--

CREATE TABLE `experts` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `fio` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `lavozim` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ishjoyi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `experts`
--

INSERT INTO `experts` (`id`, `image`, `fio`, `lavozim`, `ishjoyi`, `created_at`, `updated_at`) VALUES
(1, 'f0373a358df7b867be19df910b2d4b93.jpg', 'Esanov Otabek Olimjon o\'g\'li', 'DSc', 'Samarqand Davlat Universiteti', '2023-04-24 01:39:19', '2023-04-24 01:39:19');

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `issues`
--

CREATE TABLE `issues` (
  `id` bigint UNSIGNED NOT NULL,
  `number` int NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `year_id` bigint UNSIGNED DEFAULT NULL,
  `yil` int NOT NULL,
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
(5, 1, 'eb8b9c291aa281590a382609ca5a70fc.png', '2023_yil_1_son.pdf', 3, 2023, NULL, '2023-05-22 05:39:41', '2023-05-22 05:39:41');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
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
(15, '2023_08_05_071834_create_dois_table', 5);

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` bigint UNSIGNED NOT NULL,
  `title_uz` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_ru` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_en` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `text_uz` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `text_en` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `text_ru` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `title_uz`, `title_ru`, `title_en`, `date`, `image`, `text_uz`, `text_en`, `text_ru`, `created_at`, `updated_at`) VALUES
(1, '📌 Samarqand davlat universiteti raqamli texnologiyalar fakulteti talabalari \"IT-marafon 2022\" dasturlash musoboqasida ishtirok etmoqda...', '📌 Студенты факультета цифровых технологий Самаркандского государственного университета принимают участие в соревновании по программированию «IT-Марафон 2022»...', '📌 Students of the Faculty of Digital Technologies of Samarkand State University are participating in the programming competition \"IT-Marathon 2022\"...', '2023-05-05', 'aba01c984e8f6a5d1e0804cee88b81f1.jpg', '📌 Samarqand davlat universiteti raqamli texnologiyalar fakulteti talabalarining \"IT-marafon 2022\" dasturlash musobaqasida ishtiroki haqida xabar (https://t.me/samdueduuz/11750) bergan edik. \r\n    \r\n     Ushbu tanlovda Samarqand davlat universitetining \"LifePC\" jamoasi \"Eng murakkab dastur\"  va \"Overflow\" jamoasi \"Eng yaxshi algoritm\" nominatsiyasi bo\'yicha g\'oliblikni qo\'lga kiritdi...', '📌 We reported on the participation of students of Samarkand State University\'s Faculty of Digital Technologies in the \"IT-Marathon 2022\" programming competition (https://t.me/samdueduuz/11750).\r\n    \r\n      In this competition, the \"LifePC\" team of Samarkand State University won the \"Most Complex Program\" and the \"Overflow\" team won the \"Best Algorithm\" nomination...', '📌 Мы сообщали об участии студентов факультета цифровых технологий Самаркандского государственного университета в соревновании по программированию «IT-Марафон 2022» (https://t.me/samdueduuz/11750).\r\n    \r\n      В этом конкурсе команда «LifePC» Самаркандского государственного университета победила в номинации «Самая сложная программа», а команда «Overflow» победила в номинации «Лучший алгоритм»...', '2023-05-05 04:31:13', '2023-05-05 04:31:13'),
(2, 'Olimpiadalarga upsolve imkoniyati qo\'shildi', 'Olimpiadalarga upsolve imkoniyati qo\'shildi', 'Olimpiadalarga upsolve imkoniyati qo\'shildi', '2023-08-09', '77e959f3124acab2d64568bec60e6351.png', 'DIQQAT\r\n\r\nUzoq kutilgan yangilik💣\r\n\r\n❗️Endilikda olimpiada masalalarini arxivga olinishini kutishingiz yoki arxivdan olimpiada masalalarini qidirishingiz shart emas.\r\n\r\n❗️Olimpiadalar sahifasini o\'zidan masala uchun o\'z yechimlaringizni yuborishingiz mumkin.\r\n\r\n⚠️Albatta bu olimpiada natijalariga ta\'sir qilmaydi.', 'DIQQAT\r\n\r\nUzoq kutilgan yangilik💣\r\n\r\n❗️Endilikda olimpiada masalalarini arxivga olinishini kutishingiz yoki arxivdan olimpiada masalalarini qidirishingiz shart emas.\r\n\r\n❗️Olimpiadalar sahifasini o\'zidan masala uchun o\'z yechimlaringizni yuborishingiz mumkin.\r\n\r\n⚠️Albatta bu olimpiada natijalariga ta\'sir qilmaydi.', 'DIQQAT\r\n\r\nUzoq kutilgan yangilik💣\r\n\r\n❗️Endilikda olimpiada masalalarini arxivga olinishini kutishingiz yoki arxivdan olimpiada masalalarini qidirishingiz shart emas.\r\n\r\n❗️Olimpiadalar sahifasini o\'zidan masala uchun o\'z yechimlaringizni yuborishingiz mumkin.\r\n\r\n⚠️Albatta bu olimpiada natijalariga ta\'sir qilmaydi.', '2023-08-29 04:30:05', '2023-08-29 04:30:05');

-- --------------------------------------------------------

--
-- Структура таблицы `otps`
--

CREATE TABLE `otps` (
  `id` int UNSIGNED NOT NULL,
  `identifier` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `validity` int NOT NULL,
  `valid` tinyint(1) NOT NULL DEFAULT '1',
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
(13, 'muhriddin5678@hcsd.eo', '622122', 5, 0, '2023-08-29 06:08:40', '2023-08-29 06:08:54');

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `roles`
--

CREATE TABLE `roles` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
-- Структура таблицы `telegrams`
--

CREATE TABLE `telegrams` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `fish` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `workplace` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
(12, 'Qudratov Doniyor', 'esanovoasdgli@mail.ru', NULL, NULL, NULL, 'user', '$2y$10$XOmOtsEvzXF/hvWCx4W8.O2JH1HW1VFCN04pxXzGYsfQJV3D5a/1e', NULL, '2023-08-29 03:31:47', '2023-08-29 03:31:47'),
(13, 'Muhriddin Rabbimov', 'muhriddin5678@hcsd.eo', NULL, NULL, NULL, 'admin', '$2y$10$uwSz3idwnYIaxtSR4BARJO.x/mTypY1AfOAVPutUThCW9bhfCEleC', NULL, '2023-08-29 06:08:54', '2023-08-29 06:08:54');

-- --------------------------------------------------------

--
-- Структура таблицы `years`
--

CREATE TABLE `years` (
  `id` bigint UNSIGNED NOT NULL,
  `year` int NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `years`
--

INSERT INTO `years` (`id`, `year`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 2021, NULL, '2023-04-19 06:58:51', '2023-04-19 06:58:51'),
(2, 2022, NULL, '2023-04-19 07:09:51', '2023-04-19 07:09:51'),
(3, 2023, NULL, '2023-04-19 07:09:55', '2023-04-19 07:09:55');

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
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `dois`
--
ALTER TABLE `dois`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `experts`
--
ALTER TABLE `experts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `issues`
--
ALTER TABLE `issues`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `otps`
--
ALTER TABLE `otps`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `telegrams`
--
ALTER TABLE `telegrams`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `years`
--
ALTER TABLE `years`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
