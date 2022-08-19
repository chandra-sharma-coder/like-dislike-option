CREATE TABLE `like_dislikes` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `awesome` int(11) NOT NULL DEFAULT '3',
  `good` int(11) NOT NULL DEFAULT '3',
  `ok` int(11) NOT NULL DEFAULT '3',
  `not_good` int(11) NOT NULL DEFAULT '3',
  `fail` int(11) NOT NULL DEFAULT '3'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
