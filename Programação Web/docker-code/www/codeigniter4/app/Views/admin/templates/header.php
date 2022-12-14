<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- js -->
    <script src="assets/js/script.js"></script>
    <!-- css -->
    <link rel="stylesheet" href="<?= base_url("/assets/css/style.css") ?>">
</head>

<body id="bodyAdmin">
    <header id="headerAdmin" class=" p-3 text-center">
        <h1>Parte Administrativa</h1>
        <a href="<?= base_url('admin/logout') ?>">Sair</a>
    </header>

    <div class="container-fluid">
        <div class="row">
            <nav class="p-3 col-md-3">
                <h2>Menu</h2>
                <ul class="nav flex-column">
                    <li class="nav-item p-1">
                        <a  class="nav-link"  href="<?= base_url('admin') ?>">Home</a>
                    </li>
                    <li class="nav-item p-1">
                        <a  class="nav-link"  href="<?= base_url('admin/listClients') ?>">Clientes</a>
                    </li>
                    <li class="nav-item p-1">
                        <a  class="nav-link"  href="<?= base_url('admin/insertClient') ?>">Novo Cliente</a>
                    </li>
                    <li class="nav-item p-1">
                        <a class="nav-link"  href="<?= base_url('admin/clients')?>">Lista JSON</a>
                    </li>
                    <li class="nav-item p-1">
                        <form class="form" action="<?= base_url('admin/getClientsFor')?>">
                            <input type="text" name="pesquisa">
                            <input type="submit" value="Buscar">
                        </form>
                    </li>
                </ul>
            </nav>
            <section class="col-md-9">