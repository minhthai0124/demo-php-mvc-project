<?php

    $router->get('', 'PagesController@home');
    $router->get('about', 'PagesController@about');
    $router->get('contact', 'PagesController@contact');

    $router->get('users', 'UsersController@index');
    $router->post('users', 'UsersController@store');
    $router->post('users/delete', 'UsersController@delete');
    $router->get('users/update', 'UsersController@getUserById');
    $router->post('users/update', 'UsersController@update');


