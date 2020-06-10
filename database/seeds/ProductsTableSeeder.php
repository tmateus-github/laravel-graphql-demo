<?php

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name'        => 'Product A',
            'description' => 'Description of Product A',
            'country'     => 'Portugal'
        ]);

        Product::create([
            'name'        => 'Product B',
            'description' => 'Description of Product B',
            'country'     => 'Spain'
        ]);

        Product::create([
            'name'        => 'Product C',
            'description' => 'Description of Product C',
            'country'     => 'France'
        ]);

        Product::create([
            'name'        => 'Product D',
            'description' => 'Description of Product D',
            'country'     => 'Italy'
        ]);
    }
}
