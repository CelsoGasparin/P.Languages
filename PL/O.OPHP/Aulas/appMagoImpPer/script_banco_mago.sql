
create table Personagem(

	id int auto_increment,
	STR int,
    DEX int,
    CON int,
    MAG int,
    classe varchar(40),
    nome varchar(45),
	poderes varchar(255),
    armaEquipada varchar(48),
    HP int,
    primary key(id)
);
