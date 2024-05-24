CREATE DATABASE motoDB;

CREATE TABLE `motoDB`.`moto` (`id` INT NOT NULL AUTO_INCREMENT , `brand` VARCHAR(250) NOT NULL , `model` VARCHAR(250) NOT NULL , `type` VARCHAR(15) NOT NULL , `price` FLOAT NOT NULL , `image` VARCHAR(250) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

INSERT INTO `moto` (`id`, `brand`, `model`, `type`, `price`, `image`) VALUES (NULL, 'KTM', '450 EXC-F 2024', 'Enduro', '12499.99', 'https://www.esprit-ktm.com/media/catalog/product/cache/bfae07b7090e672a4a40d78a126763bf/p/h/pho_bike_det_my24-exc-exc-traction-control__sall__aepi__v1.jpg');
INSERT INTO `moto` (`id`, `brand`, `model`, `type`, `price`, `image`) VALUES (NULL, 'DUCATI', '1262 XDIAVEL DARK 2024', 'Custom', '22090', 'https://www.motoplanete.com/ducati/zoom-700px/10177-1262-XDiavel-Dark-2024-1000px.webp');
INSERT INTO `moto` (`id`, `brand`, `model`, `type`, `price`, `image`) VALUES (NULL, 'YAMAHA', 'MOTO SPORT HÉRITAGE XSR900 GP - 2024', 'Sportive', '13499', 'https://www.team-menduni.com/20195-vhc_large/moto-sport-heritage-xsr900-gp-2024.jpg');
INSERT INTO `moto` (`id`, `brand`, `model`, `type`, `price`, `image`) VALUES (NULL, 'YAMAHA', 'MOTO ROADSTER MT-10 2023', 'Roadster', '15499', 'https://www.team-menduni.com/17848-vhc_large/moto-roadster-mt-10-2023.jpg');
