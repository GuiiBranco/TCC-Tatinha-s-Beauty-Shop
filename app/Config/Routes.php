<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/cadEventos', 'ControllerEventos::index');
$routes->post('/salvarEvento', 'ControllerEventos::salvar');
$routes->get('/cadPortfolio', 'ControllerPortfolio::index');
$routes->get('/cadFuncionarios', 'ControllerFuncionarios::index');
$routes->get('/cadAdmin', 'ControllerAdmin::index');
