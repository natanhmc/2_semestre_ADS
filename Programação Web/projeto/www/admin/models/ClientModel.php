<?php

class ClientModel
{
    var $Connection;

    public function __construct()
    {
        require_once('db/ConnectClass.php');
        $ConnectClass = new ConnectClass();
        $ConnectClass->openConnect();
        $this->Connection = $ConnectClass->getConn();
    }


    public function listClient()
    {
        $sql = "SELECT * FROM clients";
        return $this->Connection->query($sql);
    }

    public function detailsClient($idClient)
    {
        $sql = "
                SELECT * FROM clients
                WHERE
                    idClient = $idClient
                    
            ";

        return $this->Connection->query($sql);
    }

    public function insertClient($client) {
        $sql = "
            INSERT INTO 
                clients (name,phone,email,address)
            VALUES
                ('{$client['name']}',
                 '{$client['phone']}',
                 '{$client['email']}',
                 '{$client['address']}')
        ";
        $this->Connection->query($sql);

        return $this->Connection -> insert_id;

    }
    public function updateClient($client)
    {
        $sql = "
            UPDATE  
                clients
            SET
                name ='{$client['name']}',
                phone ='{$client['phone']}',
                email ='{$client['email']}',
                address ='{$client['address']}'
            WHERE
                idClient= {$client['idClient']}
                
        ";

        return $this->Connection->query($sql);
    }
    public function deleteClient($idClient){
        $sql="
            DELETE FROM 
                clients 
            WHERE  
                idClient = $idClient
        ";

        return $this->Connection->query($sql);


    }
}
