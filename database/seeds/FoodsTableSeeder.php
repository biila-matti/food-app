<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class FoodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('foods')->insert([
			'name' => 'Jäävuorisalaatti',
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now(),
		]);
		DB::table('foods')->insert([
			'name' => 'Voi',
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now(),
		]);
		DB::table('foods')->insert([
			'name' => 'Kinkku',
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now(),
		]);
		DB::table('foods')->insert([
			'name' => 'Juusto',
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now(),
		]);
		DB::table('foods')->insert([
			'name' => 'Kurkku',
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now(),
		]);
		DB::table('foods')->insert([
			'name' => 'Kananmuna',
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now(),
		]);
		DB::table('foods')->insert([
			'name' => 'Suola',
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now(),
		]);
    }
}
