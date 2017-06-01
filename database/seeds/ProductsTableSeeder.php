<?php

use Illuminate\Database\Seeder;
use luna\product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(product::class,80)->create();
    }
}
