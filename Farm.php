<?php

namespace Farm;

require_once(__DIR__."\animals\Chicken.php");
require_once(__DIR__."\animals\Cow.php");
require_once (__DIR__."\animals\interface\ianimal.php");

use animals\interface\ianimal;

class Farm
{
    private array $animals = [];
    private int $id = 0;
    private int $day_counter = 0;
    private array $warehouse = [];

    public function addAnimal(ianimal $animal) {
        $this->animals[$this->id] = $animal;
        $this->id++;
    }

    public function writeTotalEfficiencyInDays($days) {
        $this->day_counter += $days;
        for ($i = 0; $i < $days; $i++) {
            foreach ($this->animals as $animal) {
                if (array_key_exists($animal->getProductName(), $this->warehouse)) {
                    $this->warehouse[$animal->getProductName()] += $animal->getEfficiency();
                } else {
                    $this->warehouse[$animal->getProductName()] = $animal->getEfficiency();
                }
            }
        }
        echo "Total products of ".$this->day_counter." days:"."\n";
        foreach ($this->warehouse as $product_name => $efficiency) {
            echo $efficiency." - ".$product_name."\n";
        }
    }

    public function writeAnimalQuantity() {
        $arr_farm = [];
        foreach ($this->animals as $animal) {
            if (array_key_exists($animal->getName(), $arr_farm)) {
                $arr_farm[$animal->getName()]++;
            } else {
                $arr_farm[$animal->getName()] = 1;
            }
        }
        echo "Number of animals on the farm:"."\n";
        foreach ($arr_farm as $name => $quantity) {
            echo $name." - ".$quantity."\n";
        }
    }
}
