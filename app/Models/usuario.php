<?php namespace App\Models;
use CodeIgniter\Model;

class Usuario extends Model{
    public function obtenerUsuario($datos){
        $nombre = $this->db->table('t_usuario');
        $nombre->where($datos);
        return $nombre->get()->getResultArray();
    }
}
