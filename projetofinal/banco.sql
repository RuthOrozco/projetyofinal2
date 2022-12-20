create database login;

use login;

create table usuarios(
    idusuario int primary key auto_increment,
    nome varchar (30),
    email varchar(30),
    telefone varchar(15),
    foto varchar (30),
    login varchar (20) unique,
    senha varchar (50),
    perfil enum ('adm','user')
);
insert into usuarios values (null,'andrea', 'adrea@gmail.com', '21990500135', 'foto.jpg', 'admin',md5('123'),'adm');
insert into usuarios values (null,'andressa','adressa@gmail.com', '21995504136', 'foto.jpg' , 'usuario',md5('abc'),'user');

select * from usuarios;

create table clientes(
    idclientes int primary key auto_increment,
    nome varchar(30),
     email varchar(30),
    telefone varchar(15),
    foto varchar (30)
);
insert into clientes values (null,'andrea', 'adrea@gmail.com', '21990500135', 'foto.jpg');