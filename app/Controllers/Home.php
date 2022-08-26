<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('Login');
    }
    public function inicio()
    {
        return view('inicio');
    }
    public function Login()
    {
        $nombre = $this->request->getPost('nombre');
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $Usuario = new Usuario();

        $datoUsuario = $Usuario->obtenerUsuario(['nombre'=>$nombre]);
        if(count($datoUsuario)>0 && password_verify($password,$datoUsuario[0]['password'])){
            $datos = [
                "nombre"=>$datoUsuario[0]['nombre'],
                "email"=>$datoUsuario[0]['email'],
                "password"=>$datoUsuario[0]['password']
            ];
            $session = session();
            $session->set($datos);
            return redirect()->to(base_url('/inicio'))->with('mensaje','1');
        }else{
            return redirect()->to(base_url('/'))->with('mensaje','0');
        }

    }
}
