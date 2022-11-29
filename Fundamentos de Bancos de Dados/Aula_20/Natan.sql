create table editoras(
    id int primary key not null,
    nome varchar(40) not null
);

create table assuntos(
    id char(1) primary key not null,
    descricao varchar(40) not null
);

create table autores(
    matricula int primary key not null,
    nome varchar(40) not null,
    CPF varchar(11) unique not null,
    endereco varchar(50),
    data_nascimento date,
    nacionalidade varchar(30) not null
);

create table livros(
    id int primary key not null,
    titulo varchar(80) not null,
    preco float ,
    lancamento date ,
    id_editora int not null,
        constraint editoras_fk_livros
            foreign key(id_editora) references editoras(id)
            on update cascade
            on delete restrict,
    id_assuntos char(1) not null ,
        constraint assuntos_fk_livros
            foreign key(id_assuntos) references assuntos(id)
            on update cascade
            on delete restrict
);

create table autores_livros(
    matricula_autor int,
        constraint autores_fk_autores_livros
            foreign key (matricula_autor) references autores(matricula)
            on update cascade
            on delete set null,
    id_livro int,
        constraint livros_fk_autores_livros
            foreign key (id_livro) references livros(id)
            on update cascade
            on delete set null
);

insert into editoras (id,nome)
values ('1','Mirandela Editora'),
        ('2','Editora Via-Norte'),
        ('3','Editora Ilhas Tijucas'),
        ('4','Maria José Editora')

insert into assuntos(id,descricao)
values ('b','Banco de Dados'),
		('p','Programação'),
		('r','Redes'),
 		('s','Sistemas Operacionais')

insert into livros(id,titulo,preco,lancamento,id_assuntos,id_editora)
values ('1','Banco de Dados Para A Web',31.20,'1999-01-10','b','1'),
        ('2','Programando Em Linguagem C',30.00,'1997-10-01','p','1'),
        ('3','Programando Em Linguagem C++',111.50,'1998-11-01','p','3'),
        ('4','Banco de Dados Na Bioinformatica',48.00,null,'b','2'),
        ('5','Rede de Computadores',42.00,'1996-09-01','r','2')

insert into autores(matricula,nome,CPF,endereco,data_nascimento,nacionalidade)
values ('123','Natan Hugentobler','12345678901','rua da esquina','1997-02-26','Brasileiro'),
        ('456','Pedro Antonio','23456789012','rua do meio','1998-01-10','Argentino'),
        ('789','Antonio Pedro','34567890123','rua do fim','1996-05-20','Grego'),
        ('961','Marcos Paulo','45678901234','rua do inicio','1980-10-05','Frances'),
        ('987','João de Almeida','09876543210','rua da esquina','1995-08-06','Brasileiro'),
		('765','Antonio João Pedro','87654321098','rua do canto','1992-06-17','Brasileiro')

insert into autores_livros(matricula_autor,id_livro)
values ('123','1'),
        ('456','1'),
        ('765','1'),
        ('456','5'),
        ('789','2'),
        ('789','2'),
        ('765','4'),
        ('123','3'),
        ('961','3'),
        ('987','1')

--Monte um comando para excluir da tabela livros aqueles que possuem o código maior ou igual a 2,
-- que possuem o preço maior que R$ 50,00 e que já foram lançados.

delete from livros
where id >=2 
    and preco > 50.00 
    and lancamento > 2022-11-24 ;    -- pode ser usado tambem o  lancamento < current_date (que pega a data atual)

--Escreva o comando que seleciona as colunas NOME, CPF e ENDERECO, da tabela AUTOR, 
--para aqueles que possuem a palavra ‘joão’ no nome.

select nome,CPF,endereco
from autores
where nome like '%João%'

--Excluir o livro cujo título é ‘BANCO DE DADOS DISTRIBUÍDO’ ou ‘BANCOS DE DADOS DISTRIBUÍDOS’.
-- Somente essas duas opções devem ser consideradas.

delete from livros 
where titulo like 'Banco De Dados Distribuído'
        and titulo like 'Bancos De Dados Distribuídos'

--Selecione o nome e o CPF de todos os autores que nasceram após 01 de janeiro de 1990.
select nome,CPF
from autores
where data_nascimento > 1990-01-01

--Selecione a matrícula e o nome dos autores que possuem RIO DE JANEIRO no seu endereço.

select matricula,nome
from autores
where endereco like '%Rio de Janeiro%'

--Atualize para zero o preço de todos os livros onde a data de lançamento for nula ou onde seu preço atual for inferior a R$ 55,00.
update livros
set preco = 0.00
where lancamento = null        --o certo é is null e nao = null
        and preco < 55.00

--Exclua todos os livros onde o assunto for diferente de ‘S’, ‘P’, ou ‘B’.

delete from livros
where id_assuntos <> 's'
        and id_assuntos <> 'p'         --o <> tambempode ser usado not in('s','p','b')
        and id_assuntos <> 'b'

--Escreva o comando para contar quantos são os autores cadastrados na tabela AUTORES.

select count(matricula) as quantidade
from autores 

--Escreva o comando que apresenta qual o número médio de autores de cada livro. Você deve utilizar, novamente, a tabela AUTOR_LIVRO. 


select avg(matricula_autor) as media,id_livro
from autores_livros                                      --creio que seja assim  não consegui fazer funcionar 
group by id_livro          






--Apresente o comando SQL para gerar uma listagem dos códigos dos livros que possuem a menos dois autores.





--Escreva o comando para apresentar o preço médio dos livros por código de editora. Considere somente aqueles que custam mais de R$ 45,00.

select avg(li.preco) as media_preco,edit.id
from livros li,editora edit
where li.id_editora=edit.id
        and preco > 45.00
group by edit.id


--Apresente o preço máximo, o preço mínimo e o preço médio dos livros cujos assuntos são ‘S’ ou ‘P’ ou ‘B’, para cada código de editora.
select max(preco) as maior  from livros where id_editora = 's'
select min(preco) as menor  from livros where id_editora = 's'
select avg(preco) as media  from livros where id_editora = 's'

select max(preco) as maior  from livros where id_editora = 'p'
select min(preco) as menor  from livros where id_editora = 'p'
select avg(preco) as media  from livros where id_editora = 'p'

select max(preco) as maior  from livros where id_editora = 'b'
select min(preco) as menor  from livros where id_editora = 'b'
select avg(preco) as media  from livros where id_editora = 'b'

-- esse nao ta errado  masnao ta certo tambem kkk
