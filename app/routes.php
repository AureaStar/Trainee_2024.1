<?php

namespace App\Controllers;
use App\Controllers\AdminPostController;
use App\Core\Router;


    $router->get('','SiteController@index');
    $router->get('index','SiteController@index');
    $router->get('posts/search','SiteController@search');
    $router->get('posts','SiteController@posts');
    $router->get('post_individual','SiteController@individual_post');
    $router->get('admin','AdminPostController@dashboard');
    $router->get('login','SiteController@login'); 
    $router->post('logina','LoginController@login');
    $router->get('admin/logout','LoginController@logout');
    $router->get('admin/users','UserController@index');
    $router->post('usuarios/delete','UserController@delete');
    $router->post('usuarios/editar','UserController@editar');
    $router->post('usuarios/criar','UserController@criar');
    $router->get('admin/posts', 'AdminPostController@index');
    $router->post('admin/posts/create', 'AdminPostController@create');
    $router->post("admin/post/delete","AdminPostController@deleteById");
    $router->get('admin/posts/findOne','AdminPostController@findOne');
    $router->post("admin/post/update","AdminPostController@update");

