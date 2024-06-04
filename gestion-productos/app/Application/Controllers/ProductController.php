<?php

namespace App\Application\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

use App\Application\DTOs\ProductDTO;
use App\Application\UseCases\Product\AddProductUseCase;
use App\Application\UseCases\Product\ListProductsUseCase;
use App\Application\UseCases\Product\UpdateProductUseCase;

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

    public function save(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'stock' => 'required|integer',
            'price' => ['required', 'numeric', function ($attribute, $value, $fail) {
                if (filter_var($value, FILTER_VALIDATE_FLOAT) === false) {
                    $fail('El campo debe ser un número con decimales separados por coma.');
                }
            }],
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }
        
        $productDTO = new ProductDTO(
            $request->name, 
            $request->price, 
            $request->stock
        );
        return response()->json($this->addProductUseCase->execute($productDTO), 201);
    }

    public function update(Request $request, $id)
    {
        $productDTO = new ProductDTO(
            $request->id,
            $request->name, 
            $request->price, 
            $request->stock
        );
        return response()->json($this->updateProductUseCase->execute($id,$productDTO));
    }

    public function index(Request $request)
    {
        $filters = $request->all();
        return response()->json($this->listProductsUseCase->execute($filters));
    }

    public function findAll()
    {
        return DB::table('products')->get();
    }
}