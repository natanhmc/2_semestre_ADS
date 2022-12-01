<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\UserModel;

class User extends BaseController{
    
    public function validateLogin(){
        $userName = $this -> request -> getVar('user');
        $userPassword = $this -> request -> getVar('password');

        $UserModel = new UserModel();
        $session = \Config\Services::session();

       if($user = $UserModel -> getUser($userName)){

            if($user['password'] == $userPassword){
                $session -> set('user', $user);
                return redirect()->to(base_url('/admin'));
            }else{
                $session -> set('erro', "senha invlida");
                return redirect()->to(base_url('/admin/login'));
            }
       }else{
        $session -> set('erro', "usuario nao existe");
        return redirect()->to(base_url('/admin/login'));
    }  
    }
}