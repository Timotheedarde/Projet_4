drop table if exists T_COMMENTAIRE;
drop table if exists T_BILLET;
drop table if exists T_UTILISATEUR;

CREATE TABLE `t_billet` (
 `BIL_ID` int(11) NOT NULL AUTO_INCREMENT,
 `BIL_DATE` datetime NOT NULL,
 `BIL_TITRE` varchar(255) NOT NULL,
 `BIL_CONTENU` text NOT NULL,
 PRIMARY KEY (`BIL_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8

CREATE TABLE `t_commentaire` (
 `COM_ID` int(11) NOT NULL AUTO_INCREMENT,
 `COM_DATE` datetime NOT NULL,
 `COM_AUTEUR` varchar(255) NOT NULL,
 `COM_CONTENU` text NOT NULL,
 `COM_REPORT` tinyint(1) DEFAULT NULL,
 `BIL_ID` int(11) NOT NULL,
 PRIMARY KEY (`COM_ID`),
 KEY `BIL_ID` (`BIL_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8

	CREATE TABLE `t_utilisateur` (
 `util_id` int(11) NOT NULL AUTO_INCREMENT,
 `util_login` varchar(100) NOT NULL,
 `util_mdp` varchar(100) NOT NULL,
 PRIMARY KEY (`util_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8

insert into T_UTILISATEUR(UTIL_LOGIN, UTIL_MDP) values
('admin', 'secret');