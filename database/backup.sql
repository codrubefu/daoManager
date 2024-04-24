-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.32 - MySQL Community Server - GPL
-- Server OS:                    Linux
-- HeidiSQL Version:             12.5.0.6677
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping data for table daomanager.clubs: ~4 rows (approximately)
DELETE FROM `clubs`;
INSERT INTO `clubs` (`id`, `name`, `city`, `country`, `email`, `address`, `phone`, `cui`, `updated_at`, `created_at`, `zip`, `active`) VALUES
	(1, 'Dao12', 'Iasi', 'Germany', 'c.befu@nexus-united.com', 'Str. Fantanilor , Bl. B6, et. 3, ap. 36 39', '123123', '123123', '2024-04-16', '2024-04-16', NULL, 1),
	(2, 'Kim Long', 'Iasi', 'Romania', 'codrut_befu@yahoo.com', 'Vasile Lupu 146A, Dao Center', 'aaa', '1231111', '2024-04-16', '2024-04-16', '123123', 1),
	(3, 'Bao BC', 'Iasi', 'Germany', 'codrutbe111fu@gmail.com', 'Fantanilor, nr 39 bl. b6. ap 36', '0757352306', 'asdasd', '2024-04-16', '2024-04-16', '22', 1),
	(4, 'Ho Cac', 'Iasi', 'Germany', 'c.befu@test.de', 'Str. Fantanilor , Bl. B6, et. 3, ap. 36 39', '1234565785', 'aaa', '2024-04-16', '2024-04-16', NULL, 1);

-- Dumping data for table daomanager.failed_jobs: ~0 rows (approximately)
DELETE FROM `failed_jobs`;

-- Dumping data for table daomanager.migrations: ~10 rows (approximately)
DELETE FROM `migrations`;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(2, '2023_08_19_000000_create_failed_jobs_table', 1),
	(3, '2023_10_12_000000_create_users_table', 1),
	(4, '2023_10_12_100000_create_password_reset_tokens_table', 1),
	(5, '2023_10_30_142045_create_permission_tables', 1),
	(7, '2023_11_28_135543_training_classes', 1),
	(8, '2023_11_29_151237_groups', 1),
	(9, '2023_11_29_153541_create_sessions_table', 1),
	(10, '2023_12_06_135110_create_clubs_table', 2),
	(11, '2024_04_24_082505_create_training_classes', 3);

-- Dumping data for table daomanager.model_has_permissions: ~0 rows (approximately)
DELETE FROM `model_has_permissions`;

-- Dumping data for table daomanager.model_has_roles: ~2 rows (approximately)
DELETE FROM `model_has_roles`;
INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
	(1, 'App\\Models\\User', 20),
	(2, 'App\\Models\\User', 64);

-- Dumping data for table daomanager.password_reset_tokens: ~0 rows (approximately)
DELETE FROM `password_reset_tokens`;

-- Dumping data for table daomanager.permissions: ~2 rows (approximately)
DELETE FROM `permissions`;
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
	(1, 'manage-users', 'web', '2024-04-11 16:03:27', '2024-04-11 16:03:27'),
	(2, 'manage-clubs', 'web', '2024-04-11 16:03:27', '2024-04-11 16:03:27');

-- Dumping data for table daomanager.personal_access_tokens: ~22 rows (approximately)
DELETE FROM `personal_access_tokens`;
INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `expires_at`, `created_at`, `updated_at`) VALUES
	(1, 'App\\Models\\User', 20, '1712851693', '30d6d5c4e06b458e764e5d204b4db605d888e1c74fa6b9d0638b94600d0f38de', '["*"]', NULL, '2025-02-05 16:08:13', '2024-04-11 16:08:13', '2024-04-11 16:08:13'),
	(2, 'App\\Models\\User', 20, '1712851695', '2bac35f9836af04d4ce4a738bd34ff05b49b2da2ea43a2336d810764233fe2f5', '["*"]', NULL, '2025-02-05 16:08:15', '2024-04-11 16:08:15', '2024-04-11 16:08:15'),
	(3, 'App\\Models\\User', 20, '1712851702', 'a781bdc79b4fb6d7cf765297dcb7ea75efa081c8e19dd43f47b1e0c5cff23d75', '["*"]', '2024-04-11 16:14:12', '2025-02-05 16:08:22', '2024-04-11 16:08:22', '2024-04-11 16:14:12'),
	(4, 'App\\Models\\User', 20, '1712851754', 'd5b6db336774257ae10320b45230e4838a6ddf0bb924255425d11e6ccc9c3391', '["*"]', '2024-04-11 16:15:21', '2025-02-05 16:09:14', '2024-04-11 16:09:14', '2024-04-11 16:15:21'),
	(5, 'App\\Models\\User', 20, '1712852146', '62cb51ba0f04840d726299e81d842fc070709b4094c589a13613a5c6d5899f40', '["*"]', '2024-04-11 16:16:40', '2025-02-05 16:15:46', '2024-04-11 16:15:46', '2024-04-11 16:16:40'),
	(6, 'App\\Models\\User', 20, '1712852289', '3ce4a9f7059e6535a242cf1744a6884ab29a978db63af1202e9c3d6f31890497', '["*"]', '2024-04-11 16:19:04', '2025-02-05 16:18:09', '2024-04-11 16:18:09', '2024-04-11 16:19:04'),
	(7, 'App\\Models\\User', 20, '1712852359', '3738719a7bf2619fff817b9b4e2fbf4492d73f1da1d98396390294444800dcd6', '["*"]', '2024-04-11 16:20:32', '2025-02-05 16:19:19', '2024-04-11 16:19:19', '2024-04-11 16:20:32'),
	(8, 'App\\Models\\User', 20, '1712852440', '614a555422ca704a8001eac70dccfdba0f18d3891ae7df51ecdccd3d9d395680', '["*"]', '2024-04-11 16:21:31', '2025-02-05 16:20:40', '2024-04-11 16:20:40', '2024-04-11 16:21:31'),
	(9, 'App\\Models\\User', 20, '1712852501', '4c83ef20e92e52c8d6f89a60302dade622725cf5674eca8cd4ab9765b895cbd1', '["*"]', '2024-04-11 16:33:24', '2025-02-05 16:21:41', '2024-04-11 16:21:41', '2024-04-11 16:33:24'),
	(10, 'App\\Models\\User', 20, '1712853232', 'f6e39699d6d2bcbba3fcfde34678c6b27fc0dff0b8966345ddb467d1fab606ae', '["*"]', NULL, '2025-02-05 16:33:52', '2024-04-11 16:33:52', '2024-04-11 16:33:52'),
	(11, 'App\\Models\\User', 20, '1712853232', '21cd19e6549163189651080fef9c3a82516886b6dc601566ed20fcc3a8f686dd', '["*"]', '2024-04-12 08:37:06', '2025-02-05 16:33:52', '2024-04-11 16:33:52', '2024-04-12 08:37:06'),
	(12, 'App\\Models\\User', 20, '1712910852', '82ea91a3dff761f121487168b3e0d3f4cc99c36e99a8d727357eb95b78c57c13', '["*"]', '2024-04-16 17:13:11', '2025-02-06 08:34:12', '2024-04-12 08:34:12', '2024-04-16 17:13:11'),
	(13, 'App\\Models\\User', 20, '1713287568', '85ec9390dc619290d0dba3f85ac4ab97850e291d101e39cb6758728f8990c4ff', '["*"]', '2024-04-18 18:56:04', '2025-02-10 17:12:48', '2024-04-16 17:12:48', '2024-04-18 18:56:04'),
	(14, 'App\\Models\\User', 20, '1713454061', '4f7e39835869fc5e81c6afa120e287bf32b9d18111e0ecf081a4f969a4276bc1', '["*"]', '2024-04-18 18:19:07', '2025-02-12 15:27:41', '2024-04-18 15:27:41', '2024-04-18 18:19:07'),
	(15, 'App\\Models\\User', 64, '1713463999', '1b2801d2509cb2de7c0e7c3d4478bcd00648a7ff77c7f366493a5e7a1b9172cc', '["*"]', '2024-04-18 18:14:54', '2025-02-12 18:13:19', '2024-04-18 18:13:19', '2024-04-18 18:14:54'),
	(16, 'App\\Models\\User', 64, '1713464127', '97f635085e876080e2c99baee51354b5222a9fedb7724122897b89a9a4b83c0c', '["*"]', '2024-04-18 18:15:57', '2025-02-12 18:15:27', '2024-04-18 18:15:27', '2024-04-18 18:15:57'),
	(17, 'App\\Models\\User', 64, '1713464175', '683553672311947adf89cccf814a40015f5a482b18450eefdee7727cfab929b7', '["*"]', '2024-04-18 18:55:04', '2025-02-12 18:16:15', '2024-04-18 18:16:15', '2024-04-18 18:55:04'),
	(18, 'App\\Models\\User', 64, '1713465984', 'fd44eeda60726d10ba367fdbd746cccefc27d18a7593a1d1f4a549c8869171c3', '["*"]', '2024-04-19 08:34:01', '2025-02-12 18:46:24', '2024-04-18 18:46:24', '2024-04-19 08:34:01'),
	(19, 'App\\Models\\User', 20, '1713515626', '5156173e89975d1c33909fd129c2816aa412f3216cdeb4076b745eb46d375b09', '["*"]', '2024-04-19 11:31:16', '2025-02-13 08:33:46', '2024-04-19 08:33:46', '2024-04-19 11:31:16'),
	(20, 'App\\Models\\User', 20, '1713526267', '78b3064df1ef43593b3e37cf1e3c1fe3a1f893a05894320039623375a9a29d70', '["*"]', '2024-04-19 11:58:24', '2025-02-13 11:31:07', '2024-04-19 11:31:07', '2024-04-19 11:58:24'),
	(21, 'App\\Models\\User', 64, '1713534595', '305d6c4ec49966e513e8e5c9c14891233455bea55acde858060be15cd0c6b46e', '["*"]', '2024-04-24 08:17:31', '2025-02-13 13:49:55', '2024-04-19 13:49:55', '2024-04-24 08:17:31'),
	(22, 'App\\Models\\User', 64, '1713946650', '6615af7a71bd29032546e057c1d049f1911935bc789143cebb5f4aa48a1c9587', '["*"]', '2024-04-24 09:01:15', '2025-02-18 08:17:30', '2024-04-24 08:17:30', '2024-04-24 09:01:15');

-- Dumping data for table daomanager.roles: ~3 rows (approximately)
DELETE FROM `roles`;
INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
	(1, 'SuperAdmin', 'web', '2024-04-11 16:03:27', '2024-04-11 16:03:27'),
	(2, 'ClubAdmin', 'web', '2024-04-11 16:03:27', '2024-04-11 16:03:27'),
	(3, 'Editor', 'web', '2024-04-11 16:03:27', '2024-04-11 16:03:27');

-- Dumping data for table daomanager.role_has_permissions: ~3 rows (approximately)
DELETE FROM `role_has_permissions`;
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
	(1, 1),
	(2, 1),
	(1, 2);

-- Dumping data for table daomanager.sessions: ~0 rows (approximately)
DELETE FROM `sessions`;

-- Dumping data for table daomanager.training_classes: ~5 rows (approximately)
DELETE FROM `training_classes`;
INSERT INTO `training_classes` (`id`, `club_id`, `name`, `description`, `day_1`, `day_2`, `day_3`, `day_4`, `day_5`, `day_6`, `day_7`, `time_from`, `time_to`, `created_at`, `updated_at`) VALUES
	(6, NULL, 'Antrenament Grade', 'Antrenament Grade (juniori)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-24 08:56:27', '2024-04-24 08:56:27'),
	(7, NULL, 'Antrenament Grade', 'Antrenament Grade (juniori)', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-24 08:58:15', '2024-04-24 08:58:15'),
	(8, NULL, 'Antrenament Grade', 'Antrenament Grade (juniori)', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-24 08:58:30', '2024-04-24 08:58:30'),
	(9, NULL, 'Antrenament Grade', 'Antrenament Grade (juniori)', 1, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-24 08:58:58', '2024-04-24 08:58:58'),
	(10, 20, 'Antrenament Grade', 'Antrenament Grade (juniori)', 1, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-24 09:01:15', '2024-04-24 09:01:15');

-- Dumping data for table daomanager.users: ~22 rows (approximately)
DELETE FROM `users`;
INSERT INTO `users` (`id`, `email`, `club_id`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `title`, `first_name`, `last_name`, `phone`, `gender`, `address`, `city`, `country`, `zip`, `about`) VALUES
	(20, 'codrut_befu@yahoo.com', 20, '2024-04-11 16:02:04', '$2y$10$0qsX68/x/iM1YyqKr./4juYHzu9qsAA8Y2sCrvNdHf3nUY3j8lezW', 'Ufl04ds1tH', '2024-04-11 16:02:04', '2024-04-11 16:02:04', NULL, 'Emile', 'Dibbert', NULL, 'mr', '53411 Aufderhar Row\nNorth Maureen, NE 86319', 'Port Enosburgh', 'Azerbaijan', '65745', 'Debitis similique impedit ad distinctio mollitia. Eaque illo in velit. Deleniti similique aspernatur corporis nam. Veniam perspiciatis ut porro accusamus facilis ut molestiae.'),
	(64, 'codrutbefu@gmail.com', 20, NULL, '$2y$10$0qsX68/x/iM1YyqKr./4juYHzu9qsAA8Y2sCrvNdHf3nUY3j8lezW', NULL, '2024-04-18 17:23:03', '2024-04-18 17:23:03', 'mr', 'asd', 'asdasd', '0757352306', NULL, 'Fantanilor, nr 39 bl. b6. ap 36', 'Iasi', 'Germany', '700607', 'asdasd'),
	(72, 'lori.botsford@example.net', NULL, '2024-04-18 18:57:38', '$2y$10$YN6bmCEQ8.IwKgXbkWUFN.UfWTFxfVM2vIbLq0y4io/hEsyr4neOG', 'xlm6JAKWsl', '2024-04-18 18:57:38', '2024-04-18 18:57:38', NULL, 'Rhianna', 'Littel', NULL, 'mr', '150 Hallie Junctions Apt. 131\nPort Agustinahaven, MI 38002-1118', 'West Kiera', 'Norfolk Island', '73917-3586', 'Qui provident deserunt sunt consequatur explicabo aliquid vel dolorem. Debitis dolorum eveniet ut consequatur dolores. Voluptas ut debitis aut vel enim vitae est.'),
	(73, 'pmante@example.org', NULL, '2024-04-18 18:57:38', '$2y$10$OAph.FVRga1pgrOR49avGeHfNtg/tos8tC4vKfd7ZwtX5AHSxV2T6', 'gaAJTuEOP4', '2024-04-18 18:57:38', '2024-04-18 18:57:38', NULL, 'Emelie', 'Schulist', NULL, 'mr', '7693 Dewitt Stream Suite 048\nKertzmannview, CT 06423-8569', 'East Maritza', 'Belarus', '22123', 'Nam totam maiores vel numquam quia dignissimos labore. Qui dolores voluptate reprehenderit doloremque repellat possimus fugit rerum. Animi rerum voluptatibus adipisci expedita veritatis.'),
	(74, 'leatha57@example.org', NULL, '2024-04-18 18:57:38', '$2y$10$/htu0jdgIC6qdIK09uC9Xu4TgdiCZzCnN1yxg79dS3vd48AX.5yba', 'wc8z3H3hsA', '2024-04-18 18:57:38', '2024-04-18 18:57:38', NULL, 'Camila', 'Kreiger', NULL, 'mr', '31791 Margie Hills\nWest Tysonfort, KS 32749', 'Lake Helenfort', 'Moldova', '33792-1175', 'Quia recusandae reiciendis error sequi temporibus aperiam. Tempora delectus minima sunt ullam nemo. Error aut enim vero quas ullam aliquam distinctio. Nostrum dolor modi facere quisquam.'),
	(75, 'dannie63@example.net', NULL, '2024-04-18 18:57:38', '$2y$10$3QQfb6s6z49ykK823MawPe21Rkftcr5KoEdMnRTADZtbMNzWDRbhG', 'g61XyXyEMu', '2024-04-18 18:57:38', '2024-04-18 18:57:38', NULL, 'Jane', 'Dooley', NULL, 'mr', '60752 Cristal Gardens Suite 061\nMatildaton, MT 49472-8471', 'New Jamar', 'Guadeloupe', '01631-4798', 'Quis animi illo mollitia non esse qui ad. Doloremque qui labore in. Ab similique quia et iure minima cumque.'),
	(76, 'cpacocha@example.net', NULL, '2024-04-18 18:57:38', '$2y$10$U.NmwN5pdUrdnyg8T8FI3uw3Nse4NamIiuJyoc0jNeOrCDU.d9vSi', 'LjhVmn9Jpn', '2024-04-18 18:57:38', '2024-04-18 18:57:38', NULL, 'Creola', 'Veum', NULL, 'mr', '67048 Jasen Pines Suite 843\nHomenickstad, WY 36440-7020', 'Wildermanmouth', 'Zimbabwe', '21294', 'Amet dolor voluptas exercitationem aut vitae molestiae ratione eum. Est libero explicabo quis temporibus.'),
	(77, 'wmcglynn@example.net', NULL, '2024-04-18 18:57:38', '$2y$10$X1NEDiU.HoflTNhdPZiBEOWd1rXVli4TstSKviBv1C0sKp0ZB/fM6', 'bgWWMUIt81', '2024-04-18 18:57:38', '2024-04-18 18:57:38', NULL, 'Uriel', 'Simonis', NULL, 'mr', '389 Buddy Summit\nBoehmside, TX 26498', 'New Emerald', 'Mayotte', '07081', 'Vero libero temporibus veniam ducimus voluptatem error inventore modi. Labore hic accusamus velit architecto. Culpa ea corporis necessitatibus quae.'),
	(78, 'hferry@example.com', NULL, '2024-04-18 18:57:38', '$2y$10$NXTtR7enzQTBy.aE.auEE.IHSFMvEf0Clmm6rLmd8qgf9CEEdSERm', 'YmpOTB3zmD', '2024-04-18 18:57:38', '2024-04-18 18:57:38', NULL, 'Nathanial', 'Von', NULL, 'mr', '4093 Rosenbaum Road Suite 150\nJadashire, UT 71550', 'Hartmannville', 'Australia', '10377-4153', 'Voluptatem eum et animi molestias est. Qui qui assumenda vero vitae. Veritatis exercitationem rem explicabo nobis ullam. Veritatis rerum non tempore qui illo non.'),
	(79, 'feil.cody@example.com', NULL, '2024-04-18 18:57:38', '$2y$10$dhVD.vm/U5vr3O88azLVG.XxvdZn3uRwIZJ872lKPDU7YOEJaiAEG', 'xV5UNqgLC1', '2024-04-18 18:57:38', '2024-04-18 18:57:38', NULL, 'Osbaldo', 'Hessel', NULL, 'mr', '1186 Block Villages\nSouth Guy, MO 01543-2204', 'Ryannborough', 'British Indian Ocean Territory (Chagos Archipelago)', '17791', 'Molestiae ipsa error et non eum iure. Et dolor voluptas repellendus et iste asperiores. Velit error ipsum qui fugiat omnis. Possimus quos quaerat maiores aut rerum porro.'),
	(80, 'jveum@example.net', NULL, '2024-04-18 18:57:38', '$2y$10$fu555heDhsqm9mqhkbd5Ou8qmo6M/TmlAlPwKc0G/HpcQvv8Ae8h6', 'ywtkqfnprI', '2024-04-18 18:57:38', '2024-04-18 18:57:38', NULL, 'Edwina', 'Schaden', NULL, 'mr', '9598 Yost Mountain\nIsaacland, MA 51979', 'North Jeromy', 'French Guiana', '18487', 'Deleniti ut aliquam excepturi sed impedit eligendi maiores. Et vel perspiciatis natus ea et repellat. Ea cum perspiciatis et autem voluptatibus quam est.'),
	(81, 'carleton.bernier@example.org', NULL, '2024-04-18 18:57:38', '$2y$10$DFexhL9/UL04Nquwo1dkJe47g.zYP.27enuBYikaUyPyeJc2XUIFC', 'D0zhxRSj0Z', '2024-04-18 18:57:38', '2024-04-18 18:57:38', NULL, 'Olga', 'Osinski', NULL, 'mr', '42683 Schiller Forges Apt. 029\nEast Maybellmouth, GA 19145-5400', 'South Raymundo', 'Saint Barthelemy', '60194-3636', 'Magni labore et corrupti eveniet quisquam. Et dicta autem non amet non voluptas. Voluptas quia velit nihil dolor.'),
	(82, 'terence63@example.org', NULL, '2024-04-18 18:57:59', '$2y$10$ThD.GcVZN0rrcwpuIi6zRuB2SGC39mmR3FfmGOXHpx6Lrtzgl6OAW', 'FzIHWfmY9l', '2024-04-18 18:58:00', '2024-04-18 18:58:00', NULL, 'Leola', 'Cole', NULL, 'mr', '3690 Donny Prairie Apt. 840\nEast Abagailview, MT 27699-3586', 'Albinatown', 'Armenia', '93789', 'Nostrum aut corrupti et. Sint est vel labore quaerat enim odit. Sunt et quo deleniti temporibus voluptatem. Natus qui aut corrupti consequatur dolorum aut libero.'),
	(83, 'piper84@example.com', NULL, '2024-04-18 18:57:59', '$2y$10$fZPm9wR5DRiPc3G.M2lTleK9KZA/UK0RVU1l5IPHLKGwexlmzK6YW', 'JjVy61jEDO', '2024-04-18 18:58:00', '2024-04-18 18:58:00', NULL, 'Rogelio', 'Wyman', NULL, 'mr', '77242 Marge Gardens\nNew Kaylieton, AL 71089', 'Port Paigeshire', 'Ghana', '87416', 'Quia tempore quia in similique. Neque ut commodi in vel explicabo. Quibusdam consequatur dolor est incidunt.'),
	(84, 'jpadberg@example.com', NULL, '2024-04-18 18:57:59', '$2y$10$b9IiHlndqt7N5b82Y.CctuGIp89Gn3pCyUaPyOZJPIw2p4ubJU5Da', '9cfjJTheKN', '2024-04-18 18:58:00', '2024-04-18 18:58:00', NULL, 'Jennings', 'Douglas', NULL, 'mr', '34200 Bethel Plains\nLake Dolly, VA 69994', 'Kassulkefurt', 'New Caledonia', '81090', 'Voluptas porro doloremque ex a ea inventore laudantium illum. Accusamus quo est a doloremque et dignissimos. Nihil recusandae qui est delectus. Nihil repudiandae est beatae sed.'),
	(85, 'kspencer@example.org', NULL, '2024-04-18 18:57:59', '$2y$10$TByNpOWFz98DlhVHcioBEuThueRfBWqZEoJ5G4WKYf.W3GSCg9TTC', 'Qnu9b0f8dl', '2024-04-18 18:58:00', '2024-04-18 18:58:00', NULL, 'Alia', 'Rempel', NULL, 'mr', '238 Odell Meadow\nGreenmouth, IN 98815-1763', 'Lake Thaliachester', 'Peru', '35383-7370', 'Rem consequatur atque et quisquam aut libero eveniet. Enim cum minima rerum. Et sunt tenetur possimus nesciunt voluptatem quas sunt. Ipsam maxime natus sed et non pariatur atque amet.'),
	(86, 'adelia.okeefe@example.org', NULL, '2024-04-18 18:58:00', '$2y$10$.MxammuAnZL1WmPm9orMeOa.i8XY2ZdcFd3UUp17F5JcRJ/kd9A8u', 'YdWtFWNQWN', '2024-04-18 18:58:00', '2024-04-18 18:58:00', NULL, 'Buck', 'Keebler', NULL, 'mr', '9930 Farrell Estates\nEast Marilou, CA 59890-6930', 'Lake Jennyfermouth', 'Hungary', '56404-8569', 'Aut id maxime itaque expedita et voluptatem. Itaque nesciunt facere fugiat illum est blanditiis incidunt. Voluptates animi vitae dignissimos optio eligendi harum.'),
	(87, 'ledner.hadley@example.net', NULL, '2024-04-18 18:58:00', '$2y$10$lIs7Ub72ksLQvI6hlNMbd.CtEx35mkbtVsGBz5AuKGjsYRjz9ISzO', '0IAp6Cc9uk', '2024-04-18 18:58:00', '2024-04-18 18:58:00', NULL, 'Carmen', 'Murphy', NULL, 'mr', '7391 Bettie Neck\nNew Zella, DE 45058', 'West Antonio', 'Mayotte', '82217-5353', 'Dolores laboriosam est fuga excepturi. Odio natus exercitationem expedita deserunt. Et accusamus officia ea quae alias. Quae vel non harum quas voluptas rem quibusdam.'),
	(88, 'jaycee09@example.com', NULL, '2024-04-18 18:58:00', '$2y$10$LLqhASeSpVu2pZv3nlhVS.76LgQdquCt1rtRd1FbdKalmmLyxouqq', 'Kk290xRPl3', '2024-04-18 18:58:00', '2024-04-18 18:58:00', NULL, 'Oceane', 'Volkman', NULL, 'mr', '459 Gibson Streets\nPaigehaven, NC 77973', 'New Stanton', 'Bahamas', '59834-1204', 'Voluptate a maxime non cumque veniam sit quia rerum. Qui cupiditate aliquid expedita voluptatibus. Voluptates quisquam enim quibusdam labore beatae consectetur et. Est eum sit nihil vero ut.'),
	(89, 'myrtle21@example.com', NULL, '2024-04-18 18:58:00', '$2y$10$yOAd6pNk0KZE0.uWDO5OOO8u0GlJPm4mYscPpZwVAvUbg2Q7PqOOW', 'jGveYTB27A', '2024-04-18 18:58:00', '2024-04-18 18:58:00', NULL, 'Wava', 'Ruecker', NULL, 'mr', '23549 Summer Walk Suite 574\nHermannshire, OK 23981-0078', 'Lake Marie', 'Bosnia and Herzegovina', '02267-5099', 'Quidem voluptates enim vel earum ut. Reprehenderit et quae reprehenderit ex similique doloribus. Ad iusto reprehenderit quos magni consequuntur similique.'),
	(90, 'branson20@example.org', NULL, '2024-04-18 18:58:00', '$2y$10$q5FCzVKMXAvviOToxH5sZeg43HHBPC3dgVsEoHt/9m84jOYnTTivy', '3zAr6zXJqQ', '2024-04-18 18:58:00', '2024-04-18 18:58:00', NULL, 'Jazmyn', 'Mraz', NULL, 'mr', '748 Susanna Ridge Suite 690\nJenkinsshire, MO 84121', 'Runolfsdottirton', 'Colombia', '01067', 'Sapiente illum laboriosam qui natus. In blanditiis ipsa aut maxime voluptatem dolor porro. Voluptate placeat fugiat magnam cum corrupti nobis facilis sapiente.'),
	(91, 'chowell@example.org', NULL, '2024-04-18 18:58:00', '$2y$10$A3ze3HtheJeHG2H4dO7cquTBdX4/37px10INqU9Z.mwjHD1Hz/5g2', '7kJ8ej6DdM', '2024-04-18 18:58:00', '2024-04-18 18:58:00', NULL, 'Cesar', 'Kilback', NULL, 'mr', '4051 Dooley Ferry Suite 177\nHermannstad, WA 08805', 'New Bulahhaven', 'Poland', '34236-2672', 'Ut reiciendis ipsa dolorem reprehenderit. Aut quasi omnis necessitatibus non occaecati quam rerum ut. Numquam minus dolor dolor.');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
