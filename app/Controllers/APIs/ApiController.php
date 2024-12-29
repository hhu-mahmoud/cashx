<?php

namespace App\Controllers\APIs;

use CodeIgniter\RESTful\ResourceController;

class ApiController extends ResourceController
{
    public function getResponse()
    {
        return $this->respond(['message' => 'This is a Get API method!'], 200);
    }
}
