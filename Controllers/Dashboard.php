<?php

namespace App\Controllers;
use App\Models\User;

class Dashboard extends BaseController
{
    public function index(){
        return view('map');
    }

    public function login()
    {
        return view('login-admin');
    }

    public function postAddAdmin()
    {
        $data = array(
            'name' => $this->request->getPost('name'), 
            'email' => $this->request->getPost('email'), 
            'password' => md5($this->request->getPost('password')), 
        );
        $model = model(UserModel::class);
        $model->addAdmin($data);
        
    }
    function postLogin(){
        $data = array(
            'email' => $this->request->getPost('email'), 
            'password' => $this->request->getPost('password'), 
        );

        $model = model(UserModel::class);
        $model->loginAdmin($data);    
    }
}
