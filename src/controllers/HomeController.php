<?php

namespace app\controllers;

class HomeController
{
    public function index(): void
    {
        include_once APP_PATH.'/views/pages/home.php';
    }
}
