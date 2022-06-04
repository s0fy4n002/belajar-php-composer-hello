<?php

namespace s0fy4n002\Belajar;

class Customer
{

    public function __construct(private string $name)
    {
    }

    public function sayHello(string $name = "Guest"): string
    {
        return "halo $name nama saya " . $this->name . PHP_EOL;
    }
}
