CREATE TABLE IF NOT EXISTS `users` (
 `id` int(15) NOT NULL AUTO_INCREMENT,
 `username` varchar(150) NOT NULL,
 `email` varchar(150) NOT NULL,
 `password` varchar(150) NOT NULL,
 `create_datetime` datetime NOT NULL,
 PRIMARY KEY (`id`)
);
