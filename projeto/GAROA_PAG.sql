CREATE DATABASE IF NOT EXISTS garoapag;



USE garoapag;



DROP TABLE IF EXISTS users;



CREATE TABLE IF NOT EXISTS users(

id INT(13) AUTO_INCREMENT PRIMARY KEY,

name VARCHAR(50) NOT NULL,

mail VARCHAR(50) NOT NULL,

pass VARCHAR(20) NOT NULL,

ddd INT(2) NOT NULL,

mobile INT(9) NOT NULL,

approver BOOLEAN NOT NULL,

administrator BOOLEAN NOT NULL,

aka VARCHAR(50) NOT NULL,

plan_id INT(13) NOT NULL,

starving BOOLEAN NOT NULL,

created DATE NOT NULL,

modified DATE NOT NULL

)ENGINE=innoDB;



DROP TABLE IF EXISTS plans;



CREATE TABLE IF NOT EXISTS payment_plans(

id INT(13) AUTO_INCREMENT PRIMARY KEY,

description VARCHAR(255) NOT NULL,

due_day INT(2) NOT NULL,

amount NUMERIC(15,2),

montly BOOLEAN NOT NULL,

created DATE NOT NULL,

modified DATE NOT NULL

)ENGINE=innoDB;



DROP TABLE IF EXISTS installments;



CREATE TABLE IF NOT EXISTS installments(

id INT(13) AUTO_INCREMENT PRIMARY KEY,

member_id INT(13) NOT NULL,

due_date DATE NOT NULL,

expected_amount NUMERIC(15,2),

sequencial INT(2) NOT NULL,

created DATE NOT NULL,

modified DATE NOT NULL

)ENGINE=innoDB;



DROP TABLE IF EXISTS settlements;



CREATE TABLE IF NOT EXISTS settlements(

id INT(13) AUTO_INCREMENT PRIMARY KEY,

installment_id INT(13) NOT NULL,

settlement_date DATE NOT NULL,

paid_amount NUMERIC(15,2) NOT NULL,

discount NUMERIC(15,2),

addition NUMERIC(15,2),

receipt_id INT(13) NOT NULL,

created DATE NOT NULL,

modified DATE NOT NULL

)ENGINE=innoDB;



DROP TABLE IF EXISTS receipts;



CREATE TABLE IF NOT EXISTS receipts(

id INT(13) AUTO_INCREMENT PRIMARY KEY,

description VARCHAR(255) NOT NULL,

file_path VARCHAR(255) NOT NULL,

approved_by INT(13),

approved_date DATE,

created DATE NOT NULL,

modified DATE NOT NULL

)ENGINE=innoDB;



/* INSERT FAKE DATA */

INSERT INTO `users` (`id`, `name`, `mail`,`pass`, `ddd`, `mobile`,`approver`, `administrator`, `aka`,`plan_id`,`starving`,`created`, `modified`) 

VALUES ('0', 'Fulano de Tal','fulano@fulanodetal.com.br','123456', '11', '999999999', '0', '0','apelido','1','0','2016-05-24 00:00:00', '2016-05-24 00:00:00');



