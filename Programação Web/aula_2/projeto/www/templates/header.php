<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- js -->
    <script src="assets/js/script.js"></script>
    <!-- css -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <header  class="bg-dark p-5 text-center text-white">
        <h1>Minha página de programaçao web</h1>
    </header>

    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-3 pt-2">
                <h4>Menu</h4>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a id="btnHome" class="nav-link" href="?pages=home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a id="btnAbout" class="nav-link" href="?pages=about">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a id="btnProducts" class="nav-link" href="?pages=products">Produtos e Serviços</a>
                    </li>
                    <li class="nav-item">
                        <a id="btnContact" class="nav-link" href="?pages=contact">Contatos</a>
                    </li>
                </ul>
            </nav>
            <section class="col-md-9">
                <?php
                    if(isset($_GET['pages'])){
                        if($_GET['pages'] == 'home'){
                            include_once('pages/home.php');
                        }
                        if($_GET['pages'] == 'about'){
                            include_once('pages/about.php');
                        }
                        if($_GET['pages'] == 'contact'){
                            include_once('pages/contact.php');
                        }
                        if($_GET['pages'] == 'products'){
                            include_once('pages/products.php');
                        }
                    }else{
                        include_once('pages/home.php');
                    }
                ?>
            </section>
        </div>
    </div>
</body>