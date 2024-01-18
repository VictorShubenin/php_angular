<?php

use app\controllers\HomeController;
use app\Kernel\Router\Route;

return [

    Route::get('/home', [HomeController::class, 'index']),

];
