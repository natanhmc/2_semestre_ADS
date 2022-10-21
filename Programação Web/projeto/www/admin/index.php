<?php
session_start();

if (!isset($_GET['controller'])) {
    require_once('controllers/MainController.php');
    $MainController = new MainController();
    $MainController->index();
} else {
    switch ($_REQUEST['controller']) {
        case 'main':
            require_once('controllers/MainController.php');
            $MainController = new MainController();

            if (!isset($_GET['action'])) {
                $MainController->index();
            } else {
                switch ($_REQUEST['action']) {
                    case 'home':
                        $MainController->index();
                    case 'login':
                        $MainController->login();
                        break;
                    case 'logout':
                        $MainController->logout();
                        break;
                }
            }
            break;
        case 'user':
            require_once('controllers/UserController.php');
            $UserController = new UserController();
            if (!isset($_GET['action'])) {
            } else {
                switch ($_REQUEST['action']) {
                    case 'validateLogin';
                        $UserController->validateLogin();
                        break;
                }
            }
        case 'clients':
            require_once('controllers/ClientController.php');
            $ClientController = new ClientController();
            if (!isset($_GET['action'])) {
            } else {
                switch ($_REQUEST['action']) {

                    case 'clients':
                        $ClientController->listClient();
                        break;
                    case 'detailsClient':
                        $ClientController->detailsClient($_GET['id']);
                        break;
                    case 'insertClient':
                        $ClientController->insertClient();
                        break;
                    case 'insertClientAction':
                        $ClientController->insertClientAction();
                        break;
                    case 'updateClient':
                        $ClientController->updateClient($_GET['id']);
                        break;
                    case 'updateClientAction':
                        $ClientController->updateClientAction($_GET['id']);
                        break;
                    case 'deleteClientAction':
                        $ClientController->deleteClientAction($_GET['id']);
                        break;
                }
            }
            break;
    }
}
