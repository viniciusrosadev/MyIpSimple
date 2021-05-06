SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE TABLE IF NOT EXISTS `ip` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `endereco` varchar(50) NOT NULL,
  `sistema` varchar(50) NOT NULL,
  `navegador` varchar(50) DEFAULT NULL,
  `pais` varchar(50) DEFAULT NULL,
  `cidade` varchar(50) DEFAULT NULL,
  `cep` varchar(50) DEFAULT NULL,
  `org` varchar(50) DEFAULT NULL,
  `isp` varchar(50) DEFAULT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=234 ;