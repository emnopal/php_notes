<?php

    namespace App\Product;

    class User {
        public $user;
        public function __construct($user="") {
            $this->user = $user;
            echo "Ini adalah class: " . __CLASS__ . PHP_EOL;
            echo "Class ini akan menyimpan data: {$this->user}";
        }
    }