create database bd_loja;
use bd_loja;

create table tb_funcionario(
id_Funcionario int primary key,
nm_funcionario varchar(50),
sobrenome varchar(50),
dt_nascimento date,
cargo varchar(50),
salario decimal,
dt_Admissao date,
senha text
);

create table tb_cliente (
id_Cliente int primary key,
nm_cliente varchar(50),
sobrenome varchar(50),
email varchar(50),
telefone varchar(12),
endereco varchar(50)
);


create table tb_fornecedor (
id_Fornecedor int primary key, 
nm_fornecedor varchar(50),
contato varchar(50),
email varchar(50),
telefone varchar(12),
endereco varchar(50)
);