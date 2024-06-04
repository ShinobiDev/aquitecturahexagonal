<?php
namespace App\Domain\Repositories;

use App\Domain\Entities\Category;

interface CategoryRepositoryInterface
{
    public function save(Category $category);
    public function findAll(Category $category);
}