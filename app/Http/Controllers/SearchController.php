<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Meal;
use App\Food;

class SearchController extends Controller
{
    public function index() {
    	return view('search.index');
    }

    public function foodSearch(Request $request) {
        $search = $request->input('keyword');
        $results = Food::where('name', 'like', "%$search%")
                       ->limit(5)
                       ->orderBy('name', 'ASC')
                       ->get();

        return $results->mapWithKeys(function ($item) {
            return [$item['name'] => $item['id']];
        });
    }

    public function search(Request $request) {
    	$array = explode(',',$request->input('keyword'));
    	$matches = Meal::matches($array);

    	return view('search.results', [
    		'array' => $array,
    		'matches' => $matches,
    	]);
    }
}
