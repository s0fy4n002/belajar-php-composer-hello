<?php

require_once __DIR__ . "/vendor/autoload.php";

use ProgrammerZamanNow\Belajar\Customer;

$customer = new Customer("yayan");

echo $customer->sayHello() . PHP_EOL;
