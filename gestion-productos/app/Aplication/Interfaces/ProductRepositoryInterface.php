<?php
namespace App\Aplication\Interfaces;

use App\Models\Product;

interface ProductRepositoryInterface
{
    
    public function listProducts();
    public function getProduct($id);
    public function createProduct($data);
    public function updateProduct($id, $data);
    public function deleteProduct($id);

}