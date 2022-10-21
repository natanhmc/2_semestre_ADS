<?php
class ClientController
{

    var $ClientModel;

    public function __construct()
    {
        require_once('models/ClientModel.php');
        $this->ClientModel = new ClientModel();
    }

    public function listClient()
    {
        $result = $this->ClientModel->listClient();
        $arrayClients =  array();
        while ($line = $result->fetch_assoc()) {
            array_push($arrayClients, $line);
        }
        header('Content-Type: applicantion/json');
        echo json_encode($arrayClients);
    }

    public function consultClient($idClient)
    {
        $result = $this->ClientModel->detailsClient($idClient);
        if ($arrayClient = $result->fetch_assoc()) {
            header('Content-Type: applicantion/json');
            echo json_encode($arrayClient);
        } else {
            header('Content-Type: applicantion/json');
            echo ('
            {
                "error" : "1",
                "mensagem" : "Cliente não encontrado"
            }
            ');
        }
    }

   

    public function insertClient()
    {
        $client = json_decode(file_get_contents("php://input")) ;
        $client = (array)$client;
        $idClient = $this->ClientModel->insertClient($client);
        header('Content-Type: applicantion/json');
        echo ('
        {
            "success" : "1",
            "mensagem" : "Cliente inserido"
        }
        ');
       
    }

   

    public function updateClient($idClient)
    {
        $client = json_decode(file_get_contents("php://input")) ;
        $client = (array)$client;
        $this->ClientModel->updateClient($idClient,$client);
        header('Content-Type: applicantion/json');
        echo ('
        {
            "success" : "1",
            "mensagem" : "Cliente alterado"
        }
        ');

        
       
    }

    public function deleteClient($idClient)
    {
        $this->ClientModel->deleteClient($idClient);
        header('Content-Type: applicantion/json');
        echo ('
        {
            "success" : "1",
            "mensagem" : "Cliente deletado"
        }
        ');
    }


   
}
