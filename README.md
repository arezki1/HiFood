Create a database named "hotel"

create a table named "user"

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` char(64) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(64) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `salt` char(16) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `msg` text NOT NULL,
  PRIMARY KEY (`id`)

) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;




1) login system
2) Rating restaurant/ image upload and count it by liked click from user
3)food order function
4) Alert restaurantwith time and location so restaurant can prepare the food
5) Google API map locate the location
6) Google API direction and places