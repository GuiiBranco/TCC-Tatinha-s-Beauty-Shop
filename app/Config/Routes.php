<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->group("admin", function($routes){
    $routes->get('editarSecoes', 'ControllerAdmin::editar');
});

// $routes->get('/cadEventos', 'ControllerEventos::index');
// $routes->post('/salvarEvento', 'ControllerEventos::salvar');
// $routes->get('/cadPortfolio', 'ControllerPortfolio::index');
// $routes->post('/salvarPortfolio', 'ControllerPortfolio::salvar');
// $routes->get('/cadFuncionarios', 'ControllerFuncionarios::index');
// $routes->post('/salvarFuncionarios', 'ControllerFuncionarios::salvar');
$routes->get('/adminInicio', 'ControllerAdmin::index');

$routes->get('/Secoes/secaoPortfolio', 'ControllerPortfolio::editar');

$routes->get('/login', 'ControllerLogin::index');
$routes->post('/login/logar', 'ControllerLogin::logar');

$routes->get('/editarImagens', 'ControllerAdmin::gerenciar');
