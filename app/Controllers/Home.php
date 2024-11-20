<?php

namespace App\Controllers;

use App\Models\EventoModel;
use App\Models\PortfolioModel;

class Home extends BaseController
{
    public function index(): string
    {
        $dados = array();

        $portfolioModel = new PortfolioModel();
        $eventoModel = new EventoModel();

        $itensPortfolio = $portfolioModel->findAll();
        $itensEvento = $eventoModel->findAll();

        $dados["imagensPortfolio"] = $itensPortfolio;
        $dados["imagensEvento"] = $itensEvento;

        return view('index', $dados);
    }

    public function teste()
    {
        $dados = array();
        $portfolioModel = new PortfolioModel();
        $itens = $portfolioModel->findAll();
        $dados["imagens"] = $itens;

        var_dump($itens);
    }
}
