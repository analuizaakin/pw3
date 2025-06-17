CREATE DATABASE login_etim;

USE login_etim;

CREATE TABLE usuarios (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    senha VARCHAR(100) NOT NULL
);
