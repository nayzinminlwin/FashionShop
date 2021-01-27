<?php

namespace App\Http\Controllers\Cosmetics;

use App\Cosmetics;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CosmeticsController extends Controller
{
    public function index()
    {
    	$data = Cosmetics::all();

    	return view('cosmetics.index',[
    		'cosmetics'=>$data
    	]);
    }

    public function detail($id)
    {
    	$data=Cosmetics::find($id);
        return view('cosmetics.detail',['cosmetic'=>$data]);
    }
}
