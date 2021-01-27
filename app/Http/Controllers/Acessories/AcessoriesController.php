<?php

namespace App\Http\Controllers\Acessories;

use App\Acessories;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AcessoriesController extends Controller
{
    public function index()
    {
    	$data = Acessories::all();

    	return view('acessories.index',[
    		'acessories'=>$data
    	]);
    }
    public function detail($id)
    {
    	$data=Acessories::find($id);
        return view('acessories.detail',['acessory'=>$data]);
    }
}
