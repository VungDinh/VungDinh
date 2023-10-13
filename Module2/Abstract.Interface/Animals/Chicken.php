<?php

namespace Animals;

use Abstract\Animal;
use Interface\Edible;

class Chicken extends Animal implements Edible
{
    function makeSound(): string
    {
        return "Chicken: oooooooo";
    }

    function howToEat(): string
    {
        return "Could be fried";
    }
}