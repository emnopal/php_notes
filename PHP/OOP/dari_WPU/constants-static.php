<?php

    /*
    di php nama class gaboleh sama di dalam satu project, file ataupun program,
    jika file tersebut tidak mengandung keyword namespace
    artinya class yang ada di file tersebut akan menjadi
    class global, artinya bisa diakses di seluruh project.
    */

    define("PI", 3.14);
    echo PI;
    echo "\n";

    const GRAVITY = 9.8;
    echo GRAVITY;
    echo "\n";

    class EulerConst {
        const E = 2.71828182845904523536028747135266249775724709369995;
    }

    echo EulerConst::E;
    echo "\n";

    echo "Get Filename: " .__FILE__ .PHP_EOL;

    class GetMyName{
        public $getName = __CLASS__;
    }

    $obj = new GetMyName();
    echo "Get Classname: " .$obj->getName .PHP_EOL;

    class GetMyConstName{
        const getConstName = __CLASS__;
    }

    echo "Get Classname: " .GetMyConstName::getConstName .PHP_EOL;
    echo PHP_EOL;

    class ContohStatic {
        public static $angka = 1;

        public static function halo() {
            return "Halo " . self::$angka++ . " kali.";
        }
    }

    // contoh static
    echo ContohStatic::$angka; // 1
    echo PHP_EOL;
    echo ContohStatic::halo(); // Halo 1 kali.
    echo PHP_EOL;
    echo ContohStatic::halo(); // Halo 2 kali.
    echo PHP_EOL;

    class Contoh {
        public static $angka = 1;

        public function halo() {
            return "Halo " . self::$angka++ . " kali";
        }
    }

    // contoh statis
    // objek pertama
    $obj = new Contoh;
    echo $obj->halo(); // Halo 1 kali
    echo PHP_EOL;
    echo $obj->halo(); // Halo 2 kali
    echo PHP_EOL;
    echo $obj->halo(); // Halo 3 kali
    echo PHP_EOL;

    // objek kedua, variable $angka akan berubah
    // sesuai dengan pemanggilan terakhir kali
    // sebelum objek 1 berakhir -> halo 3 kali
    $obj2 = new Contoh;

    // lanjutin dari pemanggilan objek pertama
    echo $obj2->halo(); // Halo 4 kali
    echo PHP_EOL;
    echo $obj2->halo(); // Halo 5 kali
    echo PHP_EOL;
    echo $obj2->halo(); // Halo 6 kali
    echo PHP_EOL;

    echo PHP_EOL;

    class ContohDinamis {
        public $angka = 1;

        public function halo() {
            #return "Halo " . self::$angka++ . " kali";
            return "Halo " . $this->angka++ . " kali";
        }
    }

    // contoh dinamis
    // objek pertama
    $obj = new ContohDinamis;
    echo $obj->halo(); // Halo 1 kali
    echo PHP_EOL;
    echo $obj->halo(); // Halo 2 kali
    echo PHP_EOL;
    echo $obj->halo(); // Halo 3 kali
    echo PHP_EOL;

    // objek kedua, variable $angka akan di reset ke 1
    $obj2 = new ContohDinamis;

    // ulangi dari 1
    echo $obj2->halo(); // Halo 1 kali
    echo PHP_EOL;
    echo $obj2->halo(); // Halo 2 kali
    echo PHP_EOL;
    echo $obj2->halo(); // Halo 3 kali
    echo PHP_EOL;
    echo PHP_EOL;

    // destruktor akan otomatis dipanggil disini, sehingga
    // var $angka di-reset ke 1

    class contohStatis {
        public static $contohStr = "hello, world";
        public function printContoh(){
            echo self::$contohStr;
        }
    }

    // objek awal
    $obj = new contohStatis;
    $obj->printContoh(); // hello, world
    echo PHP_EOL;

    // override $obj::$contohStr
    $obj::$contohStr = "hello, indonesia";
    $obj->printContoh(); // hello, indonesia
    echo PHP_EOL;

    // objek kedua
    $obj2 = new contohStatis;
    $obj2->printContoh(); // hello, indonesia -> tidak akan berubah kembali jadi hello, world
    echo PHP_EOL;

    class contohDinamis2 {
        public $contohStr = "hello, world";
        public function printContoh(){
            echo $this->contohStr;
        }
    }

    // objek awal
    $obj = new contohDinamis2;
    $obj->printContoh(); // hello, world
    echo PHP_EOL;

    // override $obj::$contohStr
    $obj::$contohStr = "hello, indonesia";
    $obj->printContoh(); // hello, indonesia
    echo PHP_EOL;

    // objek kedua
    $obj2 = new contohDinamis2;
    $obj2->printContoh(); // hello, world -> akan berubah kembali jadi hello, world,
                          // jadi hello, indonesia di destroy ketika
                          // destruktor dipanggil atau class berakhir
    echo PHP_EOL;