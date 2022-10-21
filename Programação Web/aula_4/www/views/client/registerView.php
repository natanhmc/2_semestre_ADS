<h1>dados do cadastro</h1>

<table>
    <tr>
        <th>Nome  :</th>
        <td> <?= $arrayClient['name'] ?></td>
    </tr>
    <tr>
        <th>Email  :</th>
        <td> <?= $arrayClient['email'] ?></td>
    </tr>
    <tr>
        <th>Telefone:</th>
        <td> <?= $arrayClient['phone'] ?></td>
    </tr>
    <tr>
        <th>Genero:</th>
        <td> <?= $arrayClient['gender'] ?></td>
    </tr>
    <tr>
        <th>Termo  :</th>
        <td> <?= $arrayClient['acceptView'] ?></td>
    </tr>
    <tr>
        <th>Turno  :</th>
        <td> <?= $arrayClient['turno'] ?></td>
    </tr>
</table>
<button class="btn btn-primary" onclick="printDiv()">Imprimir cadastro</button>
