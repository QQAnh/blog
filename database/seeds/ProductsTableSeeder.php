<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
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
               'name'=>'Quan du',
               'description'=>'mô tả quần du',
               'price'=> 20000
            ],
            [
                'name'=>'Quần đùi ',
                'description'=>'mô tả quần đùi ',
                'price'=> 20000
            ],
            [
                'name'=>'Quần dài ',
                'description'=>'mô tả quần dài ',
                'price'=> 20000
            ],
            [
                'name'=>'Quần jean',
                'description'=>'mô tả quần jean',
                'price'=> 20000
            ],
            [
                'name'=>'Quần kaki',
                'description'=>'mô tả quần kaki',
                'price'=> 20000
            ]
        ]);
    }
}
