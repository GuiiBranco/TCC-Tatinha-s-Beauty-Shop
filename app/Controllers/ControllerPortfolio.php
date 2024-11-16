<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PortfolioModel;
use CodeIgniter\HTTP\ResponseInterface;

class ControllerPortfolio extends BaseController
{
    public function index()
    {
        $portfolioModel = new PortfolioModel();
        $dados = array();
        $dados["imagens"] = $portfolioModel->findAll();
        return view("cadPortfolio", $dados);
    }

    public function salvar()
    {
        $dados = $this->request->getPost();
        $imagem = $this->request->getFile("imagem");

        $nomeAleatorio = $imagem->getRandomName();
        $dados["imagem"] = $nomeAleatorio;
        $imagem->move("../public/upload/portfolio", $nomeAleatorio);

        $portfolioModel = new PortfolioModel();
        $portfolioModel->save($dados);

        return redirect()->to(base_url("/cadPortfolio"));
    }
}
