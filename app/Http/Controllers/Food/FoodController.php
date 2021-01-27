<?php

namespace App\Http\Controllers\Food;

use App\Foods;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function index()
    {
    	$data = Foods::all();

    	return view('food.index',[
    		'foods'=>$data
    	]);
    }

    public function detail($id)
    {
    	$data=Foods::find($id);
        return view('food.detail',['food'=>$data]);
    }
}
