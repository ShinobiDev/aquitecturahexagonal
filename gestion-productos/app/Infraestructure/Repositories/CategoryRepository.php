<?php
namespace App\Infrastructure\Repositories;

use App\Domain\Repositories\CategoryRepositoryInterface;
use App\Domain\Entities\Category;

class CategoryRepository implements CategoryRepositoryInterface
{
    public function save(Category $category)
    {
        // Save category to database using Eloquent
    }

    public function update(Category $category)
    {
        // Update category in database using Eloquent
    }
}