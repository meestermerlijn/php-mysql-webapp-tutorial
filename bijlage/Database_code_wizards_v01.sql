-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server versie:                8.0.18 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Versie:              12.5.0.6677
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Databasestructuur van code_wizards wordt geschreven
DROP DATABASE IF EXISTS `code_wizards`;
CREATE DATABASE IF NOT EXISTS `code_wizards` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `code_wizards`;

-- Structuur van  tabel code_wizards.posts wordt geschreven
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `content` mediumtext COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT (now()),
  `updated_at` timestamp NOT NULL DEFAULT (now()),
  PRIMARY KEY (`id`),
  KEY `FK__users` (`user_id`),
  CONSTRAINT `FK__users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumpen data van tabel code_wizards.posts: ~61 rows (ongeveer)
INSERT INTO `posts` (`id`, `user_id`, `title`, `content`, `created_at`, `updated_at`) VALUES
	(1, 61, 'Ea quae sed ut tempora ex.', 'Error voluptates culpa ut sunt. Porro vel eaque non. Maiores qui velit ut magni laborum laborum autem. Quos necessitatibus provident sapiente consectetur enim sit voluptatem aut. Autem et et ducimus est quae ut. Ad quia et minus recusandae dolor ab cum. Earum ex omnis eaque accusantium.', '2023-09-07 07:27:24', '2023-09-07 07:27:24'),
	(2, 62, 'Sit explicabo et minus nisi.', 'Nobis fugiat maiores iure provident aut et. Praesentium quisquam corporis atque dignissimos. Illum earum et perspiciatis eos consequatur. Corporis explicabo id totam accusamus. Temporibus autem voluptatibus vel. Dicta a repellat et. Vero voluptatem fugiat atque corporis rerum. Et eaque quia similique quia sed eum molestias.', '2023-09-07 07:27:24', '2023-09-07 07:27:24'),
	(3, 62, 'Ut incidunt est nemo at.', 'Nesciunt voluptate autem sed perspiciatis recusandae. Est ipsam optio porro eaque natus aliquid tempora et. Iste ipsum non mollitia repudiandae voluptatem veniam necessitatibus. Sit labore reiciendis consequatur impedit ut. Id est quam aut soluta excepturi. Et ad omnis praesentium porro adipisci eos harum. Deserunt debitis neque voluptatem eum.', '2023-09-07 07:27:24', '2023-09-07 07:27:24'),
	(4, 62, 'Illum sunt assumenda labore officiis dolores.', 'Eum fuga sed tempore harum dolorem quae ex. Occaecati facere dolore ab sit qui ut non. Tempora eum quae a harum. Eos velit enim quasi quo aliquid. Labore consequatur quae consectetur. Et similique maxime fugit fugiat et et nulla. Aliquam maiores quia ducimus consequatur ullam error. Iusto assumenda natus in sint. Fugit blanditiis quam rerum non.', '2023-09-07 07:27:24', '2023-09-07 07:27:24'),
	(5, 63, 'Perspiciatis nulla odio quisquam nemo sed.', 'Soluta et commodi ullam atque. Laborum quo veritatis voluptatem totam quam autem. Harum nihil rerum dignissimos quia. Maiores reiciendis et magnam magnam qui. Voluptas voluptatem maxime tempore consequatur aut perspiciatis rerum est.', '2023-09-07 07:27:24', '2023-09-07 07:27:24'),
	(6, 63, 'Ullam quae ea et est. Voluptas qui et qui quidem.', 'Enim iusto est itaque qui nemo praesentium nobis dolorem. Ea nesciunt eum minus ut. Nulla eos est qui ducimus mollitia qui iusto. Illo omnis eum maiores quidem. Amet aut deserunt quia. Velit tempore dignissimos ea et. Cumque assumenda excepturi ipsa.', '2023-09-07 07:27:24', '2023-09-07 07:27:24'),
	(7, 63, 'Ut mollitia vel itaque nulla cum doloribus.', 'Aliquid dolore accusamus nulla assumenda aut a sint. Ducimus rerum aspernatur illum ut quibusdam ut. Vel repellendus quaerat qui quidem blanditiis deleniti vel. Est doloremque esse omnis incidunt. Facere impedit similique qui quisquam. Vero minus neque id magni corrupti.', '2023-09-07 07:27:24', '2023-09-07 07:27:24'),
	(8, 64, 'Et deserunt autem et.', 'Non fuga et qui et. Non aut eius et vero aut omnis facilis. Blanditiis doloremque molestiae esse qui sapiente. Error enim delectus hic dolorum odio quasi rerum. Rerum necessitatibus omnis fugit eos nihil. Sed et quia rerum illum non quasi quis. Quasi est dolor praesentium quod ea. Perferendis consequatur incidunt dignissimos rerum. Fugit nesciunt et temporibus et quis voluptatem.', '2023-09-07 07:27:24', '2023-09-07 07:27:24'),
	(9, 64, 'Deleniti aperiam aut quia nam ea sunt.', 'Esse odit dolores numquam in. Officia asperiores sequi vel. Expedita architecto perspiciatis velit aut nihil odio. Est quas placeat nam a repellendus nemo temporibus. In tenetur deserunt sint vitae. Rerum laudantium aut accusantium numquam consequuntur corrupti cupiditate. Nostrum repudiandae commodi qui nihil. Vitae vel id earum est blanditiis.', '2023-09-07 07:27:24', '2023-09-07 07:27:24'),
	(10, 65, 'Sit minima sit hic.', 'Enim expedita voluptatum ducimus temporibus. Perspiciatis non laboriosam voluptate aut qui qui est et. Consequatur omnis cum maiores quo velit et et. Ipsa autem vel qui enim. Recusandae quis ullam voluptatem molestias. Debitis minus reiciendis voluptas dolore. Delectus ratione eos quo debitis in voluptatem. Quos temporibus ratione odit sapiente.', '2023-09-07 07:27:24', '2023-09-07 07:27:24'),
	(11, 66, 'Et est omnis enim rerum aut.', 'Facere rerum velit nostrum enim. Nihil sed sunt quae nisi temporibus et voluptas. Quia fuga neque tempore in maxime voluptas ut pariatur. Vero vitae omnis aut. Officia necessitatibus facere sapiente ducimus consequuntur voluptate rerum in. Debitis doloribus voluptas autem molestias adipisci. In qui et exercitationem aliquid amet temporibus. Modi est velit et aliquid sit.', '2023-09-07 07:27:24', '2023-09-07 07:27:24'),
	(12, 66, 'Quae incidunt qui dolores harum voluptas tempora.', 'Accusantium debitis ea doloribus doloremque debitis dolor. Omnis maiores minus reprehenderit in. Ducimus consequatur culpa mollitia amet at excepturi molestiae. Quas est praesentium qui temporibus eum id voluptas id. Nam itaque nobis non est quaerat labore. Amet nisi reiciendis sapiente eum veritatis nihil rerum voluptas. Eligendi illo et neque velit ducimus deserunt molestias.', '2023-09-07 07:27:24', '2023-09-07 07:27:24'),
	(13, 66, 'Et amet suscipit quas sit.', 'Autem quis id eos et rem qui. Ipsam accusamus voluptatem animi consectetur. Quia qui non et sed quo odit quia. Nesciunt nihil ut delectus velit et ut. Aut corrupti minus consequatur. Corrupti illo error nihil dolor qui. Non quo sint ullam dicta in error autem. Cupiditate voluptatem optio et voluptas saepe laborum vero magnam. Deserunt qui illo recusandae sunt id est.', '2023-09-07 07:27:24', '2023-09-07 07:27:24'),
	(14, 67, 'Excepturi cupiditate eum velit nam.', 'Eius unde voluptatem itaque maxime sed sed. Vel non animi illum molestiae. Quidem est nobis dolorem laborum repellendus excepturi perspiciatis. Voluptatem aliquam non voluptates laborum aliquid corrupti et. Rerum est laudantium nisi est et illum nulla. Iure ut temporibus quasi in modi. Dolores illo quia deserunt aut porro.', '2023-09-07 07:27:24', '2023-09-07 07:27:24'),
	(15, 68, 'Hic et voluptatem sunt facere sunt.', 'Molestiae odit amet enim quae sit et sed. Delectus ut cumque rem impedit dolores numquam. Id nostrum dolorem fugit et beatae alias omnis. Nostrum vitae non et voluptatibus aut est. Quisquam sequi enim doloribus magnam aut quisquam delectus. Accusamus voluptas qui voluptatum iusto sunt. Est ea quos dolorem.', '2023-09-07 07:27:24', '2023-09-07 07:27:24'),
	(16, 68, 'Rerum ipsam possimus est iste.', 'Tempore nam cupiditate eum. Quasi dolor ut vitae et sapiente veniam deserunt. Vel eveniet quia nemo quod impedit. Dolor minus quis non aut. Velit repellendus ut nihil quia qui itaque rerum in. Eius eos quis rerum molestiae omnis. Aut quibusdam aspernatur dignissimos modi quas corrupti occaecati. Illo fuga possimus labore rerum aut pariatur.', '2023-09-07 07:27:24', '2023-09-07 07:27:24'),
	(17, 68, 'A ut magnam aut.', 'Est quo illo doloremque ipsam rerum incidunt. Debitis expedita dignissimos et. Aliquam amet tempore itaque iusto est soluta. Distinctio voluptatem quo nesciunt maiores ducimus voluptatum animi. Tempore ut nostrum natus iure. Est incidunt ab amet et non modi. Dolor deleniti quibusdam ratione maiores. Reiciendis odit pariatur facere veniam maxime.', '2023-09-07 07:27:24', '2023-09-07 07:27:24'),
	(18, 69, 'Necessitatibus nihil ipsum reiciendis ipsa harum.', 'Quia reprehenderit repellat voluptates sed numquam voluptate deserunt. Et aut qui quia in consequuntur repudiandae quo. Quae qui placeat quis. Nemo repudiandae odio autem eos. Dolorem culpa nisi quae assumenda ipsa. Sequi dolores quis illum optio possimus amet ipsum. Corporis quod aut maxime amet modi.', '2023-09-07 07:27:24', '2023-09-07 07:27:24'),
	(19, 69, 'Quia aut veritatis dolore culpa dolores a.', 'Omnis nemo rerum similique eum voluptates. Numquam facilis reiciendis quod voluptatem. Et et quis omnis in animi natus ad corporis. Nulla eveniet nihil quasi debitis. Nobis dicta aut repellendus perspiciatis molestias. Reprehenderit sint sit distinctio quod eos. Et sapiente quis qui et facilis non ex. Aut alias perspiciatis et maiores vel.', '2023-09-07 07:27:24', '2023-09-07 07:27:24'),
	(20, 70, 'Velit ipsam aliquam asperiores rerum.', 'Laudantium atque est omnis ad quia. Est dicta quisquam vel tenetur quia laborum. Amet et eligendi quis ut. Omnis sed reiciendis qui. At enim consequatur sunt molestiae consectetur. Id veniam magni deserunt recusandae rerum. Rerum vel earum temporibus. Nisi similique sint non aut sunt. Error ab porro pariatur occaecati.', '2023-09-07 07:27:24', '2023-09-07 07:27:24'),
	(21, 70, 'Mollitia sunt adipisci rem reprehenderit et ea.', 'Soluta est nobis aut aut voluptatem libero. Aspernatur consequuntur id a nihil nostrum assumenda. Est et qui architecto in quos qui molestiae. Illo eum dolores non cupiditate fugiat sit. Accusantium nihil pariatur culpa vel minus. In consequuntur molestiae ut et pariatur itaque. Et facilis id nisi qui. Qui non quo unde dolorem sed.', '2023-09-07 07:27:24', '2023-09-07 07:27:24'),
	(22, 71, 'Ipsa sed facilis sed.', 'Omnis molestiae assumenda nulla provident veniam quis nobis dolore. Non deleniti praesentium ipsum dolor officiis nostrum vitae. Eum quia beatae consequatur excepturi et. Quidem ipsam qui amet est necessitatibus. Voluptas dolore id ut facere. Voluptatum unde reprehenderit temporibus voluptatum culpa quo magni. Qui ut quo animi.', '2023-09-07 07:27:25', '2023-09-07 07:27:25'),
	(23, 72, 'Qui qui ut adipisci voluptatem.', 'Est harum reprehenderit autem. Consequatur nemo libero sint quo repellendus quis. Et voluptatem laboriosam facilis. Voluptatem minima quas nobis quia. Sed ipsum voluptatem et veniam saepe quaerat recusandae. Qui necessitatibus repellat quasi. Impedit sequi sunt deleniti sit reprehenderit.', '2023-09-07 07:27:25', '2023-09-07 07:27:25'),
	(24, 72, 'Libero rerum voluptatibus labore unde dicta.', 'Accusantium qui ullam sit eaque. Ut reiciendis corrupti et sit praesentium ad quasi accusamus. Odit omnis eum explicabo dolorem placeat. Consequatur esse distinctio ratione. Quae autem voluptate occaecati nihil qui. Hic quo id perspiciatis. Et omnis laboriosam architecto nulla.', '2023-09-07 07:27:25', '2023-09-07 07:27:25'),
	(25, 73, 'Itaque ipsam at animi voluptatem.', 'Vel nesciunt neque esse ea. Reiciendis necessitatibus qui fuga sed mollitia voluptatem. Ad modi et dignissimos qui iusto voluptatum inventore. Labore quae aperiam perspiciatis repellendus. Aut inventore non soluta provident eum. Quia ad voluptatibus repellendus. Ut id dolores aut voluptatem saepe.', '2023-09-07 07:27:25', '2023-09-07 07:27:25'),
	(26, 73, 'Et natus nisi perferendis fugiat.', 'Aut in in suscipit architecto ab ut. Itaque adipisci tempore fugiat. Eum culpa magni nihil suscipit dignissimos veniam. Corrupti sunt et est voluptas tempore minima. Explicabo dignissimos dolores quam. Omnis est atque inventore consequuntur a. Aut aut in et. Culpa distinctio ut id ut rerum perspiciatis blanditiis.', '2023-09-07 07:27:25', '2023-09-07 07:27:25'),
	(27, 73, 'Cumque ipsam error nam vitae qui.', 'Maiores voluptatem sint et velit ratione officiis molestiae. Odio molestiae veniam aut praesentium porro qui ipsa. Ut cumque voluptatibus non asperiores. Quam aut corporis nam. Dolorem architecto in culpa adipisci qui rerum velit. Officiis et repellendus eaque animi.', '2023-09-07 07:27:25', '2023-09-07 07:27:25'),
	(28, 74, 'Velit voluptatum perspiciatis voluptas molestias.', 'Facilis aspernatur explicabo numquam incidunt et aspernatur sapiente. Aut culpa alias ipsum. Inventore sit ut alias magnam voluptas exercitationem quia in. Laboriosam voluptatem quo et officiis accusantium. Quis officia ea eligendi inventore doloribus tempora eum ipsa. Debitis quia necessitatibus iure natus. Distinctio velit aut dolore et.', '2023-09-07 07:27:25', '2023-09-07 07:27:25'),
	(29, 74, 'Ea enim est odit sed repudiandae.', 'Doloremque neque et nobis. Quia unde quas quam esse non asperiores. Provident libero qui aut ut nam. Quasi culpa nostrum repellendus eligendi aut. Sed et nostrum hic qui dolores aliquam. Maiores perspiciatis eos et aut. Error dolorem id quo. Veritatis quasi sequi temporibus deleniti.', '2023-09-07 07:27:25', '2023-09-07 07:27:25'),
	(30, 75, 'Sed pariatur minima quae pariatur.', 'Blanditiis voluptate sequi dolor architecto nesciunt rerum porro. Eos eius qui voluptate voluptatibus. Non veritatis delectus quis. Pariatur excepturi necessitatibus laudantium ut. Et dicta vero iure consequatur dolore delectus earum.', '2023-09-07 07:27:25', '2023-09-07 07:27:25'),
	(31, 76, 'Fugiat dolorum nesciunt quae ratione a molestiae.', 'Vero ut sed quidem sint. Iste consectetur omnis incidunt sit ut nostrum. Et odio quae aut autem. Minus autem molestiae expedita modi suscipit. Sit voluptatem saepe illum blanditiis autem. Aut quae eum similique neque. Illum dolore consequatur harum beatae veniam blanditiis quis.', '2023-09-07 07:27:25', '2023-09-07 07:27:25'),
	(32, 76, 'Quia et aperiam laborum ut fugiat et.', 'Est vero blanditiis ea nulla labore. Occaecati molestiae magnam natus aut ratione provident. Molestiae placeat aliquid sunt tempore. Molestias est impedit non tempora est enim. Mollitia animi omnis consequatur dicta. Quidem facilis et nostrum mollitia. Tempore odio illo doloribus ut. Vero id non nemo voluptates perspiciatis dolores neque incidunt.', '2023-09-07 07:27:25', '2023-09-07 07:27:25'),
	(33, 76, 'Sequi saepe labore et aut error autem.', 'Harum dolorum voluptatem laboriosam facere voluptates esse. Odit aliquid autem et eaque. Enim impedit provident amet rerum laborum et adipisci. Ipsa eum similique dolor quia harum maiores. Aut qui esse voluptatem iusto. In molestias velit facere et vel iure. Eum vel ad sequi provident autem sunt. Nostrum nam id magnam molestias a velit ab.', '2023-09-07 07:27:25', '2023-09-07 07:27:25'),
	(34, 77, 'Est fugiat tenetur quas ab ducimus placeat nihil.', 'Quia minima aspernatur sunt eum. Ut nihil est neque incidunt sit neque. Perferendis magni dolorem sint officiis suscipit voluptas delectus. Et vitae et nam sint sapiente est quia. Odio voluptatum assumenda in veniam fugiat. Quia tenetur dolorum porro non aut. Exercitationem consequuntur consequatur nesciunt placeat unde impedit praesentium. Facere pariatur deserunt aliquid rem voluptates eum.', '2023-09-07 07:27:25', '2023-09-07 07:27:25'),
	(35, 77, 'Ipsa corporis et quam consectetur ut quod.', 'Accusantium exercitationem sit nam. Ipsum voluptate possimus est quia optio enim laborum. Eum fugiat placeat alias voluptate tempora qui consectetur. Culpa est incidunt repudiandae rerum soluta. Quam aut consectetur sed aliquam. Et eos necessitatibus velit repudiandae consequuntur illo dolorem. Sint tenetur aut sed sed quasi omnis in. Tempore blanditiis sed voluptatem.', '2023-09-07 07:27:25', '2023-09-07 07:27:25'),
	(36, 78, 'Temporibus voluptas et quis magni autem aut.', 'Id accusamus est libero qui fugiat perferendis. Blanditiis et qui doloremque eaque molestiae explicabo quos. Odit consequatur in dolorem ut consequatur officia. Libero dolores a in debitis enim maxime perferendis. Repellat nobis aut nostrum non. Suscipit consequuntur nesciunt dolores sit. Doloribus ut error sunt consequatur architecto voluptatum.', '2023-09-07 07:27:25', '2023-09-07 07:27:25'),
	(37, 78, 'Id sit vitae in ab iure debitis.', 'Est fugit est quas rerum laudantium eius quia. Aut voluptates quis sapiente aliquam. Laboriosam vero enim consequatur tempora velit. Commodi explicabo dolores quae et. Necessitatibus vitae eum distinctio. Doloribus voluptate eum explicabo vel nobis et rem. Libero voluptas ipsum molestiae asperiores quaerat. Sunt omnis quasi dolores in illum ut.', '2023-09-07 07:27:25', '2023-09-07 07:27:25'),
	(38, 79, 'Culpa id et perferendis magnam expedita.', 'Non amet aliquid omnis vitae ut. Earum quae fugit esse dolorem eum. Tenetur consequatur consequatur delectus numquam. Neque delectus tempora voluptatem qui. Reiciendis nulla non esse ipsum sed ex nulla. Omnis nulla accusamus in molestias. Perferendis voluptas natus at cupiditate.', '2023-09-07 07:27:25', '2023-09-07 07:27:25'),
	(39, 79, 'Aliquid itaque dignissimos voluptate odio.', 'Et nostrum porro quos voluptatem natus. Fugit blanditiis sunt a inventore omnis dignissimos ab. Non eaque earum a. Est sapiente eligendi voluptas ullam ea asperiores qui ab. Corporis laboriosam corrupti necessitatibus beatae culpa. Laudantium molestiae facere molestiae vitae. Natus libero dolor animi delectus numquam numquam accusamus. Et iusto a provident sit.', '2023-09-07 07:27:25', '2023-09-07 07:27:25'),
	(40, 80, 'Nostrum ut enim occaecati a beatae.', 'Ipsa quae hic eius officia ad error qui totam. Voluptatem enim rerum et veritatis repudiandae sit corporis voluptas. Accusamus sed quidem et vitae. Labore voluptate qui occaecati dolor est unde sit. Sequi dolorem vel et sint in rerum. Pariatur voluptatibus alias soluta occaecati at nulla recusandae.', '2023-09-07 07:27:25', '2023-09-07 07:27:25'),
	(41, 80, 'In non et beatae a tenetur nam sunt.', 'Molestiae enim autem ea accusamus officiis et numquam. Eum sapiente laboriosam totam aliquam ducimus. Repellat earum iusto praesentium distinctio. Quas quia assumenda sunt voluptas molestias non accusantium. Velit et cupiditate quibusdam. Et id laboriosam enim quo ipsam totam eum.', '2023-09-07 07:27:25', '2023-09-07 07:27:25'),
	(42, 80, 'Accusantium est enim ut eligendi delectus eum.', 'Corrupti aut totam occaecati voluptas commodi ad. Blanditiis eos eveniet in. Molestias explicabo praesentium id nobis. Facilis deserunt sed voluptatem deleniti recusandae. Optio mollitia sit et et. Suscipit aspernatur voluptas voluptas. Sapiente temporibus totam quam doloremque qui distinctio. Id qui eaque et quod illo. Sunt aut repudiandae esse doloremque. Ullam sunt dolore fugiat aperiam et et.', '2023-09-07 07:27:25', '2023-09-07 07:27:25'),
	(43, 81, 'Corporis molestiae sapiente est distinctio quo.', 'Voluptatum quisquam et repudiandae molestias est. Beatae aut voluptatibus eius unde autem ea dolore. Eius quo occaecati non laborum quia maiores qui. Dicta alias quo incidunt quaerat. Est harum perspiciatis consectetur eos. Natus doloribus rerum dolores consectetur nostrum et. Qui amet sint quia et. Et quam iure quaerat pariatur quaerat et.', '2023-09-07 07:27:25', '2023-09-07 07:27:25'),
	(44, 81, 'Aut aperiam a ducimus sed.', 'In animi itaque et natus tempore. Tempora facere libero officia magnam praesentium est. Error aut nostrum nulla praesentium excepturi qui in modi. Placeat ratione qui consectetur optio maxime. Asperiores repellendus necessitatibus voluptatum illum rem quo. Illo similique repellendus sint.', '2023-09-07 07:27:25', '2023-09-07 07:27:25'),
	(45, 81, 'Rem velit sequi officia ea quis.', 'Sit quod quibusdam qui dolorum ipsa. Debitis sed eius recusandae. Sequi sit maiores quia. Nulla quae id sint eveniet ipsum fugiat id enim. Corrupti error hic sint nisi dolorem accusantium ut. Quis vel sunt cumque id rerum. Autem commodi dolores aspernatur et. Et atque accusantium voluptates.', '2023-09-07 07:27:25', '2023-09-07 07:27:25'),
	(46, 82, 'Nobis tenetur dicta qui ex ex aspernatur.', 'Rerum et ullam et et at non. Consequatur consequuntur voluptas modi adipisci blanditiis reprehenderit. Voluptatum provident fuga cumque hic magni. Ducimus laboriosam voluptas optio aut quasi. Aut numquam aut quas sed et mollitia. Ad laudantium ea vero. Sit magnam illum eius consectetur doloribus. Et nemo non temporibus ratione ipsum accusamus.', '2023-09-07 07:27:25', '2023-09-07 07:27:25'),
	(47, 82, 'Neque natus perspiciatis ipsam rem aperiam unde.', 'Eligendi rem odit corrupti beatae. Et libero voluptatem accusamus neque non. Minus omnis et recusandae laborum voluptas nisi. Aliquid eius expedita sed qui enim et. Quam repellat labore veritatis beatae nobis perspiciatis. Dolorum aut commodi odit repellendus cupiditate ut debitis. Eos quo sit et accusamus dolore. Et sequi consequatur ut mollitia sed nemo eos.', '2023-09-07 07:27:25', '2023-09-07 07:27:25'),
	(48, 83, 'Provident sit est et dicta.', 'Voluptate ipsam commodi nulla ut vero ut temporibus. Debitis unde saepe in debitis repudiandae enim. Omnis accusamus qui nam mollitia. Molestiae debitis aut id sint qui non et architecto. Esse ipsa vitae et et dignissimos rerum nam.', '2023-09-07 07:27:25', '2023-09-07 07:27:25'),
	(49, 84, 'Similique totam voluptate amet nihil.', 'Quia incidunt nesciunt dignissimos consectetur unde totam laudantium. Dolorum est natus facere. Nesciunt enim eius temporibus laborum sit. Iusto in natus accusamus odit repellendus quisquam. Molestias officia dicta magnam mollitia temporibus. Voluptatibus rerum aut quia quo ipsam minima. Aut in autem minima ea illo quo.', '2023-09-07 07:27:25', '2023-09-07 07:27:25'),
	(50, 85, 'Harum qui rem beatae omnis sunt.', 'Et ut animi exercitationem quia. Ut eum sit velit voluptate magni qui. Doloremque eius reprehenderit dolores non beatae. Quis iure repellendus ab aspernatur natus et. Repellat facilis impedit maiores eos delectus. Nobis est magni quia iste. Autem laboriosam eos aliquam occaecati et. Autem aut quia ea omnis et.', '2023-09-07 07:27:25', '2023-09-07 07:27:25'),
	(51, 85, 'Veniam dolore sed minima quia.', 'Natus rerum voluptatem exercitationem voluptatem ut asperiores illo. Accusamus voluptatibus et voluptates. Molestiae optio vitae quo sint. Rerum totam blanditiis excepturi cum sit voluptates quo quia. Est in beatae sunt porro quibusdam sit repellendus. Nostrum voluptates facere nulla suscipit sed ipsam cupiditate eum. Tenetur quas veniam in quidem.', '2023-09-07 07:27:25', '2023-09-07 07:27:25'),
	(52, 85, 'Voluptas natus ut repudiandae sed.', 'A iure ea dolorem occaecati. Quam minima rerum odio eum corporis dolore quaerat. Voluptate expedita qui nihil sit id et laudantium. Ut labore quos odio sequi suscipit. Rem quisquam non eos tempora quidem atque suscipit minima. Est iure reprehenderit ducimus sequi quaerat. Accusantium ad ut illo quia.', '2023-09-07 07:27:25', '2023-09-07 07:27:25'),
	(53, 86, 'Voluptatem aut veniam voluptatem.', 'Architecto dolorum enim corrupti ea ea. Voluptas officia eum dolor eum aut quibusdam rerum. Qui incidunt beatae quia veniam. Architecto eos doloribus sed ea. Voluptas qui architecto magni deserunt quia quas quas provident. In qui veritatis qui repellendus blanditiis ut.', '2023-09-07 07:27:25', '2023-09-07 07:27:25'),
	(54, 87, 'Commodi suscipit et omnis pariatur ea rerum nemo.', 'Assumenda sunt atque sed. Qui inventore beatae repellendus veritatis quia quo amet veritatis. Cum qui enim incidunt. Maxime aut laborum est. Dolores quam et est cupiditate quo. Ducimus fuga nihil repellendus ullam vel placeat. Beatae reprehenderit id aliquid perspiciatis itaque. Et est optio quia maxime dolor. Doloribus ut dolores dolor nihil ab. Laudantium voluptatem quas ipsam laboriosam rerum.', '2023-09-07 07:27:25', '2023-09-07 07:27:25'),
	(55, 87, 'Neque ut autem ut facere.', 'Possimus eum quo temporibus et consequuntur enim aut. Ut nobis nihil placeat architecto consectetur qui et. Sit officia dolores est tempora ea. Voluptates recusandae sequi incidunt dolore ex est saepe. Quas et natus ipsa laboriosam et ipsum. Repellendus totam quis unde enim. Eos ea beatae autem ut reiciendis velit.', '2023-09-07 07:27:25', '2023-09-07 07:27:25'),
	(56, 87, 'Sit quod autem aut et earum quaerat culpa.', 'Et ut sed excepturi voluptatibus aspernatur unde. Non culpa qui consectetur consequatur. Libero soluta quasi aut iusto consectetur. Eum id nemo animi quas eum omnis occaecati. Odio nulla et animi. Molestiae pariatur omnis nihil fuga nesciunt ut. Vel nemo odio fuga ad aut cum. Est enim vero adipisci quis qui minus dolor amet.', '2023-09-07 07:27:25', '2023-09-07 07:27:25'),
	(57, 88, 'Quia ut dolorem officiis nihil sint.', 'Aut accusamus occaecati officiis temporibus vel vel iure unde. Placeat eum non quae occaecati dolor repellendus eaque. Quia enim autem aliquam dolore sapiente. Culpa quo error voluptatibus quia ex et. Occaecati tenetur aliquam explicabo eligendi quis. Aliquam unde praesentium quas alias inventore est. Molestiae cumque quia eum.', '2023-09-07 07:27:25', '2023-09-07 07:27:25'),
	(58, 88, 'Et ad odio illo eum.', 'Eveniet consequatur ipsum optio. Omnis animi et quo reiciendis porro doloribus dolorum. Quia id velit sunt quibusdam perspiciatis. A nesciunt non minima quia tempora eum. Quod sit amet fugiat atque consequatur. Totam exercitationem fugit iure a vitae nisi. Ipsa qui voluptatum molestiae doloribus. Et dolorem est enim eum assumenda ut. Fugit possimus maiores in. Officia et aut et dolor minus.', '2023-09-07 07:27:26', '2023-09-07 07:27:26'),
	(59, 89, 'Odio vel optio nesciunt repellat.', 'Voluptatem aspernatur totam et culpa saepe. Earum molestias voluptatum praesentium magnam. Pariatur esse laudantium eum nam adipisci corporis. Ab quia blanditiis unde magnam magni corporis et. Ex ut est et fugit magnam dolor. Voluptate architecto dolore necessitatibus tempora debitis cupiditate. Cum quod similique deserunt assumenda quis esse ut. Dolorem autem nesciunt aliquam explicabo.', '2023-09-07 07:27:26', '2023-09-07 07:27:26'),
	(60, 89, 'Omnis aut hic velit voluptatem nisi aut.', 'Dolorem praesentium perspiciatis voluptatem tempore rerum odio. Aut voluptatem commodi sed animi ut voluptas veritatis. Laborum non error pariatur dolore autem temporibus sunt. Odit omnis ut eos est ea. Ut velit voluptatem perferendis sit. Ipsum hic reiciendis aut similique omnis tempore in dolor. Non consequatur quam fuga est natus consectetur.', '2023-09-07 07:27:26', '2023-09-07 07:27:26'),
	(61, 90, 'Est sunt recusandae culpa officiis doloremque.', 'Dignissimos perferendis magni et quas tempora. Deserunt omnis ut quia veritatis officiis eum. Mollitia cupiditate eveniet nulla ut eaque est facere veritatis. Id est et et modi natus earum vitae. Quod sed dignissimos autem. Sit voluptate eum omnis. Cupiditate molestias dolor eos nam nesciunt aut.', '2023-09-07 07:27:26', '2023-09-07 07:27:26');

-- Structuur van  tabel code_wizards.users wordt geschreven
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `role` varchar(25) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT (now()),
  `updated_at` timestamp NOT NULL DEFAULT (now()),
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=91 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumpen data van tabel code_wizards.users: ~60 rows (ongeveer)
INSERT INTO `users` (`id`, `email`, `password`, `name`, `role`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(31, 'dkorstman@sam.net', 'secret', 'ing. Pippa die Witte BA', NULL, '2023-09-07 07:23:02', '2023-09-07 07:23:02', NULL),
	(32, 'hvandermeer@vantriet.org', 'secret', 'Anouk Demir', NULL, '2023-09-07 07:23:02', '2023-09-07 07:23:02', NULL),
	(33, 'rick47@vangent.nl', 'secret', 'ir. Lucas Smits MA', NULL, '2023-09-07 07:23:02', '2023-09-07 07:23:02', NULL),
	(34, 'julian.kok@vandenheuvel.com', 'secret', 'Eva Bakker', NULL, '2023-09-07 07:23:02', '2023-09-07 07:23:02', NULL),
	(35, 'cterry@yahoo.nl', 'secret', 'Iris de Strigter', NULL, '2023-09-07 07:23:02', '2023-09-07 07:23:02', NULL),
	(36, 'vanheusden.florian@live.nl', 'secret', 'Roan Groen', NULL, '2023-09-07 07:23:02', '2023-09-07 07:23:02', NULL),
	(37, 'thom.bosman@mohammad.com', 'secret', 'Annemijn Kurt', NULL, '2023-09-07 07:23:02', '2023-09-07 07:23:02', NULL),
	(38, 'noelle63@gmail.com', 'secret', 'Ian de Koning Bsc', NULL, '2023-09-07 07:23:02', '2023-09-07 07:23:02', NULL),
	(39, 'vantwel.owen@yahoo.nl', 'secret', 'Job Le', NULL, '2023-09-07 07:23:02', '2023-09-07 07:23:02', NULL),
	(40, 'nvansuinvorde@wright.nl', 'secret', 'Maja Ismail', NULL, '2023-09-07 07:23:02', '2023-09-07 07:23:02', NULL),
	(41, 'bart.buijs@cetin.org', 'secret', 'Liza van Veen LLB', NULL, '2023-09-07 07:23:02', '2023-09-07 07:23:02', NULL),
	(42, 'joelle99@yahoo.nl', 'secret', 'ds. Fiene Kalloe MPhil', NULL, '2023-09-07 07:23:02', '2023-09-07 07:23:02', NULL),
	(43, 'bibi.vanleeuwen@yahoo.nl', 'secret', 'Arie van der Smeede Msc', NULL, '2023-09-07 07:23:02', '2023-09-07 07:23:02', NULL),
	(44, 'ceylin99@yahoo.nl', 'secret', 'Suus Geerman', NULL, '2023-09-07 07:23:02', '2023-09-07 07:23:02', NULL),
	(45, 'chris.prins@vandepol.net', 'secret', 'mr. Eva van Vliet Msc', NULL, '2023-09-07 07:23:02', '2023-09-07 07:23:02', NULL),
	(46, 'esther.bosch@vanderklijn.org', 'secret', 'Joost Jansen AD', NULL, '2023-09-07 07:23:02', '2023-09-07 07:23:02', NULL),
	(47, 'rafael.wouters@ramcharan.org', 'secret', 'Ninthe Narain D', NULL, '2023-09-07 07:23:02', '2023-09-07 07:23:02', NULL),
	(48, 'maas.zoey@bouthoorn.org', 'secret', 'prof. Cas Bezemer AD', NULL, '2023-09-07 07:23:02', '2023-09-07 07:23:02', NULL),
	(49, 'ivy.vanbreukeleveen@muijs.nl', 'secret', 'dr.h.c. Pien Jansen B', NULL, '2023-09-07 07:23:02', '2023-09-07 07:23:02', NULL),
	(50, 'dvanhaeften@galenzone.nl', 'secret', 'prof. Simon Simsek', NULL, '2023-09-07 07:23:02', '2023-09-07 07:23:02', NULL),
	(51, 'zeynep75@live.nl', 'secret', 'Philip Ooms PhD', NULL, '2023-09-07 07:23:02', '2023-09-07 07:23:02', NULL),
	(52, 'louise50@live.nl', 'secret', 'Frederique Jansen', NULL, '2023-09-07 07:23:02', '2023-09-07 07:23:02', NULL),
	(53, 'kai.cicek@hotmail.nl', 'secret', 'bc. Mart Rijcken', NULL, '2023-09-07 07:23:02', '2023-09-07 07:23:02', NULL),
	(54, 'selina.janssen@vanderkint.nl', 'secret', 'Brent de Haan', NULL, '2023-09-07 07:23:02', '2023-09-07 07:23:02', NULL),
	(55, 'ryildiz@lommert.com', 'secret', 'Michael Perkins', NULL, '2023-09-07 07:23:02', '2023-09-07 07:23:02', NULL),
	(56, 'yfke92@gmail.com', 'secret', 'bacc. Aiden Jansen AD', NULL, '2023-09-07 07:23:02', '2023-09-07 07:23:02', NULL),
	(57, 'dehaan.jill@live.nl', 'secret', 'prof. Mohammed van der Veen', NULL, '2023-09-07 07:23:02', '2023-09-07 07:23:02', NULL),
	(58, 'naud67@hotmail.nl', 'secret', 'Fenne den Buytelaar', NULL, '2023-09-07 07:23:02', '2023-09-07 07:23:02', NULL),
	(59, 'desmit.mees@live.nl', 'secret', 'ds. Evi Biharie', NULL, '2023-09-07 07:23:02', '2023-09-07 07:23:02', NULL),
	(60, 'inarain@vandenhoek.com', 'secret', 'Aya Brumleve', NULL, '2023-09-07 07:23:02', '2023-09-07 07:23:02', NULL),
	(61, 'suus.vanhaspengouw@hotmail.nl', '$2y$10$Iu/2Iftpnmq0yZmnMuZCJuejLk92l97EU8KgUSZSZqSOG3ymtuE4O', 'Britt Kallen', NULL, '2023-09-07 07:27:24', '2023-09-07 07:27:24', NULL),
	(62, 'vandeberg.sophia@sambo.com', '$2y$10$mhg7mDVeRC8kK/N25Kzrk.g6Q2lvLkq4LVOouF6O.192BSqiS.bMm', 'Marijn Gerritsen Bsc', NULL, '2023-09-07 07:27:24', '2023-09-07 07:27:24', NULL),
	(63, 'kort.stef@scholten.nl', '$2y$10$ITnBtU28G2EBN4YQ0YRy6.aOtQBbIrGezKAIE0fMRtLw9M1UIor0C', 'ds. Maurits Lensen', NULL, '2023-09-07 07:27:24', '2023-09-07 07:27:24', NULL),
	(64, 'vanveen.jake@galijn.net', '$2y$10$wnIx6Uis0YKtI6WGLzcxye07aqEjj6.G5QRWIWcJEiOEp7Ozh0N3G', 'Luke Geldens AD', NULL, '2023-09-07 07:27:24', '2023-09-07 07:27:24', NULL),
	(65, 'puck16@diesbergen.nl', '$2y$10$sVFMxQhWGyF9coXE9ZpPeeUp0YJNmTjqTFdlJeaBV4UuoF9Sl2Qfq', 'Ties Huisman', NULL, '2023-09-07 07:27:24', '2023-09-07 07:27:24', NULL),
	(66, 'yuksel.tess@devos.net', '$2y$10$vTpzaVN.2VpY75Rr66duZ.UDkuzPGTa72AjgILh9bzUiBgvm4eQT2', 'ing. Janna Spiegelmaker Spanjaard', NULL, '2023-09-07 07:27:24', '2023-09-07 07:27:24', NULL),
	(67, 'farah.justin@hotmail.nl', '$2y$10$uxzAaK2CYSCbxqX6SHtAGOT.ahDrcOLLi5zHFz9RKE/zSnP0YQf9K', 'Merle Wijland', NULL, '2023-09-07 07:27:24', '2023-09-07 07:27:24', NULL),
	(68, 'hunal@westerbeek.org', '$2y$10$9uWMvvfxSUOn7XZJZiD7L.TDIl5KyKHk8W7bsnKJPQaQYuW/dY8su', 'Loes Kuijpers', NULL, '2023-09-07 07:27:24', '2023-09-07 07:27:24', NULL),
	(69, 'isa23@mallien.org', '$2y$10$UknBBffPw19pOeTQUlPgt.W/2NnBKcskpgJfuGf44SUHV37wefUsq', 'Ivan de la Fleche', NULL, '2023-09-07 07:27:24', '2023-09-07 07:27:24', NULL),
	(70, 'lvandommelen@denijs.nl', '$2y$10$vYeUeBQ5sSe2Ze4sc0irvuPwdzzuqcz0CHbTweQM5txbqwrvBz9fi', 'kand. Floortje Adriaansen', NULL, '2023-09-07 07:27:24', '2023-09-07 07:27:24', NULL),
	(71, 'lucas24@yahoo.nl', '$2y$10$3jBwhMHqXdGahu.Yu7hJEe59.wI.5iZacYMlbcG6EtNeSucsKCcwy', 'Daan van der Heijden', NULL, '2023-09-07 07:27:25', '2023-09-07 07:27:25', NULL),
	(72, 'volcke.azra@live.nl', '$2y$10$u72eHw/XDW2Uwr1IOFdfaeeXj2GHv20aQPr.vxOWkPzDSwpliVcO.', 'Mohammed de Haan', NULL, '2023-09-07 07:27:25', '2023-09-07 07:27:25', NULL),
	(73, 'noud.vandeveen@vandegreef.com', '$2y$10$K2qe/eK4xjV6I824W6wnUuqxEPZusnwVM.L72mJzxJM5z31bOqI.i', 'Kayleigh Versluijs', NULL, '2023-09-07 07:27:25', '2023-09-07 07:27:25', NULL),
	(74, 'vandenvelde.isis@yahoo.nl', '$2y$10$zs.sMYpjldvAuE.vDnCV9Or0PPFYE6rY93eeV1pSs4gG80AB7I1Ee', 'kand. Catharina Postma', NULL, '2023-09-07 07:27:25', '2023-09-07 07:27:25', NULL),
	(75, 'yfke.erdogan@yahoo.nl', '$2y$10$GErCBoxZ08eEDQvsjymAg.NTPKLy8mTWKMKgiGx4LDqcH7n3HD/hi', 'Britt van der Velden', NULL, '2023-09-07 07:27:25', '2023-09-07 07:27:25', NULL),
	(76, 'bruggeman.finn@hotmail.nl', '$2y$10$kHDlkV9YsBx6dGKwVgHvNeSz1qaqrzl31MDFuT6yV2PU7ZhZ.ckMK', 'ir. Niels Woudenberg', NULL, '2023-09-07 07:27:25', '2023-09-07 07:27:25', NULL),
	(77, 'rwinklaar@vandeveen.org', '$2y$10$yvyew8JNb17cX7T/2avI/eUXb6WJ14KHqItdy2FOhXeM49UCAWDze', 'Bryan Wagenvoort MA', NULL, '2023-09-07 07:27:25', '2023-09-07 07:27:25', NULL),
	(78, 'ayoub.hulst@vandeven.nl', '$2y$10$kOLtnxBn8vmDiLfI.7dTJuT4RlTKmwiLYyddg4S9oS/AZ7x406fMC', 'Amira Dubbeldemuts van der Sluys', NULL, '2023-09-07 07:27:25', '2023-09-07 07:27:25', NULL),
	(79, 'twan.bozkurt@hondeveld.nl', '$2y$10$vb1O6wOOI/GHCZqtr1Oa7e5RdfqE.BPqVNh7zO5SYPfZvydEuv87G', 'Zeynep Serra', NULL, '2023-09-07 07:27:25', '2023-09-07 07:27:25', NULL),
	(80, 'esmee.vink@rackham.nl', '$2y$10$pB.HNu.8H4Xs4DahpTiyVuL9XNMqPxCwe4AkySLKFK61zPwpcm1XG', 'bacc. Lizz Aktaş AD', NULL, '2023-09-07 07:27:25', '2023-09-07 07:27:25', NULL),
	(81, 'myrthe.koningknol@ozdemir.com', '$2y$10$4cOstn2N1KQw24ytFa5lSu6O5b06yv5IG4Y9FOAtE9thSRJQdLbY2', 'Tessa Ehlert MA', NULL, '2023-09-07 07:27:25', '2023-09-07 07:27:25', NULL),
	(82, 'jade.vanbovene@dewit.net', '$2y$10$L/mCvKvcR2qZHRxPbJXi4.mykbeeHup4qLKwIw4oh6RsXrbfdTgLW', 'Yara van de Velden LLM', NULL, '2023-09-07 07:27:25', '2023-09-07 07:27:25', NULL),
	(83, 'ivandongen@yahoo.nl', '$2y$10$SmJABeIbkEvb1smewbGV8Oo0dtPMd4qSjWDbg1OYYrjUnS3Cvr2IS', 'Micha Wolters LLM', NULL, '2023-09-07 07:27:25', '2023-09-07 07:27:25', NULL),
	(84, 'sjoerd.mater@peeters.net', '$2y$10$ykr2yM7oI4P/e1t2dt/d4eRW.MxPBKul3O3BW3.Fm8lFYA1A.80Ma', 'Zoë Freshour', NULL, '2023-09-07 07:27:25', '2023-09-07 07:27:25', NULL),
	(85, 'daan95@yahoo.nl', '$2y$10$dKhQqqA6c/ct3zfI/pOQVO3CHfNQvTNL8ZLChWMM6xnMjhklf7YoG', 'drs Felix Brouwer MPhil', NULL, '2023-09-07 07:27:25', '2023-09-07 07:27:25', NULL),
	(86, 'oscar.keltenie@gmail.com', '$2y$10$d6BGNd8MVKTF9aOWanarDe.Kxx9TabR2qwhqLTfsk47E.OBt.AIfK', 'drs Sjoerd Overdijk Bsc', NULL, '2023-09-07 07:27:25', '2023-09-07 07:27:25', NULL),
	(87, 'yaktas@hotmail.nl', '$2y$10$s9MtBwEyEzOKMXmlAv42L.beG6HyV97ZEAFRSmtZV11I57Do7ABPC', 'Samuel Winters', NULL, '2023-09-07 07:27:25', '2023-09-07 07:27:25', NULL),
	(88, 'dylan.degroot@yahoo.nl', '$2y$10$1mHTBMzJolSVtDH/n.uArOjIYRJj0grX0iukJYBXPRf8/MBQQiIm.', 'Sterre Huisman', NULL, '2023-09-07 07:27:25', '2023-09-07 07:27:25', NULL),
	(89, 'adam.autar@gmail.com', '$2y$10$.mj7Kd1vVICwgEDDZcNeF.yk24dl4ekOpYi/WaiKPD4Qdr0ZNheNa', 'mr. Justin Cornelisse B', NULL, '2023-09-07 07:27:26', '2023-09-07 07:27:26', NULL),
	(90, 'samuel25@gmail.com', '$2y$10$2hEcwwVDvN57nbgNYt.7UeNRTvWOJw1z03g4IZyZvZceTeq0gmKsy', 'ir. Rick Kosten', NULL, '2023-09-07 07:27:26', '2023-09-07 07:27:26', NULL);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;