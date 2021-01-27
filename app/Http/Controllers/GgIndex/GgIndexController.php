<?php

namespace App\Http\Controllers\GgIndex;

use App\Tops;
use App\Acessories;
use App\Bkks;
use App\Cosmetics;
use App\Dresses;
use App\Foods;
use App\Shoes;
use App\Bottoms;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;

class GgIndexController extends Controller
{
    public function index()
    {
    	
    	$data =Acessories::all();
        $data1 =Bkks::all();
        $data2 =Bottoms::all();
        $data3 =Cosmetics::all();
        $data4 =Dresses::all();
        $data5 =Foods::all();
        $data6 =Shoes::all();
        $data7 =Tops::all();
        

        return view('index',[
            'acessories'=>$data,
            'bkks'=>$data1,
            'bottoms'=>$data2,
            'cosmetics'=>$data3,
            'dresses'=>$data4,
            'foods'=>$data5,
            'shoes'=>$data6,
            'tops'=>$data7
        ]);

    	
    }

    
}
