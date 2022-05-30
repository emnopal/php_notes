<?php

namespace Badhabit\Mvc\Controller;

use Badhabit\Mvc\App\View;

class HomeController
{
    function index(): void
    {

        $model = [
            'title' => 'Home',
            'content' => 'Welcome to the home page'
        ];

        View::render('home/index', $model);
    }

    function hello(): void
    {
        echo "HomeController.hello()";
    }

    function world(): void
    {
        echo "HomeController.world()";
    }

    function login(): void
    {
        $request = [
            'username' => 'admin',
            'password' => 'admin'
        ];

        $response = [
            'success' => true,
            'message' => 'Login successful'
        ];

        // kirim response ke view

    }

}