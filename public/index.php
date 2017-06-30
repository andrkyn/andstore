<?php

// подключаем файлы ядра
/*require_once '../src/Core/Model.php';
require_once '../src/Core/View.php';
require_once '../src/Core/Controller.php'; */


use andframe\src\Core\Route;

//require_once '../src/Core/Controller.php';
require __DIR__ . '/../vendor/autoload.php';


//$loader = require '../vendor/autoload.php';
//$loader =require __DIR__ . '/../vendor/autoload.php';

//require_once '../src/Core/Route.php';
Route::start(); // запускаем маршрутизатор
