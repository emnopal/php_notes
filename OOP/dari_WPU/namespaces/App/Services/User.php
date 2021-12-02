<?php

    // namespace itu solusi dari class
    // yang menggunakan nama yang sama
    // Class User di Product dan Services punya nama yang sama
    // tetapi tidak saling conflict karena punya namespace
    namespace App\Services;

    class User {
        public $user;
        public function __construct($user="") {
            $this->user = $user;
            echo "Ini adalah class: " . __CLASS__ . PHP_EOL;
            echo "Class ini akan menyimpan data: {$this->user}";
        }
    }