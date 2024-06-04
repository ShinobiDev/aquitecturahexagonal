<?php
namespace App\Infrastructure\Repositories;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Response;

use App\Domain\Entities\Category;
use App\Domain\Repositories\CategoryRepositoryInterface;


class CategoryRepository implements CategoryRepositoryInterface
{
    public function save(Category $category)
    {
        $category->save();
        return response()->json($category);
    }

    public function findAll($filters)
    {
        return Product::all();
    }
}