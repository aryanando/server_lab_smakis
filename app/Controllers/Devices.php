<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class Devices extends ResourceController
{
    protected $modelName = 'App\Models\Devices';
    protected $format    = 'json';

    public function index()
    {
        return $this->respond($this->model->findAll());
    }

    public function create() {
        $data = [
            'devices_username' => $this->request->getVar('devices_username'),
            'devices_password'  => $this->request->getVar('devices_password'),
        ];
        $this->model->insert($data);
        $response = [
          'status'   => 201,
          'error'    => null,
          'messages' => [
              'success' => 'Employee created successfully'
          ]
      ];
      return $this->respondCreated($response);
    }

    // ...
}
