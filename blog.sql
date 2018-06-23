--
-- Скрипт сгенерирован Devart dbForge Studio for MySQL, Версия 7.3.131.0
-- Домашняя страница продукта: http://www.devart.com/ru/dbforge/mysql/studio
-- Дата скрипта: 05.05.2018 13:08:32
-- Версия сервера: 5.7.12-log
-- Версия клиента: 4.1
--


-- 
-- Отключение внешних ключей
-- 
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;

-- 
-- Установить режим SQL (SQL mode)
-- 
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

--
-- Установка базы данных по умолчанию
--
USE blog;

--
-- Удалить таблицу "news"
--
DROP TABLE IF EXISTS news;

--
-- Установка базы данных по умолчанию
--
USE blog;

--
-- Создать таблицу "news"
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
-- Вывод данных для таблицы news
--
INSERT INTO news VALUES
(1, 'Hello!', 'hello', 'РџСЂРёРІРµС‚ РјРёСЂ!'),
(2, 'РќРѕРІРѕСЃС‚СЊ 2 ', 'РќРѕРІРѕСЃС‚СЊ-2', 'РЅРѕРІРѕСЃС‚СЊ 2'),
(3, 'РќРѕРІРѕСЃС‚СЊ 3', 'РќРѕРІРѕСЃС‚СЊ-3', 'РЅРѕРІРѕСЃС‚СЊ 3'),
(4, 'РќРѕРІРѕСЃС‚СЊ 4', 'РќРѕРІРѕСЃС‚СЊ-4', 'РЅРѕРІРѕСЃС‚СЊ 4'),
(5, 'РќРѕРІРѕСЃС‚СЊ 5', 'РќРѕРІРѕСЃС‚СЊ-5', 'РЅРѕРІРѕСЃС‚СЊ 5');
-- 
-- Восстановить предыдущий режим SQL (SQL mode)
-- 
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;

-- 
-- Включение внешних ключей
-- 
/*!40014 SET FOREIGN_KEY_CHECKS = @OLD_FOREIGN_KEY_CHECKS */;
