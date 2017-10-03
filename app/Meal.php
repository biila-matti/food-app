<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    public function foods() {
    	return $this->belongsToMany(Food::class);
    }

    public function getFoodsToArrayAttribute() {
        $data = $this->foods;

        return $data->mapWithKeys(function ($item) {
            return [$item['id'] => $item['name']];
        });
    }

    public static function matches($array) {
    	return Meal::selectRaw('meals.id, meals.name, count(food_meal.meal_id) AS matches, (SELECT count(id) FROM food_meal WHERE meal_id = meals.id) AS total, floor(count(food_meal.meal_id)/(SELECT count(id) FROM food_meal WHERE meal_id = meals.id)*100) as percentage')
    				->leftJoin('food_meal', 'meals.id', '=', 'food_meal.meal_id')
    				->whereIn('food_meal.food_id', $array)
    				->groupBy('meals.id')
    				->orderBy('percentage', 'DESC')
    				->get();
    }
}
