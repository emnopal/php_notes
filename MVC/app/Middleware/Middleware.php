<?php

namespace Badhabit\Mvc\Middleware;

interface Middleware
{
    function before(): void;
}

