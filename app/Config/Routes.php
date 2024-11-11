<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/cadEventos', 'ControllerEventos::index');
$routes->post('/salvarEvento', 'ControllerEventos::salvar');
$routes->get('/cadPortfolio', 'ControllerPortfolio::index');
$routes->post('/salvarPortfolio', 'ControllerPortfolio::salvar');
$routes->get('/cadFuncionarios', 'ControllerFuncionarios::index');
$routes->post('/salvarFuncionarios', 'ControllerFuncionarios::salvar');
$routes->get('/adminInicio', 'ControllerAdmin::index');

$routes->get('/editarImagens', 'ControllerAdmin::edit');