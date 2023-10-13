<?php

include_once "./Interface/Edible.php";
include_once "./Abstract/Animal.php";
include_once "./Abstract/Fruit.php";
include_once "./Animals/Chicken.php";
include_once "./Animals/Tiger.php";
include_once "./Fruits/Apple.php";
include_once "./Fruits/Orange.php";

use Animals\Chicken;
use Animals\Tiger;
use Fruits\Apple;
use Fruits\Orange;

echo('---- Animals ------</br>');

$animals[] = new Tiger();
$animals[] = new Chicken();

foreach ($animals as $animal) {
    echo $animal->makeSound();

    if (is_a($animal, 'Interface\Edible')) {
        echo " " . $animal->howToEat() . '</br>';
    } else {
        echo "</br>";
    }
}

echo('---- Fruits ------</br>');

$fruits[] = new Apple();
$fruits[] = new Orange();

foreach ($fruits as $fruit) {
    echo $fruit->howToEat() . '</br>';
}