CREATE TABLE socios(
    id INT auto_increment primary key,
    nome varchar(150) not null,
    telefone varchar(20) not null,
    endereco varchar(150) not null,
    descricao varchar(200) not null,
    cod_socio int

);
CREATE TABLE servicos(
    id int auto_increment primary key,
    descricao varchar(200) not null,
    mes_referencia int not null,
    ano_refencencia int not null,
    valor float not null,
    id_socio int not null,
    constraint socios_fk_servicos
        foreign key (id_socio) references socios(id)
    on delete restrict
    on update cascade
);

INSERT INTO socios(nome,telefone,endereco,descricao,cod_socio)
VALUES ('marco antonio','0987654321','Barão do Rio Branco','pedreiro',2),
		('antonio marcos','1234567890','José Bonifacio','marceneiro',5),
        ('julio cesar','5647382910','Barão do Rio Branco','vidraceiro',10)

INSERT INTO servicos(descricao,mes_referencia,ano_refencencia,valor,id_socio)
VALUES ('construir casa',1,2020,600.00,1),
		('reformar armario',3,2020,300.00,3),
        ('arrumar oque está quebrado',1,2020,700.00,2)

SELECT * FROM servicos
WHERE valor>500.00

SELECT * FROM servicos
WHERE mes_referencia=1

SELECT * FROM socios
WHERE endereco = 'Barão do Rio Branco'