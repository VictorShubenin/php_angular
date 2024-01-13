<?php

use app\controllers\HomeController;
use app\Router\Route;

return [

    Route::get('/home', [HomeController::class, 'index']),

];
