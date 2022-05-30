<?php

require_once __DIR__ .'/../vendor/autoload.php';

use Badhabit\Mvc\App\Router;
use Badhabit\Mvc\Controller\HomeController;
use Badhabit\Mvc\Controller\ProductController;
use Badhabit\Mvc\Middleware\AuthMiddleware;

// Add routes
Router::add('GET', '/products/([0-9a-zA-Z]*)/categories/([0-9a-zA-Z]*)', ProductController::class, 'categories');

Router::add("GET", "/", HomeController::class, 'index');
Router::add("GET", "/hello", HomeController::class, 'hello', [AuthMiddleware::class]);
Router::add("GET", "/world", HomeController::class, 'world', [AuthMiddleware::class]);

// Run the router
Router::run();


/*
 *
 * di PHP bisa panggil class kaya gini (manggil class dari string):
 *
 * $className =  "Badhabit\Mvc\Controller\HomeController";
 * $functionName = "index";
 *
 * $class = new $className;
 * $class->$functionName();
 *
 *
 * */
