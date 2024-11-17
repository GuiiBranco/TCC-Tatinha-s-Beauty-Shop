<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class ControllerAdmin extends BaseController
{
    public function index()
    {
        return view("admin/inicio");
    }

    public function gerenciar()
    {
        return view("../Views/admin/editarImagens.php");
    }

    public function editar()
    {
        return view("../Views/admin/editarSecoes.php");
    }
}
