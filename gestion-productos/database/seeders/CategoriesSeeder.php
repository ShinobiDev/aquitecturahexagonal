<?php

namespace Database\Seeders;

use App\Models\Category;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create(['name' => 'Electrónica']);
        Category::create(['name' => 'Ropa']);
        Category::create(['name' => 'Libros']);
    }
}
