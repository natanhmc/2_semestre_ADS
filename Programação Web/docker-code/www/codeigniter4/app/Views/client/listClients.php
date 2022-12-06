<h1>Listagem de clientes</h1>

<table class="table table-striped">

    <tr>
        <th>Nome</th>
        <th>Telefone</th>
      
    </tr>

    <?php
    foreach ($clients as $client) {


    ?>
        <tr>
          
            <td>
                <?= $client['name'] ?>

            </td>

            <td>
                <?= $client['phone'] ?>

            </td>
        </tr>
    <?php
    }
    ?>
</table>