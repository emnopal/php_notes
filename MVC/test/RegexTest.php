<?php

namespace Badhabit\Mvc;

require_once __DIR__.'/../vendor/autoload.php';

use PHPUnit\Framework\TestCase;

class RegexTest extends TestCase
{
    public function testRegex(){
        $path = "/products/178292/cat/abcde";

        $pattern = ";^/products/([0-9a-zA-Z]*)/cat/([0-9a-zA-Z]*)$;";

        $result = preg_match($pattern, $path, $matches);

        self::assertEquals(1, $result);

        array_shift($matches); // hapus index 0, karena index 0 merupakan url pattern
        var_dump($matches);

    }
}