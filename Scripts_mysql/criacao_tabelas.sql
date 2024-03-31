/*Script para criaçãpo do banco de dados*/
/*Estudo do PHP Turma Guilherme*/


/*create schema*/
CREATE database db_barbearia character set utf8;

CREATE user 'admin'@'localhost' identified by '123456';

GRANT all privileges on db_barbearia.* to 'admin'@'localhost' with grant option;

/*create table*/
CREATE TABLE `tb_login` (
  `id` int(20) NOT NULL,
  `login` varchar(200) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


/*insert user*/
INSERT INTO `tb_login` (`id`, `login`, `password`) VALUES
(1, 'admin', '123456');



