<?php
class ContactController{
    var $ContactModel;

    public function __construct()
    {
        require_once('models/ContactModel.php');
        $this -> ContactModel = new ContactModel();
    }

    public function insertContact(){
        $contact = json_decode(file_get_contents("php://input"));
        $contact = (array)$contact;
        $idContact = $this -> ContactModel->insertContact($contact);
        header('Content-Type: applicantion/json');
        echo ('
        {
            "success" : "1",
            "mensagem" : "Contato inserido"
        }
        ');
    }
    public function listContacts(){
        $result = $this -> ContactModel -> listContact();
        $arrayContacts = array();
        while($line = $result -> fetch_assoc()){
            array_push($arrayContacts,$line);
        }
        echo json_encode($arrayContacts);
    }
    public function consultContact($idContact){
        $result = $this -> ContactModel ->detailsContact($idContact);
        if($arrayContacts = $result -> fetch_assoc()){
            header('Content-Type: applicantion/json');
            echo json_encode($arrayContacts);
        } else {
            header('Content-Type: applicantion/json');
            echo ('
            {
                "error" : "1",
                "mensagem" : "Contato não encontrado"
            }
            ');
        }
    }
}