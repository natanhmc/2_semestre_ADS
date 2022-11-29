create table clientes(
    id INT auto_increment primary key,
    nome varchar(50) not null,
    ultimo_nome varchar(50) not null,
    cpf varchar(14) unique not null,
    telefone varchar(20) not null,
    endereco varchar(150) not null
);
create table carros(
    cod_carro INT primary key,
    placa varchar(15) not null,
    modelo varchar(20) not null,
    marca varchar(20) not null 
);
create table alugueis(
    cod_aluguel int auto_increment primary key,
    data_inicio date not null,
    data_devolucao date not null,
    id_carro int not null,
    id_cliente int not null,
        constraint carros_fk_alugueis
            foreign key(id_carro) references carros(cod_carro),
        constraint clientes_fk_alugueis
            foreign key(id_cliente) references clientes(id)
        on delete restrict
        on update cascade
     
);

INSERT into clientes(nome,ultimo_nome,cpf,telefone,endereco)
VALUES ('joao','silva','111-111-111-11','(51)973501583','rua donaonemeu'),
		('joao','matos','444-444-444-44','(51)973501583','rua donaonemeu'),
        ('pedro',' antonio','222-222-222-22','(51)973501583','rua donaonemeu'),
        ('antonio','silva','333-333-333-33','(51)973501583','rua donaonemeu'),
        ('joao','rocha','555-555-555-55','(51)973501583','rua donaonemeu'),
        ('marcos ','silveira','666-666-666-66','(51)973501583','rua donaonemeu')
;

INSERT INTO carros(cod_carro,placa,modelo,marca)
VALUES ('1','qaz-098','charrete','renault'),
		('3','wsx-123','charrete','renault'),
        ('4','edc-234','charrete','renault'),
        ('6','rfv-345','charrete','renault'),
        ('5','tgb-456','charrete','renault')
		
;
INSERT INTO alugueis(data_inicio,data_devolucao,id_carro,id_cliente,valor)
VALUES('2022-04-06','2022-05-06',1,1,200.00),
  		('2020-01-04','2020-10-06',3,6,300.00),
        ('2020-09-06','2020-10-06',5,2,150.00),
        ('2021-12-06','2022-07-06',6,4,100.00)
;

SELECT id_carro
FROM alugueis
WHERE data_inicio>='2021-09-00'&& data_inicio<='2021-09-31'

SELECT *
FROM clientes
WHERE ultimo_nome='silva'

UPDATE alugueis 
set valor=valor*1.2

