<?php

require_once (__DIR__."\Farm.php");

use animals\Chicken;
use animals\Cow;
use Farm\Farm;

$farm = new Farm();

// COWS - +10
for ($i = 0; $i < 10; $i++) {
    $farm->addAnimal(new Cow("Cow", "Milk", 8, 12));
}

// CHICKENS - +20
for ($i = 0; $i < 20; $i++) {
    $farm->addAnimal(new Chicken("Chicken", "Egg", 0, 1));
}

// Number of animals on the farm
$farm->writeAnimalQuantity();

echo "\n";

// Animal products in 7 days in stock
echo $farm->writeTotalEfficiencyInDays(7)."\n";

// COWS - +1
$farm->addAnimal(new Cow("Cow", "Milk", 8, 12));

// CHICKENS - +5
for ($i = 0; $i < 5; $i++) {
    $farm->addAnimal(new Chicken("Chicken", "Egg", 0, 1));
}

// Number of animals on the farm
$farm->writeAnimalQuantity();

echo "\n";

// Animal products in 14 days in stock
echo $farm->writeTotalEfficiencyInDays(7)."\n";