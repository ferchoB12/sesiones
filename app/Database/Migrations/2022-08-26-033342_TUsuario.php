<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TUsuario extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_estudiante' =>[
                'type'            =>'INT',
                'constraint'      =>5,
                'unsigned'        => true,
                'auto_increment'  => true,

            ],
            'nombre'  =>[
                'type'     =>'VARCHAR',
                'constraint'  =>'100',
            ],
            'email' =>[
                'type'     =>'VARCHAR',
                'constraint'  =>'100',
            ],
            'password' =>[
                'type'     =>'VARCHAR',
                'constraint'  =>'100',
            ],
        ]);
        $this->forge->addKey('id_estudiante',true);
        $this->forge->createTable('t_usuario');
    }

    public function down()
    {
        $this->forge->droptable('t_usuario');
    }
}
