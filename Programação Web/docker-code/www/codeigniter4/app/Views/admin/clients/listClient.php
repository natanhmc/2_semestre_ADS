<h1>Listagem de clientes</h1>

<table class="table table-striped">

    <tr>
        <th>Id do cliente</th>
        <th>Nome</th>
        <th>Telefone</th>
        <th>Email</th>
        <th>Endereço</th>
        <th colspan=3>Ações</th>
    </tr>

    <?php
    foreach ($clients as $client) {


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
                <?= $client['email'] ?>

            </td>
            <td>
                <?= $client['address'] ?>

            </td>
            <td>
                <a href="<?= base_url('admin/updateClient/' . $client['idClient']) ?>" class="btn btn-warning">
                    Alterar</a>
            </td>
            <td>
                <a href="<?= base_url('admin/deleteClient/' . $client['idClient']) ?>" class="btn btn-danger">
                    Delete</a>
            </td>
        </tr>
    <?php
    }
    ?>
</table>