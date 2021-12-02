<?php

    $now = new DateTime();
    $now->setTimezone(new DateTimeZone("Asia/Jakarta"));

    echo $now->format('Y-m-d H:i:s');