<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\API\ResponseTrait;

class UserController extends BaseController
{

    use ResponseTrait;

    public function index()
    {
        $data = [
            [
                'user_id' => 23987983243,
                'user_name' => 'Naruto Uzumaki',
                'user_img' => 'ajhksaoew.jpg'
            ]
        ];

        return $this->respond([
            'code' => 200,
            'status' => 'success',
            'message' => null,
            'data' => $data
        ]);

    }
}
