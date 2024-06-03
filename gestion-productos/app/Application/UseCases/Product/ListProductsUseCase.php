<?php
namespace App\Application\UseCases\Product;

use App\Domain\Repositories\ProductRepositoryInterface;

class ListProductsUseCase
{
    private $productRepository;

    public function __construct(ProductRepositoryInterface $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function execute($filters)
    {
        return $this->productRepository->findAll($filters);
    }
}