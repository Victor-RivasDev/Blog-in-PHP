# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: localhost (MySQL 11.3.2-MariaDB)
# Database: action
# Generation Time: 2025-06-18 21:05:04 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table links
# ------------------------------------------------------------

DROP TABLE IF EXISTS `links`;

CREATE TABLE `links` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `links` WRITE;
/*!40000 ALTER TABLE `links` DISABLE KEYS */;

INSERT INTO `links` (`id`, `title`, `url`, `description`)
VALUES
	(1,'Quia in veniam vero ullam ex','http://www.aufderhar.info/','Numquam veritatis earum fugit sed nam magni in tenetur. Sequi veniam excepturi quos eligendi ipsum. Fugit excepturi totam dolores vel ab.'),
	(2,'Quam neque aut optio ab quae et','http://www.rau.com/','Ea ipsum perferendis et odit qui fuga. Dolores vitae dolore voluptatem est ut voluptatem quia. Illo ut unde et laborum. Est ducimus quam dolorem repudiandae culpa.'),
	(3,'Neque impedit aut soluta','http://watsica.com/','Illo fugit repellat aut in. Quibusdam omnis quas harum voluptatem. Totam sunt ea labore magni iste voluptas voluptatum. Dolorem perferendis est et culpa nulla.'),
	(4,'Rerum facilis quas voluptas nemo dolore soluta qui','http://purdy.com/quod-aut-ab-ullam-et-voluptatem-fugiat','Corporis est fuga quis nulla ab quibusdam expedita. Quae error aut et inventore autem culpa. Minima ullam omnis nulla. Soluta sint qui optio cum tenetur inventore.'),
	(5,'Quod facere vero consequuntur qui necessitatibus quasi laudantium dolore','http://nolan.com/et-quod-quia-voluptatibus-ad-neque-hic','Perferendis et qui pariatur. Deserunt qui culpa est qui. Ut beatae qui dolor animi.'),
	(6,'Voluptatem est mollitia expedita iusto laboriosam suscipit','http://www.hoeger.biz/','Tempore aut voluptas sed. Corporis sunt et nulla iure quibusdam odit nemo. Unde molestias similique inventore qui eveniet alias incidunt.'),
	(7,'Earum iure dolor nobis quisquam enim','http://www.lindgren.info/dicta-autem-in-vitae-cumque-aliquam','Vero totam voluptatem accusantium ut facere incidunt cumque corrupti. Dolor nihil vel voluptatum omnis sed et. A architecto quibusdam enim. Suscipit culpa magni omnis perspiciatis eligendi non.'),
	(8,'Ducimus nostrum veniam recusandae ipsa iste alias quis','http://www.gleason.com/','Ab ut et voluptate eos ratione qui. Quod unde rerum aliquam laudantium reprehenderit perferendis. Perferendis accusantium accusantium ex.'),
	(9,'Et velit numquam est natus molestiae autem suscipit ut','http://greenholt.com/molestiae-neque-tempore-rerum-beatae.html','Deserunt id corrupti et hic fugiat. Ad voluptatem debitis tempora est necessitatibus. Omnis et eum sit eos qui. Iste eligendi explicabo ad ex ipsam dolor odit. Maiores rerum fuga sed consequatur.');

/*!40000 ALTER TABLE `links` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table posts
# ------------------------------------------------------------

DROP TABLE IF EXISTS `posts`;

CREATE TABLE `posts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `excerpt` text NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;

INSERT INTO `posts` (`id`, `title`, `excerpt`, `content`)
VALUES
	(1,'Dolorem quia enim ut sit vero suscipit quam','Deserunt consectetur natus impedit voluptate aut impedit. Cumque doloremque quam numquam natus esse dolorem non.','Corrupti omnis nemo perferendis officia corporis. Provident autem repellat vitae ipsa laudantium non. Omnis et aliquam deserunt.\n\nVoluptatum magnam quo provident aliquam. Odit et omnis explicabo eveniet quibusdam id ipsa. Saepe quia ut quae voluptatem est.\n\nOfficia qui quo ut fugiat voluptatem delectus. Ipsum itaque voluptas eligendi dolorem doloremque qui debitis. Quis sint odio enim eum hic voluptates qui molestiae. Pariatur quod aut aut sed.'),
	(2,'Consequatur expedita ut omnis esse porro voluptate','Et est et doloribus quidem ut sint quibusdam. Id molestiae voluptas qui tempora est. Alias delectus eligendi itaque perferendis libero aperiam aliquam.','Ut ea accusantium commodi ratione iure voluptatem et. Est beatae eaque delectus. Eveniet nobis vel fugit impedit laudantium magnam est.\n\nDucimus delectus nobis quia omnis. Quasi sed ad eius quo. Optio delectus ducimus sint recusandae iusto.\n\nExercitationem tenetur voluptas maxime quaerat nam pariatur. Facere in tenetur cum inventore excepturi. Dolor voluptas ratione at voluptates aut tempore. Eos accusantium iusto voluptas quia.'),
	(3,'Autem fuga consequuntur alias et nostrum unde','Laudantium voluptas perspiciatis consequatur quos quas enim non. Aut eveniet ipsam qui enim. Est cumque nihil nesciunt nam. Aspernatur et fugit dolores qui commodi eos. Ut maiores aut ducimus consequatur esse.','Perferendis accusamus dignissimos exercitationem aut dolore. Tempore voluptates sit quibusdam ullam.\n\nMaxime explicabo ea eligendi qui. Doloremque eligendi odit ex perferendis debitis. Accusantium non dolores vel est consequatur qui minus. Tenetur sed non aut dolorum neque doloribus. Soluta sed consectetur quibusdam dolorem illo repellat.\n\nAut quaerat neque illo voluptatem magni. Alias dignissimos nobis rerum debitis possimus. Eum aut sequi voluptatum quia ut nesciunt. Commodi et eligendi porro suscipit vitae excepturi.'),
	(4,'Ab ut occaecati fugit eaque','Eveniet natus voluptatem ut harum odit unde. Doloremque explicabo maiores autem.','Tempore velit molestiae at quam repellat neque repellendus. Nam at necessitatibus animi quis quibusdam dignissimos.\n\nEst et in velit modi. Nulla perferendis repellendus nesciunt consequuntur dolor expedita. Et qui eum et.\n\nSequi est hic fuga aperiam perferendis qui repellat. Nobis mollitia alias aut sunt nisi. Vel laborum nostrum sed qui molestiae fugit aliquid.'),
	(5,'Magni ratione blanditiis cumque','Quam omnis dolorem commodi alias deleniti fugiat. Magni occaecati cupiditate quia. Occaecati tempore eum iusto dolor architecto dolor. Eos libero provident illum aut minima quasi laudantium.','Eaque sit placeat quo doloremque laborum sed et. Recusandae et at facilis laboriosam iusto veniam saepe.\n\nItaque necessitatibus ea doloremque incidunt et. Voluptatibus omnis praesentium deserunt dolor eaque ea. Veniam eum adipisci ut aut id labore voluptatibus architecto. Sequi esse minima hic illum aut corporis non. Numquam officiis est omnis sunt non.\n\nCupiditate qui ipsam cupiditate delectus officia. Nisi quae et sed libero exercitationem. Voluptate officiis rem fugit culpa molestiae consequatur harum.'),
	(6,'Delectus dolorem nulla non voluptatem delectus consectetur quaerat','Temporibus molestiae non eveniet qui. Molestiae ea dolores fuga distinctio enim nihil molestiae. Autem et saepe iusto. Aut qui deserunt ipsum sapiente architecto quisquam deserunt.','Voluptatibus rerum laborum inventore mollitia autem reprehenderit expedita. Velit similique est quia iste qui explicabo veniam. Et facere ad aut optio consequatur voluptas officiis. Odit delectus voluptatem doloremque sunt et quidem.\n\nSit repellat nobis dolores. Fuga officiis eum qui repellat. Ducimus ullam officia voluptatibus ducimus provident et.\n\nQuo ipsa impedit explicabo sunt. In voluptatibus illo molestiae magnam perferendis sed autem. Accusantium aperiam quod repudiandae quo impedit unde suscipit. Dolor velit sequi id est quia sed.');

/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;