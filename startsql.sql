CREATE DATABASE blog CHARACTER SET utf8 COLLATE utf8_general_ci;
use blog;
create table posts (
post_id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT, 
dt_post DATETIME NOT NULL,
s_body LONGTEXT,
s_title TEXT,
PRIMARY KEY (post_id)
);
INSERT INTO posts (dt_post, s_body, s_title) VALUES
('2015-12-01 13:00:00','Здесть будет содержаться текст публикации №1','Заголовок публикации №1 из БД'),
('2015-12-02 13:00:00','Здесть будет содержаться текст публикации №2','Заголовок публикации №2 из БД'),
('2015-12-03 13:00:00','Здесть будет содержаться текст публикации №3','Заголовок публикации №3 из БД')
;

