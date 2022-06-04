<?php

require_once __DIR__ . "/vendor/autoload.php";

use s0fy4n002\Belajar\Customer;

$customer = new Customer("yayan");

echo $customer->sayHello() . PHP_EOL;
