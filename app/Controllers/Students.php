<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class Students extends ResourceController
{
    protected $modelName = 'App\Models\Students';
    protected $format    = 'json';

    public function index()
    {
        return $this->respond($this->model->findAll()[0]);
    }

    // ...
}
