-- Criação das tabelas
create table categorias(
    id varchar(20) primary key, 
    nome varchar(150) not null
);

create table fornecedor(
    id varchar(20) primary key,
    nome varchar(15) not null
);

create table pede(
    id varchar(20) primary key,
    valor_unitario float not null,
    data time not null,
    quantidade int not null,
    id_fornecedor varchar(20) not null,
        constraint fornecedor_fk_pede
            foreign key (id_fornecedor)
                references fornecedor(id)
            on delete restrict
            on update cascade

);

create table produtos(
    id varchar(20) primary key ,
    descricao varchar(150) not null,
    data_cadastro date not null,
    valor_unitario decimal(12,2) not null,
    id_categoria varchar(20),
    id_pede varchar(20),
     constraint fk_categorias_produtos
        foreign key(id_categoria) 
            references categorias(id)
     constraint fk_pede_produtos
        foreign key (id_pede)
            references pede(id)
    on delete restrict
    on update cascade
);
-- adicionar o campo data_ultima_compra na tabela fornecedor.

alter table fornecedor
    add data_ultima_compra time not null;

-- alterar o nome do atributo data em PEDE para data_pedido.

alter table pede
    change column data data_pedido time not null;

-- deletar o campo data_cadastro em produtos

alter table produtos
    drop column data_cadastro;

-- adicionar na relação categoria e produto para o delete ser em cascata e o update ser restrict.

alter table produtos
    drop constraint fk_categorias_produtos;

alter table produtos
    add constraint fk_categorias_produtos
        foreign key(id_categoria) 
        references categorias(id)
        on delete cascade
        on update restrict;

-- aumentar o tamanho do domínio do campo nome do fornecedor para mais 30 caracteres.

alter table fornecedor
    modify nome varchar(35) not null;

--  para apagar a tabela fornecedor. Explique o que vai acontecer com o seu esquema e as consequências disso.

drop table fornecedor;
-- Não é possível apagar a table 'fornecedores' pois há uma chave estrangeira dele em 'pede', se fosse possível 
-- iria haver pedido sem fornecedor e produtos que não saberia de onde veio.


-- para adicionar o número do pedido em PEDE. Este número deve aceitar caracteres.

alter table pede
    add column numero_pedido varchar(20) not null;

-- Popule as tabelas utilizando comandos insert. 

insert into categorias(id,nome)
values ('12ab','maquina');

insert into fornecedor(id,nome,data_ultima_compra)
values ('456','antonio','12:03:22');

insert into pede(id,valor_unitario,data_pedido,quantidade,id_fornecedor,numero_pedido)
values ('cba789','1.99','2014-04-04','50','456','200');

insert into produtos(id,descricao,valor_unitario,id_categoria,id_pede)
values ('56789','melhor ferrementa','1.99','12ab','cba789');

-- Só fui trocando os values

-- Atualize a chave primária de um produto, ilustre o comando e explique a restrição de integridade.
alter TABLE categorias drop PRIMARY KEY;

alter TABLE categorias 
    add PRIMARY key valor_unitario;
-- Como a chave primaria de 'categorias' é chave estrangeira em produtos ela nao pode ser excluida.

