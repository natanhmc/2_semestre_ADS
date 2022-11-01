<?php
    class ContactModel{
        var $Connection;

        public function __construct()
        {
            require_once('db/ConnectClass.php');
            $ConnectClass = new ConnectClass();
            $ConnectClass->openConnect();
            $this->Connection = $ConnectClass->getConn();
        }

        public function listContact(){
            $sql = "SELECT * FROM contacts";
            return $this -> Connection -> query($sql);
        }
        public function detailsContact($idContact){
            $sql = "
                SELECT * FROM contacts
                WHERE 
                    idContact = $idContact
            ";
            return $this -> Connection -> query($sql);
        }


        public function insertContact($contact){
            $sql = "
                INSERT INTO
                    contacts (name,email,message)
                VALUES 
                    ('{$contact['name']}',
                     '{$contact['email']}',
                     '{$contact['message']}')
            ";
            $this -> Connection -> query($sql);
            return $this -> Connection -> insert_id;
        }

    }