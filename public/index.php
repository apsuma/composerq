<?php

require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload

use App\Wcs\Hello;
use HelloWorld\SayHello;


$wlad  = new SayHello();
echo $wlad->world();
echo '<br>';

$test = new Hello();
print $test->talk();


