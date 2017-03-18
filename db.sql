CREATE database phpdemo;
Use phpdemo;

CREATE USER 'demo'@'localhost' IDENTIFIED BY 'demo';
GRANT ALL PRIVILEGES ON `phpdemo` . * TO 'demo'@'%' WITH GRANT OPTION ;

CREATE TABLE posts (
  id int(11) NOT NULL AUTO_INCREMENT,
  title varchar(128) NOT NULL,
  body text NOT NULL,
  created_at datetime NOT NULL,
  updated_at datetime NOT NULL,
  PRIMARY KEY (id)
) ;

INSERT INTO `phpdemo`.`posts` (`id`, `title`, `body`, `created_at`) VALUES (1, '第1篇日志', '我的第1篇日志', '2014-09-23 00:00:00');
INSERT INTO `phpdemo`.`posts` (`id`, `title`, `body`, `created_at`) VALUES (2, '第2篇日志', '我的第2篇日志', '2014-09-23 00:00:00');
INSERT INTO `phpdemo`.`posts` (`id`, `title`, `body`, `created_at`) VALUES (3, '第3篇日志', '我的第3篇日志', '2014-09-23 00:00:00');




CREATE TABLE comments (
  id int(11) NOT NULL AUTO_INCREMENT,
  title varchar(128) NOT NULL,
  body text  NOT NULL,
  created_at datetime NOT NULL,
  post_id int(11) NOT NULL,
  PRIMARY KEY (id)
) ;



CREATE TABLE users (
  id int(11) NOT NULL AUTO_INCREMENT,
  name varchar(128) NOT NULL,
  password text NOT NULL,
  created_at datetime NOT NULL,  
  updated_at datetime NOT NULL,    
  PRIMARY KEY (id)
) ;

ALTER TABLE `posts` ADD `user_id` INT NOT NULL ;
ALTER TABLE `comments` ADD `user_id` INT NOT NULL ;