CREATE DATABASE `projekat1` ;
USE projekat1;
 CREATE TABLE `admin_users` (
  `idadmin_users` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idadmin_users`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;


INSERT INTO `projekat1`.`admin_users`
(`username`,
`password`)
VALUES
('1','2'),
('vlado', 'paulina'),
('vlado', 'paulina');

