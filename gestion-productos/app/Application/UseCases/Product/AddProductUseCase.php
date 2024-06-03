<?php

namespace App\Application\UseCases\Product;

use App\Domain\Entities\Product;
use App\Application\DTOs\ProductDTO;
use App\Domain\Repositories\ProductRepositoryInterface;

class AddProductUseCase
{
    private $productRepository;

    public function __construct(ProductRepositoryInterface $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function execute(ProductDTO $productDTO)
    {
        $product = new Product(null, $productDTO->name, $productDTO->price, $productDTO->stock);
        return $this->productRepository->save($product);
    }
}