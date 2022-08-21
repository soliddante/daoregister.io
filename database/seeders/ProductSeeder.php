<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        for ($i=1; $i < 6 ; $i++) { 
            DB::table('products')->insert([
                'dao_id' => 1,
                'name' => fake()->firstName(),
                'image' => "$i.png" ,
                'price' => rand(100, 200),
                'token' => rand(100000000, 9999999999),
                'extra_fields' => json_encode(
                    [
                        [
                            'key' => 'Color',
                            'value' => fake()->colorName(),
                        ],
                        [
                            'key' => 'Size',
                            'value' => fake()->randomElement(['XS','SM','M','L','XL']),
                        ],
                    ],
                ),
                'is_minted' => rand(0, 1),
            ]);
        }
    
    }
}
