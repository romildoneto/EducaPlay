CREATE TABLE `usuario` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) DEFAULT NULL,
  `sobrenome` varchar(75) DEFAULT NULL,
  `cpf` varchar(15) DEFAULT NULL,
  `rg` varchar(15) DEFAULT NULL,
  `endereco` varchar(150) DEFAULT NULL,
  `cidade` varchar(20) DEFAULT NULL,
  `cep` varchar(12) DEFAULT NULL,
  `email` varchar(30) NOT NULL,
  `senha` int NOT NULL,
  `confirmaSenha` int NOT NULL,
  PRIMARY KEY (`id`)
)