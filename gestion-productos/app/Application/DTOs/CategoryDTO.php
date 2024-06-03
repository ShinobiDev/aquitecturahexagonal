<?php
namespace App\Application\DTOs;

class CategoryDTO
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
}