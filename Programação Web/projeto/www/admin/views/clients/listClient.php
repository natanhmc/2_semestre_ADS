<h1>Listagem de clientes</h1>

<table class="table table-striped">

    <tr>
        <th>Id do cliente</th>
        <th>Nome</th>
        <th>Telefone</th>
        <th colspan=3>Ações</th>
    </tr>

    <?php
    foreach ($arrayClients as $client) {


    ?>
        <tr>
            <td>
                <?= $client['idClient'] ?>

            </td>
            <td>
                <?= $client['name'] ?>

            </td>

            <td>
                <?= $client['phone'] ?>

            </td>
            <td>
                <?php
                if (is_file("assets/img/client/{$client['idClient']}.jpg")) {
                    echo "<img style='max-width:150px' class='img-fluid' src='assets/img/client/{$client['idClient']}.jpg'>";
                } else {
                    echo 'Sem imagem';
                }
                ?>
            </td>

            <td>
                <a href="?controller=clients&action=detailsClient&id=<?= $client['idClient'] ?>" class="btn btn-info">
                    Detalhes
                </a>
            </td>
            <td>
                <a href="?controller=clients&action=updateClient&id=<?= $client['idClient'] ?>" class="btn btn-warning">
                    Alterar</a>
            </td>
            <td>
                <a href="?controller=clients&action=deleteClientAction&id=<?= $client['idClient'] ?>" class="btn btn-danger">
                    Delete</a>
            </td>
        </tr>
    <?php
    }
    ?>
</table>