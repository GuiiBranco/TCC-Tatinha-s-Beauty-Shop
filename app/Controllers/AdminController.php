<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\LoginModel;
use CodeIgniter\HTTP\ResponseInterface;

class AdminController extends BaseController
{
    public function index()
    {
        session()->start();
        return view("admin/login");
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
        return redirect()->to(base_url("/editSecoes"));
    }

    public function logout(){
        session()->destroy();
        return redirect()->to(base_url("/"));
    }

    public function menu()
    {
        return view("admin/editarSecoes");
    }
}