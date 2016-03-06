CREATE DATABASE flowershop CHARACTER SET utf8 COLLATE utf8_general_ci;


use flowershop;

CREATE TABLE Customer (
    id  int(11) NOT NULL AUTO_INCREMENT,
    name  varchar(255) NOT NULL ,
    email  text NOT NULL ,
    pw  text NOT NULL,
    created  datetime NOT NULL ,
    PRIMARY KEY (id)
);