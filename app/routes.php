<?php

namespace App\Controllers;
use App\Controllers\AdminController;
use App\Core\Router;

    $router->get('admin/posts', 'AdminController@index');
    $router->post("admin/post/delete","AdminController@deleteById");
    $router->get('admin/posts/findOne','AdminController@findOne');
    $router->post("admin/post/update","AdminController@update");
?>
