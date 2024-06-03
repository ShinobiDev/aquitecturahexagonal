<?php
namespace App\Domain\Entities;

class Producto
{
    private $id;
    private $name;
    private $price;
    private $stock;
    private $categoriaId;

    public function __construct($id, $name, $price, $stock, $categoriaId)
    {
        $this->id = $id;
        $this->name = $nombre;
        $this->price = $price;
        $this->stock = $stock;
        $this->categoriaId = $categoriaId;
    }

    // Getters and setters...
}