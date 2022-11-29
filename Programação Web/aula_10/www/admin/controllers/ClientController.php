<?php
class ClientController
{

    public function listClient()
    {
        if (isset($_SESSION['user'])) {
            require_once('models/ClientModel.php');
            $ClientsModel = new ClientModel();
            $result = $ClientsModel->listClient();

            $arrayClients =  array();

            while ($line = $result->fetch_assoc()) {
                array_push($arrayClients, $line);
            }
            require_once('views/templates/header.php');
            require_once('views/clients/listClient.php');
            require_once('views/templates/footer.php');
        }else{
            header('Location:?controller=main&action=login');
        }
    }

    public function detailsClient($idClient)
    {
        if (isset($_SESSION['user'])) {
            require_once('models/ClientModel.php');
            $ClientModel = new ClientModel();
            $result = $ClientModel->detailsClient($idClient);

            if ($arrayClients = $result->fetch_assoc()) {

                require_once('views/templates/header.php');
                require_once('views/clients/detailsClient.php');
                require_once('views/templates/footer.php');
            }
        }else{
            header('Location:?controller=main&action=login');
        }
    }
}
