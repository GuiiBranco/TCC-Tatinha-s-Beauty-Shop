<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

 // Página principal
$routes->get('/', 'Home::index');

// Tela de login
$routes->get('/login', 'AdminController::index');
$routes->post('/logar', 'AdminController::logar');
$routes->get('/logout', 'AdminController::logout');


$routes->group("editSecoes", ['filter' => 'autenticacao'], function($routes){

    $routes->get('/', 'AdminController::menu');

    // Controller para cadastro "Portfolio"
    $routes->get('portfolio', 'PortfolioController::index');
    $routes->post('cadPortfolio', 'PortfolioController::adicionarImagem');
    $routes->get('deletar/(:num)', 'PortfolioController::deletarImagem/$1');

    // Controller para cadastro "Eventos"
    $routes->get('evento', 'EventoController::index');
    $routes->post('cadEvento', 'EventoController::adicionarImagem');
    $routes->get('deletarEvento/(:num)', 'EventoController::deletarImagem/$1');

    // Controller para cadastro de "Funcionários"
    $routes->get('funcionarios', 'FuncionariosController::index');
    $routes->post('cadFuncionarios', 'FuncionariosController::adicionarImagem');
    $routes->get('deletarFuncionario/(:num)', 'FuncionariosController::deletarImagem/$1');

    // Controller para editar informações dos funcionários
    $routes->get('funcionarios/editFuncionario/(:num)', 'EditFuncionariosController::index/$1');
    $routes->post('funcionarios/editFuncionario/editNome', 'EditFuncionariosController::editNome');
    $routes->post('funcionarios/editFuncionario/editFoto', 'EditFuncionariosController::editFoto');
    $routes->post('funcionarios/editFuncionario/editInstagram', 'EditFuncionariosController::editInstagram');
    $routes->post('funcionarios/editFuncionario/editX', 'EditFuncionariosController::editX');
    $routes->post('funcionarios/editFuncionario/editTiktok', 'EditFuncionariosController::editTiktok');

    // Funções para restaurar imagens padrões
    $routes->get('restaurarEvento/(:num)', 'EventoController::restaurar/$1');

});