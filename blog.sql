
CREATE DATABASE blog;

USE blog;

CREATE TABLE posts (
  id int(11) NOT NULL AUTO_INCREMENT,
  category_id int(11) NOT NULL,
  title varchar(128) NOT NULL,
  prenews text NOT NULL,
  body text NOT NULL,
  slug varchar(128) NOT NULL,
  created_at datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (id)
)
ENGINE = INNODB,
AUTO_INCREMENT = 33,
AVG_ROW_LENGTH = 2340,
CHARACTER SET utf8,
COLLATE utf8_general_ci;

ALTER TABLE posts
ADD INDEX slug (slug);

CREATE TABLE categories (
  id int(11) NOT NULL AUTO_INCREMENT,
  name varchar(255) NOT NULL,
  created_at timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (id)
)
ENGINE = INNODB,
AUTO_INCREMENT = 3,
AVG_ROW_LENGTH = 8192,
CHARACTER SET utf8,
COLLATE utf8_general_ci;

INSERT INTO posts VALUES

(28, 2, 'test news 2', '', 'test news 2<br>', 'test-news-2', '0000-00-00 00:00:00'),
(29, 1, 'Open test', '', 'Open test <br>', 'Open-test', '0000-00-00 00:00:00'),
(30, 1, 'Close test', '', 'Close test<br>', 'Close-test', '2018-06-23 15:24:49'),


INSERT INTO categories VALUES
(1, 'Business', '2018-06-22 08:28:58'),
(2, 'Technology', '2018-06-22 08:29:30');

