<?php

use Illuminate\Database\Seeder;
use App\Transaksi;

class TransaksiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('transaksi')->insert([
			"id" => 1,
			"quantity" => 2,
			"produk" => "minyak"
		]);
		
		DB::table('transaksi')->insert([
			"id" => 2,
			"quantity" => 5,
			"produk" => "oli"
		]);		
		
    }
}
