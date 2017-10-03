<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class MealsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('meals')->insert([
			'name' => 'Leipä',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
		]);
        DB::table('meals')->insert([
            'name' => 'Juustomunakas',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
