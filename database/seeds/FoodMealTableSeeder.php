<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class FoodMealTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('food_meal')->insert([
			'food_id' => 1,
			'meal_id' => 1,
		]);
		DB::table('food_meal')->insert([
			'food_id' => 2,
			'meal_id' => 1,
		]);
		DB::table('food_meal')->insert([
			'food_id' => 3,
			'meal_id' => 1,
		]);
		DB::table('food_meal')->insert([
			'food_id' => 4,
			'meal_id' => 1,
		]);
		DB::table('food_meal')->insert([
			'food_id' => 5,
			'meal_id' => 1,
		]);
		DB::table('food_meal')->insert([
			'food_id' => 4,
			'meal_id' => 2,
		]);
		DB::table('food_meal')->insert([
			'food_id' => 6,
			'meal_id' => 2,
		]);
		DB::table('food_meal')->insert([
			'food_id' => 7,
			'meal_id' => 2,
		]);
    }
}
