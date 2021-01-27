<?php

namespace App\Http\Controllers\Tops;

use App\Tops;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;

class TopsController extends Controller
{
    public function index()
    {
    	$data = Tops::all();

    	return view('tops.index',[
    		'tops'=>$data
    	]);
    }

    public function detail($id)
    {
        $data=Tops::find($id);
    	return view('tops.detail',['top'=>$data]);
    }
}
