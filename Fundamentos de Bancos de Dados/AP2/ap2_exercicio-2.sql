CREATE TABLE pesquisadores(
    id INT auto_increment primary key,
    nome varchar(100) not null
);
CREATE TABLE artigos(
    id INT auto_increment primary key,
    titulo varchar(50) not null,
    pag_inicial int not null,
    pag_final int not null,
    cod_periodico int,
    titulo_periodico varchar(50),
    editora varchar(100),
    id_pesquisador int,
    constraint pesquisadores_fk_artigos
        foreign key (id_pesquisador) references pesquisadores(id)
    on delete restrict
    on update cascade
);

INSERT into pesquisadores (nome)
VALUES ('pedro martins'),
		('henrique gomes'),
        ('joao matos'),
        ('antonio santos'),
        ('joao de almeida'),
        ('natan cardoso')



SELECT *
FROM arquivos
WHERE id = 1
-- aqui não está o artigo 1234 pois botei o auto_incremente

SELECT *
FROM arquivos
WHERE editora = 'saraiva'

SELECT *
FROM pesquisadores
WHERE nome ='joao %'
-- esse não consegui fazer funcionar