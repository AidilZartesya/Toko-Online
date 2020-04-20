<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('products')->insert([
			'category_id'  =>  1,
        	'imagePath' => 'http://www.magazinefuse.com/wp-content/uploads/2015/09/5-Mastering-Laravel.jpg',
        	'title' => 'Laravel Book',
        	'description' => 'Buku ini sangat menarik dan bermanfaat sekali bagi programmer pemula',
        	'price' => 20
		]);
		

        DB::table('products')->insert([
            'category_id'  =>  2,
        	'imagePath' => 'http://www.magazinefuse.com/wp-content/uploads/2015/09/5-Mastering-Laravel.jpg',
        	'title' => 'Laravel Book',
        	'description' => 'Buku ini sangat menarik dan bermanfaat sekali bagi programmer pemula',
        	'price' => 20
        ]);

    }
}
