<?php

namespace App\Controllers;
use App\Controllers\AdminPostController;
use App\Core\Router;

    $router->get('admin/posts', 'AdminPostController@index');
    $router->post('admin/posts/create', 'AdminPostController@create');
?>