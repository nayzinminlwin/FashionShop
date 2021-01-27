<?php

namespace App\Http\Controllers\Shoes;

use App\Shoes;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShoesController extends Controller
{
    public function index()
    {
    	$data = Shoes::all();

    	return view('shoe.index',[
    		'shoes'=>$data
    	]);
    }

    public function detail($id)
    {
    	$data=Shoes::find($id);
        return view('shoe.detail',['shoe'=>$data]);
    }
}
