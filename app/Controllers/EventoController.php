<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\EventoModel;
use CodeIgniter\HTTP\ResponseInterface;

class EventoController extends BaseController
{
    public function index()
    {
        $dados = array();
        $eventoModel = new EventoModel();
        $itens = $eventoModel->findAll();

        $dados["imagens"] = $itens;
        
        return view("secoes/secaoEvento", $dados);
    }

    public function adicionarImagem()
    {
        $eventoModel = new EventoModel();
        $itens = $eventoModel->findAll();

        if (count($itens) < 1) {
            $dados = $this->request->getPost();
            $imagem = $this->request->getFile("imagem");
    
            $nomeAleatorio = $imagem->getRandomName();
            $dados["imagem"] = $nomeAleatorio;
    
            $eventoModel->save($dados);
    
            $imagem->move("upload/evento", $nomeAleatorio);
            return redirect()->to(base_url("editSecoes/evento"));
        } else {
            session()->setFlashdata("aviso", "A sessão de eventos deve conte no máximo 1 imagem.");
            return redirect()->to(base_url("editSecoes/evento"));
        }


    }

    public function deletarImagem($id)
    {
        $eventoModel = new EventoModel();
        
        $dados = $eventoModel->find($id);
        $arquivoImagem = $dados["imagem"];
        if(file_exists("upload/evento/".$arquivoImagem)){
            unlink("upload/evento/".$arquivoImagem);
        }

        $eventoModel->where('idEventos', $id)->delete();

        return redirect()->to(base_url("editSecoes/evento"));
    }
}
