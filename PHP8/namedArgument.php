<?php

    /*
        Named argument:
        misal punya function:
        function abc($a, $b) -> kalo kita panggil kita tinggal $c = abc(b:1, a:2) <- gausah
        ikutin urutan argument di dalam function nya (baru di PHP 8)
     */

    function abc(int $a, int $b, int $c){
        return $a+$b+$c;
    }

    echo abc(c:3, b:2, a:1) .PHP_EOL;

    # Default value
    function bcd(int $b, int $c, int $a = 0){ # <- dahulukan required parameter daripada optional parameter
        return $a+$b+$c;
    }

    echo bcd(c:3, b:2);

