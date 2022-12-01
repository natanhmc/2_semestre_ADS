<?php
namespace App\Controllers;

use App\Models\ClientModel;

class Client extends BaseController{
    var $ClientModel;
    public function listClient(){
        $ClientModel = new ClientModel();
        $data = [
           'clients' => $ClientModel -> findAll(),
        ];
        echo view('templates/header');
        echo view('client/listClients',$data);
        echo view ('templates/footer');
        
    }

}