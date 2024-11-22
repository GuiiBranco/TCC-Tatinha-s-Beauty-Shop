<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PortfolioModel;
use CodeIgniter\HTTP\ResponseInterface;

class PortfolioController extends BaseController
{
    public function index()
    {
        $dados = array();
        $portfolioModel = new PortfolioModel();
        $itens = $portfolioModel->findAll();

        $dados["imagens"] = $itens;

        return view("secoes/secaoPortfolio", $dados);
    }

    public function adicionarImagem()
    {
        $dados = $this->request->getPost();
        $imagem = $this->request->getFile("imagem");

        $nomeAleatorio = $imagem->getRandomName();
        $dados["imagem"] = $nomeAleatorio;

        $portfolioModel = new PortfolioModel();
        $portfolioModel->save($dados);

        $imagem->move("upload/portfolio", $nomeAleatorio);
        return redirect()->to(base_url("editSecoes/portfolio"));
    }

    public function deletarImagem($id)
    {
        $portfolioModel = new PortfolioModel();
        
        $dados = $portfolioModel->find($id);
        $arquivoImagem = $dados["imagem"];
        if(file_exists("upload/portfolio/".$arquivoImagem)){
            unlink("upload/portfolio/".$arquivoImagem);
        }

        $portfolioModel->where('idPortfolio', $id)->delete();

        return redirect()->to(base_url("editSecoes/portfolio"));
    }
}
