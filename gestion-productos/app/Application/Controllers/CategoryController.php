<?php
namespace App\Application\Controllers;

use App\Application\UseCases\Category\AddCategoryUseCase;
use App\Application\UseCases\Category\ListCategoriesUseCase;
use App\Application\DTOs\CategoryDTO;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    private $addCategoryUseCase;
    private $ListCategoriesUseCase;

    public function __construct(AddCategoryUseCase $addCategoryUseCase, ListCategoriesUseCase $ListCategoriesUseCase)
    {
        $this->addCategoryUseCase = $addCategoryUseCase;
        $this->ListCategoriesUseCase = $ListCategoriesUseCase;
    }

    public function save(Request $request)
    {
        $categoryDTO = new CategoryDTO($request->nombre);
        return response()->json($this->addCategoryUseCase->execute($categoryDTO), 201);
    }

    public function index(Request $request)
    {
        $filters = $request->all();
        return response()->json($this->ListCategoriesUseCase->execute($filters));
    }
}