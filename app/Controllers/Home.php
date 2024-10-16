<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {

        helper('jwt');

        $token = createJWT('ian@gmail.com');

        // return view('welcome_message');

        return $token;
    }
}
