create table colaboradores(

    id_matricula varchar(20) primary key,
    nome varchar(100) not null,
    email varchar(50) not null,
    senha varchar(20) not null
);
create table equipes(
    id_equipe char(20) primary key,
    id_col1 varchar(20),
    id_col2 varchar(20),
    id_col3 varchar(20),
    id_col4 varchar(20),
        constraint fk_colaborador_equipe
            foreign key (id_col1) references colaboradores(id_matricula),
        constraint fk_colaborador_equipes
            foreign key (id_col2) references colaboradores(id_matricula),
        constraint fk_colaborador_equipa
            foreign key (id_col3) references colaboradores(id_matricula),
        constraint fk_colaborador_equipas
            foreign key (id_col4) references colaboradores(id_matricula)
);
create table projetos(
    id_projeto int primary key,
    data_lancamento date not null,
    id_colaborador varchar(20) not null,
    id_equipe varchar(20),
        constraint fk_colaborador_projeto
            foreign key (id_colaborador) references colaboradores(id_matricula),
        constraint fk_equipe_projeto
            foreign key (id_equipe) references equipes (id_equipe)
);
create table comentarios(
    id_comentario int primary key,
    date_coment datetime not null,
    id_projeto int not null,
    id_colaboradore varchar(20),
        constraint fk_projeto_comentario
            foreign key (id_projeto) references projetos(id_projeto),
            -- on delete cascade,
        constraint fk_colaboradores_comentario
            foreign key(id_colaboradore)references colaboradores(id_matricula)
            -- on delete restrict 
);
create table projeto_melhorias(
    id_melhoria int primary key,
    resultado varchar(300) not null,
    depart varchar(100) not null,
        constraint fk_projeto_melhorias
            foreign key (id_melhoria) references projetos(id_projeto)
);
create table projeto_social(
    id_social int primary key,
    publico varchar(50) not null,
        constraint fk_projeto_social
            foreign key (id_social) references projetos(id_projeto)
);
-- ______________________________________________________


alter table projetos add column data_criacao date;
alter table projetos drop column data_criacao;


alter table data_criacao modify a int;