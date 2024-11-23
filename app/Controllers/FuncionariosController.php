<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\FuncionariosModel;
use CodeIgniter\HTTP\ResponseInterface;

class FuncionariosController extends BaseController
{
    public function index()
    {
        $dados = array();
        $funcionarioModel = new FuncionariosModel();
        $itens = $funcionarioModel->findAll();

        $dados["imagens"] = $itens;

        return view("secoes/secaoFuncionario", $dados);
    }

    public function adicionarImagem()
    {
        $dados = $this->request->getPost();
        $imagem = $this->request->getFile("imagem");

        $nomeAleatorio = $imagem->getRandomName();
        $dados["imagem"] = $nomeAleatorio;

        $funcionarioModel = new FuncionariosModel();
        $funcionarioModel->save($dados);

        $imagem->move("upload/funcionarios", $nomeAleatorio);
        return redirect()->to(base_url("editSecoes/funcionarios"));
    }

    public function deletarImagem($id)
    {
        $funcionarioModel = new FuncionariosModel();
        
        $dados = $funcionarioModel->find($id);
        $arquivoImagem = $dados["imagem"];
        if(file_exists("upload/funcionarios/".$arquivoImagem)){
            unlink("upload/funcionarios/".$arquivoImagem);
        }

        $funcionarioModel->where('idFuncionario', $id)->delete();

        return redirect()->to(base_url("editSecoes/funcionarios"));
    }

}
