<?php
namespace App\Domain\Entities;
use Illuminate\Support\Facades\DB;

class Product
{
    private $id;
    private $name;
    private $price;
    private $stock;

    public function __construct($id, $name, $price, $stock)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->stock = $stock;
    }

    // Getters and setters...
    public function save()
    {
        DB::table('products')->insert([
            'name' => $this->name,
            'price' => $this->price,
            'stock' => $this->stock
        ]);
    }

    public function update(Product $productData)
    {
        // Actualizar los atributos con los datos del array
        $this->name = $productData['name'] ?? $this->name;
        $this->price = $productData['price'] ?? $this->price;
        $this->stock = $productData['stock'] ?? $this->stock;
    }

    public static function find($id)
    {
        return Product::find($id);
    }

    public static function all()
    {
        return DB::table('products')->get();
    }
}