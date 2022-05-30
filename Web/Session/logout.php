<?php

session_start();
session_destroy();

header("Location: /Session/login.php");
exit();