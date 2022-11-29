--Liste todos os produtos cadastrados e ordene por ordem alfabética de descrição.

select * 
from produtos
order by descricao asc 

--Lista os produtos que foram pedidos e o nome do fornecedor de cada pedido.

SELECT fornecedores.nome,pedidos.id AS pedido,produtos.descricao
from fornecedores,pedidos,produtos,pedidos_itens
where pedidos.id = pedidos_itens.id_pedido 
and pedidos.id_fornecedor = fornecedores.id
order by fornecedores.nome asc

--Mostre os produtos que já foram pedidos e o nome da categoria a que ele pertence.

SELECT produtos.descricao,categorias.nome as categoria,pedidos.data_pedido as pedido_em
from pedidos,produtos,pedidos_itens,categorias
where pedidos.id = pedidos_itens.id_pedido 
and produtos.id_categoria = categorias.id
order by pedidos.data_pedido asc


--Mostre o nome do fornecedor, a data do último pedido e a descrição do produto que ele pediu.
SELECT fornecedores.nome,produtos.descricao,pedidos.data_pedido as pedido_em
from fornecedores,pedidos,produtos,pedidos_itens
where fornecedores.id = pedidos.id_fornecedor 
and produtos.id = pedidos_itens.id_produto 
and pedidos_itens.id_pedido = pedidos.id
and fornecedores.id = 456
ORDER by pedidos.data_pedido DESC