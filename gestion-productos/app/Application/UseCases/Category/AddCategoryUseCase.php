<?php
namespace App\Application\UseCases\Category;

use App\Domain\Repositories\CategoryRepositoryInterface;
use App\Application\DTOs\CategoryDTO;
use App\Domain\Entities\Category;

class AddCategoryUseCase
{
    private $categoryRepository;

    public function __construct(CategoryRepositoryInterface $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function execute(CategoryDTO $categoryDTO)
    {
        $category = new Category(null, $categoryDTO->name);
        return $this->categoryRepository->save($category);
    }
}