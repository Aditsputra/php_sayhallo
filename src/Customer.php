<?php
namespace ProgammerZamanNow\Belajar;

class Customer{

    public function __construct(private string $name)
    {
        
    }

    public function sayHallo(string $name)
    {
        return "Hello $name, My name $this->name";
    }
}