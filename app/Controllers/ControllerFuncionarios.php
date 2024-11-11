<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\FuncionariosModel;
use CodeIgniter\HTTP\ResponseInterface;

class ControllerFuncionarios extends BaseController
{
    public function index()
    {
        return view("cadFuncionarios");
    }

    public function salvar()
    {
        $dados = $this->request->getPost();
        $imagem = $this->request->getFile("imagem");

        $nomeAleatorio = $imagem->getRandomName();
        $dados["imagem"] = $nomeAleatorio;
        $imagem->move("../public/upload/funcionarios", $nomeAleatorio);

        $eventosModel = new FuncionariosModel();
        $eventosModel->save($dados);

        return redirect()->to(base_url("/cadFuncionarios"));
    }
}
