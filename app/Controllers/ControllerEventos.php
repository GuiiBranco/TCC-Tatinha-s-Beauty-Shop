<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\EventosModel;
use CodeIgniter\HTTP\ResponseInterface;

class ControllerEventos extends BaseController
{
    public function index()
    {
        $eventosModel = new EventosModel();
        $dados = array();
        $dados["imagens"] = $eventosModel->findAll();
        return view("cadEventos", $dados);
    }

    public function salvar()
    {
        $dados = $this->request->getPost();
        $imagem = $this->request->getFile("imagem");

        $nomeAleatorio = $imagem->getRandomName();
        $dados["imagem"] = $nomeAleatorio;
        $imagem->move("../public/upload/eventos", $nomeAleatorio);

        $eventosModel = new EventosModel();
        $eventosModel->save($dados);

        return redirect()->to(base_url("/cadEventos"));
    }
}