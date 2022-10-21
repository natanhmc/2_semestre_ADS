<h1>Detalhes do cliente</h1>
<table class="table table-striped">
    <tr>
        <th>codigo</th>
        <td><?= $arrayClients['idClient']  ?></td>
    </tr>
    <tr>
        <th>nome</th>
        <td><?= $arrayClients['name']  ?></td>
    </tr>
    <tr>
        <th>email</th>
        <td><?= $arrayClients['email']  ?></td>
    </tr>
    <tr>
        <th>endereço</th>
        <td><?= $arrayClients['address']  ?></td>
    </tr>
    <tr>
        <th>telefone</th>
        <td><?= $arrayClients['phone']  ?></td>
    </tr>
    <tr>
        <th>image</th>
        <td>
            <?php
            if (is_file("assets/img/client/{$arrayClients['idClient']}.jpg")) {
                echo "<img style='max-width:150px' class='img-fluid' src='assets/img/client/{$client['idClient']}.jpg'>";
            } else {
                echo 'Sem imagem';
            }
            ?>
        </td>
    </tr>

    <tr>
        <th>
            <a href="?controller=clients&action=clients" class="btn btn-light">Voltar</a>
        </th>
    </tr>


</table>