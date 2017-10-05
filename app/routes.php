<?php

    //move to the page in menu
    $router->get('', 'PagesController@home');
    $router->get('about', 'PagesController@about');
    $router->get('contact', 'PagesController@contact');

    //get all user
    $router->get('users', 'UsersController@index');
    $router->post('users', 'UsersController@store');

    //delete user by ID
    $router->post('users/delete', 'UsersController@delete');

    //get user by ID
    $router->get('users/update', 'UsersController@getUserById');

    //update user by ID
    $router->post('users/update', 'UsersController@update');


