CREATE DATABASE project1;

CREATE TABLE `books`
(
 `id` int
(10) NOT NULL,
 `bookName` varchar
(100) NOT NULL,
 `bookPrice` float
(10) NOT NULL,
 `booksLeftInStore` int
(10) NOT NULL,
 PRIMARY KEY
(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `bookinventoryorder`
(
 `firstName` varchar
(100) NOT NULL,
 `lastName` float
(100) NOT NULL,
 `id` int
(10) NOT NULL,
 `booksLeftInStore` int
(10) NOT NULL,
 PRIMARY KEY
(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

