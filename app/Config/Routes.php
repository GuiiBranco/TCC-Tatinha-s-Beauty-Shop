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

});