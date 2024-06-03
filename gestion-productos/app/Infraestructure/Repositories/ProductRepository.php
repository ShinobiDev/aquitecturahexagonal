<?php
namespace App\Infrastructure\Repositories;

use App\Domain\Repositories\ProductRepositoryInterface;
use App\Domain\Entities\Product;

class ProductRepository implements ProductRepositoryInterface
{
    public function save(Product $product)
    {
        dd('llegue al repositorio');
    }

    public function update(Product $product)
    {
        // Update product in database using Eloquent
    }

    public function findAll($filters)
    {
        // Find products based on filters
    }
}