<?php

namespace App\Models;

use CodeIgniter\Model;

class OtentikasiModel extends Model
{
    public function getEmail($email)
    {
        $dumpEmail = 'ian@gmail.com';
        
        if ($email != $dumpEmail) {
            throw new Exception('Email tidak valid');
        }

        return [
            'email' => $dumpEmail,
            'username' => 'ian'
        ];

    }
}
