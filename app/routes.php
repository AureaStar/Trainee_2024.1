<?php

namespace App\Controllers;
use App\Controllers;
use App\Core\Router;


    $router->get('','SiteController@index');
    $router->get('index','SiteController@index');
    $router->get('posts/search','SiteController@search');
    $router->get('posts','SiteController@posts');
    $router->get('post_individual','SiteController@individual_post');
    $router->get('admin','AdminController@dashboard');
    $router->get('admin/posts','AdminController@tabela_posts');
    $router->get('admin/users','AdminController@tabela_users');      
    $router->get('login','SiteController@login'); 
    $router->post('logina','LoginController@login');
    $router->get('logout','LoginController@logout');
    $router->get('', 'ExampleController@index');
    $router->get('login', 'ExampleController@viewlogin');
    $router->get('landingpage','ExampleController@viewlanding');
    $router->get('usuarios','UserController@index');
    $router->post('usuarios/delete','UserController@delete');
    $router->post('usuarios/editar','UserController@editar');
    $router->post('usuarios/criar','UserController@criar');
