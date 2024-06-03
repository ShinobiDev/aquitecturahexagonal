<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Category;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categoryElectrónica = Category::where('name', 'Electrónica')->first();
        $categoryRopa = Category::where('name', 'Ropa')->first();
        $categoryLibros = Category::where('name', 'Libros')->first();

        Product::create([
            'name' => 'Televisor',
            'price' => 499.99,
            'stock' => 10
        ]);

        Product::create([
            'name' => 'Camiseta',
            'price' => 19.99,
            'stock' => 50
        ]);

        Product::create([
            'name' => 'Libro de PHP',
            'price' => 29.99,
            'stock' => 20
        ]);
    }
}
