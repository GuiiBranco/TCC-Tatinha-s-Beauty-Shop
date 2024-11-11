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

    public function edit()
    {
        return view("../Views/admin/editarImagens.php");
    }
}
