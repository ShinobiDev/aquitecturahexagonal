<?php
namespace App\Application\UseCases\Category;

use App\Domain\Repositories\CategoryRepositoryInterface;
use App\Application\DTOs\CategoryDTO;
use App\Domain\Entities\Category;

class UpdateCategoryUseCase
{
    private $categoryRepository;

    public function __construct(CategoryRepositoryInterface $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function execute($id, CategoryDTO $categoryDTO)
    {
        $category = new Category($id, $categoryDTO->nombre);
        return $this->categoryRepository->update($category);
    }
}

