CREATE DATABASE IF NOT EXISTS `testjoin`;

USE `testjoin`;

DROP TABLE IF EXISTS `t_left`;
DROP TABLE IF EXISTS `t_right`;

CREATE TABLE `t_left` 
(
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    `col_t_left_1` VARCHAR(10),
    `col_t_left_2` VARCHAR(10)
);

CREATE TABLE `t_right` 
(
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    `col_t_right_1` VARCHAR(10),
    `col_t_right_2` VARCHAR(10),
    `t_left_id` INTEGER
);

INSERT INTO `t_left` 
    (`col_t_left_1`, `col_t_left_2`) 
VALUES 
    ('left 1.1', 'left 1.2'),
    ('left 2.1', 'left 2.2'),
    ('left 3.1', 'left 3.2'),
    ('left 4.1', 'left 4.2'),
    ('left 5.1', 'left 5.2');

INSERT INTO `t_right` 
    (`col_t_right_1`, `col_t_right_2`, `t_left_id`) 
VALUES 
    ('right 1.1', 'right 1.2', NULL),
    ('right 2.1', 'right 2.2', 2),
    ('right 3.1', 'right 3.2', 3),
    ('right 4.1', 'right 4.2', 4),
    ('right 5.1', 'right 5.2', NULL);

