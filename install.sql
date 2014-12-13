CREATE TABLE `country` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `symbol` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY(`symbol`)
);

CREATE TABLE `customer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) UNIQUE NOT NULL,
  `facebook_id` varchar(255) DEFAULT NULL,
  `country_id` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `customer_fk1` FOREIGN KEY (`country_id`) REFERENCES `country` (`symbol`)
);


CREATE TABLE `food` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `country_id` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `customer_fk2` FOREIGN KEY (`country_id`) REFERENCES `country` (`symbol`)
);

CREATE TABLE `toys` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `country_id` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `customer_fk3` FOREIGN KEY (`country_id`) REFERENCES `country` (`symbol`)
);

CREATE TABLE `customer_gave_toys` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL,
  `toy_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `customer_fk4` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`),
  CONSTRAINT `customer_fk5` FOREIGN KEY (`toy_id`) REFERENCES `toys` (`id`)
);

CREATE TABLE `customer_gave_food` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL,
  `food_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `customer_fk6` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`),
  CONSTRAINT `customer_fk7` FOREIGN KEY (`food_id`) REFERENCES `food` (`id`)
);






insert into country values('', 'india', 'IN');
insert into country values('', 'brazil', 'BR');
insert into country values('', 'bulagria', 'BG');
insert into country values('', 'thailand', 'TH');
insert into country values('', 'mexico', 'MX');
insert into country values('', 'morocco', 'MA');
insert into country values('', 'germany', 'DE');

insert into food values('', 'rice', 'rice.jpg', 'ma');
insert into food values('', 'wheat', 'rice.jpg', 'ma');
insert into food values('', 'pasta', 'rice.jpg', 'ma');
insert into food values('', 'bread', 'rice.jpg', 'ma');
insert into food values('', 'potato', 'rice.jpg', 'ma');

insert into toys values('', 'teddy', 'ball.jpg', 'ma');
insert into toys values('', 'Bear', 'ball.jpg', 'ma');
insert into toys values('', 'Car', 'ball.jpg', 'ma');
insert into toys values('', 'Plane', 'ball.jpg', 'ma');
insert into toys values('', 'teddy', 'ball.jpg', 'ma');



insert into food values('', 'rice', 'rice.jpg', 1);
insert into toys values('', 'car', 'car.jpg', 1);