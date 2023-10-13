<?php

namespace Fruits;

use Abstract\Fruit;

class Apple extends Fruit
{
    function howToEat(): string
    {
        return "Apple could be slided";
    }
}