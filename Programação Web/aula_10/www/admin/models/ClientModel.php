<?php

class ClientModel
{

    public function listClient()
    {
        require_once('db/ConnectClass.php');
        $ConnectClass = new ConnectClass();
        $ConnectClass->openConnect();
        $Connection = $ConnectClass->getConn();

        $sql = "SELECT * FROM clients";
        return $Connection->query($sql);
    }
    public function detailsClient($idClient)
    {

        require_once('db/ConnectClass.php');
        $ConnectClass = new ConnectClass();
        $ConnectClass->openConnect();
        $Connection = $ConnectClass->getConn();

        $sql = "
                SELECT * FROM clients
                WHERE
                    idClient = $idClient
                    
            ";

        return $Connection->query($sql);
    }
}
