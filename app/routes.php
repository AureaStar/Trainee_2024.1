<?php

namespace App\Controllers;
use App\Controllers\ExampleController;
use App\Core\Router;


    $router->get('', 'ExampleController@index');
    $router->get('posts','ExampleController@posts');
    $router->get('post_individual','ExampleController@individual_post');
        

    