 -- Arquivo de criação do banco de dados--

DROP DATABASE IF EXISTS projeto1;
CREATE DATABASE projeto1;
USE projeto1;

CREATE TABLE usuario(
    id_usuario int(4) primary key auto_increment,
    nome varchar(50) not null,
    email varchar(50) not null,
    fone varchar(30) null,
    senha varchar(30) not null
);

/*
    UPDATE usuario SET nome = 'Fulano', email = 'ciclano' WHERE id_usuario = '?';
*/
