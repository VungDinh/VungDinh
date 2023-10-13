<?php

interface Edible {
    public function howToEat(): string;
}

class Chicken implements Edible {
    public function howToEat(): string {
        return "Cook the chicken and enjoy the meal.";
    }
}

class Fruit implements Edible {
    public function howToEat(): string {
        return "Wash the fruit and eat it fresh.";
    }
}

class Apple extends Fruit {
}

class Orange extends Fruit {
}

$chicken = new Chicken();
echo $chicken->howToEat(); 
$apple = new Apple();
echo $apple->howToEat(); 
$orange = new Orange();
echo $orange->howToEat(); 
?>