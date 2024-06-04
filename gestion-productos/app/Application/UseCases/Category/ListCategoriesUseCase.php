<?php
namespace App\Application\UseCases\Category;

use App\Domain\Repositories\CategoryRepositoryInterface;

class ListCategoryUseCase
{
    private $categoryRepository;

    public function __construct(CategoryRepositoryInterface $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function execute($filters)
    {
        return $this->productRepository->findAll($filters);
    }
}