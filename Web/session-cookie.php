<?php

/*
Sebelumnya kita sudah belajar session di PHP, sebenarnya session id di PHP disimpan dalam cookie

Ketika kita membuat session, PHP akan membuat cookie session id, cookie session id tersebut
digunakan sebagai id untuk file session di server PHP

Ketika web browser mengirim cookie berisi session id tersebut, PHP akan mengecek apakah nama file
dengan session id tersebut ada atau tidak, jika ada, otomatis session nya valid dan akan di ambil
semua data session di dalam file tersebut

jadi session-cookie ini cookie nya disimpan di file, dan namanya random, sehingga tidak mudah di hack
jadi enak kalau kita mau taro data di dalam cookie karena cookie nya disimpan di file
*/