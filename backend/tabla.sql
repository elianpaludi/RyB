CREATE TABLE `galeria` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `image` longblob NOT NULL,
 `created` datetime NOT NULL,
 `titulo` varchar(32) NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;