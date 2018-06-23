--
-- ������ ������������ Devart dbForge Studio for MySQL, ������ 7.3.131.0
-- �������� �������� ��������: http://www.devart.com/ru/dbforge/mysql/studio
-- ���� �������: 05.05.2018 13:08:32
-- ������ �������: 5.7.12-log
-- ������ �������: 4.1
--


-- 
-- ���������� ������� ������
-- 
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;

-- 
-- ���������� ����� SQL (SQL mode)
-- 
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

--
-- ��������� ���� ������ �� ���������
--
USE blog;

--
-- ������� ������� "news"
--
DROP TABLE IF EXISTS news;

--
-- ��������� ���� ������ �� ���������
--
USE blog;

--
-- ������� ������� "news"
--
CREATE TABLE news (
  id int(11) NOT NULL AUTO_INCREMENT,
  title varchar(128) NOT NULL,
  slug varchar(128) NOT NULL,
  text text NOT NULL,
  PRIMARY KEY (id),
  INDEX slug (slug)
)
ENGINE = INNODB
AUTO_INCREMENT = 6
AVG_ROW_LENGTH = 4096
CHARACTER SET utf8
COLLATE utf8_general_ci
ROW_FORMAT = DYNAMIC;

-- 
-- ����� ������ ��� ������� news
--
INSERT INTO news VALUES
(1, 'Hello!', 'hello', 'Привет мир!'),
(2, 'Новость 2 ', 'Новость-2', 'новость 2'),
(3, 'Новость 3', 'Новость-3', 'новость 3'),
(4, 'Новость 4', 'Новость-4', 'новость 4'),
(5, 'Новость 5', 'Новость-5', 'новость 5');
-- 
-- ������������ ���������� ����� SQL (SQL mode)
-- 
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;

-- 
-- ��������� ������� ������
-- 
/*!40014 SET FOREIGN_KEY_CHECKS = @OLD_FOREIGN_KEY_CHECKS */;
