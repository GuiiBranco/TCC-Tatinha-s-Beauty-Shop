<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\FuncionariosModel;
use App\Models\RedesModel;
use CodeIgniter\HTTP\ResponseInterface;

class EditFuncionariosController extends BaseController
{
    public function index($id)
    {
        $dados = array();
        $funcionarioModel = new FuncionariosModel();
        $item = $funcionarioModel->find($id);

        $dados["funcionario"] = $item;

        return view("secoes/editFuncionarios", $dados);
    }

    public function editNome()
    {
        $funcionario = new FuncionariosModel();
        $dados["id"] = $this->request->getPost("idFuncionario");
        $dados["nome"] = $this->request->getPost("nome");
        $funcionario->where("idFuncionario", $dados["id"])->set("nome", $dados["nome"])->update();
        return redirect()->to(base_url("/editSecoes/funcionarios/editFuncionario/".$dados["id"]));
    }

    public function editFoto()
    {
        $funcionario = new FuncionariosModel();

        $dados = $this->request->getPost();
        $imagem = $this->request->getFile("imagem");
        $hashImagem = $imagem->getRandomName();

        if(file_exists("upload/funcionarios/".$dados["imagemAnterior"])){
            unlink("upload/funcionarios/".$dados["imagemAnterior"]);
        }

        $imagem->move("upload/funcionarios", $hashImagem);

        $funcionario->where("idFuncionario", $dados["idFuncionario"])->set("imagem", $hashImagem)->update();
        return redirect()->to(base_url("/editSecoes/funcionarios/editFuncionario/".$dados["idFuncionario"]));
    }

    public function addRede()
    {
        $redesModel = new RedesModel();
        $dados = $this->request->getPost();
    }

    public function apagarRede()
    {
        //
    }
}
