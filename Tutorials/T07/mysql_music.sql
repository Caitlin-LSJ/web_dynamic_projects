CREATE TABLE `artists` (
  `artist_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL
);

INSERT INTO `artists` (`artist_id`, `name`) VALUES
(1, 'Beyonce'),
(2, 'Camila Cabello'),
(3, 'Alan Walker');

CREATE TABLE `labels` (
  `label_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL
);

INSERT INTO `labels` (`label_id`, `name`) VALUES
(1, 'Sony'),
(2, 'Epic'),
(3, 'Columbia');

CREATE TABLE `albums` (
  `album_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(70) NOT NULL,
  `release_date` date NOT NULL,
  `artist_id` int(11) NOT NULL,
  `label_id` int(11) NOT NULL
);

INSERT INTO `albums` (`album_id`, `name`, `release_date`, `artist_id`, `label_id`) VALUES
(1, 'Dangerously in Love', '2003-06-23', 1, 3),
(2, 'B\'Day', '2006-09-01', 1, 3),
(3, 'Camila', '2018-01-12', 2, 2),
(4, 'Romance', '2019-12-06', 2, 2),
(5, 'Different World', '2018-12-14', 3, 1),
(6, 'Alan Walker Hits', '2017-12-08', 3, 1);

CREATE TABLE `users` (
  `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(16) NOT NULL,
  `password` char(60) NOT NULL
);

