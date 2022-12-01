create table agencia(
    id int primary key auto_increment,
    cidade varchar(50) not null,
    telefone varchar(20),
    estado_sigla varchar(2) not null
);

create table clientes(
    id int primary key auto_increment,
    nome varchar(100) not null,
    CPF varchar(14) unique not null,
    telefone varchar(20),
    cidade varchar(50) not null,
    confiavel char(1) not null
);

create table emprestimos(
    id int primary key auto_increment,
    valor decimal(4,2) not null,
    data_empr date not null,
    venc_empre date not null,
    id_agencia int not null,
        constraint emprestimos_fk_agencia
            foreign key(id_agencia) references agencia(id)
            on delete restrict
            on update cascade,
    id_cliente int not null,
        constraint emprestimos_fk_cliente
            foreign key(id_cliente) references clientes(id)
            on delete restrict
            on update cascade
);

insert into agencia(cidade,telefone,estado_sigla)
values ('Torres','12345678','RS'),                  --1
        ('Passo de Torres','23456789','SC'),        --2
        ('Rio de Janeiro','34567890','RJ'),         --3
        ('São Paulo','567890123','SP'),             --4
        ('Salvador','09876543','BA'),               --5
        ('Curitiba','67584930','PR')                --6


insert into clientes(nome,CPF,telefone,cidade,confiavel)
values ('Natan Hugentobler','12345678','12345678','Torres','B'),                --1
        ('Antonio Alberto','23456789','23456789','Passo de Torres','R'),        --2
        ('Marcos Paulo','345678901','345678901','Torres','M'),                  --3
        ('Paulo Marcos','098765432','09876543','São Paulo','B'),                --4
        ('João Pedro','657483930','65748392','Rio de Janeiro','M'),             --5
        ('Gabriel Motos','1029384756','1029384756','Salvador','R')              --6


insert into emprestimos(valor,data_empr,venc_empre,id_cliente,id_agencia)
values  (1000.00,'2022-11-30','2022-12-29','1','1'),
        (100.00,'2022-10-30','2022-12-10','5','5'),
        (10.00,'2022-01-01','2024-01-30','3','1'),
        (1500.00,'2022-05-05','2022-07-05','6','6'),
        (500.00,'2022-04-28','2025-06-15','2','2'),
        (2000.00,'2022-03-10','2027-06-14','4','5'),
        (150.00,'2022-12-11','2023-02-10','5','2'),
        (500.00,'2022-07-16','2022-09-17','2','1')

        
--media de valores dos emprestimos

select avg(valor) as media
from emprestimos

--quantos clientes cadastrados

select count(id) as quantos
from clientes

--------------------------------------------------------------------------

select cli.id as id_cliente,cli.nome,emp.valor,emp.id as id_emprestimo
from clientes cli
        inner join emprestimos emp
            on cli.id = emp.id_cliente
where emp.valor > 15.00
group by cli.id
order by cli.id asc

---------------------------------------------------------------------------

select cli.nome,emp.valor
from clientes cli
        inner join emprestimos emp
            on cli.id = emp.id_cliente
where emp.venc_empre > current_date
group by cli.id
having emp.valor <50

--------------------------------------------------------------------------
