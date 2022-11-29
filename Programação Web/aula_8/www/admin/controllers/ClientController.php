<?php
class ClientController{

    public function listClient()
    {
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
        

    }
}
