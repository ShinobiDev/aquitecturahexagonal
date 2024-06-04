<?php
namespace App\Infrastructure\Repositories;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Response;

use App\Domain\Entities\Product;
use App\Domain\Repositories\ProductRepositoryInterface;

class ProductRepository implements ProductRepositoryInterface
{
    public function save(Product $product)
    {
        Log::info('Llegue al Repositorio Infraestructura');
        $product->save();

        return response()->json($product);
    }

    public function update(int $id, Product $productData)
    {
        Log::info('Llegue al Repositorio Infraestructura Editar Product');
       try {
            $product = Product::find($id);
        
            if ($product) {
                $product->update($productData);
                return response()->json($product);
            }

            return response()->json(['message' => 'Producto no encontrado'], 404);
       } catch (\Throwable $th) {
            return $th->getMessage();
       }    
    }

    public function findAll($filters)
    {
        return Product::all();
    }
}