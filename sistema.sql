CREATE DATABASE sistema;
USE sistema;

create table usuarios(
    id int PRIMARY KEY AUTO_INCREMENT,
    nome varchar(50) not null,
    email varchar(50) not null unique,
    senha varchar(50) not null
    );

create table solicitacoes(
	id int primary key auto_increment,
    nome varchar(150) not null,
    solicitacao varchar(500) not null
);   