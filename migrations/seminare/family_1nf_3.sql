DROP TABLE IF EXISTS `family`, `parents`, `childrens`;

CREATE TABLE IF NOT EXISTS `parents` (
  `id` int NOT NULL,
  `family_name` varchar(9) DEFAULT NULL,
  `husband` varchar(11) DEFAULT NULL,
  `wife` varchar(8) DEFAULT NULL
);

CREATE TABLE IF NOT EXISTS `childrens` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `child` varchar(13) NOT NULL
);


INSERT INTO `parents` (`id`, `family_name`, `husband`, `wife`) VALUES
(1, 'Smith', 'John', 'Emily'),
(2, 'Johnson', 'Michael', 'Sarah'),
(3, 'Williams', 'David', 'Jessica'),
(4, 'Brown', 'Matthew', 'Lauren'),
(5, 'Garcia', 'Daniel', 'Maria'),
(6, 'Martinez', 'Christopher', 'Laura'),
(7, 'Thompson', 'Andrew', 'Megan'),
(8, 'Clark', 'Benjamin', 'Samantha'),
(9, 'Rodriguez', 'Nicholas', 'Ashley'),
(10, 'Keller', NULL, NULL),
(11, 'Adams', NULL, NULL),
(12, 'Meyer', NULL, NULL);

INSERT INTO `childrens` (`id`, `parent_id`, `child`) VALUES
(1, 4, 'Sophia'),
(2, 5, 'Olivia'),
(3, 6, 'Ethan'),
(4, 7, 'Emma'),
(5, 8, 'Noah'),
(6, 9, 'Mia'),
(7, 10, 'Jonathan'),
(8, 11, 'Sophia'),
(9, 12, 'Emma'),
(10, 7, 'Liam'),
(11, 8, 'Ava'),
(12, 9, 'Jacob'),
(13, 9, 'Zoe');


ALTER TABLE `childrens`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `parents`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `childrens`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

ALTER TABLE `parents`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;


