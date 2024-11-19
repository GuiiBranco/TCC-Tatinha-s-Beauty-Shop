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
$routes->get('/editSecoes', 'AdminController::menu');

// Controllers para cadastro "Portfolio"
$routes->get('/portfolio', 'PortfolioController::index');
$routes->post('/cadPortfolio', 'PortfolioController::adicionarImagem');
$routes->get('/deletar/(:num)', 'PortfolioController::deletarImagem/$1');

// Controllers para cadastro "Eventos"
$routes->get('/evento', 'EventoController::index');
$routes->post('/cadEvento', 'EventoController::adicionarImagem');
$routes->get('/deletarEvento/(:num)', 'EventoController::deletarImagem/$1');