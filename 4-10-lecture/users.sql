CREATE TABLE `users`
(
    `id`        int(11) NOT NULL AUTO_INCREMENT,
    `firstName`      varchar(80) NOT NULL,
    `lastName`      varchar(80) NOT NULL,
    `email`      varchar(80) NOT NULL,
    `password`      varchar(80) NOT NULL,
    `sessionExpiration` DATETIME DEFAULT NULL,
    primary key (`id`)
);