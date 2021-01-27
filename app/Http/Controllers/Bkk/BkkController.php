<?php

namespace App\Http\Controllers\Bkk;

use App\Bkks;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BkkController extends Controller
{
    public function index()
    {
    	$data = Bkks::all();

    	return view('bkk.index',[
    		'bkks'=>$data
    	]);
    }

    public function detail($id)
    {
    	$data=Bkks::find($id);
        return view('bkk.detail',['bkk'=>$data]);
    }
}
