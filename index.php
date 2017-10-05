<?php

ob_start();

require 'vendor/autoload.php';

require 'core/boostrap.php';

// or use App\Core\{Route, Request};
use App\Core\Route;
use App\Core\Request;

Route::load('app/routes.php')
    ->direct(Request::uri(), Request::method());
