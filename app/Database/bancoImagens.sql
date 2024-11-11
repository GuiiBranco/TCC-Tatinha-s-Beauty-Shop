CREATE DATABASE imagensBD;
USE imagensDB;

CREATE TABLE Eventos(
    idEventos INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(30) NOT NULL,
    imagem VARCHAR(50) NOT NULL
)Engine:InnoDB;

CREATE TABLE Portfolio(
    idPortfolio INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(30) NOT NULL,
    imagem VARCHAR(50) NOT NULL UNIQUE
)Engine:InnoDB;

CREATE TABLE funcionarios(
    idFuncionario INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(30) NOT NULL,
    imagem VARCHAR(50) NOT NULL UNIQUE,
    facebook VARCHAR(30) NULL,
    instagram VARCHAR(30) NULL,
    twitter VARCHAR(30) NULL
)Engine:InnoDB;

CREATE TABLE admin(
    idAdmin INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(30) NOT NULL,
    email VARCHAR(50) NOT NULL UNIQUE,
    senha VARCHAR(50) NOT NULL
)Engine:InnoDB;