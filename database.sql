CREATE TABLE `orders` (
  `id` int NOT NULL AUTO_INCREMENT,
  `type` varchar(10) NOT NULL,
  `name` varchar(100),
  `email` varchar(100),
  `account` varchar(100),
  `amount` decimal(10,2),
  `method` varchar(50),
  `status` varchar(20) DEFAULT 'pending',
  `created_at` timestamp DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
);

CREATE TABLE `admin` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50),
  `password` varchar(255),
  PRIMARY KEY (`id`)
);

CREATE TABLE `rates` (
  `id` int NOT NULL AUTO_INCREMENT,
  `method` varchar(50),
  `rate` decimal(10,2),
  PRIMARY KEY (`id`)
);