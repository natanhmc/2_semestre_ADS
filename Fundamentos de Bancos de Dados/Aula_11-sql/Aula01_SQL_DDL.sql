-- create table 

-- alter table

-- drop table


clientes(id int pk, nome char(100) );

enderecos(id int pk, logradouro char(100), numero int, bairro )


-- create table  nome_da_tabela
-- (
--     nome_do_atributo |  dominio |   vazios  |   chaves,
-- );

create table clientes(
    id int not null primary key,
    nome varchar(100) not null,
    CPF char(14) not null unique
);
create table enderecos (
    id int not null primary key,
    logradouro varchar(100) not null,
    numero char(10),
    bairro varchar(100),
    cidade varchar(100),
    estado char(2),
    id_cliente int not null,
        constraint fk_clientes_enderecos
            foreign key (id_cliente) references clientes(id)
);

create table engenheiros
(
    id int not null primary key,
    nome varchar(100) not null
);
create table projetos
(
    id int not null primary key,
    nome varchar(250) not null
);
create table atuacoes
(
    id int not null primary key,
    funcao varchar(100),
    id_projetos int not null,
    id_engenheiros int not null,
        constraint fk_engenheiros_atuacoes
            foreign key (id_engenheiros) references engenheiros(id),
        constraint fk_projetos_atuacoes
            foreign key (id_projetos) references projetos(id)

);


create table alunos(
    id int auto_increment not null primary key,
    nome varchar(100) not null
);
create table departamentos(
    id int not null primary key,
    nome varchar(150) not null
);
create table cursos(
    id int not null primary key,
    nome varchar(100) not null,
    id_departamento int not null,
        constraint fk_departamentos_cursos
            foreign key (id_departamento) references departamentos(id)
);
create table professores(
    id int not null primary key,
    nome varchar(100) not null
);
create table disciplinas(
    id int not null primary key,
    nome varchar(100) not null,
    id_professor int not null,
        constraint fk_professor_disciplinas
            foreign key (id_professor) references professores(id)
);
create table matriculas(
    id int not null primary key,
    nome varchar(100) not null,
    id_disciplina int not null,
    id_aluno int not null,
        constraint fk_disciplina_matricula
            foreign key (id_disciplina) references disciplinas(id)
        constraint fk_aluno_matricula
            foreign key (id_aluno) references alunos(id)
);