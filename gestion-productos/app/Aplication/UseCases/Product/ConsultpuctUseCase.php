<?php
namespace App\Aplication\UseCases;

use App\Models\Product;

class ConsultProductUseCase
{
    public function ejecutar($filtroCategoria, $filtroPrecio)
    {
        $query = Producto::query();

        if ($filtroCategoria) {
            $query->whereHas('categories', function ($q) use ($filtroCategoria) {
                $q->where('nombre', $filtroCategoria);
            });
        }

        if ($filtroPrecio) {
            $query->where('precio', $filtroPrecio);
        }

        return $query->get();
    }
}