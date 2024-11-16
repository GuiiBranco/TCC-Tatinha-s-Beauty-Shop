<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\LoginModel;
use CodeIgniter\HTTP\ResponseInterface;

class ControllerLogin extends BaseController
{
    public function index()
    {
        return view('admin/login');
    }

    public function logar()
    {
        $email = $this->request->getPost('email');
        $senha = $this->request->getPost('senha');

        $LoginModel = new LoginModel();
        $usuario = $LoginModel->select("idAdmin, nome, senha")->where("email", $email)->first();

        if(!$usuario){
            session()->setFlashdata("Aviso!", "E-mail ou senha digitados incorretamente");
            return redirect()->to(base_url("/login"));
        }

        if($senha != $usuario['senha']){
            session()->setFlashdata("Aviso!", "E-mail ou senha digitados incorretamente");
            return redirect()->to(base_url("/login"));
        }

        session()->set("idUsuario", $usuario["idAdmin"]);
        session()->set("nome", $usuario["nome"]);
        return redirect()->to(base_url("/editarImagens"));
    }
}
