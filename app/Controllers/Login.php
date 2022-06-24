<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class Login extends ResourceController
{
    protected $modelName = 'App\Models\Students';
    protected $format    = 'json';

    public function index()
    {
        $authHeader = $this->request->getHeader("Authorization");
        //$data = $this->model->find();
        $data = array('Auth' => $authHeader->getValue(), );
        $pass = str_replace("Basic ", "",$authHeader->getValue());
        if($this->model->where('students_password',$pass)->find()){
            return $this->respond(array('Auth' => '1'));
        }else{
            return $this->respond(array('Auth' => '0'));
        }
    }

    // ...

    public function show($id = null){
        $authHeader = $this->request->getHeader("Authorization");
        //$data = $this->model->find();

        return ($authHeader->getValue());
        // if($data){
        //     return $this->respond($data);
        // }else{
        //     return $this->failNotFound('No employee found');
        // }
    }
}