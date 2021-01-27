<?php

namespace App\Http\Controllers\Reviews;

use App\Reviews;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReviewsController extends Controller
{
    public function index()
    {

    	return view('contact');
    }

    public function addReview()
    {
    	$review = new Reviews;
    	$review->name=request()->uName;
    	$review->phNum=request()->uPhone;
    	$review->email=request()->uMail;
    	$review->msg=request()->uMsg;
    	$review->save();

        return redirect('/onlineShop/contact')->with('info','Review Submitted!Thanks.');
    }
    public function reviewIndex()
    {
        //$data =Reviews::find(2);
        //$data1 =Reviews::find(3);
        //$data2 =Reviews::find(4);

        $tableCount = Reviews::where('status',1)->count();
        if($tableCount>1)
        {
            $data1=Reviews::where('status',1)->orderBy('updated_at','desc')->take(1)->get();
            $data2=Reviews::where('status',1)->orderBy('updated_at','asc')->take(1)->get();  
            return view('reviews',['review1'=>$data1,'review2'=>$data2]);
        }
        elseif ($tableCount==1) 
        {
            $data1=Reviews::where('status',1)->orderBy('updated_at','desc')->take(1)->get();
            $data2=NULL;
            return view('reviews',['review1'=>$data1,'review2'=>$data2]);
        }
        else
        {
            $data1= NULL;
            $data2=NULL;
            return view('reviews',['review1'=>$data1,'review2'=>$data2]);

        }
        

        
    }
}

