<?php
namespace App\Aplication\UseCases;

use App\Models\Product;

class UpdateProductUseCase
{
    public function ejecutar($id, $datos)
    {
        $producto = Producto::find($id);
        if ($producto) {
            $producto->fill($datos);
            $producto->save();
            return $product;
        }
        return null;
    }
}