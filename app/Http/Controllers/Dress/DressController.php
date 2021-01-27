<?php

namespace App\Http\Controllers\Dress;

use App\Dresses;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DressController extends Controller
{
    public function index()
    {
    	$data = Dresses::all();

    	return view('dress.index',[
    		'dresses'=>$data
    	]);
    }

    public function detail($id)
    {
    	$data=Dresses::find($id);
        return view('dress.detail',['dress'=>$data]);
    }
}
