<?php

namespace App\Controllers;
use App\Controllers\ExampleController;
use App\Core\Router;


    $router->get('', 'ExampleController@index');
    $router->get('posts','ExampleController@posts');
    $router->get('post_individual','ExampleController@individual_post');
    $router->get('dashboard','ExampleController@dashboard');
    $router->get('tabela_posts','ExampleController@tabela_posts');
    $router->get('tabela_users','ExampleController@tabela_users');      
    $router->get('login','ExampleController@login'); 
    