<?php
namespace Animals;

use Abstract\Animal;

class Tiger extends Animal
{
    public function makeSound(): string
    {
        return "Tiger: gruuuuu";
    }
}