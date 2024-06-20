<?php

namespace App\Controllers;
use App\Controllers\AdminController;
use App\Core\Router;


    $router->get('','SiteController@index');
    $router->get('index','SiteController@index');
    $router->get('posts/search','SiteController@search');
    $router->get('posts','SiteController@posts');
    $router->get('post_individual','SiteController@individual_post');
    $router->get('admin','AdminController@dashboard');
    $router->get('admin/posts','AdminController@tabela_posts');
    $router->get('login','SiteController@login'); 
    $router->post('logina','LoginController@login');
    $router->get('admin/logout','LoginController@logout');
    $router->get('admin/users','UserController@index');
    $router->post('usuarios/delete','UserController@delete');
    $router->post('usuarios/editar','UserController@editar');
    $router->post('usuarios/criar','UserController@criar');
    $router->get('posts', 'AdminController@index');
    $router->post('posts/create', 'AdminController@create');
?>