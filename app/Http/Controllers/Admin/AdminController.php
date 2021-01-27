<?php

namespace App\Http\Controllers\Admin;

use App\Tops;
use App\Acessories;
use App\Bkks;
use App\Cosmetics;
use App\Dresses;
use App\Foods;
use App\Shoes;
use App\Bottoms;
use App\Reviews;
use App\Transactions;
use App\Customers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	return view('admin.index');
    }

    public function add()
    {
    	$data = [
            ["id"=>1,"name"=>"Tops"],
            ["id"=>2,"name"=>"Cosmetics"],
            ["id"=>3,"name"=>"Shoes"],
            ["id"=>4,"name"=>"Dress"],
            ["id"=>5,"name"=>"Bkk"],
            ["id"=>6,"name"=>"Acessories"],
            ["id"=>7,"name"=>"Food"],
            ["id"=>8,"name"=>"Bottom"],
        ];
    	return view('admin.add',['categories'=>$data]);
    }

    public function create()
    {
    	$catID = request()->iCat;
    	if ($catID==1) 
    	{	
    		$top = new Tops;
    		$top->name=request()->iname;
    		$top->description=request()->idescription;
    		//$top->this is for foto.
    		if (request()->hasfile('ifoto')) {
    			$file=request()->file('ifoto');
    			$extension=$file->getClientOriginalExtension();
    			$filename=time().'.'.$extension;
    			$file->move('uploads/tops/',$filename);
    			$top->image=$filename;
    		}
    		else
    		{
    			return request();
    			$top->image='';
    		}
    		$top->size=request()->isize;
    		$top->color=request()->icolor;
    		$top->price=request()->iprice;
            $top->count=request()->icount;
    		$top->save();

    		return redirect('/onlineShop/category/tops');
    
    	}

    	else if($catID==2)
    	{
    		$cosmetic = new Cosmetics;
    		$cosmetic->name=request()->iname;
    		$cosmetic->description=request()->idescription;
    		//$top->this is for foto.
            if (request()->hasfile('ifoto')) {
                $file=request()->file('ifoto');
                $extension=$file->getClientOriginalExtension();
                $filename=time().'.'.$extension;
                $file->move('uploads/cosmetics/',$filename);
                $cosmetic->image=$filename;
            }
            else
            {
                return request();
                $cosmetic->image='';
            }
    		$cosmetic->size=request()->isize;
    		$cosmetic->color=request()->icolor;
    		$cosmetic->price=request()->iprice;
            $cosmetic->count=request()->icount;
    		$cosmetic->save();

    		return redirect('/onlineShop/category/cosmetics');
    	}

    	else if($catID==3)
    	{
    		$shoe = new Shoes;
    		$shoe->name=request()->iname;
    		$shoe->description=request()->idescription;
    		//$top->this is for foto.
            if (request()->hasfile('ifoto')) {
                $file=request()->file('ifoto');
                $extension=$file->getClientOriginalExtension();
                $filename=time().'.'.$extension;
                $file->move('uploads/shoes/',$filename);
                $shoe->image=$filename;
            }
            else
            {
                return request();
                $shoe->image='';
            }
    		$shoe->size=request()->isize;
    		$shoe->color=request()->icolor;
    		$shoe->price=request()->iprice;
            $shoe->count=request()->icount;
    		$shoe->save();

    		return redirect('/onlineShop/category/shoes');
    	}

    	else if($catID==4)
    	{
    		$dress = new Dresses;
    		$dress->name=request()->iname;
    		$dress->description=request()->idescription;
    		//$top->this is for foto.
            if (request()->hasfile('ifoto')) {
                $file=request()->file('ifoto');
                $extension=$file->getClientOriginalExtension();
                $filename=time().'.'.$extension;
                $file->move('uploads/dresses/',$filename);
                $dress->image=$filename;
            }
            else
            {
                return request();
                $dress->image='';
            }
    		$dress->size=request()->isize;
    		$dress->color=request()->icolor;
    		$dress->price=request()->iprice;
            $dress->count=request()->icount;
    		$dress->save();

    		return redirect('/onlineShop/category/dresses');
    	}

    	else if($catID==5)
    	{
    		$bkk = new Bkks;
    		$bkk->name=request()->iname;
    		$bkk->description=request()->idescription;
    		//$top->this is for foto.
            if (request()->hasfile('ifoto')) {
                $file=request()->file('ifoto');
                $extension=$file->getClientOriginalExtension();
                $filename=time().'.'.$extension;
                $file->move('uploads/bkks/',$filename);
                $bkk->image=$filename;
            }
            else
            {
                return request();
                $bkk->image='';
            }
    		$bkk->size=request()->isize;
    		$bkk->color=request()->icolor;
    		$bkk->price=request()->iprice;
            $bkk->count=request()->icount;
    		$bkk->save();

    		return redirect('/onlineShop/category/bkks');
    	}

    	else if($catID==6)
    	{
    		$acessory = new Acessories;
    		$acessory->name=request()->iname;
    		$acessory->description=request()->idescription;
    		//$top->this is for foto.
            if (request()->hasfile('ifoto')) {
                $file=request()->file('ifoto');
                $extension=$file->getClientOriginalExtension();
                $filename=time().'.'.$extension;
                $file->move('uploads/acessories/',$filename);
                $acessory->image=$filename;
            }
            else
            {
                return request();
                $acessory->image='';
            }
    		$acessory->size=request()->isize;
    		$acessory->color=request()->icolor;
    		$acessory->price=request()->iprice;
            $acessory->count=request()->icount;
    		$acessory->save();

    		return redirect('/onlineShop/category/acessories');
    	}

    	else if($catID==7)
    	{
    		$food = new Foods;
    		$food->name=request()->iname;
    		$food->description=request()->idescription;
    		//$top->this is for foto.
            if (request()->hasfile('ifoto')) {
                $file=request()->file('ifoto');
                $extension=$file->getClientOriginalExtension();
                $filename=time().'.'.$extension;
                $file->move('uploads/foods/',$filename);
                $food->image=$filename;
            }
            else
            {
                return request();
                $food->image='';
            }
    		$food->size=request()->isize;
    		//$food->color=request()->icolor;
    		$food->price=request()->iprice;
            $food->count=request()->icount;
    		$food->save();

    		return redirect('/onlineShop/category/foods');
    	}

    	else if($catID==8)
    	{
    		$bottom = new Bottoms;
    		$bottom->name=request()->iname;
    		$bottom->description=request()->idescription;
    		//$top->this is for foto.
            if (request()->hasfile('ifoto')) {
                $file=request()->file('ifoto');
                $extension=$file->getClientOriginalExtension();
                $filename=time().'.'.$extension;
                $file->move('uploads/bottoms/',$filename);
                $bottom->image=$filename;
            }
            else
            {
                return request();
                $bottom->image='';
            }
    		$bottom->size=request()->isize;
    		$bottom->color=request()->icolor;
    		$bottom->price=request()->iprice;
            $bottom->count=request()->icount;
    		$bottom->save();

    		return redirect('/onlineShop/category/bottoms');
    	}
    }



    public function editIndex()
    {

        $data =Acessories::all();
        $data1 =Bkks::all();
        $data2 =Bottoms::all();
        $data3 =Cosmetics::all();
        $data4 =Dresses::all();
        $data5 =Foods::all();
        $data6 =Shoes::all();
        $data7 =Tops::all();
        

        return view('admin.editIndex',[
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



    
    public function edit($catID,$id)
    {
        $data = [
            ["id"=>1,"name"=>"Tops"],
            ["id"=>2,"name"=>"Cosmetics"],
            ["id"=>3,"name"=>"Shoes"],
            ["id"=>4,"name"=>"Dress"],
            ["id"=>5,"name"=>"Bkk"],
            ["id"=>6,"name"=>"Acessories"],
            ["id"=>7,"name"=>"Food"],
            ["id"=>8,"name"=>"Bottom"],
        ];

        if($catID==1)
        {
            $data1 = Tops::find($id);
        }
        else if ($catID==2) 
        {
            $data1 =Cosmetics::find($id);
        }
        else if ($catID==3) 
        {
            $data1 =Shoes::find($id);
        }
        else if ($catID==4) 
        {
            $data1 =Dresses::find($id);
        }
        else if ($catID==5) 
        {
            $data1 =Bkks::find($id);
        }
        else if ($catID==6) 
        {
            $data1 =Acessories::find($id);
        }
        else if ($catID==7) 
        {
            $data1 =Foods::find($id);
        }

        else if ($catID==8) 
        {
            $data1 =Bottoms::find($id);
        }


        return view('admin.edit',['categories'=>$data,'item'=>$data1,'gg'=>$catID]);
    }


    public function change($catID,$id)
    {
        $catID = request()->iCat;
        $id = request()->ID;
        if ($catID==1) 
        {   
            $top =Tops::find($id);
            $top->name=request()->iname;
            $top->description=request()->idescription;
            //$top->this is for foto.
            if (request()->hasfile('ifoto')) {
                $file=request()->file('ifoto');
                $extension=$file->getClientOriginalExtension();
                $filename=time().'.'.$extension;
                $file->move('uploads/tops/',$filename);
                $top->image=$filename;
            }
            else
            {
                return request();
                $top->image='';
            }
            $top->size=request()->isize;
            $top->color=request()->icolor;
            $top->price=request()->iprice;
            $top->count=request()->icount;
            $top->save();

            return redirect('/onlineShop/category/tops');
    
        }

        else if($catID==2)
        {
            $cosmetic =Cosmetics::find($id);
            $cosmetic->name=request()->iname;
            $cosmetic->description=request()->idescription;
            //$top->this is for foto.
            if (request()->hasfile('ifoto')) {
                $file=request()->file('ifoto');
                $extension=$file->getClientOriginalExtension();
                $filename=time().'.'.$extension;
                $file->move('uploads/cosmetics/',$filename);
                $cosmetic->image=$filename;
            }
            else
            {
                return request();
                $cosmetic->image='';
            }
            $cosmetic->size=request()->isize;
            $cosmetic->color=request()->icolor;
            $cosmetic->price=request()->iprice;
            $cosmetic->count=request()->icount;
            $cosmetic->save();

            return redirect('/onlineShop/category/cosmetics');
        }

        else if($catID==3)
        {
            $shoe =Shoes::find($id);
            $shoe->name=request()->iname;
            $shoe->description=request()->idescription;
            //$top->this is for foto.
            if (request()->hasfile('ifoto')) {
                $file=request()->file('ifoto');
                $extension=$file->getClientOriginalExtension();
                $filename=time().'.'.$extension;
                $file->move('uploads/shoes/',$filename);
                $shoe->image=$filename;
            }
            else
            {
                return request();
                $shoe->image='';
            }
            $shoe->size=request()->isize;
            $shoe->color=request()->icolor;
            $shoe->price=request()->iprice;
            $shoe->count=request()->icount;
            $shoe->save();

            return redirect('/onlineShop/category/shoes');
        }

        else if($catID==4)
        {
            $dress =Dresses::find($id);
            $dress->name=request()->iname;
            $dress->description=request()->idescription;
            //$top->this is for foto.
            if (request()->hasfile('ifoto')) {
                $file=request()->file('ifoto');
                $extension=$file->getClientOriginalExtension();
                $filename=time().'.'.$extension;
                $file->move('uploads/dresses/',$filename);
                $dress->image=$filename;
            }
            else
            {
                return request();
                $dress->image='';
            }
            $dress->size=request()->isize;
            $dress->color=request()->icolor;
            $dress->price=request()->iprice;
            $dress->count=request()->icount;
            $dress->save();

            return redirect('/onlineShop/category/dresses');
        }

        else if($catID==5)
        {
            $bkk =Bkks::find($id);
            $bkk->name=request()->iname;
            $bkk->description=request()->idescription;
            //$top->this is for foto.
            if (request()->hasfile('ifoto')) {
                $file=request()->file('ifoto');
                $extension=$file->getClientOriginalExtension();
                $filename=time().'.'.$extension;
                $file->move('uploads/bkks/',$filename);
                $bkk->image=$filename;
            }
            else
            {
                return request();
                $bkk->image='';
            }
            $bkk->size=request()->isize;
            $bkk->color=request()->icolor;
            $bkk->price=request()->iprice;
            $bkk->count=request()->icount;
            $bkk->save();

            return redirect('/onlineShop/category/bkks');
        }

        else if($catID==6)
        {
            $acessory =Acessories::find($id);
            $acessory->name=request()->iname;
            $acessory->description=request()->idescription;
            //$top->this is for foto.
            if (request()->hasfile('ifoto')) {
                $file=request()->file('ifoto');
                $extension=$file->getClientOriginalExtension();
                $filename=time().'.'.$extension;
                $file->move('uploads/acessories/',$filename);
                $acessory->image=$filename;
            }
            else
            {
                return request();
                $acessory->image='';
            }
            $acessory->size=request()->isize;
            $acessory->color=request()->icolor;
            $acessory->price=request()->iprice;
            $acessory->count=request()->icount;
            $acessory->save();

            return redirect('/onlineShop/category/acessories');
        }

        else if($catID==7)
        {
            $food =Foods::find($id);
            $food->name=request()->iname;
            $food->description=request()->idescription;
            //$top->this is for foto.
            if (request()->hasfile('ifoto')) {
                $file=request()->file('ifoto');
                $extension=$file->getClientOriginalExtension();
                $filename=time().'.'.$extension;
                $file->move('uploads/foods/',$filename);
                $food->image=$filename;
            }
            else
            {
                return request();
                $food->image='';
            }
            $food->size=request()->isize;
            //$food->color=request()->icolor;
            $food->price=request()->iprice;
            $food->count=request()->icount;
            $food->save();

            return redirect('/onlineShop/category/foods');
        }

        else if($catID==8)
        {
            $bottom =Bottoms::find($id);
            $bottom->name=request()->iname;
            $bottom->description=request()->idescription;
            //$top->this is for foto.
            if (request()->hasfile('ifoto')) {
                $file=request()->file('ifoto');
                $extension=$file->getClientOriginalExtension();
                $filename=time().'.'.$extension;
                $file->move('uploads/bottoms/',$filename);
                $bottom->image=$filename;
            }
            else
            {
                return request();
                $bottomacessory->image='';
            }
            $bottom->size=request()->isize;
            $bottom->color=request()->icolor;
            $bottom->price=request()->iprice;
            $bottom->count=request()->icount;
            $bottom->save();

            return redirect('/onlineShop/category/bottoms');
        }
    }

    public function deleteIndex()
    {

        $data =Acessories::all();
        $data1 =Bkks::all();
        $data2 =Bottoms::all();
        $data3 =Cosmetics::all();
        $data4 =Dresses::all();
        $data5 =Foods::all();
        $data6 =Shoes::all();
        $data7 =Tops::all();
        

        return view('admin.deleteIndex',[
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

    public function delete($catID,$id)
    {
        if ($catID==1) 
        {   
            $top =Tops::find($id);
            $top->delete();
        }

        else if($catID==2)
        {
            $cosmetic =Cosmetics::find($id);
            $cosmetic->delete();
        }
        else if($catID==3)
        {
            $shoe=Shoes::find($id);
            $shoe->delete();
        }
        else if($catID==4)
        {
            $dress=Dresses::find($id);
            $dress->delete();
        }
        else if($catID==5)
        {
            $bkk=Bkks::find($id);
            $bkk->delete();
        }
        else if($catID==6)
        {
            $acessory=Acessories::find($id);
            $acessory->delete();
        }
        else if($catID==7)
        {
            $food=Foods::find($id);
            $food->delete();
        }
        else if($catID==8)
        {
            $bottom=Bottoms::find($id);
            $bottom->delete();
        }
        else
        {
            return redirect('/onlineShop/Admin/Delete')->with('info','Delete Failed!');
        }

        return redirect('/onlineShop/Admin/Delete')->with('info','Item Deleted!');
    }


    public function reviewIndex()
    {
        //$data =Reviews::find(2);
        //$data1 =Reviews::find(3);
        //$data2 =Reviews::find(4);
        $data4=Reviews::all();

        return view('admin.review',['reviews'=>$data4]);
    }


    public function uploadReviews($id)
    {
        $data = Reviews::find($id);
        $data->status = 1;
        $data->save();

        return redirect('/onlineShop/Admin/Reviews');
    }

    public function order()
    {
        //$data = Transactions::all();
        $data1= Customers::all();

        foreach($data1 as $data)
        {
            if($data->status == 0)
            {
                $dataGG = Customers::where('status',0)->get();
                return view('admin.order',['users'=>$dataGG]);
            }    
        }
        return view('admin.order',['users'=>NULL]);
    }
    public function orderHistory()
    {
        //$data = Transactions::all();
        $data1= Customers::all();

        foreach($data1 as $data)
        {
            if($data->status == 1)
            {
                $dataGG = Customers::where('status',1)->get();
                return view('admin.orderHistory',['users'=>$dataGG]);
            }
        }
        return view('admin.orderHistory',['users'=>NULL]);
    }


    public function markAsDelivered($id)
    {

        $customer = Customers::find($id);
        $customer->status = 1 ;
        $customer->save();

        return redirect('/onlineShop/Admin/OrderHistory');
    }

    public function undoDelivered($id)
    {
        $customer = Customers::find($id);
        $customer->status = 0 ;
        $customer->save();

        return redirect('/onlineShop/Admin/Orders');

    }

    
}
