<?php
namespace App\Controllers\Admin;

use App\Models\ClientModel;
use App\Controllers\BaseController;

class Client extends BaseController{

    var $ClientModel;

    public function __construct(){
        $session = \Config\Services::session();

        if($session ->has('user')){
            
        }else{
            return redirect()-> to(base_url('admin/login'));
        }
    }
   

    public function listClients(){
        $ClientModel = new ClientModel;
        $data = [
            'clients' => $ClientModel -> findAll(),
         ];
        echo view('admin/templates/header');
        echo view('admin/clients/listClient',$data);
        echo view ('admin/templates/footer');
        
    }

    public function insertClient(){
        echo view('admin/templates/header');
        echo view('admin/clients/insert');
        echo view ('admin/templates/footer');
        
    }
    public function insertClientAction(){
        $ClientModel = new ClientModel;
        $data =[
            'name'=> $this -> request -> getVar('name'),
            'email'=> $this -> request -> getVar('email'),
            'phone'=> $this -> request -> getVar('phone'),
            'address'=> $this -> request -> getVar('address')
        ];

        $ClientModel-> insert($data);
        return redirect()->to(base_url('admin/listClients'));
    }
    public function updateClient($idClient){
        $ClientModel = new ClientModel;
        $data = [
           'client' => $ClientModel -> find($idClient),
        ];
        echo view('templates/header');
        echo view('admin/clients/updateClient',$data);
        echo view ('templates/footer');
    }
    public function updateClientAction($idClient){
        $ClientModel = new ClientModel;
        $data =[
            'name'=> $this -> request -> getVar('name'),
            'email'=> $this -> request -> getVar('email'),
            'phone'=> $this -> request -> getVar('phone'),
            'address'=> $this -> request -> getVar('address')
        ];
        $ClientModel -> update($idClient,$data);
        return redirect()->to(base_url('admin/listClients'));
    }

    public function deleteClient($idClient){
        $ClientModel = new ClientModel;
        $ClientModel -> delete($idClient);
        return redirect()->to(base_url('admin/listClients'));

    }


}