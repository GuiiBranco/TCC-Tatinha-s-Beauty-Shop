<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class CadastrarImagens extends BaseController
{
    public function salvar()
    {
        $nome = $this->request->getPost();
        $imagem = $this->request->getFile("img");

        $imagensModel = new \App\Models\Imagens();
        $imagensModel->save($nome);
        $imagensModel->save($imagem);
    }
}
