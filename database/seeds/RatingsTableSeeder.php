<?php

use Illuminate\Database\Seeder;
use App\Rating;

class RatingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('rating')->insert([
			"id" => 1,
			"rating" => "satu"
		]);
		
		DB::table('rating')->insert([
			"id" => 2,
			"rating" => "satu"
		]);		
		
    }
}
