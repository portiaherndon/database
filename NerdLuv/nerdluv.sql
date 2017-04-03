-- MySQL dump 10.11
--
-- to install this database, from terminal, type:
-- mysql -u root -p -h SERVERNAME nerdluv < nerdluv.sql
--
-- Host: localhost   Database: nerdluv
-- ------------------------------------------------------
-- Server version   5.0.45-log





DROP TABLE IF EXISTS basic_info;
CREATE TABLE basic_info (
id INT(8) UNSIGNED NOT NULL AUTO_INCREMENT,
name VARCHAR(16) DEFAULT NULL,
gender ENUM ('M','F') DEFAULT 'F',
age TINYINT(2) UNSIGNED NOT NULL,
PRIMARY KEY (id)
);

INSERT INTO basic_info VALUES
(NULL, 'Ada Lovelace', 'F', 96),
(NULL, 'Adele Goldberg', 'F', 65),
(NULL, 'Alan Turning', 'M', 41),
(NULL, 'Anakin Skywalker','M',27),
(NULL, 'Angry Video Game Nerd','M',29),
(NULL, 'Anita Borg','F',54),
(NULL, 'Barbara Liskov','F',71),
(NULL, 'Bill Gates','M',52),
(NULL, 'Bill Joy','M',54),
(NULL, 'Bjarne Stroustroup','M',59),
(NULL, 'Buffy Summers','F',27),
(NULL, 'Charles Babbage','M',79),
(NULL, 'Dana Scully','F',41),
(NULL, 'Deanna Troi','F',53),
(NULL, 'Donald Knuth','M',70),
(NULL, 'Edsger Dijkstra','M',72),
(NULL, 'Ellen Ripley','F',35),
(NULL, 'Frances Allen','F',78),
(NULL, 'Gordon Moore','M',81),
(NULL, 'Grace Hopper','F',87),
(NULL, 'Jadzia Dax','F',46),
(NULL, 'James Gosling','M',55),
(NULL, 'Jeanette Wing','F',38),
(NULL, 'Kathryn Janeway','F',49),
(NULL, 'Laura Croft','F',23),
(NULL, 'Leeloo','F',19),
(NULL, 'Leia Organa','F',53),
(NULL, 'Lenore Blum','F',70),
(NULL, 'Marissa Mayer','F',35),
(NULL, 'Mary Lou Jepsen','F',45),
(NULL, 'Ms Frizzle','F',39),
(NULL, 'Natalie Portman','F',26),
(NULL, 'Niklaus Wirth','M',76),
(NULL, 'Nostalgia Critic','M',28),
(NULL, 'Nyota Uhura','F',77),
(NULL, 'Oldspice Guy','M',36),
(NULL, 'Rasmus Lerdorf','M',41),
(NULL, 'Richard Stallman','M',57),
(NULL, 'River Tam','F',26),
(NULL, 'Roberta Williams','F',57),
(NULL, 'Rosie O Donnell','F',46),
(NULL, 'Sarah Connor','F',53),
(NULL, 'Seven of Nine','F',40),
(NULL, 'Stewie Griffin','M',1),
(NULL, 'Stuart Reges','M',48),
(NULL, 'Tpol','F',35),
(NULL, 'Trinity','F',42),
(NULL, 'Tyler Durden','M',46),
(NULL, 'Valentina Tereshkova','F',71),
(NULL, 'Vint Cerf','M',67),
(NULL, 'Yukihiro Matsumoto','M',45),
(NULL, 'Zelda','F',59),
(NULL, 'Michael Anthony','M',25),
(NULL, 'Anthony Brown','M',32),
(NULL, 'Ericka Longfield','F',25),
(NULL, 'Devin Allen','M',45),
(NULL, 'Portia Herndon','F',24),
(NULL, 'Liana Taylor','F',24),
(NULL, 'Anthony Moore','M',24);


DROP TABLE IF EXISTS type;
CREATE TABLE type (
id INT(8) UNSIGNED NOT NULL AUTO_INCREMENT,
person ENUM ('INTJ','INTP','INFJ','INFP','ISTJ','ISTP','ISFJ','ISTP','ENTJ','ENTP','ENFJ','ENFP','ESTJ','ESTP','ESFJ','ESTP'),
PRIMARY KEY (id)
);

INSERT INTO type VALUES
(NULL, 'ISTJ'),
(NULL, 'ENFJ'),
(NULL, 'ESTP'),
(NULL, 'INTJ'),
(NULL, 'ISTJ'),
(NULL, 'ISFP'),
(NULL, 'ESFJ'),
(NULL, 'INTJ'),
(NULL, 'ENFP'),
(NULL, 'INFJ'),
(NULL, 'INTP'),
(NULL, 'ESFP'),
(NULL, 'ISTJ'),
(NULL, 'ENFJ'),
(NULL, 'INTJ'),
(NULL, 'ISTP'),
(NULL, 'ESFJ'),
(NULL, 'ESTP'),
(NULL, 'ENFP'),
(NULL, 'ISFP'),
(NULL, 'ENFJ'),
(NULL, 'ESFJ'),
(NULL, 'INTP'),
(NULL, 'ESTJ'),
(NULL, 'ENTP'),
(NULL, 'ISTJ'),
(NULL, 'ISFJ'),
(NULL, 'INTP'),
(NULL, 'ENTP'),
(NULL, 'ISTJ'),
(NULL, 'ENTP'),
(NULL, 'INFJ'),
(NULL, 'ENFJ'),
(NULL, 'ENTJ'),
(NULL, 'ENFP'),
(NULL, 'ENTJ'),
(NULL, 'ENTP'),
(NULL, 'ISFJ'),
(NULL, 'ENTJ'),
(NULL, 'ENFP'),
(NULL, 'ENFJ'),
(NULL, 'ISFP'),
(NULL, 'ISTJ'),
(NULL, 'INTP'),
(NULL, 'INFP'),
(NULL, 'ISTJ'),
(NULL, 'ESFP'),
(NULL, 'ENFP'),
(NULL, 'ENTJ'),
(NULL, 'ISFP'),
(NULL, 'ENTP'),
(NULL, 'ESTP'),
(NULL, 'INTJ'),
(NULL, 'ENTJ'),
(NULL, 'ESFP'),
(NULL, 'ESTJ'),
(NULL, 'INTJ'),
(NULL, 'INTJ'),
(NULL, 'ENFJ');

DROP TABLE IF EXISTS fav_os;
CREATE TABLE fav_os (
id INT(8) UNSIGNED NOT NULL AUTO_INCREMENT,
system ENUM ('Mac OS X','Windows','Linux') DEFAULT 'Windows',
PRIMARY KEY (id)
);

INSERT INTO fav_os VALUES
(NULL, 'Linux'),
(NULL, 'Windows'),
(NULL, 'Mac OS X'),
(NULL, 'Linux'),
(NULL, 'Mac OS X'),
(NULL, 'Windows'),
(NULL, 'Mac OS X'),
(NULL, 'Windows'),
(NULL, 'Linux'),
(NULL, 'Windows'),
(NULL, 'Windows'),
(NULL, 'Linux'),
(NULL, 'Mac OS X'),
(NULL, 'Mac OS X'),
(NULL, 'Linux'),
(NULL, 'Linux'),
(NULL, 'Linux'),
(NULL, 'Linux'),
(NULL, 'Windows'),
(NULL, 'Windows'),
(NULL, 'Mac OS X'),
(NULL, 'Linux'),
(NULL, 'Mac OS X'),
(NULL, 'Windows'),
(NULL, 'Linux'),
(NULL, 'Linux'),
(NULL, 'Windows'),
(NULL, 'Mac OS X'),
(NULL, 'Linux'),
(NULL, 'Windows'),
(NULL, 'Mac OS X'),
(NULL, 'Mac OS X'),
(NULL, 'Windows'),
(NULL, 'Linux'),
(NULL, 'Mac OS X'),
(NULL, 'Windows'),
(NULL, 'Linux'),
(NULL, 'Linux'),
(NULL, 'Linux'),
(NULL, 'Windows'),
(NULL, 'Windows'), 
(NULL, 'Windows'),
(NULL, 'Windows'),
(NULL, 'Mac OS X'),
(NULL, 'Mac OS X'),
(NULL, 'Windows'),
(NULL, 'Linux'),
(NULL, 'Mac OS X'),
(NULL, 'Mac OS X'),
(NULL, 'Mac OS X'),
(NULL, 'Mac OS X'),
(NULL, 'Windows'),
(NULL, 'Windows'),
(NULL, 'Mac OS X'),
(NULL, 'Mac OS X'),
(NULL, 'Mac OS X'),
(NULL, 'Linux'),
(NULL, 'Linux'),
(NULL, 'Mac OS X');

DROP TABLE IF EXISTS seeking;
CREATE TABLE seeking (
id INT(8) UNSIGNED NOT NULL AUTO_INCREMENT,
min TINYINT(2) UNSIGNED NOT NULL,
max TINYINT(2) UNSIGNED NOT NULL,
PRIMARY KEY (id)
); 

INSERT INTO seeking VALUES
(NULL,24,99),
(NULL,50,70),
(NULL,31,50),
(NULL,15,30),
(NULL,1,99),
(NULL,41,55),
(NULL,41,76),
(NULL,2,99),
(NULL,50,70),
(NULL,40,62),
(NULL,18,49),
(NULL,30,82),
(NULL,36,54),
(NULL,32,48),
(NULL,12,17),
(NULL,16,58),
(NULL,20,40),
(NULL,67,78),
(NULL,60,99),
(NULL,47,80),
(NULL,18,32),
(NULL,18,40),
(NULL,45,60),
(NULL,30,55),
(NULL,18,30),
(NULL,1,99),
(NULL,20,60),
(NULL,66,99),
(NULL,20,40),
(NULL,10,80),
(NULL,19,49),
(NULL,20,39),
(NULL,50,77),
(NULL,12,79),
(NULL,70,99),
(NULL,1,99),
(NULL,15,35),
(NULL,46,56),
(NULL,18,25),
(NULL,54,67),
(NULL,30,50),
(NULL,49,67),
(NULL,12,50),
(NULL,1,59),
(NULL,18,35),
(NULL,30,39),
(NULL,35,55),
(NULL,20,39),
(NULL,55,65),
(NULL,28,55),
(NULL,10,25),
(NULL,40,62),
(NULL,25,35),
(NULL,18,90),
(NULL,10,50),
(NULL,35,50),
(NULL,10,90),
(NULL,10,90),
(NULL,25,60);

-- debug output to just show the contents of all tables
/*SHOW TABLES;
SELECT * FROM basic_info;
SELECT * FROM type;
SELECT * FROM fav_os;
SELECT * FROM seeking; */
