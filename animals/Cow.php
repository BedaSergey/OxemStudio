<?php

namespace animals;

require_once (__DIR__."\interface\ianimal.php");

use animals\interface\ianimal;

class Cow implements ianimal
{
    private string $name;
    private string $product;
    private int $min_efficiency;
    private int $max_efficiency;

    public function __construct($name, $product, $min_efficiency, $max_efficiency) {
        $this->name = $name;
        $this->product = $product;
        $this->min_efficiency = $min_efficiency;
        $this->max_efficiency = $max_efficiency;
    }

    public function getEfficiency(): int
    {
        return rand($this->min_efficiency, $this->max_efficiency);
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getProductName(): string
    {
        return $this->product;
    }
}