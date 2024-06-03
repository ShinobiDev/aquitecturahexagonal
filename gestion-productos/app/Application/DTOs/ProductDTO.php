<?php
namespace App\Application\DTOs;

class ProductDTO
{
    public $name;
    public $price;
    public $stock;

    public function __construct($name, $price, $stock)
    {
        $this->name = $name;
        $this->price = $price;
        $this->stock = $stock;
    }
}