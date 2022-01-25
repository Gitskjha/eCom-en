<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;



class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'amit',
            'price' => '10000',
            'category' => 'Toy',
            'gallery' => 'https://images.samsung.com/is/image/samsung/assets/in/smartphones/galaxy-s20/buy/S20-Ultra_Gray_PC.png?$ORIGIN_PNG$',
            'description' => 'Toy for kids'
        ]);
    }
}
