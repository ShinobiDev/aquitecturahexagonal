<?php
namespace App\Application\Controllers;

use App\Application\UseCases\Category\AddCategoryUseCase;
use App\Application\UseCases\Category\UpdateCategoryUseCase;
use App\Application\DTOs\CategoryDTO;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    private $addCategoryUseCase;
    private $updateCategoryUseCase;

    public function __construct(AddCategoryUseCase $addCategoryUseCase, UpdateCategoryUseCase $updateCategoryUseCase)
    {
        $this->addCategoryUseCase = $addCategoryUseCase;
        $this->updateCategoryUseCase = $updateCategoryUseCase;
    }

    public function store(Request $request)
    {
        $categoryDTO = new CategoryDTO($request->nombre);
        return response()->json($this->addCategoryUseCase->execute($categoryDTO), 201);
    }

    public function update(Request $request, $id)
    {
        $categoryDTO = new CategoryDTO($request->nombre);
        return response()->json($this->updateCategoryUseCase->execute($id, $categoryDTO));
    }
}