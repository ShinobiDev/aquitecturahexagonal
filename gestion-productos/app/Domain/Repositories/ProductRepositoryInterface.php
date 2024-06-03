<?php
namespace App\Domain\Repositories;

use App\Domain\Entities\Product;

interface ProductRepositoryInterface
{
    public function save(Product $product);
    public function update(Product $product);
    public function findAll($filters);
}