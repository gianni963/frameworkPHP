<?php

use App\Config\Config;

session_start();

require_once __DIR__ . '/../vendor/autoload.php';

var_dump(new Config());