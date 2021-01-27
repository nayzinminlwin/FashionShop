<?php

namespace App\Http\Controllers\Bottom;

use App\Bottoms;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BottomController extends Controller
{
    public function index()
    {
    	$data = Bottoms::all();

    	return view('bottom.index',[
    		'bottoms'=>$data
    	]);
    }

    public function detail($id)
    {
    	$data=Bottoms::find($id);
        return view('bottom.detail',['bottom'=>$data]);
    }
}
