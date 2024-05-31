<?php
namespace App\Infraestructure\Repositories;

use App\Interfaces\ProductoRepositoryInterface;
use App\Models\Producto;

class EloquentProductoRepository implements ProductoRepositoryInterface
{
    public function listProducts()
    {
        return Product::all();
    }

    public function getProduct($id)
    {
        return Product::find($id);
    }

    public function createProduct($data)
    {
        return Product::create($data);
    }

    public function updateProduct($id, $data)
    {
        $product = Product::find($id);
        if ($product) {
            $product->update($data);
            return $product;
        }
        return null;
    }

    public function deleteProduct($id)
    {
        $product = Producto::find($id);
        if ($product) {
            $product->delete();
            return true;
        }
        return false;
    }
}