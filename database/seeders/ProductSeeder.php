<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
//            'name'=>'Oppo Mobile',
//            'price'=>'10000',
//            'description'=>'a smartphone with 4gb ram and much more feature',
//            'category'=>'mobile',
//            'gallery'=>'http://178.79.180.166:100/media/Product/H402.jpeg',
            [
                'name'=>'Oppo Mobile',
                'price'=>'12000',
                'description'=>'a smartphone with 4gb ram and much more feature',
                'category'=>'mobile',
                'gallery'=>'http://178.79.180.166:100/media/Product/H402.jpeg',
            ],
            [
                'name'=>'Samsung Mobile',
                'price'=>'15000',
                'description'=>'a smartphone with 4gb ram and much more feature',
                'category'=>'tv',
                'gallery'=>'http://178.79.180.166:100/media/Product/EL20.jpg',
            ],
            [
                'name'=>'Apple Mobile',
                'price'=>'20000',
                'description'=>'a smartphone with 4gb ram and much more feature',
                'category'=>'tv',
                'gallery'=>'http://178.79.180.166:100/media/Product/P243.jpeg',
            ],
            [
                'name'=>'Hawai Mobile',
                'price'=>'18000',
                'description'=>'a smartphone with 4gb ram and much more feature',
                'category'=>'fridge',
                'gallery'=>'http://178.79.180.166:100/media/Product/H401_JJ0IsuN.jpeg',
            ]
        ]);
    }
}
