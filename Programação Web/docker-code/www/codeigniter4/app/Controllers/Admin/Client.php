<?php
namespace App\Controllers\Admin;

use App\Models\ClientModel;
use App\Controllers\BaseController;

class Client extends BaseController{
    public function __construct(){
        $session = \Config\Services::session();

        if($session ->has('user')){
            
        }else{
            return redirect()-> to(base_url('admin/login'));
        }
    }
   

    public function listClient(){
        $ClientModel = new ClientModel();
        
        $data = [
           'arrayClients' => $ClientModel -> findAll(),
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
        $data =[
            'name'=> $this -> request -> getVar('name'),
            'email'=> $this -> request -> getVar('email'),
            'phone'=> $this -> request -> getVar('phone'),
            'address'=> $this -> request -> getVar('address')
        ];
        $ClientModel = new ClientModel();
        $ClientModel -> insert($data);
        return redirect()->to(base_url('admin/listClients'));
    }
    public function updateClient($idClient){
        $ClientModel = new ClientModel();

        $data = [
           'arrayClient' => $ClientModel -> find($idClient),
        ];
        echo view('templates/header');
        echo view('admin/client/updateClient',$data);
        echo view ('templates/footer');
    }
    public function updateClientAction($idClient){
        $data =[
            'name'=> $this -> request -> getVar('name'),
            'email'=> $this -> request -> getVar('email'),
            'phone'=> $this -> request -> getVar('phone'),
            'address'=> $this -> request -> getVar('address')
        ];
        $ClientModel = new ClientModel();
        $ClientModel -> insert($idClient,$data);
        return redirect()->to(base_url('admin/listClients'));
    }

    public function deleteClient($idClient){
        $ClientModel = new ClientModel();
        $ClientModel -> delete($idClient);

    }


}