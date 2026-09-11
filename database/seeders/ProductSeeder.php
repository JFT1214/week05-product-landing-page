<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::create([
            'name' => 'Espresso Classics',
            'price' => 120,
            'description' => 'Bold & Pure',
            'features' => [
                'Espresso shot',
                'Water',
                'Sugar',
                'Iced or Hot',
            ],
            'is_featured' => false,
        ]);

        Product::create([
            'name' => 'Hazelnut Latte',
            'price' => 180,
            'description' => 'Creamy & Rich',
            'features' => [
                'Espresso shot',
                'Hazelnut Syrup',
                'Milk',
                'Iced or Hot',
            ],
            'is_featured' => true,
        ]);

        Product::create([
            'name' => 'Ferrero Frappe',
            'price' => 150,
            'description' => 'Warm and Calming',
            'features' => [
                'Ferrero Rocher',
                'Milk',
                'Nutella',
                'Espresso shot',
                'Sugar (optional)',
                'Ice',
            ],
            'is_featured' => false,
        ]);
    }
}