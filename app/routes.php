<?php

namespace App\Controllers;
use App\Controllers\ExampleController;
use App\Core\Router;

    $router->get('', 'ExampleController@index');
    $router->get('login', 'ExampleController@viewlogin');
    $router->get('landingpage','ExampleController@viewlanding');
    $router->get('usuarios','UserController@index');
    $router->post('usuarios/delete','UserController@delete');
    $router->post('usuarios/editar','UserController@editar');
    $router->post('usuarios/criar','UserController@criar');
    $router->post('falsa','falsa');
?>