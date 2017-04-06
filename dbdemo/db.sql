CREATE TABLE `customer` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`name` varchar(255),
	`email` varchar(255),
	`state` varchar(30),
	PRIMARY KEY(`id`)
) ENGINE=InnoDB;