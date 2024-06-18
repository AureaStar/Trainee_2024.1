<?php

namespace App\Controllers;
use App\Controllers\AdminController;
use App\Core\Router;

    $router->get('posts', 'AdminController@index');
    $router->post("post/delete","AdminController@deleteById");
    $router->get('posts/findOne','AdminController@findOne');
    $router->post("post/update","AdminController@update");
?>
