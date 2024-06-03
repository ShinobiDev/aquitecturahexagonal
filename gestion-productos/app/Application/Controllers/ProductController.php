<?php

namespace App\Application\Controllers;

use App\Application\UseCases\Product\AddProductUseCase;
use App\Application\UseCases\Product\UpdateProductUseCase;
use App\Application\UseCases\Product\ListProductsUseCase;
use App\Application\DTOs\ProductDTO;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    private $addProductUseCase;
    private $updateProductUseCase;
    private $listProductsUseCase;

    public function __construct(AddProductUseCase $addProductUseCase, UpdateProductUseCase $updateProductUseCase, ListProductsUseCase $listProductsUseCase)
    {
        $this->addProductUseCase = $addProductUseCase;
        $this->updateProductUseCase = $updateProductUseCase;
        $this->listProductsUseCase = $listProductsUseCase;
    }

    public function store(Request $request)
    {
        var_dump($request);
        dd('Llegue aca');
        $productDTO = new ProductDTO(
            $request->nombre, 
            $request->precio, 
            $request->stock, 
            $request->categoria_id
        );
        return response()->json($this->addProductUseCase->execute($productDTO), 201);
    }

    public function update(Request $request, $id)
    {
        $productDTO = new ProductDTO(
            $request->nombre, 
            $request->precio, 
            $request->stock, 
            $request->categoria_id
        );
        return response()->json($this->updateProductUseCase->execute($id, $productDTO));
    }

    public function index(Request $request)
    {
        $filters = $request->all();
        return response()->json($this->listProductsUseCase->execute($filters));
    }
}