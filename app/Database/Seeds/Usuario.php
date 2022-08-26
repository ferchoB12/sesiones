<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Usuario extends Seeder
{
    public function run()
    {
        $nombre="byron";
        $email="vanne2010_byron@hotmail.com";
        $password=password_hash("12345",PASSWORD_DEFAULT);

        $datos=[
                'nombre'=> $nombre,
                'email' => $email,
                'password' => $password,

        ];
        $this->db->table('t_usuario')->insert($datos);
    }
}
