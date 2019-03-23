CREATE TABLE `authors`
(
  `id`         INT(11) AUTO_INCREMENT,
  `name`      VARCHAR(25) NOT NULL,
  `surname`      VARCHAR(25) NOT NULL,
  `patronymic`      VARCHAR(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE = InnoDB;

CREATE TABLE `publishers`
(
  `id`         INT(11) AUTO_INCREMENT,
  `title`      VARCHAR(20) NOT NULL UNIQUE,
  `address`   VARCHAR(50) NOT NULL UNIQUE,
  `phone`   VARCHAR(10) NOT NULL UNIQUE,
  PRIMARY KEY (`id`)
) ENGINE = InnoDB;

CREATE TABLE `rubrics`
(
  `id`         INT(11) AUTO_INCREMENT,
  `title`      VARCHAR(20) NOT NULL UNIQUE,
  `type`   VARCHAR(20) NOT NULL UNIQUE,
  `subtype`   VARCHAR(20) NOT NULL UNIQUE,
  `country`   VARCHAR(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE = InnoDB;

CREATE TABLE `books`
(
  `id`         INT(11) AUTO_INCREMENT,
  `author_id`     INT(11) NOT NULL,
  `publisher_id`     INT(11) NOT NULL,
  `rubric_id`     INT(11) NOT NULL,
  `title`   VARCHAR(50) NOT NULL UNIQUE,
  FOREIGN KEY (`author_id`) REFERENCES authors (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  FOREIGN KEY (`publisher_id`) REFERENCES publishers (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  FOREIGN KEY (`rubrics_id`) REFERENCES publishers (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  PRIMARY KEY (`id`)
) ENGINE = InnoDB;

CREATE TABLE `photo`
(
  `id`         INT(11) AUTO_INCREMENT,
  `book_id`      VARCHAR(20) NOT NULL,
  `image`   VARCHAR(50) NOT NULL UNIQUE,
  FOREIGN KEY (`book_id`) REFERENCES books (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  PRIMARY KEY (`id`)
) ENGINE = InnoDB;

CREATE TABLE `date_publications`
(
  `id`         INT(11) AUTO_INCREMENT,
  `book_id`      VARCHAR(20) NOT NULL,
  `date_publications` NOT NULL DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (`book_id`) REFERENCES books (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  PRIMARY KEY (`id`)
) ENGINE = InnoDB;