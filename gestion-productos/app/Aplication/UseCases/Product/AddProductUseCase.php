<?php
namespace App\Aplication\UseCases;

use App\Models\Product;

class AddProductUseCase
{
    public function ejecutar($datos)
    {
        $producto = new Producto();
        $producto->nombre = $datos['nombre'];
        $producto->precio = $datos['precio'];
        $producto->stock = $datos['stock'];
        $producto->save();

        return $product;
    }
}