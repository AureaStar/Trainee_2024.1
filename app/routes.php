<?php

namespace App\Controllers;
use App\Controllers\AdminController;
use App\Core\Router;

    $router->get('posts', 'AdminController@index');
    $router->post('posts/create', 'AdminController@create');
?>