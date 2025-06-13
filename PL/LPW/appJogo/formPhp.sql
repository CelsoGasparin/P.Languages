create database formPhp;
use formPhp;

create table jogo(
	id int not null auto_increment,
    nome varchar(55) not null,
    imgURL char not null,
    plataformas varchar(24),
	lancamento date,
    generos varchar(12) not null,
    desenvolvedor varchar(35),
    publisher varchar(35),
    preco decimal,
    ageRating int,
    fileSize varchar(8),
	constraint pk_jogo primary key(id)
);


