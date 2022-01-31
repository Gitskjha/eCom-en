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
            [
                'name' => 'amit',
                'price' => '10000',
                'category' => 'Toy',
                'gallery' => 'https://images.samsung.com/is/image/samsung/assets/in/smartphones/galaxy-s20/buy/S20-Ultra_Gray_PC.png?$ORIGIN_PNG$',
                'description' => 'Toy for kids'
            ],
            [
                'name' => 'htc',
                'price' => '9000',
                'category' => 'mobile',
                'gallery' => 'https://rukminim1.flixcart.com/flap/844/140/image/c114e26bce72191d.jpg?q=50',
                'description' => 'Toy for kids'
            ],
            [
                'name' => 'samsung',
                'price' => '900000',
                'category' => 'samsung mobile',
                'gallery' => 'https://images.samsung.com/is/image/samsung/assets/in/without-logo-9135_Combo_5G_Dotcom-Banner_1440x344.jpg?imwidth=768',
                'description' => 'Toy for kids'
            ],
        ]);
    }
}
