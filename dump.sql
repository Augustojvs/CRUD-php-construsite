CREATE TABLE `clientes` (
  `ID_Cliente` int(11) NOT NULL AUTO_INCREMENT,
  `Nome_Cliente` varchar(255) NOT NULL,
  `Email_Cliente` varchar(255) NOT NULL,
  `Telefone_Cliente` varchar(13) NOT NULL,
  `Senha_Cliente` varchar(255) NOT NULL,
  `Data_Nasc_Cliente` date NOT NULL,
  PRIMARY KEY (`ID_Cliente`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;