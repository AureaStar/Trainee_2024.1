<?php

namespace App\Controllers;
use App\Controllers;
use App\Core\Router;


    $router->get('','SiteController@index');
    $router->get('index','SiteController@index');
    $router->get('posts','SiteController@posts');
    $router->get('post_individual','SiteController@individual_post');
    $router->get('dashboard','AdminController@dashboard');
    $router->get('tabela_posts','AdminController@tabela_posts');
    $router->get('tabela_users','AdminController@tabela_users');      
    $router->get('login','SiteController@login'); 
    