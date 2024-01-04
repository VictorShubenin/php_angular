<?php

use app\Router\Route;

return [

    Route::get('/home', function () {
        include_once APP_PATH.'/views/pages/home.php';
    }),

];
