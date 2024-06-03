<?php
namespace App\Application\UseCases\Product;

use App\Domain\Repositories\ProductRepositoryInterface;
use App\Application\DTOs\ProductDTO;
use App\Domain\Entities\Product;

class UpdateProductUseCase
{
    private $productRepository;

    public function __construct(ProductRepositoryInterface $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function execute($id, ProductDTO $productDTO)
    {
        $product = new Product($id, $productDTO->name, $productDTO->price, $productDTO->stock);
        return $this->productRepository->update($product);
    }
}