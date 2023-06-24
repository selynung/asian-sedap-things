CREATE DATABASE IF NOT EXISTS `id13291201_final`;
USE `id13291201_final`;

DROP TABLE IF EXISTS `catalogData`;

CREATE TABLE `catalogData` (
    `DataID` INTEGER NOT NULL AUTO_INCREMENT,
    `Title` VARCHAR(50),
    `Path` VARCHAR(50),
    `Desc` VARCHAR(255),
    `Time` VARCHAR(50),
    `Link` VARCHAR(50),
    INDEX (`DataID`), 
    PRIMARY KEY (`DataID`)
) ENGINE=innodb DEFAULT CHARSET=utf8;

SET autocommit=1;

INSERT INTO `catalogData` (`DataID`, `Title`, `Path`, `Desc`, `Time`, `Link`) VALUES (1, 'Herbal Eggs', '../images/herbal_eggs.jpeg', 'Chinese tea leaf eggs are eggs steeped in a tea-infused liquid. Tea leaf eggs are marbled in appearance and flavorful.', '2 hours 15 mins', 'herbal_eggs.php');
INSERT INTO `catalogData` (`DataID`, `Title`, `Path`, `Desc`, `Time`, `Link`) VALUES (2, 'Japanese Curry', '../images/japcurry.jpeg', 'Japanese curry is more of a thick broth type and is served on top of the rice.', '30 mins', 'japanese_curry.php');
INSERT INTO `catalogData` (`DataID`, `Title`, `Path`, `Desc`, `Time`, `Link`) VALUES (3, 'Beef Bulgogi', '../images/bulgogi.jpeg', 'Bulgogi, literally "fire meat", is a gui made of thin, marinated slices of beef or pork grilled on a barbecue or on a stove-top griddle.', '20 mins', 'beef_bulgogi.php');
INSERT INTO `catalogData` (`DataID`, `Title`, `Path`, `Desc`, `Time`, `Link`) VALUES (4, 'Char Siu Bao', '../images/bao.jpeg', 'Imagine soft, fluffy white steamed buns filled with savory char siu (BBQ pork belly) filling in a sweet and savory char siu sauce; they are absolutely delicious!', '2 hours', 'bao.php');
INSERT INTO `catalogData` (`DataID`, `Title`, `Path`, `Desc`, `Time`, `Link`) VALUES (5, 'Braised Pork', '../images/braised_pork.jpeg', 'Pork belly is steeped in an intensely flavorful soy sauce. The taste is complex, sophisticated, addictive, and utterly delectable.', '1 hours', 'braised_pork.php');

DROP TABLE IF EXISTS `reviews`;

CREATE TABLE `reviews` (
	`ReviewID` INTEGER NOT NULL AUTO_INCREMENT,
	`Username` VARCHAR(50),
	`ReviewType` VARCHAR(50),
	`Comment` LONGTEXT,
	`File` VARCHAR(255),
	`Gender` VARCHAR(1) DEFAULT 'M',
	`Tried` VARCHAR(50),
	`Ratings` INTEGER,
	INDEX (`ReviewID`),
	PRIMARY KEY (`ReviewID`)
) ENGINE=innodb DEFAULT CHARSET=utf8;

SET autocommit=1;

INSERT INTO `reviews` (`ReviewID`, `Username`, `ReviewType`, `Comment`, `File`, `Gender`, `Tried`, `Ratings`) VALUES (1, 'Ricardo James', 'Herbal Eggs', 'Love the recipes! Gorgeous pictures by the way!', '../images/egg_review.jpeg', 'M', 'Herbal Eggs', 4);
INSERT INTO `reviews` (`ReviewID`, `Username`, `ReviewType`, `Comment`, `File`, `Gender`, `Tried`, `Ratings`) VALUES (2, 'Susan Green', 'Char Siu Bao', 'Have relied on this website since the start of my semester. You guys are lifesavers!', '../images/bao_review.jpeg', 'F', 'Char Siu Bao', 5);
INSERT INTO `reviews` (`ReviewID`, `Username`, `ReviewType`, `Comment`, `File`, `Gender`, `Tried`, `Ratings`) VALUES (3, 'Elaine Chan', 'Japanese Curry', 'Honestly just here for the aesthetic. Keep up the good work!', '../images/japcurry_review.jpeg', 'F', 'Japanese Curry', 5);