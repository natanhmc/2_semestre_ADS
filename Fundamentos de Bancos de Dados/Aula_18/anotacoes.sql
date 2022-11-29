
--          categorias
--id        nome
--101       acessorios
--102       eletro
--103       estofados

--          produtos
--id        nome        preco       id_categoria        data_cadastro
--201       mochila     190.90      101                 2022-10-01
--202       caneta      13.90       101                 2022-10-20
--203       celular     1002.90     502                 2022-11-05
--204       tv          1990.90     502                 2022-09-02

--          vendas
--id        data            id_cliente
--1001      2022-05-10      102
--1002      2022-07-15      103
--1003      2022-10-17      104
--1004      2022-10-31      104

--          vendas_item
--id        id_vendas       id_produtos       qtd     valor_unit
--90        1001            201             1       18.0
--91        1001            202             5       10.0
--93        1003            204             1       1002.90

--  salas               alunos
--num                   id          sala        nomes
--316                   1             316
--317                   2
--326                   3
--327                   4
                        5
                        6
                        7








INSERT into categorias (nomes)
values ('acessorios')

update produtos
    set preco = 9.90
    where id = 202

select * from produtos
where id = 101

-- mostrando todos os produtos maiores q 1000 reais

select *                        --terceiro esse
    from produtos               --primeiro esse o sgbd faz
        where preco >= 1000     --segundo esse


-- na consulta anterior crie uma nova coluna e adicione 10% ao preco

select id,nome,preco,(preco*1.10)AS novo_preco                        --   esse AS é Alias 
    from produtos               
        where preco >= 1000 And
         data_cadastro>= '2022-11-1' And        --assim é melhor perfomatico para temporizar 
         data_cadastro<='2022-11-30'

         ou 

         data_cadastro between 
         '2022-11-1' and '2022-11-30'


--listar a soma dos produtos cadastradosno mes de setembro e outubro

select sum (preco)AS soma
from produtos
where data_cadastro betwee
'2022-09-01' and '2022-09-31'

--preco maior 
select max (preco)AS maiores
    from produtos 

--contando quantas tuplas temporizar
select count (id)AS quantos
from produtos


--mostra todos os produtos e nome das categorias

select P.id,P.nome,C.nome AS categorias         --os AS renomeia a coluna nome de categorias que ja foram trocadas no from primeiro 
from produtos P,categorias C
where P.id_categoria = C.id

--mostra quantos produtos foram comprados pelo cliente fulano
select  P.id,P.nome,VI.qtd
from vendas V, vendas_item VI,produtos P
where v.id = VI.id_vendas and P.id=Vi.id_produto and V.id_cliente = 104


--nomes do produtos e queo nome produto comece com celular

select P.nome
from produtos P
where P.nome LIKE 'celular%'         --o % é um coringa para procurar o like 

                        -- '%banco_ de dado_'

--produtos que foram vendidos no mes de outubro e valor que foram vendidos
----nome valor e qtd * valor unit

select P.id, P.preco,VI.qtd,(VI.valor_unit*VI.qtd)AS valor_total
    from produtos P,vendas V,vendas_item Vi,
    where V.data between '2022-10-01'and'2022-10-31'
    and P.id = VI.id_produto and VI.id_venda = V.id


-- contar quantos alunos tem em cda sala

select sala,count(id) AS num
from alunos
group by sala           --o group by vem depois do whre


--maior preco dos produto por categoria
select C.nome AS categoria,MAX(P.preco)AS val_alto
from categorias,produtos
where P.id_categoria = C.id 
group by C.nome
order by val_alto desc

--lista de produtos por preco do maior para o menor

select * 
from produtos
order by preco asc          --order by sempre vem depois de tudo
                desc

--lista as categoias que tem preco maios altos

--ver tambem joins ------------------------------------------------------------------------



